<?php

class posts extends Controller{

	function index(){
		$this->posts = get_all("SELECT * FROM post");
		$_tags = get_all("SELECT * FROM post_tags NATURAL JOIN tag");
		foreach ($_tags as $tag){
			$this->tags[$tag['post_id']][] = $tag['tags_name'];
		}
	}

	function view(){
		$post_id = $this->params[0];
		$this->post = get_all("SELECT * FROM post WHERE post_id='$post_id'");
		$this->post = $this->post[0];
		$this->comments = get_all("SELECT * FROM comment WHERE post_id='$post_id'");
		$post_author = $this->post['user_id'];
		$this->author = get_first("SELECT username FROM user WHERE user_id='$post_author'");
		$this->tags = get_all("SELECT * FROM post_tags NATURAL JOIN tag WHERE post_id='$post_id'");
		if(isset($_POST['comment_title'])){
			$data=[];
			$data['comment_title']=$_POST['comment_title'];
			$data['comment_text']=$_POST['comment_text'];
			$data['post_id']=$post_id;
			insert("comment", $data);
		}
	}
}