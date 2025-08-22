<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak Klinik</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f9f9f9;
      margin: 0;
      padding: 0;
    }

    h2 {
      text-align: center;
      margin-top: 30px;
      color: #2c3e50;
    }

    .kontak-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      padding: 30px;
      max-width: 1000px;
      margin: auto;
    }

    .kontak-card {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 25px;
      text-align: center;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .kontak-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    }

    .kontak-card i {
      font-size: 40px;
      color: #3498db;
      margin-bottom: 15px;
    }

    .kontak-card h3 {
      margin: 10px 0;
      color: #333;
    }

    .kontak-card p {
      color: #666;
      margin: 0;
    }
  </style>
  <!-- Pakai ikon dari Font Awesome -->
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>

<body>
  <h2>Kontak Kami</h2>

  <div class="kontak-container">
    <div class="kontak-card">
      <i class="fas fa-map-marker-alt"></i>
      <h3>Alamat</h3>
      <p>Jl. Ahmad Dahlan No. 123, Kota X</p>
    </div>

    <div class="kontak-card">
      <i class="fas fa-phone"></i>
      <h3>Telepon</h3>
      <p>(021) 123456</p>
    </div>

    <div class="kontak-card">
      <i class="fas fa-envelope"></i>
      <h3>Email</h3>
      <p>klinik@muhammadiyah.or.id</p>
    </div>
  </div>
</body>

</html>
