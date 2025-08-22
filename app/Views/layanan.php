<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Layanan Klinik</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f8f9fa;
      margin: 0;
    }
    h2 {
      padding-top: 10px;
      text-align: center;
      margin-bottom: 30px;
      color: #2c3e50;
      font-size: 28px;
    }
    .layanan-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      max-width: 1000px;
      margin: 0 auto;
    }
    .card {
      background: #fff;
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(0,0,0,0.15);
    }
    .card h3 {
      margin-top: 0;
      color: #007bff;
      font-size: 20px;
    } */
    .card p {
      color: #555;
      font-size: 15px;
      line-height: 1.5;
    }
  </style>
</head>
<body>
  <h2>Layanan Klinik</h2>
  
  <div class="layanan-container">
    <?php foreach($layanan as $l): ?>
      <div class="card">
        <h3><?= esc($l['nama']) ?></h3>
        <p><?= esc($l['deskripsi']) ?></p>
      </div>
    <?php endforeach; ?>
  </div>

</body>
</html>
