<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h1 class="mt-4">Data <?= $title ?></h1>
      <ol class="breadcrumb mb-4 shadow">
      <li class="breadcrumb-item text-primary active"><span class="text-secondary">Master Data<span> / &nbsp;<a href="<?= base_url('c_pemilik') ?>"><?=  $title ?></a> / Tambah</li>
      </ol>
      <div class="col-md-12 mx-auto">
        <div class="card shadow-lg">
            <div class="row mt-4">
              <div class="ml-4 p-4">
                <a class="btn btn-danger text-white rounded-circle" href="<?= base_url('c_pemilik'); ?>">
                  <i class="fas fa-chevron-left"></i>
                </a>
              </div>
              <div class="mx-auto">
                <h4>Lihat <?= $title ?></h4>
              </div>
            </div>
          <div class="card-body">
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label>Nomor Induk Kependudukan</label>
                  <label class="form-control" for=""><?= $data->type_of_pemilik=='enc'? dec($data->nik):$data->nik ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Nama Lengkap</label>
                  <label class="form-control" for=""><?= $data->type_of_pemilik=='enc'? dec($data->nama_pemilik):$data->nama_pemilik ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Alamat Lengkap</label>
                  <label class="form-control" for=""><?= $data->type_of_pemilik== 'enc'? dec($data->alamat):$data->alamat ?></label>
                </div>
              </div>
              <hr>
              <div class="col-md-12 text-right"><a href="<?= base_url('c_petugas/view/').$data->id_petugas ?>">>> Selengkapnya</a></div>
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label>ID Card Petugas</label>
                  <label class="form-control" for=""><?= $data->type_of_petugas=='enc'?dec($data->kode_petugas):$data->kode_petugas ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Nama Petugas</label>
                  <label class="form-control" for=""><?= $data->type_of_petugas=='enc'?dec($data->nama_petugas):$data->nama_petugas ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Jabatan</label>
                  <label class="form-control" for=""><?= $data->type_of_petugas=='enc'?dec($data->jabatan):$data->jabatan ?></label>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>
</div>