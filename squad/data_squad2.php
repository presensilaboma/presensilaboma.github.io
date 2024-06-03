<?php
// Sertakan file koneksi ke database
include '..\conn_laboma.php';

// Query SQL untuk mengambil data Squads
$sql = "SELECT * FROM squad";
$result = mysqli_query($conn, $sql);

// Tampilkan data dalam bentuk tabel HTML
echo "<table border='1'>
<tr>
<th>Nama</th>
<th>NIM</th>
<th>Username</th>
<th>Password</th>
<th>Nomor HP</th>
<th>Action</th>
</tr>";

// Loop untuk menampilkan data setiap squads
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['nama'] . "</td>";
echo "<td>" . $row['nim'] . "</td>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['password'] . "</td>";
echo "<td>" . $row['nomor_hp'] . "</td>";
// Tombol Edit
echo "<td><a href='edit_squad.php?id=" . $row['id_squad'] . "'>Edit</a> | ";
// Tombol Delete
echo "<a href='delete_squad.php?id=" . $row['id_squad'] . "'>Delete</a></td>";
echo "</tr>";
}
echo "</table>";

// Tutup koneksi ke database
mysqli_close($conn);
?>
