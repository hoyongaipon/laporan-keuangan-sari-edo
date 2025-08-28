<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

include 'config.php';
$data = mysqli_query($conn, "SELECT * FROM laporan ORDER BY tanggal DESC");
?>

<a href="tambah.php">Tambah Data</a>
<table border="1">
  <tr>
    <th>Tanggal</th>
    <th>Deskripsi</th>
    <th>Pemasukan</th>
    <th>Pengeluaran</th>
    <th>Opsi</th>
  </tr>
  <?php while ($row = mysqli_fetch_assoc($data)) : ?>
    <tr>
      <td><?= $row['tanggal'] ?></td>
      <td><?= $row['deskripsi'] ?></td>
      <td><?= number_format($row['pemasukan']) ?></td>
      <td><?= number_format($row['pengeluaran']) ?></td>
      <td>
        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> | 
        <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin?')">Hapus</a>
      </td>
    </tr>
  <?php endwhile; ?>
</table>
