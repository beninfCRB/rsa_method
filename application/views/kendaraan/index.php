<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Data <?= $title; ?></h1>
            <ol class="breadcrumb mb-4 shadow">
                <li class="breadcrumb-item text-primary active"><span class="text-secondary">Master Data<span> / &nbsp;<a href="<?= base_url('c_kendaraan') ?>"><?=  $title ?></a></li>
            </ol>
            <?= $this->session->flashdata('pesan'); ?>
            <div class="card mb-4 shadow-lg">
                    <div class="row mt-4">
                        <div class="ml-auto">
                            <h4>Data <?= $title; ?></h4>
                        </div>
                        <div class="ml-auto mr-4">
                            <a class="btn btn-primary rounded-circle mr-4" href="<?= base_url('c_kendaraan/add'); ?>">
                                <i class="fas fa-plus text-white"></i>
                            </a>
                        </div>
                    </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-stripped" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Merk</th>
                                    <th>Tipe</th>
                                    <th>Jenis</th>
                                    <th>Tahun</th>
                                    <th>Silinder</th>
                                    <th>No. Rangka</th>
                                    <th>No. Mesin</th>
                                    <th>Warna</th>
                                    <th>Bahan Bakar</th>
                                    <th>Nama Petugas</th>
                                    
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <?php $no = 1; ?>
                            <tbody>
                                <?php foreach ($data as $d) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $d->type_of_kendaraan=='enc'?dec($d->merk):$d->merk; ?></td>
                                        <td><?= $d->type_of_kendaraan=='enc'?dec($d->tipe):$d->tipe; ?></td>
                                        <td><?= $d->type_of_kendaraan=='enc'?dec($d->jenis):$d->jenis; ?></td>
                                        <td><?= $d->type_of_kendaraan=='enc'?dec($d->produksi):$d->produksi; ?></td>
                                        <td><?= $d->type_of_kendaraan=='enc'?dec($d->silinder):$d->silinder; ?></td>
                                        <td><?= $d->type_of_kendaraan=='enc'?dec($d->no_rangka):$d->no_rangka; ?></td>
                                        <td><?= $d->type_of_kendaraan=='enc'?dec($d->no_mesin):$d->no_mesin; ?></td>
                                        <td><?= $d->type_of_kendaraan=='enc'?dec($d->warna):$d->warna; ?></td>
                                        <td><?= $d->type_of_kendaraan=='enc'?dec($d->bahan_bakar):$d->bahan_bakar; ?></td>
                                        <td><?= $d->type_of_petugas=='enc'?dec($d->nama_petugas):$d->nama_petugas; ?></td>
                                      
                                        <td class="row">
                                            <div class="mx-auto">
                                                <a class="text-success" href="<?= base_url('c_kendaraan/view/').$d->id_kendaraan; ?>"><i class="far fa-eye"></i></i></a>
                                                <a class="text-warning" href="<?= base_url('c_kendaraan/edit/').$d->id_kendaraan; ?>"><i class="far fa-edit"></i></a>
                                                <a class="text-danger" href="<?= base_url('c_kendaraan/delete/').$d->id_kendaraan; ?>"  onclick="return confirm('Anda yakin mau menghapus data ini ?')"><i class="far fa-trash-alt"></i></a>
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