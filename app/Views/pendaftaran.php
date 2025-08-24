<?= $this->include('layout/header'); ?>

<style>
  body {
    background-color: #f8f9fa;
  }

  .form-section {
    max-height: 80vh;        /* agar tidak kepanjangan */
    overflow-y: auto;        /* bisa discroll */
    padding-right: 10px;     /* biar ga ketutupan scrollbar */
  }

  .card {
    border-radius: 12px;
    border: none;
  }

  .card-header {
    border-radius: 12px 12px 0 0;
  }

  .form-label {
    font-weight: 500;
  }

  .btn-success {
    border-radius: 8px;
    padding: 10px 20px;
    font-weight: 500;
  }

  /* Scrollbar custom */
  .form-section::-webkit-scrollbar {
    width: 6px;
  }
  .form-section::-webkit-scrollbar-thumb {
    background: #0d6efd;
    border-radius: 6px;
  }
</style>

<div class="container mt-5 mb-5">
  <div class="card shadow-lg">
    <div class="card-header bg-primary text-white">
      <h4 class="mb-0">Pendaftaran Antrian Online</h4>
    </div>
    <div class="card-body form-section">
      <form action="<?= base_url('pendaftaran/simpan') ?>" method="post">

        <div class="mb-3">
          <label for="nama_pasien" class="form-label">Nama Pasien</label>
          <input type="text" class="form-control" name="nama_pasien" placeholder="Masukkan nama lengkap" required>
        </div>

        <div class="mb-3">
          <label for="no_hp" class="form-label">No HP</label>
          <input type="text" class="form-control" name="no_hp" placeholder="0812xxxxxxx" required>
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
            <option value="6">Laboratorium</option>
          </select>
        </div>

        <div class="d-flex justify-content-end">
          <button type="submit" class="btn btn-success">
             Daftar
          </button>
        </div>

      </form>
    </div>
  </div>
</div>

<?= $this->include('layout/footer'); ?>
