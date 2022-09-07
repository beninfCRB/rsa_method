<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url('assets/img/logo.jpg'); ?>">
    <title>Cetak</title>
    <link href="<?= base_url('assets/css/styles.css') ?>" rel="stylesheet" />
    <script src="<?= base_url('assets/js/all.min.js') ?>" rossorigin="anonymous"></script>
</head>

<body>
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
                <label class="form-control" for=""><?= dec($data->kode_penetapan) ?></label>
              </div>
              <div class="form-group col-md-3">
                <label>Telat Pajak</label>
                <label class="form-control" for=""><?= dec($data->telat) ?></label>
              </div>
              <!-- <div class="form-group col-md-3">
                <label>Harga</label>
                <label class="form-control" for="">Rp. <?= number_format(dec($data->harga),2,',','.') ?></label>
              </div> -->
              <div class="form-group col-md-3">
                <label>PKB</label>
                <label class="form-control" for="">Rp. <?= number_format(dec($data->pkb),2,',','.') ?></label>
              </div>
              <!-- <div class="form-group col-md-3">
                <label>NJKB</label>
                <label class="form-control" for="">Rp. <?= number_format(dec($data->njkb),2,',','.') ?></label>
              </div> -->
              <div class="form-group col-md-3">
                <label>SWDKLLJ</label>
                <label class="form-control" for="">Rp. <?= number_format(dec($data->swdkllj),2,',','.') ?></label>
              </div>
              <div class="form-group col-md-3">
                <label>Denda</label>
                <label class="form-control" for="">Rp. <?= number_format(dec($data->denda),2,',','.') ?></label>
              </div>
              <div class="form-group col-md-3">
                <label>Total</label>
                <label class="form-control" for="">Rp. <?= number_format(dec($data->total),2,',','.') ?></label>
              </div>
              <div class="form-group col-md-3">
                <label>Masa Berlaku</label>
                <label class="form-control" for=""><?= dec($data->masa_berlaku) ?></label>
              </div>
              <div class="form-group col-md-3">
                <label>Tanggal Penetapan</label>
                <label class="form-control" for=""><?= dec($data->tanggal_penetapan) ?></label>
              </div>
            </div>
            <hr>
            <div class="form-row">    
            <div class="form-group col-md-3">
                  <label>Nomor Identitas Kependudukan</label>
                  <label class="form-control" for=""><?= dec($data->nik) ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Nama Lengkap</label>
                  <label class="form-control" for=""><?= dec($data->nama_pemilik) ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Alamat Lengkap</label>
                  <label class="form-control" for=""><?= dec($data->alamat) ?></label>
                </div>
              </div>
              <hr>
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label>Kode Kepemilikan</label>
                  <label class="form-control" for=""><?= dec($data->kode_kepemilikan) ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Nomor Registrasi</label>
                  <label class="form-control" for=""><?= dec($data->no_registrasi) ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Kepemilikan Ke</label>
                  <label class="form-control" for=""><?= dec($data->kepemilikan_ke) ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Nomor BPKB</label>
                  <label class="form-control" for=""><?= dec($data->no_bpkb) ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Masa Berlaku STNK</label>
                  <label class="form-control" for=""><?= dec($data->masa_berlaku) ?></label>
                </div>
              </div>
                <hr>
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label>kode pendaftaran</label>
                  <label class="form-control" for=""><?= dec($data->kode_pendaftaran) ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Tanggal Pendaftaran</label>
                  <label class="form-control" for=""><?= dec($data->tanggal_pendaftaran) ?></label>
                </div>
              </div>
                <hr>
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label>kode Pengecekan</label>
                  <label class="form-control" for=""><?= dec($data->kode_pengecekan) ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Tanggal Pengecekan</label>
                  <label class="form-control" for=""><?= dec($data->tanggal_pengecekan) ?></label>
                </div>
              </div>
              <hr>
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label>ID Card Petugas</label>
                  <label class="form-control" for=""><?= dec($data->idcard) ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Nama Petugas</label>
                  <label class="form-control" for=""><?= dec($data->nama_petugas) ?></label>
                </div>
              </div>
          </div>
        </div>
      </div>
    <script>
        window.print();
    </script>
    <script src="<?= base_url('assets/') ?>js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>