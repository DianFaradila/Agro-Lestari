<?php
// =========================================
// PHP LOGIC & DATA
// =========================================

// Contoh variabel data dinamis (placeholder)
$project_title = "Agro Lestari | Pengelolaan Lanskap Hutan Berbasis Komunitas";
$main_heading = "Rancangan Pengelolaan Lanskap Hutan untuk Stabilitas Ekosistem dan Penguatan Ekonomi Berbasis Komunitas";

// Untuk navigasi
$nav_items = [
    'Gambaran Umum' => 'umum',
    'Pasar Tumpah' => '#data',
    'Peta Zonasi' => '#maps',
    'Edukasi' => '#edukasi',
   
];

// Data untuk pasar tumpah


// Data Placeholder untuk Map
$map_iframe_url = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15817.906660144941!2d113.80517725!3d-7.46513575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd71b0521c78477%3A0x6a05e52c88f11d13!2sAir%20Terjun%20Toroan!5e0!3m2!1sid!2sid!4v1705624790076!5m2!1sid!2sid";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $project_title ?></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <header class="navbar">
        <div class="container nav-content">
            <a href="index.php" class="logo">"Agro Lestari"</a>
            
            <div class="menu-toggle" id="menuToggle">
                <i class="fas fa-bars"></i>
            </div>

            <nav class="main-nav" id="mainNav">
                <ul>
                    <?php foreach ($nav_items as $text => $url): ?>
                        <li><a href="<?= $url ?>"><?= $text ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
    </header>

    <section class="hero-section" id="lokasi" style="background-image: url('images/waterfall-bg.jpg');">
        <div class="hero-overlay">
            <div class="container hero-content">
                <h1><?= $main_heading ?></h1>
                <p>Mewujudkan keseimbangan antara pelestarian alam dan peningkatan kesejahteraan masyarakat.</p>
                <a href="#data" class="btn-jelajahi">
                    JELAJAHI &rarr;
                </a>
            </div>
        </div>
    </section>