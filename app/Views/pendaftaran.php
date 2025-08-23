<?= $this->include('layout/header'); ?>

<div class="container mt-5">
  <div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
      <h4>Pendaftaran Antrian Online</h4>
    </div>
    <div class="card-body">
      <form action="<?= base_url('pendaftaran/simpan') ?>" method="post">
        
        <div class="mb-3">
          <label for="nama_pasien" class="form-label" placeholder="Nama Pasien">Nama Pasien</label>
          <input type="text" class="form-control" name="nama_pasien" required>
        </div>

        <div class="mb-3">
          <label for="no_hp" class="form-label" placeholder="No HP">No HP</label>
          <input type="text" class="form-control" name="no_hp" required>
        </div>

        <div class="mb-3">
          <label for="id_dokter" class="form-label">Pilih Dokter</label>
          <select class="form-select" name="id_dokter" required>
            <option value="">-- Pilih Dokter --</option>
            <option value="1">dr. Ahmad Fathoni, Sp.PD</option>
            <option value="2">dr. Siti Aminah, Sp.A</option>
            <option value="3">dr. Budi Santoso, Sp.KG</option>
            <option value="4">dr. Dewi Lestari, Sp.OG</option>
            <option value="5">dr. Rina, Sp.M</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="id_poli" class="form-label">Pilih Layanan</label>
          <select class="form-select" name="id_poli" required>
            <option value="">-- Pilih Layanan --</option>
            <option value="1">Umum</option>
            <option value="2">Anak</option>
            <option value="3">Kandungan</option>
            <option value="4">Mata</option>
            <option value="5">Bedah</option>
          </select>
        </div>

        <button type="submit" class="btn btn-success" style="float: right;">Daftar</button>
      </form>
    </div>
  </div>
</div>

<?= $this->include('layout/footer'); ?>
