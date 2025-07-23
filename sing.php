<?php
session_start();
include 'db.php';

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if ($email && $password) {
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashedPassword);
        $stmt->fetch();

        if (password_verify($password, $hashedPassword)) {
            // Simpan info user ke session
            $_SESSION['user_id'] = $id;
            $_SESSION['email'] = $email;

            header("Location: dasboart.php");
            exit();

        } else {
            echo "<script>
                alert('Password salah!');
                window.location.href = 'index.html';
            </script>";
            exit();
        }
    } else {
        echo "<script>
            alert('Belum ada akun, silakan daftar terlebih dahulu!');
            window.location.href = 'regestrasi.php';
        </script>";
        exit();
    }

    $stmt->close();
} else {
    echo "<script>
        alert('Email dan password wajib diisi!');
        window.location.href = 'index.html';
    </script>";
    exit();
}

$conn->close();
?>
