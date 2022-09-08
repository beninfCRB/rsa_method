<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
    <div class="col-md-12 mx-auto">
        <div class="ml-4 p-4">
          <a class="btn btn-danger text-white rounded-circle" href="<?= base_url('c_cetak'); ?>">
            <i class="fas fa-chevron-left"></i>
          </a>
        </div>
        <div class="card shadow-lg">
            <div class="mt-4 mx-auto text-center mb-2">
                <img src="<?= base_url('assets/img/logo.png') ?>" alt="" width="150px" height="100%">
                <h1>Samsat Ciledug</h1>
                <p class="text-center">Alamat: Jl. Raden Patah No.9 RT.3/RW.10 Sudimara Barat Ciledug RT.001, RW.010, Banten 15151</p>
            </div>
            <hr>
            <h4 class="mx-auto mt-4">Surat Tanda Nomor Kendaraan (STNK)</h4>
          <div class="card-body mt-4">
            <div class="form-row">
              <div class="form-group col-md-3">
                <label>Kode Penetapan</label>
                <label class="form-control" for=""><?= $data->type_of_penetapan == 'enc' ?dec($data->kode_penetapan): $data->kode_penetapan?></label>
              </div>
              <div class="form-group col-md-3">
                <label>Telat Pajak</label>
                <label class="form-control" for=""><?= $data->type_of_pengecekan == 'enc' ?dec($data->denda_pkb):$data->denda_pkb ?> Bulan</label>
              </div>
              <!-- <div class="form-group col-md-3">
                <label>Harga</label>
                <label class="form-control" for="">Rp. <?= number_format(dec($data->harga),2,',','.') ?></label>
              </div> -->
              <div class="form-group col-md-3">
                <label>PKB</label>
                <label class="form-control" for="">Rp. <?= number_format($data->type_of_penetapan=='enc'?dec($data->pkb):$data->pkb,2,',','.') ?></label>
              </div>
              <!-- <div class="form-group col-md-3">
                <label>NJKB</label>
                <label class="form-control" for="">Rp. <?= number_format($data->type_of_penetapan=='enc'?dec($data->njkb):$data->njkb,2,',','.') ?></label>
              </div> -->
              <div class="form-group col-md-3">
                <label>SWDKLLJ</label>
                <label class="form-control" for="">Rp. <?= number_format($data->type_of_penetapan=='enc'?dec($data->swdkllj):$data->swdkllj,2,',','.') ?></label>
              </div>
              <div class="form-group col-md-3">
                <label>Denda</label>
                <label class="form-control" for="">Rp. <?= number_format(floatval($data->type_of_pengecekan=='enc'?dec($data->total_denda_swdkllj):$data->total_denda_swdkllj+$data->type_of_pengecekan=='enc'?dec($data->total_denda_pkb):$data->total_denda_pkb),2,',','.') ?></label>
              </div>
              <div class="form-group col-md-3">
                <label>Total</label>
                <label class="form-control" for="">Rp. <?= number_format($data->type_of_penetapan=='enc'?dec($data->total):$data->total,2,',','.') ?></label>
              </div>
              <div class="form-group col-md-3">
                <label>Masa Berlaku</label>
                <label class="form-control" for=""><?= $data->type_of_kepemilikan=='enc'?dec($data->masa_berlaku):$data->masa_berlaku ?></label>
              </div>
              <div class="form-group col-md-3">
                <label>Tanggal Penetapan</label>
                <label class="form-control" for=""><?= $data->type_of_penetapan=='enc'?dec($data->tanggal_penetapan):$data->tanggal_penetapan ?></label>
              </div>
            </div>
            <hr>
            <div class="form-row">    
            <div class="form-group col-md-3">
                  <label>Nomor Identitas Kependudukan</label>
                  <label class="form-control" for=""><?= $data->type_of_pemilik=='enc'?dec($data->nik):$data->nik ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Nama Lengkap</label>
                  <label class="form-control" for=""><?= $data->type_of_pemilik=='enc'?dec($data->nama_pemilik):$data->nama_pemilik ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Alamat Lengkap</label>
                  <label class="form-control" for=""><?= $data->type_of_pemilik=='enc'?dec($data->alamat):$data->alamat ?></label>
                </div>
              </div>
              <hr>
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label>Kode Kepemilikan</label>
                  <label class="form-control" for=""><?= $data->type_of_kepemilikan=='enc'?dec($data->kode_kepemilikan):$data->kode_kepemilikan ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Nomor Registrasi</label>
                  <label class="form-control" for=""><?= $data->type_of_kepemilikan=='enc'?dec($data->no_registrasi):$data->no_registrasi ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Kepemilikan Ke</label>
                  <label class="form-control" for=""><?= $data->type_of_kepemilikan=='enc'?dec($data->kepemilikan_ke):$data->kepemilikan_ke ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Nomor BPKB</label>
                  <label class="form-control" for=""><?= $data->type_of_kepemilikan=='enc'?dec($data->no_bpkb):$data->no_bpkb ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Masa Berlaku STNK</label>
                  <label class="form-control" for=""><?= $data->type_of_kepemilikan=='enc'?dec($data->masa_berlaku):$data->masa_berlaku ?></label>
                </div>
              </div>
                <hr>
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label>kode pendaftaran</label>
                  <label class="form-control" for=""><?= $data->type_of_pendaftaran=='enc'?dec($data->kode_pendaftaran):$data->kode_pendaftaran ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Tanggal Pendaftaran</label>
                  <label class="form-control" for=""><?= $data->type_of_pendaftaran=='enc'?dec($data->tanggal_pendaftaran):$data->tanggal_pendaftaran ?></label>
                </div>
              </div>
                <hr>
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label>kode Pengecekan</label>
                  <label class="form-control" for=""><?= $data->type_of_pengecekan=='enc'?dec($data->kode_pengecekan):$data->kode_pengecekan ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Tanggal Pengecekan</label>
                  <label class="form-control" for=""><?= $data->type_of_pengecekan=='enc'?dec($data->tanggal_pengecekan):$data->tanggal_pengecekan ?></label>
                </div>
              </div>
              <hr>
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label>ID Card Petugas</label>
                  <label class="form-control" for=""><?= $data->type_of_petugas=='enc'?dec($data->kode_petugas):$data->kode_petugas ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Nama Petugas</label>
                  <label class="form-control" for=""><?= $data->type_of_petugas=='enc'?dec($data->nama_petugas):$data->nama_petugas ?></label>
                </div>
              </div>
          </div>
        </div>
      </div>
      </div>
    </main>
    <script>
        window.print();
    </script>
