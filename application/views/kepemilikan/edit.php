<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h1 class="mt-4">Data <?= $title ?></h1>
      <ol class="breadcrumb mb-4 shadow">
      <li class="breadcrumb-item text-primary active"><span class="text-secondary">Prosedur Pajak<span> / &nbsp;<a href="<?= base_url('c_kepemilikan') ?>"><?=  $title ?></a> / Tambah</li>
      </ol>
      <div class="col-md-12 mx-auto">
        <div class="card shadow-lg">
            <div class="row mt-4">
              <div class="ml-4 p-4">
                <a class="btn btn-danger text-white rounded-circle" href="<?= base_url('c_kepemilikan'); ?>">
                  <i class="fas fa-chevron-left"></i>
                </a>
              </div>
              <div class="mx-auto">
                <h4>Ubah <?= $title ?></h4>
              </div>
            </div>
          <div class="card-body">
          <?= $this->session->flashdata('pesan'); ?>
          <form action="<?= base_url('c_kepemilikan/edit/').$data->id_kepemilikan ?>" method="POST">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="kode_kepemilikan">Kode Kepemilikan Kendaraan<span class="text-danger">*</span></label>
                  <input readonly class="form-control" type="text" name="kode_kepemilikan" id="kode_kepemilikan" value="<?= $data->type_of_kepemilikan=='enc'?dec($data->kode_kepemilikan):$data->kode_kepemilikan ?>">
                  <small class="form-text text-danger"><?= form_error('kode_kepemilikan'); ?></small>
                </div>
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
                  <label for="kendaraan_id">Kendaraan <span class="text-danger">*</span></label>
                  <select class="form-control" name="kendaraan_id" id="kendaraan_id">
                    <option selected disabled value="">== Pilih Kendaraan ==</option>
                    <?php foreach($kendaraan as $p):?>
                      <option value="<?= $p->id_kendaraan ?>"><?= $p->type_of_kendaraan=='enc'?dec($p->no_rangka).' - '.dec($p->no_mesin):$p->no_rangka.' - '.$p->no_mesin ?></option>
                    <?php endforeach;?>
                  </select>
                  <small class="form-text text-danger"><?= form_error('kendaraan_id'); ?></small>
                </div>
                <div class="form-group col-md-6">
                  <label for="pemilik_id">Pemilik <span class="text-danger">*</span></label>
                  <select class="form-control" name="pemilik_id" id="pemilik_id">
                    <option selected disabled value="">== Pilih Pemilik ==</option>
                    <?php foreach($pemilik as $p):?>
                      <option value="<?= $p->id_pemilik ?>"><?= $p->type_of_pemilik=='enc'?dec($p->nik).' - '.dec($p->nama_pemilik):$p->nik.' - '.$p->nama_pemilik ?></option>
                    <?php endforeach;?>
                  </select>
                  <small class="form-text text-danger"><?= form_error('pemilik_id'); ?></small>
                </div>
                <div class="form-group col-md-6">
                  <label for="no_registrasi">Nomor Registrasi Kendaraan <span class="text-danger">*</span></label>
                  <input class="form-control" type="text" name="no_registrasi" id="no_registrasi" value="<?= $data->type_of_kepemilikan=='enc'?dec($data->no_registrasi):$data->no_registrasi ?>">
                  <small class="form-text text-danger"><?= form_error('no_registrasi'); ?></small>
                </div>
                <div class="form-group col-md-6">
                  <label for="no_bpkb">Nomor BPKB Kendaraan <span class="text-danger">*</span></label>
                  <input class="form-control" type="text" name="no_bpkb" id="no_bpkb" value="<?= $data->type_of_kepemilikan=='enc'?dec($data->no_bpkb):$data->no_bpkb ?>">
                  <small class="form-text text-danger"><?= form_error('no_bpkb'); ?></small>
                </div>
                <div class="form-group col-md-6">
                  <label for="kepemilikan_ke"> <?= $title ?> Ke<span class="text-danger">*</span></label>
                  <input class="form-control" type="number" name="kepemilikan_ke" id="kepemilikan_ke" value="<?= $data->type_of_kepemilikan=='enc'?dec($data->kepemilikan_ke):$data->kepemilikan_ke ?>">
                  <small class="form-text text-danger"><?= form_error('kepemilikan_ke'); ?></small>
                </div>
                <div class="form-group col-md-6">
                  <label for="masa_berlaku">Masa Berlaku BPKB <span class="text-danger">*</span></label>
                  <input class="form-control" type="date" name="masa_berlaku" id="masa_berlaku" value="<?= $data->type_of_kepemilikan=='enc'?dec($data->masa_berlaku):$data->masa_berlaku ?>">
                  <small class="form-text text-danger"><?= form_error('masa_berlaku'); ?></small>
                </div>

                <div class="form-group">
                  <label for="type_of_kepemilikan">Keamanan</label>
                  <div class="form-check">
                    <input class="form-check-input" name="type_of_kepemilikan" type="checkbox" value="enc" id="defaultCheck1" <?= $data->type_of_kepemilikan == 'enc'? 'checked':''  ?>>
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