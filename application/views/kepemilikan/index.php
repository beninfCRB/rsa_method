<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Data <?= $title; ?></h1>
            <ol class="breadcrumb mb-4 shadow">
                <li class="breadcrumb-item text-primary active"><span class="text-secondary">Prosedur Pajak<span> / &nbsp;<a href="<?= base_url('c_kepemilikan') ?>"><?=  $title ?></a></li>
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
                            <a class="btn btn-primary rounded-circle mr-4" href="<?= base_url('c_kepemilikan/add'); ?>">
                                <i class="fas fa-plus text-white"></i>
                            </a>
                            <a class="btn btn-success rounded-circle mr-4" href="<?= base_url('c_pendaftaran'); ?>">
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
                                    <th>Kode Kepemilikan</th>
                                    <th>NIK Pemilik</th>
                                    <th>Nomor Rangka/Mesin</th>
                                    <th>No.Registrasi</th>
                                    <th>Kepemilikan Ke</th>
                                    <th>No.BPKB</th>
                                    <th>Masa Berlaku</th>
                                    <th>Nama Petugas</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <?php $no = 1; ?>
                            <tbody>
                                <?php foreach ($data as $d) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $d->type_of_kepemilikan=='enc'?dec($d->kode_kepemilikan):$d->kode_kepemilikan; ?></td>
                                        <td><?= $d->type_of_pemilik=='enc'?dec($d->nik):$d->nik; ?></td>
                                        <td><?= $d->type_of_kendaraan=='enc'?dec($d->no_mesin).' / '.dec($d->no_rangka):$d->no_mesin.' / '.$d->no_rangka; ?></td>
                                        <td><?= $d->type_of_kepemilikan=='enc'?dec($d->no_registrasi):$d->no_registrasi; ?></td>
                                        <td><?= $d->type_of_kepemilikan=='enc'?dec($d->kepemilikan_ke):$d->kepemilikan_ke; ?></td>
                                        <td><?= $d->type_of_kepemilikan=='enc'?dec($d->no_bpkb):$d->no_bpkb; ?></td>
                                        <td><?= $d->type_of_kepemilikan=='enc'?dec($d->masa_berlaku):$d->masa_berlaku; ?></td>
                                        <td><?= $d->type_of_petugas=='enc'?dec($d->nama_petugas):$d->nama_petugas; ?></td>
                                        <td class="row">
                                            <div class="mx-auto">
                                                <a class="text-success" href="<?= base_url('c_kepemilikan/view/').$d->id_kepemilikan; ?>"><i class="far fa-eye"></i></i></a>
                                                <a class="text-warning" href="<?= base_url('c_kepemilikan/edit/').$d->id_kepemilikan; ?>"><i class="far fa-edit"></i></a>
                                                <a class="text-danger" href="<?= base_url('c_kepemilikan/delete/').$d->id_kepemilikan; ?>" onclick="return confirm('Anda yakin mau menghapus data ini ?')"><i class="far fa-trash-alt"></i></a>
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