
<?
class tags extends Controller{
	function index(){
		$this->tags = get_all("SELECT * FROM tag");
	}
	function view(){

		$this->tag_name= $this->params[0];
		$this->tag_posts = get_all("SELECT * FROM post NATURAL JOIN post_tags NATURAL JOIN tag NATURAL JOIN user WHERE tags_name='$this->tag_name'");
	}
}