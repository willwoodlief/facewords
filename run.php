<?php
/**
 * @link https://www.devdungeon.com/content/how-use-sqlite3-php
 */
require_once 'vendor/autoload.php';
require_once 'lib/db.sqlite.class.php';

run();

function run() {
	$groups = get_groups();
	$keywords = get_keywords();

	$sends = [];
	foreach ($groups as $group) {
		$results = scan_group($group,$keywords);
		$founds = array_merge($sends,$results);
		if (!empty($founds)) {
			$sends[$group] = $founds;
		}
	}

	if (!empty($sends)) {
		send_found($sends);
	}
}

/**
 * returns a string array of the groups
 * @return string[]
 */
function get_groups() {
	return [];
}


/**
 * returns a string array of the groups
 * @return string[]
 */
function get_keywords() {
	return [];
}


/**
 * returns a string array the keywords found in the group
 * @param string $group             the name of the group
 * @param string[] $keywords        the list of keywords
 * @return string[]
 */
function scan_group($group,$keywords) {
	return [];
}

/**
 * sends out what was found through facebook messenger
 * @param array[] $sends
 */
function send_found($sends) {

}

