<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Data User</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
            <?php if ($this->session->flashdata()) : ?>
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    Data User <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <div class="card mb-4">
                <div class="card-header">
                    <div class="row">
                        <div class="ml-auto">
                            <h4>Data User</h4>
                        </div>
                        <div class="ml-auto">
                            <a class="btn btn-dark" href="<?= base_url('super_admin/adminTambah'); ?>">
                                <i class="fas fa-plus-square text-white"></i> Tambah
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Gambar</th>
                                    <th class="text-center" scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($admin as $a) : ?>
                                    <tr>
                                        <?= $username = $this->decrypt->dekripsi($a['username']);
                                        $password = $this->decrypt->dekripsi($a['password']);
                                        $gambar = $this->decrypt->dekripsi($a['foto']);
                                        ?>
                                        <td><?= $i; ?></td>
                                        <td><?= $username; ?></td>
                                        <td><?= $password; ?></td>
                                        <td><?= $gambar; ?></td>
                                        <td class="text-center">
                                            <a href="<?= base_url('super_admin/adminHapus/') . $a['id']; ?>" class="badge badge-danger" onclick="return confirm('Hapus admin?');">hapus</a>
                                        </td>
                                    </tr>
                                <?php $i++;
                                endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>