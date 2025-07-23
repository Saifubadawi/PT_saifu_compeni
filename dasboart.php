<?php

session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard - Saifu Compeni</title>
  <link rel="stylesheet" href="style/dasbor.css" />
</head>
<body>
  <div class="dashboard">
    <!-- Sidebar -->
    <aside class="sidebar">
      <div class="logo-section">
        <div class="logo-circle">
          <img src="https://i.pinimg.com/1200x/66/b5/d6/66b5d6a7fe92912ed8637d6c0f7af26b.jpg" alt="Logo Perusahaan">
        </div>
        <h2>PT<br>Saifu Compeni</h2>
      </div>
       <nav>
        <ul>
          <li><a href="dasboart.php">Profile</a></li>
          <li><a href="visi.php">Visi dan Misi</a></li>
          <li><a href="produk.php">Produk Kami</a></li>
          <li><a href="kontak.php">Kontak</a></li>
          <li><a class="active" href="abaut.php">About Us</a></li>
          <li><a class="active" href="even.php">Event Galeri</a></li>
          <li><a class="active" href="klien.php">FOTO KLIEN</a></li>
        </ul>
      </nav>
      <div class="extra">
        <button onclick="toggleDropdown()" class="dropbtn">Artikel ▼</button>
        <div id="dropdown-content" class="dropdown-content">
        <a href="konsep.php">Konsep , teknologi ,infomasi</a>
      </div>
        <a href="index.html" class="logout-btn">Logout</a>
      </div>
    </aside>

    <!-- Konten Utama -->
    <main id="main" class="main-content">
      <h1>Selamat Datang di PT Saifu Compeni</h1>
      <div class="card">
        <h2>Profil Perusahaan</h2>
        <p>PT Saifu Compeni adalah perusahaan yang bergerak di bidang Teknologi Informasi (IT) yang berfokus pada pengembangan solusi digital inovatif untuk mendukung transformasi bisnis.</p>
        <p>Kami menyediakan layanan seperti pengembangan perangkat lunak, sistem informasi, aplikasi mobile, dan konsultasi teknologi untuk berbagai sektor industri.</p>
        <p>Dengan tim profesional yang berpengalaman, PT Saifu Compeni berkomitmen memberikan solusi IT yang handal, efisien, dan berkelanjutan demi kemajuan dunia digital Indonesia.</p>
      </div>
    </main>
  </div>
  <script>
  function toggleDropdown() {
    const dropdown = document.getElementById("dropdown-content");
    dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
  }
</script>


</body>
<footer class="footer-note">
  Design by Saifu Badawi
</footer>

</html>
