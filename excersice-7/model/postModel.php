<?php
function open_database_connection(){
	$link = mysqli_connect('localhost', 'root', 'yes');
	mysqli_select_db($link, 'data_center');
	return $link;
}

function close_database_connection($link){
	mysqli_close($link);
}

function get_all_posts(){
	$link = open_database_connection();
	$result = mysqli_query($link, 'SELECT id, title FROM posts');
	$posts = array();
	while($row = mysqli_fetch_assoc($result)){
		$posts[] = $row;
	}
	close_database_connection($link);
	return $posts;
}

function get_post_by_id($id){
	$link = open_database_connection();
	$id = intval($id);
	$query = 'SELECT created_at, title, body FROM posts WHERE id = ' . $id;
	$result = mysqli_query($link, $query);
	if($result != NULL)
		$post = mysqli_fetch_assoc($result);
	return $post;
}