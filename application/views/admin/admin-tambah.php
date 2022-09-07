<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Data User</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="ml-auto">
                                <h4>Tambah Data User</h4>
                            </div>
                            <div class="ml-auto"><a class="btn btn-dark" href="<?= base_url('super_admin/admin'); ?>">
                                    <i class="fas fa-chevron-left"></i> Kembali </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('super_admin/adminTambah') ?>" method="POST">
                            <div class="card-body p-3">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input class="form-control form-control-user" placeholder="Username" value="<?= set_value('username'); ?>" name="username" id="username" type="text" autofocus autocomplete="off">
                                    <?php if (form_error('username')) : ?>
                                        <div class="alert alert-danger alert-dismissible fade show mt-1" role="alert" style="height: 50px;">
                                            <?= form_error('username'); ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input class="form-control form-control-user" placeholder="Password" type="password" name="password" id="password">
                                    <?php if (form_error('password')) : ?>
                                        <div class="alert alert-danger alert-dismissible fade show mt-1" role="alert" style="height: 50px;">
                                            <?= form_error('password'); ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>