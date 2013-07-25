<table>
	<? foreach ($users as $user): ?>
		<tr>
			<td><a href="<?= BASE_URL ?>users/view/<?= $user['user_id'] ?>"><?=$user['username']?></a></td>
		</tr>
	<? endforeach ?>
</table>