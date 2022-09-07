<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="text-center mt-4">
                <div class="row mr-4">
                    <img class="img-fluid rounded d-block" src="<?= base_url('assets/img/logo.png') ?>" alt="" width="120px" height="70px">
                    <h2>Prosedur Wajib Pajak Kendaraan Bermotor</h2>
                </div>
            </div>
                <div class="col-md-12 p-4">
                    <div class="col-md-8 mx-auto">
                        <div class="row">
                        <?php if($this->session->userdata('role')=='admin'): ?>
                        <a href="<?= base_url('c_kepemilikan') ?>" class="col-xl-3 col-md-6 m-4">
                            <div class="card bg-primary text-white mb-2 shadow-lg">
                                <div class="card-body text-center">
                                    <i class="fas fa-address-card text-center fa-2x"></i>
                                    <div class="small text-center">
                                        KEPEMILIKAN
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <div class="container">
                                        <div class="text-center">
                                            <h3><?= $kepemilikan; ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php endif ?>
                        <a href="<?= base_url('c_pendaftaran') ?>" class="col-xl-3 col-md-6 m-4">
                            <div class="card bg-success text-white mb-2 shadow-lg">
                                <div class="card-body text-center">
                                    <i class="fas fa-users text-center fa-2x"></i>
                                    <div class="small text-center">
                                        PENDAFTARAN
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <div class="container">
                                        <div class="text-center">
                                            <h3><?= $pendaftaran; ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?= base_url('c_pengecekan') ?>" class="col-xl-3 col-md-8 m-4">
                            <div class="card bg-danger text-white mb-2 shadow-lg">
                                <div class="card-body text-center">
                                    <i class="fas fa-search text-center fa-2x"></i>
                                    <div class="small">
                                        PENGECEKAN
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <div class="container">
                                        <div class="text-center">
                                            <h3><?= $pengecekan; ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?= base_url('c_penetapan') ?>" class="col-xl-3 col-md-8 m-4">
                            <div class="card bg-warning text-white mb-2 shadow-lg">
                                <div class="card-body text-center">
                                    <i class="fas fa-hammer text-center fa-2x"></i>
                                    <div class="small">
                                        PENETAPAN
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <div class="container">
                                        <div class="text-center">
                                            <h3><?= $penetapan; ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?= base_url('c_pembayaran') ?>" class="col-xl-3 col-md-6 m-4">
                            <div class="card bg-info text-white mb-2 shadow-lg">
                                <div class="card-body text-center">
                                    <i class="fas fa-money-check-alt text-center fa-2x"></i>
                                    <div class="small text-center">
                                        PEMBAYARAN
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <div class="container">
                                        <div class="text-center">
                                            <h3><?= $pembayaran; ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
        </div>
    </main>

    <style>
        .bg{
            background-image: <?= base_url('/assets/img/bg.jpg') ?>;
        }
        .margin {
            margin-top: 20px;
        }
    </style>