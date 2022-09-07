<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Data <?= $title; ?></h1>
            <ol class="breadcrumb mb-4 shadow">
                <li class="breadcrumb-item text-primary active"><span class="text-secondary">Master Data<span> / &nbsp;<a href="<?= base_url('c_pemilik') ?>"><?=  $title ?></a></li>
            </ol>
            <?= $this->session->flashdata('pesan'); ?>
            <div class="card mb-4 shadow-lg">
                    <div class="row mt-4">
                        <div class="ml-auto">
                            <h4>Data <?= $title; ?></h4>
                        </div>
                        <div class="ml-auto mr-4">
                            <a class="btn btn-primary rounded-circle mr-4" href="<?= base_url('c_pemilik/add'); ?>">
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
                                    <th>Nik</th>
                                    <th>Nama Lengkap</th>
                                    <th>Alamat</th>
                                    <th>Nama Petugas</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <?php $no = 1; ?>
                            <tbody>
                                <?php foreach ($data as $d) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $d->type_of_pemilik=='enc'?dec($d->nik):$d->nik; ?></td>
                                        <td><?= $d->type_of_pemilik=='enc'?dec($d->nama_pemilik):$d->nama_pemilik; ?></td>
                                        <td><?= $d->type_of_pemilik=='enc'?dec($d->alamat):$d->alamat; ?></td>
                                        <td><?= $d->type_of_petugas=='enc'?dec($d->nama_petugas):$d->nama_petugas; ?></td>
                                        <td class="row">
                                            <div class="mx-auto">
                                                <a class="text-success" href="<?= base_url('c_pemilik/view/').$d->id_pemilik; ?>"><i class="far fa-eye"></i></i></a>
                                                <a class="text-warning" href="<?= base_url('c_pemilik/edit/').$d->id_pemilik; ?>"><i class="far fa-edit"></i></a>
                                                <a class="text-danger" href="<?= base_url('c_pemilik/delete/').$d->id_pemilik; ?>" onclick="return confirm('Anda yakin mau menghapus data ini ?')"><i class="far fa-trash-alt"></i></a>
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