<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Import Data</h1>
            <ol class="breadcrumb mb-4 shadow">
                <li class="breadcrumb-item text-primary active"><span class="text-secondary">Master Data<span> / &nbsp;<a href="<?= base_url('c_pendaftaran') ?>"><?=  $title ?></a></li>
            </ol>
            <?= $this->session->flashdata('pesan'); ?>
            <div class="card mb-4 shadow-lg">
                <div class="card-body">
                    <form method="POST" action="<?= base_url('c_import/push') ?>" enctype="multipart/form-data">
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-4">
                                    <select class="custom-select" name="data" id="id">
                                        <option selected disabled value="">Pilih Data</option>
                                        <?php foreach ($route as $p) : ?>
                                            <option value="<?= $p ?>"><?= ucwords($p) ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="file" name="file">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                            <label for="type_of_login">Keamanan</label>
                                            <div class="form-check">
                                                <input class="form-check-input" name="type_of_import" type="checkbox" value="enc">
                                                <label class="form-check-label">
                                                Ya
                                                </label>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary cl">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>