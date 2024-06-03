<?php

require 'conn_laboma.php'; // Asumsikan file conn_laboma.php berisi koneksi database

// Generate 64 akun dengan nama, NIM, username, password, dan nomor HP generik
for ($i = 1; $i <= 64; $i++) {
  $nama = "Laboma" . str_pad($i, 2, '0', STR_PAD_LEFT);
  $nim = "220210101010" . str_pad($i, 2, '0', STR_PAD_LEFT); // Format NIM baru
  $username = "laboma" . $i;
  $password = "sandi" . $i;
  $nomorHp = "+628" . str_pad($i, 3, '0', STR_PAD_LEFT); // Format nomor HP 15 digit

  $sql = "INSERT INTO squad (nama, nim, username, password, nomor_hp) VALUES (?, ?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param('sssss', $nama, $nim, $username, $password, $nomorHp);
  $stmt->execute();

  if ($stmt->error) {
    echo "Error: " . $stmt->error . "<br>";
  }
}

echo "64 akun petugas lab dan perpustakaan berhasil dibuat!";
