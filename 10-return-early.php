<?php
// Nest nest nest nest...

function editPage($pageId) {
    if (isset($_SESSION['user'])) {

        if (isAdmin($_SESSION['user'])) {

            if (pageExists($pageId)) {
                // Page edit logic
                // ...
                return true;
            } else {
                return false;
            }

        } else {
            return false;
        }

    } else {
        return false;
    }
}

