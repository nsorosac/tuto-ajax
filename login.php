<?php

// AJAX
if (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	header('Content-Type: application/json; charset=utf-8');
	exit(json_encode(array(
		'data'    => array(
			'redirect_to' => 'profile.php',
			'time'        => time(),
			'id_user'     => 123
		),
		'success' => true
	)));
}

// Pas ajax
else {
	header('Location: profile.php', 301);
	exit;
}

