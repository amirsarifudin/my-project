<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DesignElevate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        
/* Header */
header {
  background: linear-gradient(135deg, #6a11cb, #2575fc);
  color: #fff;
  padding: 20px 0;
}
#exampleone, #exampletwo{
    text-align: center;
    color: cornflowerblue;
    padding: 20px;
    margin: 10px;
    font-weight: bold;
}

header .logo {
  font-size: 24px;
  font-weight: bold;
}

nav ul {
  display: flex;
  gap: 20px;
  list-style: none;
}

nav a {
  color: #fff;
  text-decoration: none;
}

.cta-btn {
  background: #fff;
  color: #6a11cb;
  border: none;
  padding: 10px 20px;
  cursor: pointer;
}

/* Hero Section */
.hero {
  background: linear-gradient(135deg, #2575fc, #6a11cb);
  color: #fff;
  padding: 100px 0;
  text-align: center;
}

.hero h1 {
  font-size: 48px;
  margin-bottom: 20px;
}

.hero p {
  font-size: 18px;
  margin-bottom: 40px;
}

.hero-buttons button {
  margin: 0 10px;
  padding: 15px 30px;
  border: none;
  cursor: pointer;
}

.btn-primary {
  background: #fff;
  color: #6a11cb;
}

.btn-secondary {
  background: transparent;
  color: #fff;
  border: 2px solid #fff;
}


        nav {
            background: linear-gradient(135deg,#6a11cb , #2575fc);
        }

        nav .navbar-brand, 
        nav .nav-link .navbar-nav {
            color: white !important;
            text-align: center;
        }
        header h1 {
            font-size: 3rem;
        }

        header p {
            font-size: 1.2rem;
            margin: 20px 0;
        }

        .features {
            padding: 50px 20px;
            background-color: #f9f9f9;
        }

        .features i {
            font-size: 3rem;
            color: #007bff;
        }

        .templates img {
            width: 100%;
            border-radius: 8px;
            transition: transform 0.3s;
        }

        .templates img:hover {
            transform: scale(1.05);
        }

        .pricing {
            padding: 50px 20px;
            background-color: #f1f1f1;
        }
        #umkm {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh; /* Mengatur tinggi minimum agar sesuai layar */
    background-color: #f8f9fa; /* Warna latar belakang */
    padding: 20px;
}

#umkm .container {
    max-width: 800px; /* Lebar maksimum untuk kontainer */
    background: #ffffff; /* Warna latar kontainer */
    border-radius: 8px; /* Membuat sudut kontainer melengkung */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Efek bayangan */
    padding: 30px;
    position: center;
}

#umkm h2 {
    font-size: 2rem;
    margin-bottom: 20px;
    color: #333;
    font-weight: bold;
}

#umkm .card {
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
}

#umkm .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1); /* Bayangan saat hover */
}

#umkm .card-body {
    padding: 20px;
}

#umkm .card-title {
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 10px;
}

#umkm .card-text {
    font-size: 1rem;
    color: #555;
}

#umkm .text-danger {
    font-size: 1.5rem;
    font-weight: bold;
}

#umkm del {
    font-size: 0.9rem;
    color: #999;
}


        .contact {
            padding: 50px 20px;
        }

        .footer2 {
            background: linear-gradient(135deg, #2575fc, #6a11cb);
            color: white;
            padding: 20px;
            text-align: center;
        }
        #Hub {
            color: #f1f1f1;
            background-color: darkslateblue;
            padding: 6px;
            border-radius: 5px;
        }
        footer a {
            color: #333;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
        .footer1 h5 {
            font-weight: bold;
            margin-bottom: 20px;
        }

        .footer1 p {
            line-height: 1.6;
        }

        .footer1 .footer-link {
            color: #dbe3e9;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer1 .footer-link:hover {
            color: #ffffff;
            text-decoration: underline;
        }

        .social-icons a {
            color: #dbe3e9;
            font-size: 1.8rem;
            margin-right: 15px;
            transition: transform 0.3s ease, color 0.3s ease;
        }

        .social-icons a:hover {
            color: #ffffff;
            transform: scale(1.1);
        }

        .text-light {
            color: #dbe3e9 !important;
        }

        .text-light:hover {
            color: #ffffff !important;
        }
        .contact-info {
            font-size: 0.9rem; /* Ukuran teks lebih kecil */
            color: black; /* Warna teks hitam */
            line-height: 1.8; /* Jarak antar baris */
        }
        #testimoni {
    text-align: center;
    background: #f8f9fa;
    padding: 60px 20px;
}

#testimoni h2 {
    font-size: 2rem;
    color: #333;
    margin-bottom: 30px;
}

