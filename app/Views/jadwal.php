<?php echo $this->extend('template/main') ?>
<?php echo $this->section('content') ?>
<!-- ini menu user -->
<div class="container">
<div class="table-responsive">
<table class="table table-sm table-hover">
		<tr class="text-center">
			<td>No</td>
			<td>Murid</td>
			<td>Guru</td>
			<td>Jam</td>
			<td>Hari</td>
		</tr>
		<?php
		$n= 1; 
		foreach($jadwal->getResult() as $row): ?>
		<tr class="text-center">
			<td><?php echo $n++ ?></td>
			<td><?php echo $row->nama_murid; ?></td>
			<td><?php echo $row->nama_guru; ?></td>
			<td><?php echo $row->jam; ?></td>
			<td><?php echo $row->nama_hari; ?></td>
			<?php endforeach; ?>
		</tr>

	</table>
</div>
</div>

<?= $this->endSection() ?>