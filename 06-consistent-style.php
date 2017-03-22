<?php
// Be consistent with your style
function createp($id) {
	if (pexits($id)) return false;
	// ...
}

// deletePage deletes the page with the provided
// ID, returning false if an error occurs.
function deletePage($pageId) {
	if (!pageExists($pageId)) {
		return false;
	}
	// ...
}

/*
 * Edits the page
 */
function edit_page($page_id)
{
	if (!page_exists($page_id))
	{
		return false;
	}
}

