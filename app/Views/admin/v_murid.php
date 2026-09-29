<?php echo $this->extend('template/main') ?>
<?php echo $this->section('content') ?>
<!-- ini menu admin -->
<div class="container">
<div class="table-responsive">
		<a href="<?php echo base_url('admin/inputmurid'); ?>" class="btn btn-warning">Tambah</a>
<table class="table table-sm table-hover">
	<thead>
	<tr class="text-left">
			<th>No</th>
			<th>Nama</th>
			<th>Notelp</th>
			<th>Alamat</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$n= 1; 
		foreach($murid->getResult() as $row): ?>
		<tr class="text-left">
			<td><?php echo $n++ ?></td>
			<td><?php echo $row->nama_murid; ?></td>
			<td><?php echo $row->notelp; ?></td>
			<td><?php echo $row->alamat; ?></td>
			<?php endforeach; ?>
		</tr>
	</tbody>	

	</table>
</div>
</div>

<?= $this->endSection() ?>