#!/bin/bash

sql_importfile='stamboom.sql'
dev_db='stamboom'
dev_db_user='baf'
dev_db_pwd='plop0999'



#===============================================================================

function ask {
    # http://djm.me/ask
    while true; do
        if [ "${2:-}" = "Y" ]; then
            prompt="Y/n"
            default=Y
        elif [ "${2:-}" = "N" ]; then
            prompt="y/N"
            default=N
        else
            prompt="y/n"
            default=
        fi

        # Ask the question
        read -p "$1 [$prompt] " REPLY

        # Default?
        if [ -z "$REPLY" ]; then
            REPLY=$default
        fi

        # Check if the reply is valid
        case "$REPLY" in
            Y*|y*) return 0 ;;
            N*|n*) return 1 ;;
        esac

    done
}

# Make sure this isn't run accidentally
ask 'Database overschrijven voor dev omgeving??' Y || exit

mysql -u $dev_db_user -p$dev_db_pwd $dev_db < /vagrant/sql/$sql_importfile || exit

echo "Database geimporteerd."
