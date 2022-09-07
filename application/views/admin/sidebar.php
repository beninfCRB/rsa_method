<?php
$show = ['', ''];
$menu = ['', '', '', '', '', '', '', '', ''];

if ($title == 'Dashboard') {
    $menu[0] = 'active';
} else if ($title == 'Admin') {
    $menu[1] = 'active';
}


?>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link <?= $menu[0]; ?>" href="<?= base_url('super_admin/dashboard') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <a class="nav-link <?= $menu[1] ?>" href="<?= base_url('super_admin/admin') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-first-aid"></i></i></div>
                        Admin
                    </a>
                    <a class="nav-link" href="<?= base_url('super_admin/logoutAdmin'); ?>" data-toggle="modal" data-target="#logoutModalAdmin">
                        <i class="fas fa-fw fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="row">
                    <img class="img-profile rounded-circle mx-auto" src="<?= base_url(); ?>assets/img/<?= $this->decrypt->dekripsi($user['foto']); ?>" style="width: 50px;height:50px">
                    <div class="small mr-auto">Masuk sebagai :<br><?= $this->decrypt->dekripsi($this->session->userdata('username')); ?></div>
                </div>
            </div>
        </nav>
    </div>