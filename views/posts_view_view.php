<script type="text/javascript" src="<?=ASSETS_URL?>js/vendor/bootstrap.js"></script>
<script type="text/javascript" src="<?=ASSETS_URL?>js/vendor/bootstrap-prompts-alert.js"></script>
<script type="text/javascript">
	function check(){
		if (!$('#comment_text').val()){
			alert('Tühi!');
			return false;
		}
	}
</script>
<span class="span6">
<table align=center>
	<tr>
		<td><h2><a class="btn btn-large btn-primary disabled" href=<?BASE_URL?>posts/view/<?=$post["post_id"]?>><?=$post["post_subject"]?></a></h2></td>
	</tr>
	<tr>
		<td><div class="alert alert-info"><?=$post["post_text"]?></<div></td>
	</tr>
	<tr>
		<td style="height: 60px;">&nbsp;</td>
	</tr>
</table>
<h2>Kommentaarid</h2>
<table align=center>
	<? foreach ($comments as $comment) : ?>

		<tr>
			<td><?=$comment["username"]?><br>
				<?=$comment["comment_time"]?></td>

			<td><?=$comment["comment_text"]?></td>
		</tr>

	<? endforeach ?>

</table>
<form method="post" id="form">
	<input type="text" name="comment_author" placeholder="Nimi"/>
	<textarea name="comment_text" id="comment_text" cols="100" rows="5" style="width: auto" placeholder="Kommentaar..."></textarea>
	<button type="submit" onclick="return check()">Lisa</button>
</form>
</span>