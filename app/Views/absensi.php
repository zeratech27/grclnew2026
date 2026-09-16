<?php echo $this->extend('template/main') ?>
<?php echo $this->section('content') ?>
<!-- ini menu user -->
<div class="container">
<div class="table-responsive">
<table class="table table-sm table-hover">
		<tr class="text-center">
			<td>No</td>
			<td>Murid</td>
			<td>Jam</td>
			<td>Hari</td>
			<td>Hadir</td>
		</tr>
		<tr  class="text-center">
			<td>1</td>
			<td>murid</td>
			<td>jam</td>
			<td>hari</td>
			<td ><a href="#" class="btn btn-success">Y</a>
			<a href="#" class="btn btn-warning">T</a>
		</td>
		</tr>

	</table>
</div>
</div>

<?= $this->endSection() ?>