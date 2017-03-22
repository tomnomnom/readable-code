<?php
// Write your code for this game only - not for a future game.
// You’re going to be writing new code later because you’ll be smarter.
//     - id Software Programming Principles

function validateUsername($name){
    $validator = new StringValidator();
    $validator->ensure('length', '<', 20)
              ->ensure('length', '>', 2)
              ->filter('lowercase');

    return $validator->execute($name);
}

