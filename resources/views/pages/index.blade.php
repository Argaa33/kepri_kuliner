<!-- resources/views/home_page.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KulineRiau</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('{{ asset('images/barelang.jpg') }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        header {
            background-color: #1E2A78;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
        }

        .login-button {
            background-color: white;
            color: #1E2A78;
            border: none;
            padding: 5px 15px;
            border-radius: 20px;
        }

        .search-bar {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 30px auto;
            max-width: 400px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 30px;
            padding: 8px 16px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .search-bar img {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }

        .search-bar input {
            border: none;
            outline: none;
            background: transparent;
            font-size: 16px;
            flex: 1;
            color: #333;
        }

        .menu-popular {
            text-align: center;
            padding: 20px;
            color: white;
        }

        .menu-popular h2 {
            margin-bottom: 10px;
        }

        .menu-items {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .menu-item {
            background-color: #1E2A78;
            color: white;
            border-radius: 15px;
            padding: 10px;
            width: 200px;
            text-align: center;
        }

        .menu-item img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }

        .buy-button {
            background-color: #FFD700;
            color: black;
            padding: 5px 10px;
            border-radius: 10px;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }

        .rating {
            color: yellow;
        }
    </style>
</head>
<body>

<header>
    <div class="logo"><strong>KulineRiau</strong></div>
    <nav>
        <a href="#">Home</a>
        <a href="menu">Menu</a>
        <a href="about">Tentang Kami</a>
        <a href="order">Order</a>
        <a href="kontak">Kontak</a>
        <a href="history">History</a>
    </nav>
    <button class="login-button" onclick="window.location.href='login'">Login</button>
</header>

<div class="search-bar">
    <input type="text" placeholder="Search...">
</div>

<div class="menu-popular">
    <h2>Menu Populer</h2>
    <p>Best Seller</p>
    <div class="menu-items">
        <div class="menu-item">
            <img src="{{ asset('images/laksa.png') }}" alt="Laksa">
            <h3>Laksa</h3>
            <p>Rp. 45.000</p>
            <div class="rating">★★★★☆</div>
            <a href="#" class="buy-button">Beli Sekarang</a>
        </div>
        <div class="menu-item">
            <img src="{{ asset('images/tarempa.jpg') }}" alt="Mie Tarempa">
            <h3>Mie Tarempa</h3>
            <p>Rp. 25.000</p>
            <div class="rating">★★★★☆</div>
            <a href="#" class="buy-button">Beli Sekarang</a>
        </div>
        <div class="menu-item">
            <img src="{{ asset('images/otak-otak.jpeg') }}" alt="Otak-otak">
            <h3>Otak-otak</h3>
            <p>Rp. 15.000</p>
            <div class="rating">★★★★☆</div>
            <a href="#" class="buy-button">Beli Sekarang</a>
        </div>
    </div>
</div>

</body>
</html>
