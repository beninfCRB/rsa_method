<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h1 class="mt-4">Data <?= $title ?></h1>
      <ol class="breadcrumb mb-4 shadow">
      <li class="breadcrumb-item text-primary active"><span class="text-secondary">Prosedur Pajak<span> / &nbsp;<a href="<?= base_url('c_pendaftaran') ?>"><?=  $title ?></a> / Tambah</li>
      </ol>
      <div class="col-md-12 mx-auto">
        <div class="card shadow-lg">
            <div class="row mt-4">
              <div class="ml-4 p-4">
                <a class="btn btn-danger text-white rounded-circle" href="<?= base_url('c_pendaftaran'); ?>">
                  <i class="fas fa-chevron-left"></i>
                </a>
              </div>
              <div class="mx-auto">
                <h4>Ubah <?= $title ?></h4>
              </div>
            </div>
          <div class="card-body">
          <?= $this->session->flashdata('pesan'); ?>
          <form action="<?= base_url('c_pendaftaran/edit/').$data->id_pendaftaran ?>" method="POST">
            <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="kode_pendaftaran">Kode <?= $title ?><span class="text-danger">*</span></label>
                  <input readonly class="form-control" type="text" name="kode_pendaftaran" id="kode_pendaftaran" value="<?= $data->type_of_pendaftaran=='enc'?dec($data->kode_pendaftaran):$data->kode_pendaftaran ?>">
                  <small class="form-text text-danger"><?= form_error('kode_pendaftaran'); ?></small>
                </div>
                <div class="form-group col-md-4">
                  <label for="petugas_id">Petugas <?= $title ?><span class="text-danger">*</span></label>
                  <select class="form-control" name="petugas_id" id="petugas_id">
                    <option selected disabled value="">== Pilih Petugas ==</option>
                    <?php foreach($petugas as $p):?>
                      <option value="<?= $p->id_petugas ?>"><?= $p->type_of_petugas=='enc'?dec($p->nama_petugas):$p->nama_petugas ?></option>
                    <?php endforeach;?>
                  </select>
                  <small class="form-text text-danger"><?= form_error('petugas_id'); ?></small>
                </div>
                <div class="form-group col-md-4">
                  <label for="kepemilikan_id">Kepemilikan <?= $title ?><span class="text-danger">*</span></label>
                  <select class="form-control" name="kepemilikan_id" id="kepemilikan_id">
                    <option selected disabled value="">== Pilih Kepemilikan ==</option>
                    <?php foreach($kepemilikan as $p):?>
                      <option value="<?= $p->id_kepemilikan ?>"><?= $p->type_of_kepemilikan=='enc'?dec($p->kode_kepemilikan).' - '.dec($p->no_registrasi):$p->kode_kepemilikan.' - '.$p->no_registrasi ?></option>
                    <?php endforeach;?>
                  </select>
                  <small class="form-text text-danger"><?= form_error('kepemilikan_id'); ?></small>
                </div>
                
                <div class="form-group col-md-6">
                  <label for="tanggal_pendaftaran">Tanggal <?= $title ?><span class="text-danger">*</span></label>
                  <input class="form-control" type="date" name="tanggal_pendaftaran" id="tanggal_pendaftaran" value="<?= $data->type_of_pendaftaran=='enc'?dec($data->tanggal_pendaftaran):$data->tanggal_pendaftaran ?>">
                  <small class="form-text text-danger"><?= form_error('tanggal_pendaftaran'); ?></small>
                </div>
                <div class="form-group col-md-6">
                  <label for="keterangan"> Keterangan Pajak <span class="text-danger">*</span></label>
                  <select class="form-control" name="keterangan" id="keterangan">
                    <option selected disabled value="">== Keterangan Pajak ==</option>
                    <option> Pajak 1 Tahun</option>
                    <option> Pajak 5 Tahun</option>
                    <option> BBNKB</option>
                  </select>
                  <small class="form-text text-danger"><?= form_error('keterangan'); ?></small>
                </div>

                
                <div class="form-group col-md-1">
                  <label for="type_of_pendaftaran">Keamanan</label>
                  <div class="form-check">
                    <input class="form-check-input" name="type_of_pendaftaran" type="checkbox" value="enc" id="defaultCheck1" <?= $data->type_of_pendaftaran == 'enc'? 'checked':''  ?>>
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