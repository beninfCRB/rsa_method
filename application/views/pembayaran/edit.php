dec(<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h1 class="mt-4">Data <?= $title ?></h1>
      <ol class="breadcrumb mb-4 shadow">
      <li class="breadcrumb-item text-primary active"><span class="text-secondary">Prosedur Pajak<span> / &nbsp;<a href="<?= base_url('c_pembayaran') ?>"><?=  $title ?></a> / Tambah</li>
      </ol>
      <div class="col-md-12 mx-auto">
        <div class="card shadow-lg">
            <div class="row mt-4">
              <div class="ml-4 p-4">
                <a class="btn btn-danger text-white rounded-circle" href="<?= base_url('c_pembayaran'); ?>">
                  <i class="fas fa-chevron-left"></i>
                </a>
              </div>
              <div class="mx-auto">
                <h4>Ubah <?= $title ?></h4>
              </div>
            </div>
          <div class="card-body">
          <?= $this->session->flashdata('pesan'); ?>
          <form action="<?= base_url('c_pembayaran/edit/').$data->id_pembayaran ?>" method="POST">
          <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="kode_pembayaran">Kode <?= $title ?><span class="text-danger">*</span></label>
                  <input readonly class="form-control" type="text" name="kode_pembayaran" id="kode_pembayaran" value="<?= $data->type_of_pembayaran=='enc'?dec($data->kode_pembayaran):$data->kode_pembayaran ?>">
                  <small class="form-text text-danger"><?= form_error('kode_pembayaran'); ?></small>
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
                  <label for="penetapan_id">Penetapan <?= $title ?><span class="text-danger">*</span></label>
                  <select class="form-control" name="penetapan_id" id="penetapan_id">
                    <option selected disabled value="">== Pilih Penetapan ==</option>
                    <?php foreach($penetapan as $p):?>
                      <option value="<?= $p->id_penetapan ?>"><?= $p->type_of_penetapan=='enc'?dec($p->kode_penetapan).' - '.dec($p->tanggal_penetapan):$p->kode_penetapan.' - '.$p->tanggal_penetapan ?></option>
                    <?php endforeach;?>
                  </select>
                  <small class="form-text text-danger"><?= form_error('penetapan_id'); ?></small>
                </div>
                
                
               

                <div class="form-group col-md-4">
                  <label for="tagihan">Tagihan <?= $title ?><span class="text-danger">*</span></label>
                  <input class="form-control" type="number" name="tagihan" id="tagihan" value="<?= $data->type_of_pembayaran=='enc'?dec($data->tagihan):$data->tagihan ?>">
                  <small class="form-text text-danger"><?= form_error('tagihan'); ?></small>
                </div>

                <div class="form-group col-md-4">
                  <label for="masa_berlaku">Di Tetapkan <span class="text-danger">*</span></label>
                  <input class="form-control" type="date" name="di_tetapkan" id="di_tetapkan" value="<?= $data->type_of_pembayaran=='enc'?dec($data->di_tetapkan):$data->di_tetapkan ?>">
                  <small class="form-text text-danger"><?= form_error('di_tetapkan'); ?></small>
                </div>

                <div class="form-group col-md-4">
                  <label for="masa_berlaku">Tanggal Pembayaran <span class="text-danger">*</span></label>
                  <input class="form-control" type="date" name="tanggal_pembayaran" id="tanggal_pembayaran" value="<?= $data->type_of_pembayaran=='enc'?dec($data->tanggal_pembayaran):$data->tanggal_pembayaran ?>">
                  <small class="form-text text-danger"><?= form_error('tanggal_pembayaran'); ?></small>
                </div>
                
                <div class="form-group col-md-1">
                  <label for="type_of_pembayaran">Keamanan</label>
                  <div class="form-check">
                    <input class="form-check-input" name="type_of_pembayaran" type="checkbox" value="enc" id="defaultCheck1" <?= $data->type_of_pembayaran == 'enc'? 'checked':''  ?>>
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