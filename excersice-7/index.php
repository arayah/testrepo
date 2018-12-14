<?php
// index.php
// load and initialize any global libraries
require_once 'controllers/postController.php';

// retrive the requested url
$uri = $_SERVER['REQUEST_URI'];

echo $uri;

if ('/excersice-7/' == $uri || '/excersice-7/index.php' == $uri) {
	list_action();
} elseif(preg_match('/^\/excersice-7\/show\/[1-9][0-9]*$/', $uri)){
	$id = explode('/excersice-7/show/', $uri);
	show_action($id[1]);

} elseif(preg_match('/^\/excersice-7\/delete\/[1-9][0-9]*$/', $uri)){
	$id = explode('/excersice-7/delete/', $uri);
	delete_action($id[1]);

} else {
	header('Status: 404 Not Found');
	echo '<html><body><h1><center>Page Not Found</h1></center></body></html>';
}