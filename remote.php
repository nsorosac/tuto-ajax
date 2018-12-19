<?php

$callback = isset($_REQUEST['callback']) ? $_REQUEST['callback'] : false;

$data = [
    'success' => true,
    'data'    => '<p class="alert alert-info"><i class="glyphicon glyphicon-info-sign"></i>I am a remote content (JSONP FTW!)</p>'
];

// JSONP
if ($callback) {
    header('Content-Type: application/javascript; charset=utf-8');
    exit(sprintf("%s(%s)", $callback, json_encode($data)));
}

// JSON
elseif (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    header('Content-Type: application/json; charset=utf-8');
    exit(json_encode($data));
}
