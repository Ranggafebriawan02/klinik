<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Klinik Muhammadiyah</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    /* Header dengan gradasi biru */
    .home-header {
      background: linear-gradient(135deg, #1976d2, #42a5f5);
      padding: 80px 20px;
      color: white;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    .home-header h1 {
      font-size: 2.75rem;
      font-weight: 700;
    }
    .home-header p {
      font-size: 1.25rem;
    }

    /* Kartu section */
    .section-card {
      background: #ffffff;
      border-radius: 12px;
      transition: all 0.3s ease-in-out;
      border: 1px solid #f1f1f1;
    }
    .section-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }

    /* Lingkaran ikon */
    .icon-circle {
      width: 90px;
      height: 90px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto;
    }

    /* Teks heading dan paragraf */
    .section-card h4 {
      margin-top: 15px;
      margin-bottom: 8px;
      color: #333;
    }
    .section-card p {
      color: #6c757d;
    }
  </style>
</head>
<body>

  <!-- HEADER -->
  <div class="home-header text-center">
    <h1>Klinik Muhammadiyah</h1>
    <p>Pelayanan unggul, aman, dan penuh kasih setiap saat.</p>
  </div>

  <!-- SECTION MENU -->
  <div class="container my-5">
    <div class="row text-center">
      <div class="col-md-4 mb-4">
        <a href="<?= base_url('/layanan') ?>" class="section-card d-block p-4 text-decoration-none">
          <div class="icon-circle bg-primary bg-opacity-10">
            <i class="bi bi-heart-pulse-fill fs-1 text-primary"></i>
          </div>
          <h4 class="fw-bold">Layanan</h4>
          <p>Info layanan klinik secara lengkap dan cepat.</p>
        </a>
      </div>

      <div class="col-md-4 mb-4">
        <a href="<?= base_url('/dokter') ?>" class="section-card d-block p-4 text-decoration-none">
          <div class="icon-circle bg-success bg-opacity-10">
            <i class="bi bi-person-badge-fill fs-1 text-success"></i>
          </div>
          <h4 class="fw-bold">Dokter</h4>
          <p>Lihat jadwal dan spesialisasi tim medis kami.</p>
        </a>
      </div>

      <div class="col-md-4 mb-4">
        <a href="<?= base_url('/kontak') ?>" class="section-card d-block p-4 text-decoration-none">
          <div class="icon-circle bg-danger bg-opacity-10">
            <i class="bi bi-telephone-fill fs-1 text-danger"></i>
          </div>
          <h4 class="fw-bold">Kontak</h4>
          <p>Hubungi kami atau datang langsung ke klinik.</p>
        </a>
      </div>
    </div>
  </div>

  <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
