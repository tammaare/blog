<div class="row">
	<div class="span8">
		<div class="row">
			<div class="span8">
				<h4><strong><a href="<?= BASE_URL ?>posts/view/<?= $post['post_id'] ?>
"><?=$post['post_subject']?></a></strong></h4>
			</div>
		</div>
		<div class="row">
			<div class="span2">
				<a href="#" class="thumbnail">
					<img src="http://placehold.it/260x180" alt="">
				</a>
			</div>
			<div class="span6">
				<p>
					<?=$post['post_text']?></p>
			</div>
		</div>
		<div class="row">
			<div class="span8">
				<p></p>

				<p>
					<i class="icon-user"></i> by <a href="#"><?=$author['username']?></a>
					| <i class="icon-calendar"></i> <?=$post['post_created']?>
					| <i class="icon-comment"></i> <a href="#">3 Comments</a>
					| <i class="icon-share"></i> <a href="#">39 Shares</a>
					| <i class="icon-tags"></i> Tags : <a href="#"><span class="label label-info">Snipp</span></a>
					<?foreach ($tags as $tag): ?>
						<a href="#"><span class="label label-info">Bootstrap</span></a>
					<? endforeach?>
<?var_dump($comments)?>
				</p>
			</div>
		</div>
		<form class="form-horizontal" method="POST" >

			<textarea class="control-label" name="comment_title" placeholder="Comment title"> </textarea>
			<textarea class="control-label" name="comment_text" placeholder="Comment"> </textarea>

			<input type="submit" value="Submit">
		</form>
		<div class="row">
			<? if (isset($comments)):foreach($comments as $comment):?>
			<p><?=$comment["comment_title"]?></p>
			<p><?=$comment["comment_text"]?></p>
			<?endforeach;endif?>

		</div>
	</div>
</div>
<hr>

<hr>

<hr>