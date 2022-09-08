<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Data <?= $title; ?></h1>
            <ol class="breadcrumb mb-4 shadow">
                <li class="breadcrumb-item text-primary active"><span class="text-secondary">Prosedur Pajak<span> / &nbsp;<a href="<?= base_url('c_pembayaran') ?>"><?=  $title ?></a></li>
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
                            <a class="btn btn-primary rounded-circle mr-4" href="<?= base_url('c_pembayaran/add'); ?>">
                                <i class="fas fa-plus text-white"></i>
                            </a>
                            <a class="btn btn-warning rounded-circle mr-4" href="<?= base_url('c_penetapan'); ?>">
                                <i class="fas fa-backward text-white"></i>
                            </a>
                        </div>
                    </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-stripped" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kode Pembayaran</th>
                                    <th>Kode Penetepan</th>
                                    <th>Tagihan</th>
                                    <th>Di Tetapkan</th>
                                    <th>Tanggal Pembayaran</th>
                                    <th>Nama Petugas</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <?php $no = 1; ?>
                            <tbody>
                                <?php foreach ($data as $d) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $d->type_of_pembayaran=='enc'?dec($d->kode_pembayaran):$d->kode_pembayaran; ?></td>
                                        <td><?= $d->type_of_penetapan=='enc'?dec($d->kode_penetapan).' / '.dec($d->tanggal_penetapan):$d->kode_penetapan.' / '.$d->tanggal_penetapan ?></td>
                                        <td><?= $d->type_of_pembayaran=='enc'?dec($d->tagihan):$d->tagihan ?></td>
                                        <td><?= $d->type_of_pembayaran=='enc'?dec($d->di_tetapkan):$d->di_tetapkan ?></td>
                                        <td><?= $d->type_of_pembayaran=='enc'?dec($d->tanggal_pembayaran):$d->tanggal_pembayaran ?></td>
                                        <td><?= $d->type_of_petugas=='enc'?dec($d->nama_petugas):$d->nama_petugas ?></td>
                                        <td class="row">
                                            <div class="mx-auto">
                                                <a class="text-success" href="<?= base_url('c_pembayaran/view/').$d->id_pembayaran; ?>"><i class="far fa-eye"></i></i></a>
                                                <a class="text-warning" href="<?= base_url('c_pembayaran/edit/').$d->id_pembayaran; ?>"><i class="far fa-edit"></i></a>
                                                <a class="text-danger" href="<?= base_url('c_pembayaran/delete/').$d->id_pembayaran; ?>" onclick="return confirm('Anda yakin mau menghapus data ini ?')"><i class="far fa-trash-alt"></i></a>
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