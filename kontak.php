

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard - Saifu Compeni</title>
  <link rel="stylesheet" href="style/dasbor.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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
<!-- Konten Utama --><main class="main-content">
  <h1>Kontak Kami</h1>
  <div class="card">
    <div class="contact-details">
      <p><i class="fas fa-envelope"></i> Saifubadawi@gmail.com</p>
      <p><i class="fas fa-phone-alt"></i> +62 8956-0516-2545</p>
      <p><i class="fas fa-map-marker-alt"></i> Indonesia</p>
    </div>

    <div class="contact-media">
      <a href="https://www.instagram.com/sfu_bdawi/" target="_blank" class="ig">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://github.com/Saifubadawi" target="_blank" class="github">
        <i class="fab fa-github"></i>
      </a>
      <a href="https://m.facebook.com/profile.php?id=100056676886644" target="_blank" class="facebook">
        <i class="fab fa-facebook"></i>
      </a>
    </div>
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

