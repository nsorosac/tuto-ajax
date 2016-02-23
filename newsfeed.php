<?php

// AJAX
if (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	header('Content-Type: application/json; charset=utf-8');
	exit(json_encode(array(
		'data'    => array(
			array(
				'id'      => 1,
				'title'   => 'Article à la cool',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae leo non sapien tempus dictum eget et sem. Suspendisse venenatis justo vitae justo hendrerit, vel faucibus lectus porttitor. Sed eu placerat lorem. Nullam pretium viverra urna id vehicula. Suspendisse potenti. Aenean a ante odio. Nam at tincidunt sapien, non commodo elit. Maecenas dictum enim a molestie ornare. Mauris diam erat, dignissim id aliquet et, pulvinar nec ipsum. Donec a quam sollicitudin, imperdiet nisl in, ultrices tellus. Pellentesque sodales, ligula ac ornare sodales, diam risus elementum enim, at sodales velit ipsum vel mauris. Curabitur at eros ut purus dignissim mollis.',
				'time'    => time()
			),
			array(
				'id'      => 2,
				'title'   => 'Article à la cool',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae leo non sapien tempus dictum eget et sem. Suspendisse venenatis justo vitae justo hendrerit, vel faucibus lectus porttitor. Sed eu placerat lorem. Nullam pretium viverra urna id vehicula. Suspendisse potenti. Aenean a ante odio. Nam at tincidunt sapien, non commodo elit. Maecenas dictum enim a molestie ornare. Mauris diam erat, dignissim id aliquet et, pulvinar nec ipsum. Donec a quam sollicitudin, imperdiet nisl in, ultrices tellus. Pellentesque sodales, ligula ac ornare sodales, diam risus elementum enim, at sodales velit ipsum vel mauris. Curabitur at eros ut purus dignissim mollis.',
				'time'    => time()
			),
			array(
				'id'      => 3,
				'title'   => 'Article à la cool',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae leo non sapien tempus dictum eget et sem. Suspendisse venenatis justo vitae justo hendrerit, vel faucibus lectus porttitor. Sed eu placerat lorem. Nullam pretium viverra urna id vehicula. Suspendisse potenti. Aenean a ante odio. Nam at tincidunt sapien, non commodo elit. Maecenas dictum enim a molestie ornare. Mauris diam erat, dignissim id aliquet et, pulvinar nec ipsum. Donec a quam sollicitudin, imperdiet nisl in, ultrices tellus. Pellentesque sodales, ligula ac ornare sodales, diam risus elementum enim, at sodales velit ipsum vel mauris. Curabitur at eros ut purus dignissim mollis.',
				'time'    => time()
			),
			array(
				'id'      => 4,
				'title'   => 'Article à la cool',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae leo non sapien tempus dictum eget et sem. Suspendisse venenatis justo vitae justo hendrerit, vel faucibus lectus porttitor. Sed eu placerat lorem. Nullam pretium viverra urna id vehicula. Suspendisse potenti. Aenean a ante odio. Nam at tincidunt sapien, non commodo elit. Maecenas dictum enim a molestie ornare. Mauris diam erat, dignissim id aliquet et, pulvinar nec ipsum. Donec a quam sollicitudin, imperdiet nisl in, ultrices tellus. Pellentesque sodales, ligula ac ornare sodales, diam risus elementum enim, at sodales velit ipsum vel mauris. Curabitur at eros ut purus dignissim mollis.',
				'time'    => time()
			)
		),
		'success' => true
	)));
}


