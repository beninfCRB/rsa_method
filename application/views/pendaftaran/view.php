dec(<div id="layoutSidenav_content">
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
                <a class="btn btn-danger text-white rounded-circle" href="<?= base_url('c_pendaftaran'); ?>">
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
                  <label class="form-control" for=""><?= $data->type_of_pendaftaran=='enc'?dec($data->kode_pendaftaran):$data->kode_pendaftaran ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Tanggal <?= $title ?></label>
                  <label class="form-control" for=""><?= $data->type_of_pendaftaran=='enc'?dec($data->tanggal_pendaftaran):$data->tanggal_pendaftaran ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>Keterangan <?= $title ?></label>
                  <label class="form-control" for=""><?= $data->type_of_pendaftaran=='enc'?dec($data->keterangan):$data->keterangan ?></label>
                </div>
                
              </div>
              <hr>
            <div class="col-md-12 text-right"><a href="<?= base_url('c_kepemilikan/view/').$data->id_kepemilikan ?>">>> Selengkapnya</a></div>
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label>Kode Kepemilikan</label>
                  <label class="form-control" for=""><?= $data->type_of_kepemilikan=='enc'?dec($data->kode_kepemilikan):$data->kode_kepemilikan ?></label>
                </div>
                <div class="form-group col-md-3">
                  <label>No Registrasi</label>
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
                  <label>Masa Berlaku</label>
                  <label class="form-control" for=""><?= $data->type_of_kepemilikan=='enc'?dec($data->masa_berlaku):$data->masa_berlaku ?></label>
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