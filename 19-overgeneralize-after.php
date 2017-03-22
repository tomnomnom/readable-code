<?php
// I don't need to know your codebase or your
// framework to know what this does.

function validateUsername($name){

    if (strlen($name) > 20){
        return false;
    }

    if (strlen($name) < 2){
        return false;
    }

    return strtolower($name);
}

// An hourglass has more moving parts than a complicated wristwatch
//     - Someone on reddit.com/r/showerthoughts
