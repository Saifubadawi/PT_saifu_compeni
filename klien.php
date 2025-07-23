
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
      <section class="client-gallery">
  <h2>Foto Klien Kami</h2>
  <div class="gallery-grid">
    <div class="gallery-item">
      <img src="https://i.pinimg.com/736x/a0/ac/a0/a0aca073ff008f12a0b358d840594296.jpg" alt="Klien 1">
      <p> NASA</p>
    </div>
    <div class="gallery-item">
      <img src="https://i.pinimg.com/736x/7f/c4/20/7fc42034dd3a22fcca7f8cd163885b0c.jpg" alt="Klien 2">
      <p>GOOGEL</p>
    </div>
    <div class="gallery-item">
      <img src="https://i.pinimg.com/736x/67/97/c0/6797c0b71bd7b3a15bcc20bb720f2e16.jpg" alt="Klien 3">
      <p>AMAZON</p>
    </div>
    <!-- Tambahkan lagi jika perlu -->
  </div>
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
