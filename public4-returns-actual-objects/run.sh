#!/usr/bin/env bash

DIR=$( cd "$( dirname "${BASH_SOURCE[0]}" )" > /dev/null && pwd )

if [[ -f "$DIR"/pids.txt ]]
then
    echo 'Already running!'
    exit
fi

nohup php -S localhost:8888 -t "$DIR" > /dev/null &
echo $! > "$DIR"/pids.txt
nohup php -S localhost:8889 -t "$DIR" > /dev/null &
echo $! >> "$DIR"/pids.txt

echo 'Started server!'
