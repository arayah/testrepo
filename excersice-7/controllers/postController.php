<?php
require_once 'model/postModel.php';
function list_action(){
	$posts = get_all_posts();
	require 'views/list.php';
}

function show_action($id){
	$post = get_post_by_id($id);
	require 'views/show.php';
}