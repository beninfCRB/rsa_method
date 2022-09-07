<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login Administrator</title>
    <link rel="icon" href="<?= base_url('assets/img/logo.jpg'); ?>">
    <link href="<?= base_url('assets/'); ?>css/styles.css" rel="stylesheet" />
    <script src="<?= base_url('assets/'); ?>all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-white">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-12">
                            <img class="rounded mx-auto d-block text-center" src="<?= base_url('assets/img/logo.jpg'); ?>" alt="" width="auto" height="100px">
                        </div>
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-body">
                                    <h3 class="text-center font-weight-light my-4">Admin Login</h3>
                                    <?= $this->session->flashdata('pesan'); ?>

                                    <form class="user" method="post" action="<?= base_url('super_admin'); ?>">
                                        <div class="form-group">
                                            <label class="small mb-1" for="username">Username</label>
                                            <input class="form-control py-4" name="username" id="username" type="text" placeholder="Enter Username" />
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
                                            <label class="small mb-1" for="password">Password</label>
                                            <input class="form-control py-4" name="password" id="password" type="password" placeholder="Enter password" />
                                            <?php if (form_error('password')) : ?>
                                                <div class="alert alert-danger alert-dismissible fade show mt-1" role="alert" style="height: 50px;">
                                                    <?= form_error('password'); ?>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <button type="submit" class="btn btn-primary text-center">
                                            Login
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Qibtia 2020</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="<?= base_url('assets/'); ?>jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/'); ?>bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/'); ?>js/scripts.js"></script>
</body>

</html>