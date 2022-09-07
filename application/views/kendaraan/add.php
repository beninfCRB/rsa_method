<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h1 class="mt-4">Data <?= $title ?></h1>
      <ol class="breadcrumb mb-4 shadow">
      <li class="breadcrumb-item text-primary active"><span class="text-secondary">Master Data<span> / &nbsp;<a href="<?= base_url('c_kendaraan') ?>"><?=  $title ?></a> / Tambah</li>
      </ol>
      <div class="col-md-12 mx-auto">
        <div class="card shadow-lg">
            <div class="row mt-4">
              <div class="ml-4 p-4">
                <a class="btn btn-danger text-white rounded-circle" href="<?= base_url('c_kendaraan'); ?>">
                  <i class="fas fa-chevron-left"></i>
                </a>
              </div>
              <div class="mx-auto">
                <h4>Tambah <?= $title ?></h4>
              </div>
            </div>
          <div class="card-body">
          <?= $this->session->flashdata('pesan'); ?>
            <form action="<?= base_url('c_kendaraan/add') ?>" method="POST">
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
                  <label for="merk">Merk Kendaraan <span class="text-danger">*</span></label>
                  <select class="form-control" name="merk" id="merk">
                    <option selected disabled value="">== Pilih Merk Kendaraan ==</option>
                    <option value="Honda">Honda</option>
                    <option value="Yamaha">Yamaha</option>
                    <option value="Suzuki">Suzuki</option>
                    <option value="Kawasaki">Kawasaki</option>
                    <option value="Harley Davidson">Harley Davidson</option>
                    <option value="Vespa">Vespa</option>
                    <option value="Ducati">Ducati</option>
                  </select>
                  <small class="form-text text-danger"><?= form_error('merk'); ?></small>
                </div>
                <div class="form-group col-md-6">
                  <label for="tipe">Tipe <span class="text-danger">*</span></label>
                  <input class="form-control" type="text" name="tipe" id="tipe" placeholder="Masukan Tahun Tipe">
                  <small class="form-text text-danger"><?= form_error('tipe'); ?></small>
                </div>

                <div class="form-group col-md-6">
                  <label for="jenis">Jenis Kendaraan <span class="text-danger">*</span></label>
                  <select class="form-control" name="jenis" id="jenis">
                    <option selected disabled value="">== Pilih Jenis Kendaraan ==</option>
                    <option value="Sepeda Motor">Sepeda Motor</option>
                  </select>
                  <small class="form-text text-danger"><?= form_error('jenis'); ?></small>
                </div>
               
                <div class="form-group col-md-6">
                  <label for="produksi">Tahun Produksi <span class="text-danger">*</span></label>
                  <input class="form-control" type="number" name="produksi" id="produksi" placeholder="Masukan Tahun Produksi">
                  <small class="form-text text-danger"><?= form_error('produksi'); ?></small>
                </div>
                <div class="form-group col-md-6">
                  <label for="silinder">Silinder Mesin <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <input class="form-control" type="number" name="silinder" id="silinder" placeholder="Masukan Silinder Mesin"/>
                    <div class="input-group-prepend">
                      <div class="input-group-text">cc</div>
                    </div>
                  </div>
                  <small class="form-text text-danger"><?= form_error('silinder'); ?></small>
                </div>
                <div class="form-group col-md-6">
                  <label for="no_mesin">Nomor Mesin <span class="text-danger">*</span></label>
                  <input class="form-control" type="text" name="no_mesin" id="no_mesin" placeholder="Masukan Nomor Mesin"/>
                  <small class="form-text text-danger"><?= form_error('no_mesin'); ?></small>
                </div>
                <div class="form-group col-md-6">
                  <label for="no_rangka">Nomor Rangka <span class="text-danger">*</span></label>
                  <input class="form-control" type="text" name="no_rangka" id="no_rangka" placeholder="Masukan Nomer Rangka"/>
                  <small class="form-text text-danger"><?= form_error('no_rangka'); ?></small>
                </div>

                <div class="form-group col-md-6">
                  <label for="warna">Warna <span class="text-danger">*</span></label>
                  <input class="form-control" type="text" name="warna" id="warna" placeholder="Masukan Warna"/>
                  <small class="form-text text-danger"><?= form_error('warna'); ?></small>
                </div>

                            
                <div class="form-group col-md-6">
                  <label for="bahan_bakar">Bahan Bakar <span class="text-danger">*</span></label>
                  <select class="form-control" name="bahan_bakar" id="bahan_bakar">
                      <option selected disabled value="">== Pilih Bahan Bakar ==</option>
                      <option value="bensin">Bensin</option>
                      <option value="solar">Solar</option>
                  </select>
                  <small class="form-text text-danger"><?= form_error('bahan_bakar'); ?></small>
                </div>               
              </div>          
              <div class="form-group">
                  <label for="type_of_kendaraan">Keamanan</label>
                  <div class="form-check">
                    <input class="form-check-input" name="type_of_kendaraan" type="checkbox" value="enc" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      Ya
                    </label>
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