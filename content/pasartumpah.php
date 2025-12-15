<?php
// ===========================================
// PERBAIKAN: INISIALISASI VARIABEL DATA SENSOR
// Data Placeholder untuk Sensor (untuk mengisi visual data cards)
// ===========================================
$data_sensor_air = [
    ['label' => 'Suhu Air', 'value' => '22.5', 'unit' => '°C', 'sensor' => 'DS18B20', 'icon' => 'fa-thermometer-half'],
    ['label' => 'Ketinggian Air', 'value' => '55', 'unit' => 'cm', 'sensor' => 'Ultrasonik', 'icon' => 'fa-ruler-vertical'],
];
$data_sensor_udara = [
    ['label' => 'Kelembaban Udara', 'value' => '88', 'unit' => '%', 'sensor' => 'DHT22', 'icon' => 'fa-cloud-showers-heavy'],
    ['label' => 'Debit Air', 'value' => '0.8', 'unit' => 'm³/s', 'sensor' => 'Flow Meter', 'icon' => 'fa-gauge-high'],
];
?>
<section id="data" class="data-section">
    <div class="container">
        <h2 class="section-title">📊 Pasar Tumpah</h2>

        <div class="pasar-tumpah-info" style="text-align: center; max-width: 800px; margin: 0 auto 40px;">
            <h3>Pasar Tumpah (Pasar Kaget)</h3>
            <p>Pasar tumpah di Ekowisata Agro Lestari berfungsi sebagai sarana pemasaran hasil pertanian dan produk lokal yang dihasilkan oleh anggota KTH dan masyarakat sekitar.</p>
            <p>Pasar ini menyediakan berbagai hasil tanaman dari lahan pertanian, serta produk hasil hutan bukan kayu (HHBK) berupa KINGKONG, yaitu keripik singkong aneka rasa yang menjadi produk unggulan kawasan. Pasar tumpah ini bersifat temporer atau **"pasar kaget"**, karena hanya beroperasi pada akhir pekan. Keberadaannya tidak hanya menambah daya tarik wisata, tetapi juga mendorong perputaran ekonomi lokal serta memperkuat keterkaitan antara kegiatan ekowisata dan pemberdayaan masyarakat.</p>
        </div>
        
        <div class="pasar-tumpah-gallery">
            <div class="pasar-tumpah-item">
                <img src="images/pt1.png" alt="Foto suasana Pasar Tumpah 1" class="pt-img">
            </div>
            <div class="pasar-tumpah-item">
                <img src="images/pt2.png" alt="Foto suasana Pasar Tumpah 2" class="pt-img">
            </div>
            <div class="pasar-tumpah-item">
                <img src="images/kemasaan.jpg" alt="Foto suasana Pasar Tumpah 2" class="pt-img">
            </div>
        </div>
        