#!/usr/bin/env bash

DIR=$( cd "$( dirname "${BASH_SOURCE[0]}" )" > /dev/null && pwd )

if ! [[ -f "$DIR"/pids.txt ]]
then
    echo 'Not running!'
    exit
fi

for pid in `cat "$DIR"/pids.txt`
do
    kill "$pid"
done

rm "$DIR"/pids.txt

echo 'Stopped server!'
