<?php
// Koneksi ke database
$server = "localhost";
$user = "root";
$password = "";
$database = "data";

$db = mysqli_connect($server, $user, $password, $database);
if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

// Ambil data barang dari tabel printer
$sql = "SELECT * FROM printer";
$result = mysqli_query($db, $sql);

// Tampilkan daftar barang
echo "<h2>Daftar Barang</h2>";
echo "<table border='1'>";
echo "<tr><th>No</th><th>Nama</th><th>Warna</th><th>Jumlah</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['No'] . "</td>";
    echo "<td>" . $row['Nama_Merek'] . "</td>";
    echo "<td>" . $row['Warna'] . "</td>";
    echo "<td>" . $row['Jumlah'] . "</td>";
    echo "</tr>";
}
echo "</table> <br>" ;
echo '<a href="index.html">Tambah Data Baru</a>';

// Menutup koneksi
mysqli_close($db);
?>
