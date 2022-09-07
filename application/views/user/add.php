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
                <h4>Tambah <?= $title ?></h4>
              </div>
            </div>
          <div class="card-body">
          <?= $this->session->flashdata('pesan'); ?>
            <form action="<?= base_url('c_akun/add') ?>" method="POST">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="nama">Nama Lengkap <span class="text-danger">*</span></label>
                  <input class="form-control" type="text" name="nama" id="nama" placeholder="Masukan Nama Lengkap User">
                  <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                </div>
                <div class="form-group col-md-6">
                  <label for="username">Nama Pengguna<span class="text-danger">*</span></label>
                  <input class="form-control" type="text" name="username" id="username" placeholder="Masukan Nama Pengguna">
                  <small class="form-text text-danger"><?= form_error('username'); ?></small>
                </div>
                <div class="form-group col-md-6">
                  <label for="password">Kata Sandi<span class="text-danger">*</span></label>
                  <input class="form-control" type="password" name="password" id="password" placeholder="Masukan Kata Sandi">
                  <small class="form-text text-danger"><?= form_error('password'); ?></small>
                </div>
                <div class="form-group col-md-6">
                  <label for="email">Email<span class="text-danger">*</span></label>
                  <input class="form-control" type="email" name="email" id="email" placeholder="Masukan Email">
                  <small class="form-text text-danger"><?= form_error('email'); ?></small>
                </div>
                <div class="form-group col-md-6">
                  <label for="level_id">Level <span class="text-danger">*</span></label>
                  <select class="form-control" name="level_id" id="level_id">
                    <option selected disabled value="">== Pilih Level Pengguna==</option>
                    <?php foreach($role as $a): ?>
                      <option value="<?= $a->id_level ?>"><?= dec($a->role) ?></option>
                      <?php endforeach;?>
                  </select>
                  <small class="form-text text-danger"><?= form_error('level_id'); ?></small>
                </div>
                <!-- <div class="form-group">
                  <label for="type_of_petugas">Keamanan</label>
                  <div class="form-check">
                    <input class="form-check-input" name="type_of_petugas" type="checkbox" value="enc" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      Ya
                    </label>
                  </div>
                </div> -->
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-primary ml-auto">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>
</div>