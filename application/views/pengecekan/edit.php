<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h1 class="mt-4">Data <?= $title ?></h1>
      <ol class="breadcrumb mb-4 shadow">
      <li class="breadcrumb-item text-primary active"><span class="text-secondary">Prosedur Pajak<span> / &nbsp;<a href="<?= base_url('c_pengecekan') ?>"><?=  $title ?></a> / Tambah</li>
      </ol>
      <div class="col-md-12 mx-auto">
        <div class="card shadow-lg">
            <div class="row mt-4">
              <div class="ml-4 p-4">
                <a class="btn btn-danger text-white rounded-circle" href="<?= base_url('c_pengecekan'); ?>">
                  <i class="fas fa-chevron-left"></i>
                </a>
              </div>
              <div class="mx-auto">
                <h4>Ubah <?= $title ?></h4>
              </div>
            </div>
            
          <div class="card-body">
          <?= $this->session->flashdata('pesan'); ?>
          <form action="<?= base_url('c_pengecekan/edit/').$data->id_pengecekan ?>" method="POST">
          <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="kode_pengecekan">Kode <?= $title ?><span class="text-danger">*</span></label>
                  <input readonly class="form-control" type="text" name="kode_pengecekan" id="kode_pengecekan" value="<?= $data->type_of_pengecekan=='enc'?dec($data->kode_pengecekan):$data->kode_pengecekan ?>">
                  <small class="form-text text-danger"><?= form_error('kode_pengecekan'); ?></small>
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
                  <label for="pendaftaran_id">Pendaftaran <?= $title ?><span class="text-danger">*</span></label>
                  <select class="form-control" name="pendaftaran_id" id="pendaftaran_id">
                    <option selected disabled value="">== Pilih Pendaftaran ==</option>
                    <?php foreach($pendaftaran as $p):?>
                      <option value="<?= $p->id_pendaftaran ?>"><?= $p->type_of_pendaftaran=='enc'?dec($p->kode_pendaftaran).' - '.dec($p->tanggal_pendaftaran):$p->kode_pendaftaran. ' - '.$p->tanggal_pendaftaran ?></option>
                    <?php endforeach;?>
                  </select>
                  <small class="form-text text-danger"><?= form_error('pendaftaran_id'); ?></small>
                </div>
                
                <div class="form-group col-md-4">
                  <label for="tanggal_pengecekan">Tanggal <?= $title ?><span class="text-danger">*</span></label>
                  <input class="form-control" type="date" name="tanggal_pengecekan" id="tanggal_pengecekan" value="<?= $data->type_of_pengecekan=='enc'?dec($data->tanggal_pengecekan):$data->tanggal_pengecekan ?>">
                  <small class="form-text text-danger"><?= form_error('tanggal_pengecekan'); ?></small>
                </div>

                <div class="form-group col-md-3">
                  <label for="denda_pkb">Denda PKB<span class="text-danger">*</span></label>
                  <div class="input-group">
                  <input class="form-control" type="text" name="denda_pkb" id="denda_pkb" placeholder="Masukan Denda PKB" onkeyup="denda(this.value)" onKeyPress="return isNumberKey(event)" value="<?= $data->type_of_pengecekan=='enc'?dec($data->denda_pkb):$data->denda_pkb ?>">
                  <div class="input-group-prepend">
                      <div class="input-group-text">Bulan</div>
                    </div>
                    </div>
                  <small class="form-text text-danger"><?= form_error('denda_pkb'); ?></small>
                </div>

                <div class="form-group col-md-3">
                  <label for="total_denda_pkb">Total Denda PKB<span class="text-danger">*</span></label>
                  <input readonly class="form-control" type="text" name="total_denda_pkb" id="total_denda_pkb" placeholder="0" value="<?= $data->type_of_pengecekan=='enc'?dec($data->total_denda_pkb):$data->total_denda_pkb ?>">
                </div>


                <div class="form-group col-md-3">
                  <label for="denda_swdkllj">Denda SWDKLLJ<span class="text-danger">*</span></label>
                  <div class="input-group">
                  <input class="form-control" type="text" name="denda_swdkllj" id="denda_swdkllj" placeholder="Masukan Denda SWDKLLJ"  onkeyup="denda(this.value)" onKeyPress="return isNumberKey(event)" value="<?= $data->type_of_pengecekan=='enc'?dec($data->denda_swdkllj):$data->denda_swdkllj ?>">
                  <div class="input-group-prepend">
                      <div class="input-group-text">Bulan</div>
                    </div>
                    </div>
                  <small class="form-text text-danger"><?= form_error('nama_pemilik'); ?></small>
                </div>
                
                <div class="form-group col-md-3">
                  <label for="total_denda_swdkllj">Total Denda SWDKLLJ<span class="text-danger">*</span></label>
                  <input readonly class="form-control" type="text" name="total_denda_swdkllj" id="total_denda_swdkllj" placeholder="0" value="<?= $data->type_of_pengecekan=='enc'?dec($data->total_denda_swdkllj):$data->total_denda_swdkllj ?>">
                </div>

                <div class="form-group col-md-2">
                  <label for="type_of_pengecekan">Keamanan</label>
                  <div class="form-check">
                    <input class="form-check-input" name="type_of_pengecekan" type="checkbox" value="enc" id="defaultCheck1" <?= $data->type_of_pengecekan == 'enc'? 'checked':''  ?>>
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