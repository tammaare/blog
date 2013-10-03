<? var_dump($tags)?>
<div class="list-group">
	<?foreach($tags as $tag):?>
	<a href="#" class="list-group-item active">		<?=$tag['tags_name'] ?>	</a>

	<?endforeach?>

</div>