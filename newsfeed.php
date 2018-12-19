<?php

// AJAX
if (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

	header('Content-Type: application/json; charset=utf-8');

	exit(json_encode([
        'success' => true,
		'data'    => json_decode(file_get_contents(__DIR__ . '/data/newsfeed.json'), true)
    ]));
}
