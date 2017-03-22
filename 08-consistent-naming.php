<?php
// Be consistent with your names :)

function setPageTitle($pageId, $title) {

	if (!pageExists($pageId)) {
		return false;
	}
	// ...
}

function setPageBody($id, $body) {

    // copy + paste ftw
    if (!pageExists($pageId)) {
		return false; 
    }
	// ...
}
