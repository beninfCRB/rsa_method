<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h1 class="mt-4">Data <?= $title ?></h1>
      <ol class="breadcrumb mb-4 shadow">
      <li class="breadcrumb-item text-primary active"><span class="text-secondary">Prosedur Pajak<span> / &nbsp;<a href="<?= base_url('c_penetapan') ?>"><?=  $title ?></a> / Tambah</li>
      </ol>
      <div class="col-md-12 mx-auto">
        <div class="card shadow-lg">
            <div class="row mt-4">
              <div class="ml-4 p-4">
                <a class="btn btn-danger text-white rounded-circle" href="<?= base_url('c_penetapan'); ?>">
                  <i class="fas fa-chevron-left"></i>
                </a>
              </div>
              <div class="mx-auto">
                <h4>Ubah <?= $title ?></h4>
              </div>
            </div>
          <div class="card-body">
          <?= $this->session->flashdata('pesan'); ?>
          <form action="<?= base_url('c_penetapan/edit/').$data->id_penetapan ?>" method="POST">
          <div class="form-row">
              <div class="form-group col-md-4">
                  <label for="kode_penetapan">Kode <?= $title ?><span class="text-danger">*</span></label>
                  <input readonly class="form-control" type="text" name="kode_penetapan" id="kode_penetapan" value="<?= $data->type_of_penetapan=='enc'?dec($data->kode_penetapan):$data->kode_penetapan ?>">
                  <small class="form-text text-danger"><?= form_error('kode_penetapan'); ?></small>
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
                  <label for="pengecekan_id">Pengecekan Kendaraan<span class="text-danger">*</span></label>
                  <select class="form-control" name="pengecekan_id" id="pengecekan_id">
                    <option selected disabled value="">== Pilih Pengecekan ==</option>
                    <?php foreach($pengecekan as $p):?>
                      <option value="<?= $p->id_pengecekan ?>"><?= $p->type_of_pengecekan=='enc'?dec($p->kode_pengecekan).' - '.dec($p->tanggal_pengecekan):$p->kode_pengecekan.' - '.$p->tanggal_pengecekan ?></option>
                    <?php endforeach;?>
                  </select>
                  <small class="form-text text-danger"><?= form_error('pengecekan_id'); ?></small>
                </div>
                <div class="form-group col-md-4">
                  <label for="bbnkb">BBNKB<span class="text-danger">*</span></label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Rp.</div>
                    </div>
                    <input  class="form-control" type="number" name="bbnkb" id="bbnkb" placeholder="Masukan Biaya BBNKB"  onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" value="<?= $data->type_of_penetapan=='enc'?dec($data->bbnkb):$data->bbnkb ?>">
                  </div>
                  <small class="form-text text-danger"><?= form_error('bbnkb'); ?></small>
                </div>

                                                
                <div class="form-group col-md-4">
                  <label for="pkb">PKB Kendaraan<span class="text-danger">*</span></label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Rp.</div>
                    </div>
                    <input  class="form-control" type="number" name="pkb" id="pkb" placeholder="Masukan Biaya PKB"  onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" value="<?= $data->type_of_penetapan=='enc'?dec($data->pkb):$data->pkb ?>">
                  </div>
                  <small class="form-text text-danger"><?= form_error('pkb'); ?></small>
                </div>

                <div class="form-group col-md-4">
                  <label for="swdkllj">SWDKLLJ Kendaraan<span class="text-danger">*</span></label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Rp.</div>
                    </div>
                    <input  class="form-control" type="number" name="swdkllj" id="swdkllj" placeholder="Masukan Biaya SWDKLLJ" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" value="<?= $data->type_of_penetapan=='enc'?dec($data->swdkllj):$data->swdkllj ?>">
                  </div>
                  <small class="form-text text-danger"><?= form_error('swdkllj'); ?></small>
                </div>

                <div class="form-group col-md-4">
                  <label for="pkb">Penerbitan STNK<span class="text-danger">*</span></label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Rp.</div>
                    </div>
                    <input  class="form-control" type="number" name="stnk" id="stnk" placeholder="Masukan Biaya Penerbitan STNK" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" value="<?= $data->type_of_penetapan=='enc'?dec($data->penerbitan_stnk):$data->penerbitan_stnk ?>">
                  </div>
                  <small class="form-text text-danger"><?= form_error('stnk'); ?></small>
                </div>

                <div class="form-group col-md-4">
                  <label for="pkb">Penerbitan NTKB<span class="text-danger">*</span></label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Rp.</div>
                    </div>
                    <input  class="form-control" type="number" name="ntkb" id="ntkb" placeholder="Masukan Biaya Penerbita NTKB" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" value="<?= $data->type_of_penetapan=='enc'?dec($data->penerbitan_ntkb):$data->penerbitan_ntkb ?>">
                  </div>
                  <small class="form-text text-danger"><?= form_error('ntkb'); ?></small>
                </div>

                <div class="form-group col-md-4">
                  <label for="denda">Denda PKB <span class="text-danger">*</span></label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Rp.</div>
                    </div>
                    <input  class="form-control" type="number" name="d_pkb" id="d_pkb" placeholder="Masukan Denda PKB" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" value="<?= $data->type_of_penetapan=='enc'?dec($data->d_pkb):$data->d_pkb ?>">
                  </div>
                  <small class="form-text text-danger"><?= form_error('d_pkb'); ?></small>
                </div>
                
                <div class="form-group col-md-4">
                  <label for="denda">Denda SWDKLLJ <span class="text-danger">*</span></label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Rp.</div>
                    </div>
                    <input  class="form-control" type="number" name="d_swdkllj" id="d_swdkllj" placeholder="Masukan Denda SWDKLLJ" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" value="<?= $data->type_of_penetapan=='enc'?dec($data->d_swdkllj):$data->d_swdkllj ?>">
                  </div>
                  <small class="form-text text-danger"><?= form_error('d_swdkllj'); ?></small>
                </div>

                <div class="form-group col-md-4">
                  <label for="total">Total Pembayaran <span class="text-danger">*</span></label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Rp.</div>
                    </div>
                    <input readonly class="form-control" type="number" name="total" id="total" placeholder="0" value="<?= $data->type_of_penetapan=='enc'?dec($data->total):$data->total ?>">
                  </div>
                  <small class="form-text text-danger"><?= form_error('total'); ?></small>
                </div>
               
                <div class="form-group col-md-3">
                  <label for="tanggal_penetapan">Tanggal <?= $title ?><span class="text-danger">*</span></label>
                  <input class="form-control" type="date" name="tanggal_penetapan" id="tanggal_penetapan" value="<?= $data->type_of_penetapan=='enc'?dec($data->tanggal_penetapan):$data->tanggal_penetapan ?>">
                  <small class="form-text text-danger"><?= form_error('tanggal_penetapan'); ?></small>
                </div>

                <div class="form-group col-md-2">
                  <label for="type_of_penetapan">Keamanan</label>
                  <div class="form-check">
                    <input class="form-check-input" name="type_of_penetapan" type="checkbox" value="enc" id="defaultCheck1"  <?= $data->type_of_penetapan == 'enc'? 'checked':''  ?>>
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