<?php

include '..\conn_laboma.php'; // Connect to database

if (isset($_POST['nama']) && isset($_POST['nim']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['nomor_hp'])) {
    $userId = $_SESSION['user_id']; // Get user ID from session
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nomorHp = $_POST['nomor_hp'];

    // Validate input (optional)

    $sql = "UPDATE squad SET nama = ?, nim = ?, username = ?, password = ?, nomor_hp = ? WHERE user_id = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('sssssi', $nama, $nim, $username, $password, $nomorHp, $userId);
    $stmt->execute();

    if ($stmt->error) {
        echo "Error updating profile: " . $stmt->error;
    } else {
        echo "Profile updated successfully!";
    }
} else {
    echo "Invalid request.";
}