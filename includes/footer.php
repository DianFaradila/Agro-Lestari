<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Agro Lestari</title>
    <style>
        /* CSS untuk Footer */
        .main-footer {
            background-color: #2e602e; /* Warna latar belakang hijau gelap */
            color: #ffffff;
            padding: 40px 0 20px 0;
            font-family: Arial, sans-serif;
        }

        .container {
            /* Asumsi: container membatasi lebar konten */
            max-width: 1200px; 
            margin: 0 auto;
            padding: 0 15px;
        }
        
        /* Menggunakan Flexbox untuk tata letak 3 kolom */
        .footer-content {
            display: flex; 
            justify-content: space-between; /* Memberi jarak antar kolom */
            align-items: flex-start;
            flex-wrap: wrap; /* Penting untuk responsif */
        }

        .footer-col {
            /* Mengatur lebar agar 3 kolom bisa muat */
            width: calc(33.333% - 20px); /* 1/3 lebar dikurangi sedikit margin */
            margin-bottom: 20px;
        }
        
        .footer-col h4 {
            color: #ffffff;
            font-size: 18px;
            margin-bottom: 15px;
            position: relative;
        }

        .footer-col p {
            font-size: 14px;
            margin-bottom: 8px;
            line-height: 1.5;
        }

        /* Styling Ikon Sosial Media */
        .social-links {
            margin-top: 15px;
        }
        
        .social-links a {
            color: #ffffff;
            font-size: 20px;
            margin-right: 15px;
            transition: color 0.3s;
        }
        
        .social-links a:hover {
            color: #a4c4a4; /* Warna hover yang lebih terang */
        }
        
        /* Styling Kontak Kami */
        .contact-info i {
            margin-right: 8px;
            min-width: 15px;
            text-align: center;
        }
        
        /* Styling Logo Mitra */
        .logo-list {
            display: flex;
            flex-wrap: wrap;
            gap: 15px; /* Jarak antar logo */
            align-items: center;
        }

        .partner-item {
            width: 50px; /* Ukuran default logo */
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fff; /* Latar belakang putih untuk logo */
            border-radius: 5px;
            padding: 5px;
        }

        .partner-logo {
            max-width: 100%;
            max-height: 100%;
            display: block;
            height: auto;
        }

        /* Bagian Copyright */
        .copyright {
            background-color: #244c24; /* Warna hijau lebih gelap untuk copyright */
            padding: 10px 0;
            text-align: center;
            margin-top: 20px;
            border-top: 1px solid #448044;
        }

        .copyright p {
            margin: 0;
            font-size: 13px;
        }

        /* Responsif untuk layar kecil (mobile) */
        @media (max-width: 768px) {
            .footer-content {
                flex-direction: column; /* Tumpuk kolom secara vertikal */
            }
            
            .footer-col {
                width: 100%; /* Setiap kolom mengambil lebar penuh */
                text-align: center; /* Pusatkan teks */
                margin-bottom: 30px;
            }

            .logo-list {
                justify-content: center; /* Pusatkan logo */
            }
            
            .contact-info p {
                /* Untuk menghindari ikon yang tidak sejajar saat di tengah */
                text-align: center; 
            }
        }
    </style>
</head>
<body>

<footer class="main-footer">
    <div class="container footer-content"> 
        
        <div class="footer-col about-project">
            <h4>Kelompok 12</h4>
            <p>Tominse Ijan Butar-Butar (122420043)</p>
            <p>Ighfira Ramadhanti (122420031)</p>
            <p>Simon Hutagalung (122420046)</p>
            <p>Intan Putri Cahyani (122420047)</p>
            <p>Oktavia Ramda Sari (122420082)</p>
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <div class="footer-col contact-info">
            <h4>Kontak Kami</h4>
            <p><i class="fas fa-envelope"></i> email: agrolestari.kth@gmail.com</p>
            <p><i class="fas fa-phone"></i> +62 838-9952-9833</p>
            <p><i class="fas fa-map-marker-alt"></i>Lampung Selatan, Indonesia</p>
        </div>
        
        <div class="footer-col partner-logos">
            <h4>Mitra Proyek</h4>
            <div class="logo-list">
                
                <div class="partner-item">
                    <img src="images/itera.png" alt="Logo Mitra 1 - Universitas" class="partner-logo">
                </div>
                
                <div class="partner-item">
                    <img src="images/fti.png" alt="Logo Mitra 2 - Prodi" class="partner-logo">
                </div>
                
                <div class="partner-item">
                    <img src="images/hutan.png" alt="Logo Mitra 3 - Sponsor" class="partner-logo">
                </div>
                <div class="partner-item">
                    <img src="images/kph.png" alt="Logo Mitra 3 - Sponsor" class="partner-logo">
                </div>
            </div>
        </div>
        
    </div>
    <div class="copyright">
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> KTH Agro Lestari | Perancangan dan Desain Kehutanan</p>
        </div>
    </div>
</footer>

<script>
    // Skrip yang sudah ada
    console.log("Website Agro Lestari siap digunakan.");
</script>

</body>
</html>