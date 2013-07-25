<h2></h2>
<? foreach ($posts as $post): ?>
	<div class="row">
		<div class="span8">
			<div class="row">
				<div class="span8">
					<h4><strong><a
								href="<?= BASE_URL ?>posts/view/<?= $post['post_id'] ?>"><?=$post['post_subject']?></a></strong>
					</h4>
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
						<?=$post['post_text']?>
					</p>

					<p><a class="btn" href="<?= BASE_URL ?>posts/view/<?= $post['post_id'] ?>">Read more</a></p>
				</div>
			</div>
			<div class="row">
				<div class="span8">
					<p></p>

					<p>
						<i class="icon-user"></i> by <a href="#"><?=$post['username']?></a>
						| <i class="icon-calendar"></i> <?= $post['post_time'] ?>
						| <i class="icon-comment"></i> <a
							href="<?= BASE_URL ?>posts/view/<?= $post['post_id'] ?>"><?=$post['comment_count']?></a>
						| <i class="icon-tags"></i> Tags
						: <? if (isset($tags[$post['post_id']])) : foreach ($tags[$post['post_id']] as $tag): ?>
							<a href="<?= BASE_URL ?>tags/view/<?= $tag ?>"><span class="label
							label-info"><?=$tag?></span></a>
						<? endforeach; endif ?>
					</p>
				</div>
			</div>
		</div>
	</div>
	<hr>
<? endforeach ?>

