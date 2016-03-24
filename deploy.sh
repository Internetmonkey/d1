#!/bin/bash
# BC Deploy Script

## Very Rudimentary
## Designed with the constraints of this project in mind
## Where possible, use ansible!

# Assumptions
# You have a valid ssh key for the server you're deploying to
# You wish to deploy just this theme, built for production (with gulp taks)

# For a full site deploy checkout our composer setup or Roots/Trellis 

##### Main

## Defaults
staging_path="/home/bc/staging/10/content/themes/d1"
production_path="/home/bc/public_html/content/themes/d1"
ssh_port=18765
ssh_key_file="auszac_rsa"
destination= 
gulp=

# Parse options and validate them 
while [ "$1" != "" ]; do
    case $1 in
        -t | --target )			shift
								target=$1
                                ;;
        -i | --identity	)		shift
        						ssh_key_file=$1
        						;;
        -p | --port )			shift
								ssh_port=$1
								;;
		-g | --gulp )			gulp=1
								;;
        * )                     echo "available flags are -t / --target : Should be staging or production, -i for keyfile relative to users .ssh dir, -p for ssh port"
                                exit 1
    esac
    shift
done

# Does the target env match a known env?
if [ "$target" != 'staging' ] && [ "$target" != "production" ]; then
	echo "$target"
	echo "ERROR: you must specify \"staging\" or \"production\" as the target with the -t flag"
	exit 1
else
	echo ">>> Valid Target Env! Way to go!"
fi

key_path="$HOME/.ssh/$ssh_key_file"
# Does the specified ssh key file exist?
if [ ! -r $key ]; then
	echo "ERROR: Key File doesn not exist: $key"
	exit 1
else 
	echo ">>> Key File Exists. "
fi
# Is the SSH port a string of numbers?
if [[ $ssh_port = *[!0-9]* ]]; then
    echo "'$ssh_port' is not a valid port number"
    exit 1
else
	echo ">>> port number appears valid"
fi

# K, things are most likely OK, but it's bash, so you never know. 

# Find directory of deploy.sh (SHOULD BE IN SAGE THEME ROOT DIR)
pushd . > /dev/null
SCRIPT_PATH="${BASH_SOURCE[0]}";
while([ -h "${SCRIPT_PATH}" ]); do
    cd "`dirname "${SCRIPT_PATH}"`"
    SCRIPT_PATH="$(readlink "`basename "${SCRIPT_PATH}"`")";
done
cd "`dirname "${SCRIPT_PATH}"`" > /dev/null
SCRIPT_PATH="`pwd`";
popd  > /dev/null
echo ${SCRIPT_PATH}
echo `pwd`

# Switch to SAGE theme root dir for script
if [ `pwd` != ${SCRIPT_PATH} ]; then
	original_dir=$(pwd)
	SCRIPT_PATH=$(echo $SCRIPT_PATH | tr -d '\r')
	echo ">>> Switching to Theme Directory"
	cd "$SCRIPT_PATH"
fi

if [ $target = 'production' ]; then
	destination="$production_path"
else
	destination="$staging_path"
fi

if [ $gulp ]; then
	echo ">>> Starting gulp production tasks"
	gulp --production
fi

options=(-azP --rsh=\"ssh -p $ssh_port -i $key_path\" --delete --exclude-from=${SCRIPT_PATH}/exclude.txt)

echo ">>> Pre-roll succesful. Connection succesful. Starting deployment"
eval rsync ${options[@]} ${SCRIPT_PATH}/ bc@serv01.avm428.sgvps.net:"${destination}"
echo ">>> Deployment has completed to remote host"
echo ">>> Deployment successful"
exit 0

if [ $gulp ]; then
	echo ">>> Starting Glup cleanup tasks"
	gulp
fi
