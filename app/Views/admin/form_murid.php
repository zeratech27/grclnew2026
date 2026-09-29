<?php echo $this->extend('template/main') ?>
<?php echo $this->section('content') ?>

<div class="container">
<?php if (session()->getFlashdata('success')) { ?>
    <div class="alert alert-success">
        <?php echo session()->getFlashdata('success'); ?>
    </div>
<?php } ?>

<form method="POST" action="<?php echo base_url('').'admin/simpanmurid' ?>">
  <div class="row mb-3">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="nama">
    </div>
  </div>
  <div class="row mb-3">
    <label for="notelp" class="col-sm-2 col-form-label">NoTelp</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="notelp" name="notelp">
    </div>
  </div>  <div class="row mb-3">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="alamat" name="alamat">
    </div>
  </div>


<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>

</div>




<?= $this->endSection() ?>