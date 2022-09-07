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
                <h4>Tambah <?= $title ?></h4>
              </div>
            </div>
          <div class="card-body">
          <?= $this->session->flashdata('pesan'); ?>
            <form action="<?= base_url('c_pemilik/edit/').$data->id_pemilik ?>" method="POST">
              <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="petugas_id">Petugas <?= $title ?><span class="text-danger">*</span></label>
                  <select class="form-control" name="petugas_id" id="petugas_id">
                    <option selected disabled value="">== Pilih Petugas ==</option>
                    <?php foreach($petugas as $p):?>
                      <option value="<?= $p->id_petugas ?>"><?= $p->type_of_petugas=='enc'?dec($p->nama_petugas):$p->nama_petugas ?></option>
                    <?php endforeach;?>
                  </select>
                  <small class="form-text text-danger"><?= form_error('petugas_id'); ?></small>
                </div>
                <div class="form-group col-md-6">
                  <label for="nik">Nomor Induk Kependudukan <span class="text-danger">*</span></label>
                  <input class="form-control" type="number" name="nik" id="nik" value="<?= $data->type_of_pemilik=='enc'?dec($data->nik):$data->nik ?>">
                  <small class="form-text text-danger"><?= form_error('nik'); ?></small>
                </div>
                <div class="form-group col-md-6">
                  <label for="nama_pemilik">Nama Lengkap <span class="text-danger">*</span></label>
                  <input class="form-control" type="text" name="nama_pemilik" id="nama_pemilik" value="<?= $data->type_of_pemilik=='enc'?dec($data->nama_pemilik):$data->nama_pemilik ?>">
                  <small class="form-text text-danger"><?= form_error('nama_pemilik'); ?></small>
                </div>
                <div class="form-group col-md-6">
                  <label for="alamat">Alamat Lengkap <span class="text-danger">*</span></label>
                  <textarea class="form-control" name="alamat" id="alamat" rows="4"><?=  $data->type_of_pemilik=='enc'?dec($data->alamat):$data->alamat ?></textarea>
                  <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                </div>
                <div class="form-group">
                  <label for="type_of_pemilik">Keamanan</label>
                  <div class="form-check">
                    <input class="form-check-input" name="type_of_pemilik" type="checkbox" value="enc" id="defaultCheck1" <?= $data->type_of_pemilik == 'enc'? 'checked':''  ?>>
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