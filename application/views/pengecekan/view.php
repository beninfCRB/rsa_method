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
                <a class="btn btn-danger text-white rounded-circle" href="<?= base_url('c_pengecekan'); ?>">
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
                  <label>Kode <?= $title ?></label>
                  <label class="form-control" for=""><?= $data->type_of_pengecekan=='enc'?dec($data->kode_pengecekan):$data->kode_pengecekan ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Tanggal <?= $title ?></label>
                  <label class="form-control" for=""><?= $data->type_of_pengecekan=='enc'?dec($data->tanggal_pengecekan):$data->tanggal_pengecekan ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label> Denda PKB </label>
                  <label class="form-control" for=""><?= $data->type_of_pengecekan=='enc'?dec($data->denda_pkb):$data->denda_pkb ?> Bulan</label> 
                </div>
                <div class="form-group col-md-3">
                  <label> Denda SWDKLLJ </label>
                  <label class="form-control" for=""><?= $data->type_of_pengecekan=='enc'?dec($data->denda_swdkllj):$data->denda_swdkllj ?> Bulan </label> 
                </div>
                <div class="form-group col-md-3">
                  <label> Total Denda PKB </label>
                  <label class="form-control" for="">Rp. <?= $data->type_of_pengecekan=='enc'?dec($data->total_denda_pkb):$data->total_denda_pkb ?> </label> 
                </div>
                <div class="form-group col-md-3">
                  <label>Total Denda SWDKLLJ </label>
                  <label class="form-control" for="">Rp. <?= $data->type_of_pengecekan=='enc'?dec($data->total_denda_swdkllj):$data->total_denda_swdkllj ?> </label> 
                </div>
              </div>
              <hr>
            <div class="col-md-12 text-right"><a href="<?= base_url('c_pendaftaran/view/').$data->id_pendaftaran ?>">>> Selengkapnya</a></div>
              <div class="form-row">
              <div class="form-group col-md-3">
                  <label>Kode Pendaftaran</label>
                  <label class="form-control" for=""><?= $data->type_of_pendaftaran=='enc'?dec($data->kode_pendaftaran):$data->kode_pendaftaran ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Tanggal Pendaftaran</label>
                  <label class="form-control" for=""><?= $data->type_of_pendaftaran=='enc'?dec($data->tanggal_pendaftaran):$data->tanggal_pendaftaran ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Keterangan</label>
                  <label class="form-control" for=""><?= $data->type_of_pendaftaran=='enc'?dec($data->keterangan):$data->keterangan ?></label>
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