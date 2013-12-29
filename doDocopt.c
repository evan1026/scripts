#!/bin/bash

if [ -e usage.txt ]; then
    python /home/evan1026/git/docopt.c/docopt_c.py -o docopt.c usage.txt
else
    echo "Must have a \"usage.txt\" file in current directory!"
fi
