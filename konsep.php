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
          <img src="https://i.pinimg.com/1200x/66/b5/d6/66b5d6a7fe92912ed8637d6c0f7af26b.jpg" alt="Logo">
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
    

      <h1 id="konsep">KONSEP</h1>
      <div class="card">
        <p>
          Kami mengadopsi pendekatan <strong>inovasi digital</strong> berbasis kebutuhan pengguna. Dengan konsep <em>design thinking</em>, kami memastikan setiap solusi teknologi yang dibangun memiliki nilai guna tinggi dan mudah diakses oleh semua kalangan.
        </p>
         <p>
          Kami percaya bahwa transformasi digital tidak hanya soal teknologi, tapi juga soal manusia dan proses. Oleh karena itu, pendekatan kami selalu mengedepankan <strong>kolaborasi, efisiensi, dan keberlanjutan</strong>.
        </p>
        </div>
        <h1>TEKNOLOGI</h1>
    <div class="card">
    <p>
    PT Saifu Compeni memanfaatkan teknologi terbaru seperti kecerdasan buatan (AI), Internet of Things (IoT), dan cloud computing untuk menciptakan solusi digital yang efisien dan adaptif terhadap perkembangan zaman.
    </p>
</div>
<div class="card">
<h1>Informasi Perusahaan</h1>
      <ul>
        <li><strong>Nama Perusahaan:</strong> PT Saifu Compeni</li>
        <li><strong>Berdiri:</strong> 2020</li>
        <li><strong>Bidang:</strong> Teknologi Informasi & Layanan Digital</li>
        <li><strong>Email:</strong> kontak@saifucompeni.co.id</li>
        <li><strong>Telepon:</strong> (061) 1234-5678</li>
        <li><strong>Alamat:</strong> Jl. Teknologi No. 7, Medan, Sumatera Utara</li>
      </ul>
</div>


    </main>
  </div>
  
  <script>
  function toggleDropdown() {
    const dropdown = document.getElementById("dropdown-content");
    dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
  }
</script>


  <footer class="footer-note">
    Design by Saifu Badawi
  </footer>
</body>
</html>
