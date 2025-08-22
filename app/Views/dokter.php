<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h2 {
        text-align: center;
        margin-top: 20px;
        color: #333;
    }
    tr {
        text-align: center;
    }
</style>
<body>
    <h2>Daftar Dokter</h2>
<table class="table table-bordered">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Spesialis</th>
    <th>Jadwal</th>
  </tr>
  <?php $no = 1;
  foreach ($dokter as $d): ?>
  <tr>
    <td><?= $no++ ?></td>
    <td><?= esc($d['nama_dokter']) ?></td>
    <td><?= esc($d['spesialis']) ?></td>
    <td><?= esc($d['jadwal']) ?></td>
  </tr>
  <?php endforeach; ?>
</table>

</body>
</html>