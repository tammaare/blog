<?php

class tags {
	function index() {
		global $request;

		$tags = get_all("SELECT * FROM tag");

		require 'views/master_view.php';
	}
	function view() {
		global $request;
		$tag_name = $request->get[0];
		require 'classes/tag.php';

		$posts = get_all("SELECT *, count(comment_id) AS comment_count FROM post NATURAL JOIN user NATURAL JOIN comment NATURAL JOIN post_tags NATURAL JOIN tag WHERE tag_name='$tag_name' GROUP BY post.post_id");
		$tags = tag::get_tags();

		require 'views/master_view.php';
	}
}