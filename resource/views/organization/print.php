
<table id="csvTableDoNotRemove" border="1">
	<?php $col = ($_SESSION['privacy']) ? 8 : 5 ?>

	<tr><td colspan="<?= $col + count($additionals) ?>"><?= $registration->title ?></td></tr>
	<tr><td colspan="<?= $col + count($additionals) ?>"><?= $registration->description ?></td></tr>
	<tr>
		<td>No.</td>
		<td>NIM</td>
		<td>Nama</td>
		<td>Prodi</td>
		<td>Fakultas</td>

		<?php if($_SESSION['privacy']): ?>

		<td>Alamat</td>
		<td>No. HP</td>
		<td>E-mail</td>

		<?php endif; foreach($additionalTypes as $type): ?>

		<td><?= $type->description ?></td>

		<?php endforeach; ?>
	</tr>

	<?php $i = 1; foreach ($members as $member): ?>
			
		<tr>
			<td><?= $i ?></td>
			<td><?= $member->nim ?></td>
			<td><?= $member->nama ?></td>
			<td><?= $member->prodi ?></td>
			<td><?= $member->fakultas ?></td>

			<?php if($_SESSION['privacy']): ?>

			<td><?= $member->alamat ?></td>
			<td><?= $member->nohp ?></td>
			<td><?= $member->email ?></td>

			<?php endif; foreach ($member->additionals as $data): ?>

			<td><?= $data->val ?></td>

			<?php endforeach; ?>
		</tr>

	<?php $i++; endforeach; ?>
</table>