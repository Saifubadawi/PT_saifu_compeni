<?php
// File: sing.php
include 'db.php'; // koneksi ke database

// Tangkap data POST
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$emailUpdates = isset($_POST['email_updates']) ? 1 : 0;

// Validasi dasar
if ($email && $password) {
    // Enkripsi password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Cek apakah email sudah ada// Jangan close koneksi atau statement terlalu awal
$check = $conn->prepare("SELECT id FROM users WHERE email = ?");
$check->bind_param("s", $email);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    echo "<script>alert('Email sudah terdaftar!'); window.location.href = 'index.html';</script>";
} else {
    $stmt = $conn->prepare("INSERT INTO users (email, password, email_updates) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $email, $hashedPassword, $emailUpdates);

    if ($stmt->execute()) {
        echo "<script>alert('Registrasi berhasil!'); window.location.href = 'index.html';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan: " . $stmt->error . "'); window.location.href = 'index.html';</script>";
    }

    $stmt->close(); // hanya tutup setelah eksekusi
}
$check->close();

} else {
    echo "<script>
        alert('Email dan Password wajib diisi!');
        window.location.href = 'index.html';
    </script>";
}

$conn->close();
?>
