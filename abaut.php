
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
        <section class="about-us">
  <h1>Tentang Kami</h1>
  <p>
    <strong>PT Saifu Compeni</strong> adalah perusahaan yang bergerak di bidang Teknologi Informasi (IT). Kami berdedikasi untuk menciptakan solusi digital yang inovatif dan efisien untuk mendukung transformasi bisnis modern.
  </p>
  <p>
    Misi kami adalah memberikan layanan terbaik di bidang pengembangan perangkat lunak, aplikasi mobile, sistem informasi, serta konsultasi teknologi untuk membantu klien mencapai efisiensi dan pertumbuhan yang berkelanjutan.
  </p>
  <p>
    Dengan visi menjadi perusahaan IT terdepan di Indonesia, kami terus mengembangkan kemampuan tim dan membangun kemitraan strategis demi mendorong kemajuan teknologi nasional.
  </p>
</section>

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
