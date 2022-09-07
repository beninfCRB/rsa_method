<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h1 class="mt-4">Data <?= $title ?></h1>
      <ol class="breadcrumb mb-4 shadow">
      <li class="breadcrumb-item text-primary active"><span class="text-secondary">Master Data<span> / &nbsp;<a href="<?= base_url('c_petugas') ?>"><?=  $title ?></a> / Tambah</li>
      </ol>
      <div class="col-md-12 mx-auto">
        <div class="card shadow-lg">
            <div class="row mt-4">
              <div class="ml-4 p-4">
                <a class="btn btn-danger text-white rounded-circle" href="<?= base_url('c_petugas'); ?>">
                  <i class="fas fa-chevron-left"></i>
                </a>
              </div>
              <div class="mx-auto">
                <h4>Tambah <?= $title ?></h4>
              </div>
            </div>
          <div class="card-body">
          <?= $this->session->flashdata('pesan'); ?>
            <form action="<?= base_url('c_petugas/add') ?>" method="POST">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="kode_petugas">Kode Petugas <span class="text-danger">*</span></label>
                  <input class="form-control" type="number" name="kode_petugas" id="kode_petugas" placeholder="Masukan Kode Petugas">
                  <small class="form-text text-danger"><?= form_error('kode_petugas'); ?></small>
                </div>
                <div class="form-group col-md-6">
                  <label for="nama_petugas">Nama Lengkap <span class="text-danger">*</span></label>
                  <input class="form-control" type="text" name="nama_petugas" id="nama_petugas" placeholder="Masukan Nama Lengkap Sesuai di KTP">
                  <small class="form-text text-danger"><?= form_error('nama_petugas'); ?></small>
                </div>
                <div class="form-group col-md-6">
                  <label for="jenis_kelamin">Jenis Kelamin <span class="text-danger">*</span></label>
                  <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                    <option selected disabled value="">== Pilih Jenis Kelamin ==</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                  <small class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
                </div>
                <div class="form-group col-md-6">
                  <label for="jabatan">Jabatan <span class="text-danger">*</span></label>
                  <input class="form-control" type="text" name="jabatan" id="jabatan">
                  <small class="form-text text-danger"><?= form_error('jabatan'); ?></small>
                </div>
                <!-- menentukan keamanan -->
                <div class="form-group">
                  <label for="type_of_petugas">Keamanan</label>
                  <div class="form-check">
                    <input class="form-check-input" name="type_of_petugas" type="checkbox" value="enc" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      Ya
                    </label>
                  </div>
                </div>
                
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