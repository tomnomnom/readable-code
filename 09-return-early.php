<?php
// Try to return early

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

function editPage($pageId) {
    if (!isset($_SESSION['user'])) {
        return false;
    }

    if (!isAdmin($_SESSION['user'])) {
        return false;
    }

    if (!pageExists($pageId)) {
        return false;
    }

    // Page edit logic
    // ...
    return true;
}
