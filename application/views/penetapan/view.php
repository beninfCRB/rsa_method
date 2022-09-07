<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h1 class="mt-4">Data <?= $title ?></h1>
      <ol class="breadcrumb mb-4 shadow">
      <li class="breadcrumb-item text-primary active"><span class="text-secondary">Prosedur Pajak<span> / &nbsp;<a href="<?= base_url('c_kendaraan') ?>"><?=  $title ?></a> / Tambah</li>
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
                <h4>Lihat <?= $title ?></h4>
              </div>
            </div>
          <div class="card-body">
            <div class="form-row">
              <div class="form-group col-md-3">
                <label>Kode Penetapan</label>
                <label class="form-control" for=""><?= $data->type_of_penetapan=='enc'?dec($data->kode_penetapan):$data->kode_penetapan ?></label>
              </div>
              <div class="form-group col-md-3">
                <label>BBNKB</label>
                <label class="form-control" for=""><?= $data->type_of_penetapan=='enc'?dec($data->bbnkb):$data->bbnkb ?></label>
              </div>            
              <div class="form-group col-md-3">
                <label>PKB</label>
                <label class="form-control" for="">Rp. <?= $data->type_of_penetapan=='enc'?dec($data->pkb):$data->pkb ?></label>
              </div>
              <div class="form-group col-md-3">
                <label>SWDKLLJ</label>
                <label class="form-control" for="">Rp. <?= $data->type_of_penetapan=='enc'?dec($data->swdkllj):$data->swdkllj ?></label>
              </div>
              <div class="form-group col-md-3">
                <label>Penerbitan STNK</label>
                <label class="form-control" for="">Rp. <?= $data->type_of_penetapan=='enc'?dec($data->penerbitan_stnk):$data->penerbitan_stnk ?></label>
              </div>
              <div class="form-group col-md-3">
                <label>Penerbitan NTKB</label>
                <label class="form-control" for="">Rp. <?= $data->type_of_penetapan=='enc'?dec($data->penerbitan_ntkb):$data->penerbitan_ntkb ?></label>
              </div>
              <div class="form-group col-md-3">
                <label>Denda PKB</label>
                <label class="form-control" for="">Rp. <?= $data->type_of_penetapan=='enc'?dec($data->d_pkb):$data->d_pkb ?></label>
              </div>
              <div class="form-group col-md-3">
                <label>Denda SWDKLLJ</label>
                <label class="form-control" for="">Rp. <?= $data->type_of_penetapan=='enc'?dec($data->d_swdkllj):$data->d_swdkllj ?></label>
              </div>
             
              <div class="form-group col-md-3">
                <label>Total</label>
                <label class="form-control" for="">Rp. <?= $data->type_of_penetapan=='enc'?dec($data->total):$data->total ?></label>
              </div>
              
              <div class="form-group col-md-3">
                <label>Tanggal Penetapan</label>
                <label class="form-control" for=""><?= $data->type_of_penetapan=='enc'?dec($data->tanggal_penetapan):$data->tanggal_penetapan ?></label>
              </div>
            </div>
            <hr>
            <div class="col-md-12 text-right"><a href="<?= base_url('c_pengecekan/view/').$data->id_pengecekan ?>">>> Selengkapnya</a></div>
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
            <div class="col-md-12 text-right"><a href="<?= base_url('c_petugas/view/').$data->id_petugas ?>">>> Selengkapnya</a></div>
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label>Kode Petugas</label>
                  <label class="form-control" for=""><?= $data->type_of_petugas=='enc'?dec($data->kode_petugas):$data->kode_petugas ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Nama Petugas</label>
                  <label class="form-control" for=""><?= $data->type_of_petugas=='enc'?dec($data->nama_petugas):$data->nama_petugas ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Jabatan</label>
                  <label class="form-control" for=""><?= $data->type_of_petugas=='enc'?dec($data->jabatan):$data->jabatan ?></label>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>
</div>