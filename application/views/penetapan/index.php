<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Data <?= $title; ?></h1>
            <ol class="breadcrumb mb-4 shadow">
                <li class="breadcrumb-item text-primary active"><span class="text-secondary">Prosedur Pajak<span> / &nbsp;<a href="<?= base_url('c_penetapan') ?>"><?=  $title ?></a></li>
            </ol>
            <?= $this->session->flashdata('pesan'); ?>
            <div class="card mb-4 shadow-lg">
                    <div class="row mt-4">
                        <div class="ml-auto">
                            <h4>Data <?= $title; ?></h4>
                        </div>
                        <div class="ml-auto mr-4">
                            <a class="btn btn-danger rounded-circle mr-4" href="<?= base_url('c_prosedur'); ?>">
                                <i class="fas fa-home text-white"></i>
                            </a>
                            <a class="btn btn-primary rounded-circle mr-4" href="<?= base_url('c_penetapan/add'); ?>">
                                <i class="fas fa-plus text-white"></i>
                            </a>
                            <a class="btn btn-warning rounded-circle mr-4" href="<?= base_url('c_pengecekan'); ?>">
                                <i class="fas fa-backward text-white"></i>
                            </a>
                            <a class="btn btn-success rounded-circle mr-4" href="<?= base_url('c_pembayaran'); ?>">
                                <i class="fas fa-forward text-white"></i>
                            </a>
                        </div>
                    </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-stripped" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kode Penetapan</th>
                                    <th>Kode Pengecekan</th>
                                    <th>BBNKB</th>
                                    <th>PKB</th>
                                    <th>SWDKLLJ</th>
                                    <th>Penerbitan STNK</th>
                                    <th>Penerbitan NTKB</th>
                                    <th>Denda PKB</th>
                                    <th>Denda SWDKLLJ</th>
                                    <th>Tanggal Penetapan</th>
                                    <th>Total Pembayaran</th>
                                    <th>Nama Petugas</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <?php $no = 1; ?>
                            <tbody>
                                <?php foreach ($data as $d) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $d->type_of_penetapan=='enc'?dec($d->kode_penetapan):$d->kode_penetapan; ?></td>
                                        <td><?= $d->type_of_pengecekan=='enc'?dec($d->kode_pengecekan).' / '.dec($d->tanggal_pengecekan):$d->kode_pengecekan.' / '.$d->tanggal_pengecekan ?></td>
                                        <td><?= $d->type_of_penetapan=='enc'?dec($d->bbnkb):$d->bbnkb; ?></td>
                                        <td><?= $d->type_of_penetapan=='enc'?dec($d->pkb):$d->pkb; ?></td>
                                        <td><?= $d->type_of_penetapan=='enc'?dec($d->swdkllj):$d->swdkllj; ?></td>
                                        <td><?= $d->type_of_penetapan=='enc'?dec($d->penerbitan_stnk):$d->penerbitan_stnk; ?></td>                                    
                                        <td><?= $d->type_of_penetapan=='enc'?dec($d->penerbitan_ntkb):$d->penerbitan_ntkb; ?></td>                                    
                                        <td><?= $d->type_of_penetapan=='enc'?dec($d->d_pkb):$d->d_pkb; ?></td>
                                        <td><?= $d->type_of_penetapan=='enc'?dec($d->d_swdkllj):$d->d_swdkllj; ?></td>
                                        <td><?= $d->type_of_penetapan=='enc'?dec($d->tanggal_penetapan):$d->tanggal_penetapan; ?></td>
                                        <td><?= $d->type_of_penetapan=='enc'?dec($d->total):$d->total; ?></td>
                                        <td><?= $d->type_of_petugas=='enc'?dec($d->nama_petugas):$d->nama_petugas; ?></td>
                                        <td class="row">
                                            <div class="mx-auto">
                                                <a class="text-success" href="<?= base_url('c_penetapan/view/').$d->id_penetapan; ?>"><i class="far fa-eye"></i></i></a>
                                                <a class="text-warning" href="<?= base_url('c_penetapan/edit/').$d->id_penetapan; ?>"><i class="far fa-edit"></i></a>
                                                <a class="text-danger" href="<?= base_url('c_penetapan/delete/').$d->id_penetapan; ?>" onclick="return confirm('Anda yakin mau menghapus data ini ?')"><i class="far fa-trash-alt"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>