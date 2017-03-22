<?php
// Try to return early

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

// Split up the mental model
