<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><?= $title ?></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
            <?= $this->session->flashdata('pesan'); $foto ?>
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="col-md-8 card shadow-lg mx-auto">
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="<?= base_url(); ?>assets/img/admin.png" class="img-fluid" alt="responsive image" style="width: 160px;height:160px">
                                    </div>
                                    <div class="col-md-8">
                                    <form enctype="multipart/form-data" action="<?= base_url('c_myprofile/edit/').$data->id_user; ?>" method="POST">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Nama Lengkap</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input id="nama" name="nama" type="text" class="form-control" value="<?= dec($data->nama); ?>"></input>
                                                <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Username</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input readonly id="username" name="username" type="text" class="form-control" value="<?= dec($data->username); ?>"></input>
                                                <small class="form-text text-danger"><?= form_error('username'); ?></small>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Password Lama</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input id="password" name="password" type="password" class="form-control"></input>
                                                <small class="form-text text-danger"><?= form_error('password'); ?></small>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Password Baru</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input id="pwd" name="pwd" type="password" class="form-control"></input>
                                                <small class="form-text text-danger"><?= form_error('pwd'); ?></small>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Email</label>
                                                <input type="email" class="form-control" id="email" name="email" value="<?= dec($data->email); ?>">
                                            </div>
                                        </div>
                                        <!-- <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Foto Profil</label>
                                                <input type="file" class="form-control-file" id="foto" name="foto">
                                            </div>
                                        </div> -->
                                        <input hidden type="text" id="level_id" name="level_id" value="<?= $data->level_id; ?>">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary">Ubah</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>