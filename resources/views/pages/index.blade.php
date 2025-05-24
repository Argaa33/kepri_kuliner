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
            justify-content: center;
            margin: 20px;
        }
        .search-bar input {
            width: 300px;
            padding: 10px;
            border-radius: 20px;
            border: 1px solid #ccc;
        }
        .menu-popular {
            text-align: center;
            padding: 20px;
        }
        .menu-popular h2 {
            margin-bottom: 10px;
        }
        .menu-items {
            display: flex;
            justify-content: center;
            gap: 20px;
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
        <a href="#">Menu</a>
        <a href="#">Tentang Kami</a>
        <a href="#">Order</a>
        <a href="#">Kontak</a>
    </nav>
    <button class="login-button">Login</button>
</header>

<div class="search-bar">
    <input type="text" placeholder="Search...">
</div>

<div class="menu-popular">
    <h2>Menu Populer</h2>
    <p>Best Seller</p>
    <div class="menu-items">
        <div class="menu-item">
            <img src="{{ asset('images/laksa.jpg') }}" alt="Laksa">
            <h3>Laksa</h3>
            <p>Rp. 45.000</p>
            <div class="rating">★★★★☆</div>
            <a href="#" class="buy-button">Beli Sekarang</a>
        </div>
        <div class="menu-item">
            <img src="{{ asset('images/mie_tarempa.jpg') }}" alt="Mie Tarempa">
            <h3>Mie Tarempa</h3>
            <p>Rp. 25.000</p>
            <div class="rating">★★★★☆</div>
            <a href="#" class="buy-button">Beli Sekarang</a>
        </div>
        <div class="menu-item">
            <img src="{{ asset('images/otak_otak.jpg') }}" alt="Otak-otak">
            <h3>Otak-otak</h3>
            <p>Rp. 15.000</p>
            <div class="rating">★★★★☆</div>
            <a href="#" class="buy-button">Beli Sekarang</a>
        </div>
    </div>
</div>

</body>
</html>
