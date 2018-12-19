<?php

// AJAX
if (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

    header('Content-Type: application/json; charset=utf-8');

    exit(json_encode([
        'success' => true,
		'data'    => [
			'redirect_to' => 'profile.php',
			'time'        => time(),
			'id_user'     => 123
        ]
    ]));
}

// Pas ajax
else {
	header('Location: profile.php', 301);
	exit;
}
