<?php

class post {
	static function delete($post_id){
		q("DELETE FROM post WHERE post_id='$post_id'");
	}
}