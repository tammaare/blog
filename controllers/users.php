<?php
class users {
	function index() {
		global $request;
		$users = get_all("SELECT * FROM user");
		require 'views/master_view.php';
	}
	function view() {
		global $request;
		$user_id = $request->get[0];
		require 'classes/tag.php';

		$posts = get_all("SELECT *, count(comment_id) AS comment_count FROM post NATURAL JOIN user NATURAL JOIN comment NATURAL JOIN post_tags NATURAL JOIN tag WHERE user.user_id='$user_id' GROUP BY post.post_id");
		$tags = tag::get_tags();

		require 'views/master_view.php';
	}
}