<?php echo $this->extend('template/main') ?>
<?php echo $this->section('content') ?>
<!-- ini menu admin -->
<div class="container">
<div class="table-responsive">
<table class="table table-sm table-hover">
		<tr class="text-left">
			<td>No</td>
			<td>Murid</td>
			<td>Wali</td>
			<td>HP</td>
		</tr>
		<?php
		$n= 1; 
		foreach($murid->getResult() as $row): ?>
		<tr class="text-left">
			<td><?php echo $n++ ?></td>
			<td><?php echo $row->nama_murid; ?></td>
			<td><?php echo $row->wali; ?></td>
			<td><?php echo $row->notelp ?></td>
			<?php endforeach; ?>
		</tr>

	</table>
</div>
</div>

<?= $this->endSection() ?>