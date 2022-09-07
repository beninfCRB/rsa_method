<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Cetak Data</h1>
            <ol class="breadcrumb mb-4 shadow">
                <li class="breadcrumb-item text-primary active"><span class="text-secondary">Cetak Data<span> / &nbsp;<a href="<?= base_url('c_pendaftaran') ?>"><?=  $title ?></a></li>
            </ol>
            <div class="card mb-4 shadow-lg">
                <div class="card-body">
                    <form action="<?= base_url('c_cetak/cetak') ?>" method="POST">
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <select class="custom-select" name="id" id="id">
                                        <option selected disabled value="">Pilih Kepemilikan</option>
                                        <?php foreach ($kepemilikan as $p) : ?>
                                            <option value="<?= $p->id_kepemilikan ?>"><?= dec($p->kode_kepemilikan).' - '.dec($p->no_registrasi) ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-dark cl">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>