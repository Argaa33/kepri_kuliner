<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Riwayat Pemesanan</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: 'Roboto', sans-serif;
      display: flex;
      background-color: #d3e2f5;
    }

    .sidebar {
      width: 70px;
      background-color: #152a5c;
      min-height: 100vh;
      border-top-right-radius: 30px;
      border-bottom-right-radius: 30px;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 2rem 0;
      position: fixed;
      left: 0;
      top: 0;
    } 
    .sidebar i {
      color: black;
      font-size: 1.3rem;
      margin: 1.5rem 0;
      transition: transform 0.2s ease;
    }
    .sidebar i:hover {
      transform: scale(1.2);
      color: white;
    }

    .main {
      margin-left: 90px;
      padding: 2rem;
      width: 100%;
    }

    h1 {
      text-align: center;
      margin-bottom: 2rem;
      color: #2c3e50;
    }

    .timeline {
      position: relative;
      padding-left: 30px;
      border-left: 3px solid #1976d2;
    }

    .timeline-item {
      position: relative;
      background: white;
      margin-bottom: 1.5rem;
      padding: 1rem 1rem 1rem 2rem;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .timeline-item::before {
      content: '';
      position: absolute;
      top: 40px;
      left: -11px;
      width: 16px;
      height: 16px;
      background-color: #1976d2;
      border-radius: 50%;
      border: 2px solid white;
    }

    .order-image {
      width: 70px;
      height: 70px;
      border-radius: 10px;
      object-fit: cover;
    }

    .order-details {
      flex: 1;
    }

    .order-title {
      font-weight: bold;
      font-size: 1.1rem;
      color: #333;
    }

    .order-price {
      color: #666;
      margin-top: 4px;
    }

    .order-status {
      margin-top: 8px;
      display: inline-block;
      padding: 4px 10px;
      border-radius: 20px;
      font-size: 0.85rem;
      color: white;
    }

    .done {
      background-color: #4caf50;
    }

    .pending {
      background-color: #ff9800;
    }

    .btn {
      margin-top: 10px;
      padding: 8px 14px;
      background-color: #1976d2;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #1565c0;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <i class="fas fa-home"></i>
    <i class="fas fa-heart"></i>
    <i class="fas fa-shopping-cart"></i>
    <i class="fas fa-envelope"></i>
    <i class="fas fa-user"></i>
  </div>

  <!-- Main Content -->
  <div class="main">
    <h1>Riwayat Pemesanan</h1>
    <div class="timeline">

      <div class="timeline-item">
        <img class="order-image" src="c:\Users\TECNO\Pictures\mie tarempa.jpg" alt="Mie tarempa">
        <div class="order-details">
          <div class="order-title">Mie tarempa</div>
          <div class="order-price">Rp25.000</div>
          <div class="order-status done">Pesanan Selesai</div>
        </div>
      </div>

      <div class="timeline-item">
        <img class="order-image" src="c:\Users\TECNO\Pictures\gongong.jpg" alt="Gonggong">
        <div class="order-details">
          <div class="order-title">Gonggong</div>
          <div class="order-price">Rp80.000</div>
          <div class="order-status pending">Belum Dinilai</div>
          <button class="btn">Beri Nilai</button>
        </div>
      </div>

      <!-- LAKSA with uploaded image -->
      <div class="timeline-item">
        <img class="order-image" src="c:\Users\TECNO\Pictures\5f850e9c06df8.jpg" alt="Laksa">
        <div class="order-details">
          <div class="order-title">Laksa</div>
          <div class="order-price">Rp28.000</div>
          <div class="order-status done">Pesanan Selesai</div>
        </div>
      </div>

    </div>
  </div>

</body>
</html>
