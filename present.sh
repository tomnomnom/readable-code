#!/bin/bash
if [ "$1" == "dark" ]; then
    export VIMENV=
else
    export VIMENV=talk
fi

vim $(find . -maxdepth 1 -name "[0-9][0-9]*" | sort)
