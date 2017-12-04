<?php

$page_security = 'SA_MANAGER';
$path_to_root  = '../..';
include_once($path_to_root . "/includes/session.inc");
add_access_extensions();

define('DATA_FILE', "$path_to_root/modules/kanban/data/".$_SESSION['project'].".txt");

function save($data) {
	$encoded = json_encode($data);
	$fh = fopen(DATA_FILE, 'w') or die ("Can't open file");
	fwrite($fh, $encoded);
	fclose($fh);
}

function load() {
	$fh = fopen(DATA_FILE, 'r');
	$data = fread($fh, filesize(DATA_FILE));
	print $data;
}

if (function_exists($_POST['action'])) {
	$actionVar = $_POST['action'];
	@$actionVar($_POST['data']);
}
