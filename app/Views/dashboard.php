<?php echo $this->extend('template/main') ?>
<?php echo $this->section('content') ?>

<!-- Content Row -->
<div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Guru</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <a href="<?php echo base_url('/admin/guru') ?>" class="card-link">
                    <?php echo $dt_guru->getNumRows();?> Orang
                    </a>
                </div>
                </div>
                
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Murid</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <a href="<?php echo base_url('/admin/murid') ?>" class="card-link">
                    <?php echo $dt_murid->getNumRows();?> Orang
                    </a>
                   </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-people-sign fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<!-- <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Kehadiran
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                            <div class="progress progress-sm mr-2">
                                <div class="progress-bar bg-info" role="progressbar"
                                    style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- Pending Requests Card Example -->
<!-- <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Pending Requests</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>-->

</div> 

<!-- Content Row -->
<div class="row">

<!-- Content Column -->
<div class="col-lg">



    <!-- Color System -->
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card bg-primary text-white shadow">
                <div class="card-body">
                    Senin 
                    <div class="text-white-50 small"><?php echo $harisenin->getnumrows(); ?> Murid</div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card bg-success text-white shadow">
                <div class="card-body">
                    Selasa
                    <div class="text-white-50 small"><?php echo $hariselasa->getnumrows(); ?> Murid</div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card bg-info text-white shadow">
                <div class="card-body">
                    Rabu
                    <div class="text-white-50 small"><?php echo $harirabu->getnumrows(); ?> Murid</div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card bg-warning text-white shadow">
                <div class="card-body">
                    Kamis
                    <div class="text-white-50 small"><?php echo $harikamis->getnumrows(); ?> Murid</div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card bg-danger text-white shadow">
                <div class="card-body">
                    Jumat
                    <div class="text-white-50 small"><?php echo $harijumat->getnumrows(); ?> Murid</div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card bg-secondary text-white shadow">
                <div class="card-body">
                    Sabtu
                    <div class="text-white-50 small"><?php echo $harisabtu->getnumrows(); ?> Murid</div>
                </div>
            </div>
        </div>


</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
</div>

<?= $this->endSection() ?>