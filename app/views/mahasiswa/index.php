<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
      <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data Mahasiswa
        </button>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
          <div class="input-group">
          <input type="text" class="form-control" placeholder="Cari Data Mahasiswa" name="keyword" id="keyword" autocomplete="off">
          <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
        </div>
      </form>
      </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
              <?php foreach( $data['mhs'] as $mhs ) : ?>
                <li class="list-group-item d-flex">
                  <div class="me-auto">
                    <?= $mhs['nama']; ?>
                  </div>
                  <div class="ms-auto">
                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary">detail</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/edit/<?= $mhs['id']; ?>" class="badge bg-info tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">edit</a>
                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge bg-danger" onclick="return confirm('Yakin Anda ingin menghapus?');">hapus</a>
                  </div>
                </li>
                <?php endforeach; ?>
              </ul> 
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    
      <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
      <input type="hidden" name="id" id="id">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama">
      </div>

      <div class="mb-3">
        <label for="nrp" class="form-label">NRP</label>
        <input type="number" class="form-control" id="nrp" name="nrp">
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>

      <div class="mb-3">
        <label for="jurusan">Jurusan</label>
        <select class="form-control" id="jurusan" name="jurusan">
            <option value="Sistem Informatika Jaringan dan Aplikasi">Sistem Informatika Jaringan dan Aplikasi</option>
            <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
            <option value="Teknik Audio Video">Teknik Audio Video</option>
            <option value="Teknik Instalasi Tenaga Listrik">Teknik Instalasi Tenaga Listrik</option>
            <option value="Teknik Pemesinan">Teknik Pemesinan</option>
            <option value="Desain Pemodelan dan Informasi Bangunan">Desain Pemodelan dan Informasi Bangunan</option>
            <option value="Konstruksi Gedung, Sanitasi dan Perawatan">Konstruksi Gedung, Sanitasi dan Perawatan</option>
            <option value="Geomatika">Geomatika</option>
            <option value="Multimedia">Multimedia</option>
        </select>
      </div>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>