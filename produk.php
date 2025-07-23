

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
          <img src="https://i.pinimg.com/1200x/66/b5/d6/66b5d6a7fe92912ed8637d6c0f7af26b.jpg" alt="">
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
<!-- Konten Utama --><main id="main" class="main-content">
  <h1>PRODUK KAMI</h1>
  <div class="card">
    <h2>Website Development</h2>
    <p>Layanan pembuatan website profesional untuk bisnis, organisasi, dan personal branding.</p>
  </div>

  <div class="card">
    <h2>Aplikasi Mobile</h2>
    <p>Pengembangan aplikasi Android/iOS yang modern dan mudah digunakan.</p>
  </div>

  <div class="card">
    <h2>Sistem Informasi Kustom</h2>
    <p>Pembuatan sistem berbasis web untuk manajemen data perusahaan seperti ERP, HRIS, dan Inventori.</p>
  </div>

  <div class="card">
    <h2>Layanan UI/UX Design</h2>
    <p>Mendesain antarmuka pengguna yang menarik, intuitif, dan mudah digunakan.</p>
  </div>
</main>

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

