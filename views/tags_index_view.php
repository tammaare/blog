<table>
	<? foreach ($tags as $tag): ?>
		<tr>
			<td><a href="<?= BASE_URL ?>tags/view/<?= $tag['tag_name'] ?>"><?=$tag['tag_name']?></td>
		</tr>
	<? endforeach ?>
</table>