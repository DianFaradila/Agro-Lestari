<?php
// Sertakan Header (termasuk tag <head> dan Navbar)
include 'includes/header.php';

// Sertakan Hero Section
include 'includes/hero.php';
?>

    <div class="container">
        <section id="data" class="data-section">
    <div class="container">
        <h2 class="section-title">Gambaran Umum</h2>

        <div class="pasar-tumpah-info" style="text-align: center; max-width: 800px; margin: 0 auto 40px;">
            <h3>Gambaran Umum</h3>
            <p>KTH Agro Lestari terletak di Kabupaten Lampung Selatan dan dikelola sebagai kawasan agroforestri berbasis pemberdayaan masyarakat, yang memadukan pertanian, kehutanan, dan ekowisata secara berkelanjutan. Komoditas utama KTH Agro Lestari didominasi oleh tanaman pertanian semusim, terutama jagung, singkong (ubi kayu), kacang-kacangan, serta sayuran hortikultura seperti cabai dan terung sebagai sumber pendapatan jangka pendek. Sementara itu, tanaman kehutanan dan tahunan yang ditanam dalam jumlah terbatas meliputi sengon, jabon, mahoni, serta tanaman MPTS seperti durian, alpukat siger, petai, dan jengkol yang berfungsi sebagai tabungan jangka panjang dan penyangga ekologi</p>
        </div>
        
        
        <?php include 'content/pasartumpah.php'; ?>
        
        <?php include 'content/maps_section.php'; ?>

      <section id="edukasi" class="content-block">
    <h2 class="section-title">🌱 Ekowisata Agro Lestari: Edukasi & Fasilitas</h2>

<div class="edukasi-content" style="margin-bottom: 40px;">
    <h3>🌳 Edukasi Kebun Petik Buah</h3>

    <p>Kebun petik buah di kawasan Ekowisata Agro Lestari merupakan salah satu daya tarik utama yang menawarkan
        pengalaman wisata edukatif dan interaktif bagi pengunjung. Di kawasan ini terdapat berbagai jenis tanaman buah, antara lain jeruk, 
        buah naga, alpukat, dan kelengkeng, yang dapat dipetik secara langsung sesuai musim panen.</p>
    <p>Selain tanaman buah, kebun ini juga ditanami berbagai komoditas pertanian seperti **singkong, tomat, cabai, terong, dan jagung**. Keberagaman jenis tanaman tersebut tidak hanya memperkaya lanskap kawasan, tetapi juga memberikan pembelajaran mengenai **sistem pertanian terpadu** serta pemanfaatan lahan secara produktif dan berkelanjutan.</p>
  <div class="fasilitas-gallery">
            <div class="edukasi-item">
                <img src="images/kebunpetik.png" alt="Foto Embung Konservasi Air" class="fasilitas-img">
            </div>
            <div class="edukasi-item">
                <img src="images/kb2.png" alt="Foto Jogging Track" class="fasilitas-img">
            </div>
 
    </div>
</div>
   <section>
    <div class="edukasi-content" style="margin-bottom: 40px;">
        <h3>🏞️ Fasilitas Penunjang Kawasan</h3>
        <p>Ekowisata Agro Lestari menawarkan berbagai fasilitas penunjang yang dirancang untuk meningkatkan nilai dan kenyamanan kawasan bagi pengunjung. Fasilitas yang tersedia meliputi:</p>
        <ul>
            <li>*Embung:* Sebagai elemen utama lanskap yang berfungsi ganda untuk konservasi air dan daya tarik wisata.</li>
            <li>*Jogging Track:* Mendukung aktivitas olahraga dan rekreasi pengunjung.</li>
            <li>*Kebun Petik Buah:* Memberikan pengalaman wisata edukatif dan interaktif (seperti dijelaskan di atas).</li>
            <li>*Pasar Tumpah:* Wadah aktivitas ekonomi bagi masyarakat lokal untuk menjual produk mereka.</li>
            <li>*Area Ruang Terbuka Hijau (RTH):* Mendukung kenyamanan dan keasrian lingkungan.</li>
            <li>*Gazebo:* Tempat beristirahat dan bersantai yang teduh.</li>
            <li>*Fasilitas Toilet:* Menunjang kebutuhan dasar dan kebersihan pengunjung.</li>
        </ul>
        
<div class="fasilitas-gallery">
    <div class="fasilitas-item"><img src="images/f1.png" alt="..." class="fasilitas-img"></div>
    <div class="fasilitas-item"><img src="images/f2.png" alt="..." class="fasilitas-img"></div>
    <div class="fasilitas-item"><img src="images/f3.png" alt="..." class="fasilitas-img"></div>
    <div class="fasilitas-item"><img src="images/f4.png" alt="..." class="fasilitas-img"></div>
    <div class="fasilitas-item"><img src="images/f5.png" alt="..." class="fasilitas-img"></div>
    <div class="fasilitas-item"><img src="images/f6.png" alt="..." class="fasilitas-img"></div>
</div>

    </div>
</main>

<?php
// Sertakan Footer (termasuk tag penutup </body> dan </html>)
include 'includes/footer.php';
?>