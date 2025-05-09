<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Pemesanan</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #cbd8ec; /* Biru muda */
        }

        .sidebar {
            width: 70px;
            background-color: #102455;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            border-top-right-radius: 30px;
            border-bottom-right-radius: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
        }

        .sidebar i {
            margin: 20px 0;
            color: black;
            font-size: 20px;
        }

        .container {
            margin-left: 100px;
            padding: 30px;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .order {
            display: flex;
            align-items: center;
            background-color: #fff;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }

        .order img {
            width: 60px;
            height: 60px;
            margin-right: 20px;
            background-color: #ccc;
        }

        .order-info {
            flex-grow: 1;
        }

        .order-info h4 {
            margin: 0;
        }

        .order-info p {
            margin: 5px 0 0;
        }

        .order button {
            padding: 8px 12px;
            background-color: #555;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .pesan-btn {
            width: 100%;
            text-align: center;
            margin-top: 30px;
        }

        .pesan-btn button {
            padding: 12px 24px;
            font-weight: bold;
            background-color: white;
            border: 2px solid #555;
            border-radius: 8px;
            cursor: pointer;
        }

    </style>
</head>
<body>

<div class="sidebar">
    <i>🏠</i>
    <i>❤️</i>
    <i>🛒</i>
    <i>✉️</i>
    <i>👤</i>
</div>

<div class="container">
    <div class="title">RIWAYAT PEMESANAN</div>

    <?php
    $orders = [
        ['name' => 'Gudeg', 'price' => 'Rp.30.000', 'status' => 'Beri Nilai'],
        ['name' => 'Gudeg', 'price' => 'Rp.30.000', 'status' => 'Beri Nilai'],
        ['name' => 'Gudeg', 'price' => 'Rp.30.000', 'status' => 'Pesanan Selesai'],
        ['name' => 'Gudeg', 'price' => 'Rp.30.000', 'status' => 'Pesanan Selesai']
    ];

    foreach ($orders as $order) {
        echo '<div class="order">';
        echo '<img src="https://via.placeholder.com/60" alt="makanan">';
        echo '<div class="order-info">';
        echo '<h4>' . $order['name'] . '</h4>';
        echo '<p>' . $order['price'] . '</p>';
        echo '</div>';
        echo '<button>' . $order['status'] . '</button>';
        echo '</div>';
    }
    ?>

    <div class="pesan-btn">
        <button>PESAN SEKARANG</button>
    </div>
</div>

</body>
</html>
