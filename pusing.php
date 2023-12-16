<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Data Transaksi Buku</title>
</head>
<body>
  <h1>Data Transaksi Buku</h1>
  <table border="1">
    <thead>
      <tr>
        <th>No Transaksi</th>
        <th>Nama Pembeli</th>
        <th>Judul Buku</th>
        <th>Jumlah Buku</th>
        <th>Harga Buku</th>
        <th>Total Harga</th>
        <th>Diskon Belanja</th>
        <th>Diskon Transaksi</th>
        <th>Total Bayar</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // Data transaksi buku
      $data = [];

      // Input data transaksi buku
      echo "<form action='' method='post'>";
      echo "<tr>";
      echo "<td><input type='text' name='no_transaksi'></td>";
      echo "<td><input type='text' name='nama_pembeli'></td>";
      echo "<td><input type='text' name='judul_buku'></td>";
      echo "<td><input type='number' name='jumlah_buku'></td>";
      echo "<td><input type='number' name='harga_buku'></td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td colspan='5'><input type='submit' value='Simpan'></td>";
      echo "</tr>";
      echo "</form>";

      // Cek apakah ada data yang diinputkan
      if (isset($_POST['no_transaksi'])) {
        // Tambahkan data transaksi buku yang diinputkan
        $data[] = [
          $_POST['no_transaksi'],
          $_POST['nama_pembeli'],
          $_POST['judul_buku'],
          $_POST['jumlah_buku'],
          $_POST['harga_buku']
        ];
      }

      // Hitung total harga
      foreach ($data as $row) {
        $total_harga = $row[4] * $row[3];
      }

      // Hitung diskon belanja
      $diskon_belanja = $total_harga * 0.1;

      // Hitung diskon transaksi
      $diskon_transaksi = $total_harga * 0.05;

      // Hitung total bayar
      $total_bayar = $total_harga - $diskon_belanja - $diskon_transaksi;

      // Tampilkan data transaksi buku
      foreach ($data as $row) {
        echo "<tr>";
        echo "<td>{$row[0]}</td>";
        echo "<td>{$row[1]}</td>";
        echo "<td>{$row[2]}</td>";
        echo "<td>{$row[3]}</td>";
        echo "<td>{$row[4]}</td>";
        echo "<td>{$total_harga}</td>";
        echo "<td>{$diskon_belanja}</td>";
        echo "<td>{$diskon_transaksi}</td>";
        echo "<td>{$total_bayar}</td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
</body>
</html>
