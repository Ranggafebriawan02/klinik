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
    /* HEADER dengan gradasi elegan */
    .home-header {
      background: linear-gradient(135deg, #1976d2, #26a69a);
      padding: 100px 20px;
      color: white;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
      animation: fadeDown 1.2s ease;
    }

    @keyframes fadeDown {
      from {
        opacity: 0;
        transform: translateY(-50px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .home-header h1 {
      font-size: 3rem;
      font-weight: 800;
      text-shadow: 1px 2px 6px rgba(0, 0, 0, 0.25);
    }

    .home-header p {
      font-size: 1.3rem;
      opacity: 0.9;
    }

    /* Section Card */
    .section-card {
      background: #ffffff;
      border-radius: 15px;
      transition: all 0.4s ease-in-out;
      border: none;
      padding: 30px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
      position: relative;
      overflow: hidden;
    }

    .section-card:hover {
      transform: translateY(-10px) scale(1.03);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
    }

    /* Ikon dalam lingkaran */
    .icon-circle {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 15px auto;
      font-size: 2rem;
    }

    /* KEUNGGULAN */
    .feature-box {
      text-align: center;
      padding: 25px;
      background: #f8f9fa;
      border-radius: 12px;
      margin-bottom: 20px;
      transition: 0.4s;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    .feature-box:hover {
      transform: translateY(-8px);
      background: #e3f2fd;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
    }

    .feature-box i {
      font-size: 2.2rem;
      color: #1976d2;
      margin-bottom: 15px;
    }

    /* Testimonial */
    .testimonial {
      background: white;
      border-radius: 15px;
      padding: 25px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
      text-align: center;
      transition: 0.4s;
    }

    .testimonial:hover {
      transform: scale(1.05);
    }

    .testimonial strong {
      display: block;
      margin-top: 10px;
      color: #1976d2;
    }

    /* Slider Testimonial */
    .testimonial-slider {
      display: flex;
      overflow: hidden;
      gap: 20px;
    }

    .testimonial-slider .testimonial {
      min-width: 100%;
      transition: transform 0.6s ease;
    }

    .slider-controls {
      text-align: center;
      margin-top: 15px;
    }

    .slider-controls button {
      background: #1976d2;
      border: none;
      color: white;
      padding: 8px 15px;
      border-radius: 50px;
      margin: 0 5px;
      transition: 0.3s;
    }

    .slider-controls button:hover {
      background: #1565c0;
    }
    .btn-cta { background: #00ffa2ff; color: #333; font-weight: bold; border-radius: 30px; padding: 10px 25px; }

  </style>
</head>

<body>

  <!-- HEADER -->
  <div class="home-header text-center">
    <h1>Klinik Muhammadiyah</h1>
    <p>Pelayanan unggul, aman, dan penuh kasih setiap saat.</p>
    <!-- <a href="#pendaftaran" class="btn btn-cta">Daftar Sekarang</a> -->
    <a href="<?=base_url('pendaftaran')?>" class="btn btn-cta">Daftar Antrian Pasien</a>

  </div>

  <!-- SECTION MENU -->
  <div class="container my-5">
    <div class="row text-center">
      <div class="col-md-4 mb-4">
        <a href="<?= base_url('/layanan') ?>" class="section-card d-block text-decoration-none">
          <div class="icon-circle bg-primary bg-opacity-10 text-primary">
            <i class="bi bi-heart-pulse-fill"></i>
          </div>
          <h4 class="fw-bold">Layanan</h4>
          <p>Info layanan klinik secara lengkap dan cepat.</p>
        </a>
      </div>

      <div class="col-md-4 mb-4">
        <a href="<?= base_url('/dokter') ?>" class="section-card d-block text-decoration-none">
          <div class="icon-circle bg-success bg-opacity-10 text-success">
            <i class="bi bi-person-badge-fill"></i>
          </div>
          <h4 class="fw-bold">Dokter</h4>
          <p>Lihat jadwal dan spesialisasi tim medis kami.</p>
        </a>
      </div>

      <div class="col-md-4 mb-4">
        <a href="<?= base_url('/kontak') ?>" class="section-card d-block text-decoration-none">
          <div class="icon-circle bg-danger bg-opacity-10 text-danger">
            <i class="bi bi-telephone-fill"></i>
          </div>
          <h4 class="fw-bold">Kontak</h4>
          <p>Hubungi kami atau datang langsung ke klinik.</p>
        </a>
      </div>
    </div>
  </div>

  <!-- KEUNGGULAN -->
  <div class="container my-5">
    <h3 class="text-center mb-4 fw-bold">Mengapa Memilih Kami?</h3>
    <div class="row">
      <div class="col-md-4">
        <div class="feature-box">
          <i class="bi bi-people-fill"></i>
          <h5>Tenaga Medis Profesional</h5>
          <p>Dokter dan perawat berpengalaman, ramah, dan kompeten.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="feature-box">
          <i class="bi bi-hospital-fill"></i>
          <h5>Fasilitas Lengkap</h5>
          <p>Ruang nyaman, peralatan modern, dan standar terbaik.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="feature-box">
          <i class="bi bi-clock-fill"></i>
          <h5>Pelayanan Cepat</h5>
          <p>Proses pendaftaran mudah dengan sistem antrian online.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- TESTIMONIAL -->
  <div class="container my-5">
    <h3 class="text-center fw-bold mb-4">Apa Kata Pasien?</h3>
    <div class="testimonial-slider" id="testimonial-slider">
      <div class="testimonial">
        <p>"Pelayanan sangat ramah dan cepat. Dokternya profesional sekali. Saya puas berobat di sini."</p>
        <strong>- Budi, 34 th</strong>
      </div>
      <div class="testimonial">
        <p>"Kliniknya bersih, nyaman, dan islami. Saya merasa tenang saat berobat."</p>
        <strong>- Aisyah, 28 th</strong>
      </div>
      <div class="testimonial">
        <p>"Antrian online sangat membantu, jadi tidak perlu menunggu lama di klinik."</p>
        <strong>- Andi, 40 th</strong>
      </div>
    </div>

    <div class="slider-controls">
      <button onclick="prevSlide()">‹</button>
      <button onclick="nextSlide()">›</button>
    </div>
  </div>

  <!-- JS -->
  <script>
    let currentIndex = 0;
    const testimonials = document.querySelectorAll(".testimonial");
    const slider = document.getElementById("testimonial-slider");

    function showSlide(index) {
      slider.style.transform = `translateX(-${index * 100}%)`;
    }

    function nextSlide() {
      currentIndex = (currentIndex + 1) % testimonials.length;
      showSlide(currentIndex);
    }

    function prevSlide() {
      currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
      showSlide(currentIndex);
    }

    // Auto-slide tiap 5 detik
    setInterval(nextSlide, 5000);
  </script>

  <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
