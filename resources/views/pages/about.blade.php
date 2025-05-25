<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tentang Kami - KulineRiau</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background: url('{{ asset('storage/background.jpg') }}') no-repeat center center fixed;
            background-size: cover;
        }
        header {
            background-color: #1c1c3f;
            padding: 15px 30px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .logo {
            font-size: 28px;
            font-weight: bold;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }
        .login-button {
            background: white;
            color: #1c1c3f;
            padding: 8px 20px;
            border-radius: 50px;
            font-weight: bold;
        }
        .content {
            max-width: 900px;
            margin: 60px auto;
            background: rgba(255,255,255,0.7);
            padding: 40px;
            border-radius: 20px;
        }
        .content p {
            font-size: 18px;
            line-height: 1.8;
            color: #1c1c1c;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">KulineRiau</div>
    <nav>
        <a href="/index">Home</a>
        <a href="/menu">Menu</a>
        <a href="/about">Tentang Kami</a>
        <a href="/order">Order</a>
        <a href="/kontak">Kontak</a>
        <a href="/login" class="login-button">Login</a>
    </nav>
</header>

<div class="content">
    <p>Selamat datang di KulineRasa, tempat terbaik untuk mengeksplorasi dan menikmati berbagai sajian kuliner khas Kepulauan Riau! Kami hadir untuk 
        memperkenalkan kelezatan dan kekayaan rasa yang menjadi ciri khas dari daerah yang kaya akan budaya dan tradisi ini.</p>
    
    <p>Kepulauan Riau, dengan pesona alamnya yang memukau, juga memiliki ragam kuliner yang tak kalah memikat. Dari cita rasa manis, pedas, 
        hingga gurih, setiap hidangan yang kami sajikan menggambarkan kekayaan sejarah dan kebudayaan lokal yang telah turun-temurun dijaga. 
        Kami berkomitmen untuk menyajikan hidangan dengan bahan-bahan pilihan dan resep otentik, yang diolah dengan penuh cinta dan keahlian.</p>
</div>

</body>
</html>