.testimoni-container {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.testimoni {
    background: white;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    max-width: 300px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.testimoni:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
}

.foto-testimoni {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 15px;
    border: 3px solid #007bff;
}

.testimoni p {
    font-size: 1rem;
    color: #555;
    margin-bottom: 10px;
    font-style: italic;
}

.rating {
    font-size: 1.2rem;
    color: #FFD700;
}

/* Responsif */
@media (max-width: 768px) {
    .testimoni-container {
        flex-direction: column;
        align-items: center;
    }
}
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="logo" href="#">DesignElevate</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li><a href="index.html">Beranda</a></li>
                    <li><a href="#contact">Kontak Kami</a></li>
                </ul>
            </div>
        </div>
        <button class="cta-btn">Get Started</button>
    </nav>

    <h1 id="exampleone">Contoh Lamaran Pertama</h1>

<!------------------------Batas contoh pertama----------------------->
<?php include 'contohLaker/contoh1/index.html'; ?>
<!------------------------Batas akhir contoh pertama----------------------->

<h1 id="exampletwo">Contoh Lamaran Kedua</h1>

<!------------------------Batas contoh Kedua----------------------->
<?php include 'contohLaker/contoh2/index.html'; ?>
<!------------------------Batas akhir contoh Kedua----------------------->

   
<!-- Footer1 -->
<footer id="contact" class="footer1 mt-5 py-4" style="background: none; border-top: 1px solid black; color: #000000;">
    <div class="container">
        <div class="row">
            <!-- Tentang Kami -->
            <div class="col-md-4 mb-4">
                <h5>DesignElevate</h5>
                <p>
                    Apa itu DesignElevate?
                    DesignElevate adalah layanan pembuatan portofolio digital, profil lamaran kerja, dan website profesional 
                    yang dirancang untuk membantu individu maupun bisnis membangun citra yang kuat di dunia digital. Dengan konsep yang mengutamakan 
                    estetika modern dan pengalaman pengguna yang intuitif, DesignElevate berfokus pada desain yang tidak hanya menarik tetapi juga fungsional.
                </p>
                <div class="contact-info">
                    <a href="#" class="contact-item">
                        <i class="bi bi-envelope"></i> DesignElevate
                    </a>
                    <br>
                    <a href="#" class="contact-item">
                        <i class="bi bi-geo-alt"></i> Purwakarta
                    </a>
                </div>                    
            </div>
            <!-- Contact Section -->
            <div class="col-md-4 mb-4">
                <h5 class="footer-title">Hubungi Kami</h5>
                <form class="contact-form" onsubmit="sendToWhatsApp(event)">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" placeholder="Nama Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control" id="message" rows="3" placeholder="Pesan Anda" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-dark w-100">Kirim</button>
                </form>
            </div>
            
            <!-- Ikon Media Sosial -->
            <div class="col-md-4 mb-4 text-md-end">
                <h5>Ikuti Kami</h5>
                <a href="#" class="text-grey me-3" style="font-size: 1.5rem;"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-grey me-3" style="font-size: 1.5rem;"><i class="bi bi-twitter-x"></i></a>
                <a href="#" class="text-grey me-3" style="font-size: 1.5rem;"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-grey me-3" style="font-size: 1.5rem;"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>
</footer>


    <!-- Footer2 -->
    <footer class="footer2">
        <p>&copy; 2025 CS_Team.id Grup. Dibuat dengan cinta untuk UMKM Indonesia. <a href="https://amirsarifudin.github.io/portofolio/" id="Hub">Hubungi Pembuat</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

<script>
    // Nomor WhatsApp tujuan (ganti dengan nomor Anda)
    const whatsappNumber = "6283816490807";

    // Tangani submit form
    document.getElementById("contactForm").addEventListener("submit", function (e) {
        e.preventDefault(); // Mencegah reload halaman

        // Ambil data dari form
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const message = document.getElementById("message").value;

        // Buat URL untuk API WhatsApp
        const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(
            `Halo, saya ${name}.\nEmail: ${email}\nPesan: ${message}`
        )}`;

        // Buka WhatsApp
        window.open(whatsappURL, "_blank");
    });

     // Smooth scrolling for navigation links
document.querySelectorAll('nav a').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const targetId = this.getAttribute('href').substring(1);
    const targetElement = document.getElementById(targetId);
    targetElement.scrollIntoView({ behavior: 'smooth' });
  });
});

// Carousel functionality for testimonials
let currentIndex = 0;
const testimonials = document.querySelectorAll('.testimonial');

function showNextTestimonial() {
  testimonials[currentIndex].style.display = 'none';
  currentIndex = (currentIndex + 1) % testimonials.length;
  testimonials[currentIndex].style.display = 'block';
}

setInterval(showNextTestimonial, 5000); // Change testimonial every 5 seconds

function sendToWhatsApp(event) {
    event.preventDefault(); // Mencegah form dikirim secara default

    // Ambil nilai dari input form
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let message = document.getElementById("message").value;
    
    // Nomor WhatsApp tujuan (ganti dengan nomor yang sesuai)
    let phoneNumber = "6283816490807"; // Format: 62 untuk Indonesia (tanpa +)
    
    // Format pesan WhatsApp
    let whatsappMessage = `Halo, saya *${name}* (%20Email: ${email}%20)\n\n${message}`;

    // Encode URI untuk menghindari karakter aneh
    let encodedMessage = encodeURIComponent(whatsappMessage);
    
    // Buat link WhatsApp
    let whatsappURL = `https://wa.me/${phoneNumber}?text=${encodedMessage}`;

    // Arahkan pengguna ke WhatsApp
    window.open(whatsappURL, "_blank");
}
</script>

</html>
