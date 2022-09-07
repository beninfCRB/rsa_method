<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title ?> | samsat</title>
    <link rel="icon" href="<?= base_url('assets/img/logo.png'); ?>">
    <link href="<?= base_url('assets/css/styles.css') ?>" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- DataTables -->
    <link href="<?= base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/datatables/buttons/css/buttons.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/datatables/responsive/css/responsive.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>css/bootstrap.css" rel="stylesheet">
</head>

<body class="sb-nav-fixed ">
<?php
$show = ['', ''];
$menu = ['', '', '', '', '', '', '', '', '', '', '', ''];

if ($title == 'Dashboard') {
    $menu[0] = 'active';
} else if ($title == 'Prosedur Pajak' || $title == 'Kepemilikan Kendaraan' || $title == 'Pendaftaran Kendaraan' || $title == 'Pengecekan Kendaraan'|| $title == 'Penetapan Kendaraan'|| $title == 'Pembayaran') {
    $menu[1] = 'active';
}else if ($title == 'Pemilik') {
    $menu[2] = 'active';
    $show[0] = 'show';
}else if ($title == 'Petugas') {
    $menu[3] = 'active';
    $show[0] = 'show';
} else if ($title == 'Kendaraan') {
    $menu[4] = 'active';
    $show[0] = 'show';
} else if ($title == 'Import Data') {
    $menu[5] = 'active';
    $show[0] = 'show';
}else if ($title == 'Export Data') {
    $menu[6] = 'active';
    $show[0] = 'show';
}else if ($title == 'User') {
    $menu[7] = 'active';
} else if ($title == 'Cetak') {
    $menu[8] = 'active';
} 

?>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-light shadow" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link <?= $menu[0]; ?>" href="<?= base_url('c_dashboard') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <a class="nav-link <?= $menu[1]; ?>" href="<?= base_url('c_prosedur') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Prosedur Pajak
                    </a>
                    <?php if($this->session->userdata('role') == 'admin'): ?>
                    <div class="sb-sidenav-menu-heading <?= $menu[2] . $menu[3] . $menu[4]. $menu[5]. $menu[6] ?>">Master</div>
                        <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#collapseMahasiswa" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                            Master Data
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse <?= $show[0]; ?>" id="collapseMahasiswa" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link <?= $menu[2]; ?>" href="<?= base_url('c_pemilik') ?>">Pemilik</a>
                                <a class="nav-link <?= $menu[3]; ?>" href="<?= base_url('c_petugas') ?>">Petugas</a>
                                <a class="nav-link <?= $menu[4]; ?>" href="<?= base_url('c_kendaraan') ?>">Kendaraan</a>
                                <a class="nav-link <?= $menu[5]; ?>" href="<?= base_url('c_import') ?>">Import Data</a>
                                <a class="nav-link <?= $menu[6]; ?>" href="<?= base_url('c_export') ?>">Export Data</a>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Manajemen Akun</div>
                        <a class="nav-link <?= $menu[7]; ?>" href="<?= base_url('c_akun') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                            Kelola Akun
                        </a>
                        <div class="sb-sidenav-menu-heading">Cetak</div>
                        <a class="nav-link <?= $menu[8]; ?>" href="<?= base_url('c_cetak') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-print"></i></div>
                            Cetak
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </div>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="<?= base_url('c_dashboard'); ?>"><img width="50" height="30" class="d-inline-block align-top" src="<?= base_url(); ?>assets/img/logo.png ?>" alt=""> Samsat Ciledug</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <?php if($this->session->userdata('foto') != NULL) {  ?>
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-profile rounded-circle mx-auto" src="<?= base_url(); ?>assets/img/<?= $this->session->userdata('foto'); ?>" style="width: 25px;height:25px"> <?= $this->session->userdata('nama'); ?></a>
            <?php }else{ ?>
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-profile rounded-circle mx-auto" src="<?= base_url(); ?>assets/img/admin.png" style="width: 25px;height:25px">&nbsp;<?= $this->session->userdata('nama'); ?></a>
            <?php }?>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= base_url('c_myprofile/edit/').$this->session->userdata('id_user'); ?>">Atur Akun</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('c_login/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </div>
        </li>
    </ul>
</nav>

<?= $contents; ?>


<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">samsat @2022</div>
        </div>
    </div>
</footer>
</div>
</div>
<script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src=" <?= base_url('assets/') ?>js/scripts.js"> </script>
<script src="<?= base_url('assets/') ?>js/datatables-demo.js"></script>
<script src="<?= base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/datatables/buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/datatables/responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/datatables/responsive/js/responsive.bootstrap4.min.js"></script>

<!-- <script type="text/javascript">
    function OnChange(value){
    
    //  let harga = $('#harga').val();
    //  let telat = $('#telat').val();
    //  let pkb = (harga*2)/100;
    //  let njkb = (pkb/2)*100;
    //  let swdkllj = 100000;
    //  let denda = (((pkb*25)/100)*telat/12) + 32000;
    //  let total = pkb+swdkllj+denda;
    //  $('#pkb').val(pkb);
    //  $('#njkb').val(njkb);
    //  $('#swdkllj').val(swdkllj);
    //  $('#denda').val(denda);
    //  $('#total').val(total);
    
   }
 </script> -->

  <script  type="text/javascript">
    function denda(value){
        var denda_pkb = $('#denda_pkb').val();
        var denda_swdkllj =$('#denda_swdkllj').val();

        let a = (denda_pkb*4000);
        let b = (denda_swdkllj*2000);
        let total_denda_pkb = a;
        let total_denda_swdkllj = b;


        $('#total_denda_pkb').val(total_denda_pkb);
         $('#total_denda_swdkllj').val(total_denda_swdkllj);
    }

  function OnChange(value){
  let bbnkb = $('#bbnkb').val();
  let pkb = $('#pkb').val();
  let swdkllj = $('#swdkllj').val();
  let stnk = $('#stnk').val();
  let ntkb = $('#ntkb').val();
  let d_pkb = $('#d_pkb').val();
  let d_swdkllj = $('#d_swdkllj').val();
 

 
  var total_bbnkb = (parseFloat(bbnkb)+parseFloat(pkb)+parseFloat(swdkllj)+parseFloat(stnk)+parseFloat(ntkb)+parseFloat(d_pkb)+parseFloat(d_swdkllj));

  
 $('#total').val(total_bbnkb);

 
  }
</script> 

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin ingin logout?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-primary" href="<?= base_url('c_login/logout'); ?>">Ya</a>
            </div>
        </div>
    </div>
</div>

</body>

</html>