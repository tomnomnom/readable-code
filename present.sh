#!/bin/bash
VIMENV=talk vim $(find . -maxdepth 1 -name "[0-9][0-9]*" | sort)
