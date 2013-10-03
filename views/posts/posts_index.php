<?foreach($posts as $post):?>
<div class="span8">

		<a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><h1><?=$post['post_subject']?></h1></a>
	<p><?=$post['post_text']?></p>
	<div>
		<span class="badge badge-success">Posted 2012-08-02 20:47:04</span>

			<?if(isset($tags[$post['post_id']])):foreach ($tags[$post['post_id']] as $tag):?>
			<a href="<?=BASE_URL?>tags/view/<?=$tag?>"><span class="label" style="background-color: #5bc0de;"><?=$tag?></span></a>
			<?endforeach;endif?>


		<div class="pull-right"><span class="label">alice</span> <span class="label">story</span> <span class="label">blog</span> <span class="label">personal</span></div>
	</div>
	<hr>

	<hr>
</div>
<?endforeach?>