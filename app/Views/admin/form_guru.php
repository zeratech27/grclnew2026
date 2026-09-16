<?php echo $this->extend('template/main') ?>
<?php echo $this->section('content') ?>

<div class="container">
<?php if (session()->getFlashdata('success')) { ?>
    <div class="alert alert-success">
        <?php echo session()->getFlashdata('success'); ?>
    </div>
<?php } ?>

<form method="POST" action="<?php echo base_url('').'/admin/simpanform' ?>">
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
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Role</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="role" id="role1" value="1" >
        <label class="form-check-label" for="gridRadios1">
          Admin
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="role" id="role2" value="2" checked>
        <label class="form-check-label" for="gridRadios2">
          User
        </label>
      </div>

    </div>
  </fieldset>

<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>

</div>




<?= $this->endSection() ?>