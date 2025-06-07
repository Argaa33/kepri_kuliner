<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tentang Kami - KulineRiau</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-image: url('/images/tentang-kami.jpeg'); /* Letakkan file gambar kamu di public/images/about-bg.png */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: #111;
            padding-top: 70px;
        }

        .navbar {
            background-color: #102048;
            color: white;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 999;
        }

        .navbar h1 {
            font-size: 24px;
            font-weight: 700;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 600;
        }

        .login-button {
            background-color: white;
            color: #102048;
            padding: 8px 20px;
            border-radius: 9999px;
            font-weight: bold;
            text-decoration: none;
        }

        .content {
            max-width: 900px;
            margin: 100px auto;
            padding: 40px;
            background-color: rgba(255, 255, 255, 0.85);
            border-radius: 12px;
        }

        .content p {
            font-size: 18px;
            line-height: 1.7;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <h1>KulineRiau</h1>
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#">Menu</a>
            <a href="#">Tentang Kami</a>
            <a href="#">Order</a>
            <a href="#">Kontak</a>
            <a href="#" class="login-button">Login</a>
        </div>
    </div>

    <div class="content">
        <p>
            Selamat datang di KulineRasa, tempat terbaik untuk mengeksplorasi dan menikmati berbagai sajian kuliner khas Kepulauan Riau! Kami hadir untuk memperkenalkan kelezatan dan kekayaan rasa yang menjadi ciri khas dari daerah yang kaya akan budaya dan tradisi ini.
        </p>
        <p>
            Kepulauan Riau, dengan pesona alamnya yang memukau, juga memiliki ragam kuliner yang tak kalah memikat. Dari cita rasa manis, pedas, hingga gurih, setiap hidangan yang kami sajikan menggambarkan kekayaan sejarah dan kebudayaan lokal yang telah turun-temurun dijaga. Kami berkomitmen untuk menyajikan hidangan dengan bahan-bahan pilihan dan resep otentik, yang diolah dengan penuh cinta dan keahlian.
        </p>
    </div>

</body>
</html>
