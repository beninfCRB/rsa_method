<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h1 class="mt-4">Data <?= $title ?></h1>
      <ol class="breadcrumb mb-4 shadow">
      <li class="breadcrumb-item text-primary active"><span class="text-secondary">User Data<span> / &nbsp;<a href="<?= base_url('c_akun') ?>"><?=  $title ?></a> / Tambah</li>
      </ol>
      <div class="col-md-12 mx-auto">
        <div class="card shadow-lg">
            <div class="row mt-4">
              <div class="ml-4 p-4">
                <a class="btn btn-danger text-white rounded-circle" href="<?= base_url('c_akun'); ?>">
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
                  <label>Nama Lengkap</label>
                  <label class="form-control" for=""><?= $data->type_of_user=='enc'?dec($data->nama):$data->nama ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Nama Pengguna</label>
                  <label class="form-control" for=""><?= $data->type_of_user=='enc'?dec($data->username):$data->username ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Kata Sandi</label>
                  <label class="form-control"  for=""><?= $data->type_of_user=='enc'?dec($data->password):$data->password ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Email</label>
                  <label class="form-control" for=""><?= $data->type_of_user=='enc'?dec($data->email):$data->email ?></label>
                </div>
            
              </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>
</div>