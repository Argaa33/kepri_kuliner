<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        body {
            background-color: #ffebee;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 1100px;
            display: flex;
            overflow: hidden;
        }
        .cart-section {
            flex: 3;
            padding: 40px;
            border-right: 1px solid #f0f0f0;
        }
        .payment-section {
            flex: 2;
            padding: 40px;
        }
        h1 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 30px;
            color: #333;
        }
        h2 {
            font-size: 20px;
            margin-bottom: 20px;
            color: #333;
        }
        .product-list {
            margin-bottom: 30px;
        }
        .product-item {
            display: flex;
            align-items: center;
            padding: 15px 0;
            position: relative;
            border-bottom: 1px solid #f0f0f0;
        }
        .remove-item {
            position: absolute;
            top: 15px;
            left: 0;
            color: #ccc;
            font-size: 18px;
            cursor: pointer;
        }
        .product-image {
            width: 80px;
            height: 80px;
            border-radius: 4px;
            overflow: hidden;
            margin: 0 15px;
        }
        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .product-details {
            flex: 2;
        }
        .product-name {
            font-weight: bold;
            font-size: 16px;
            margin-bottom: 5px;
        }
        .product-size {
            color: #888;
            font-size: 14px;
        }
        .product-price {
            flex: 1;
            text-align: right;
        }
        .original-price {
            text-decoration: line-through;
            color: #888;
            font-size: 14px;
        }
        .current-price {
            font-weight: bold;
            font-size: 16px;
        }
        .quantity-control {
            display: flex;
            align-items: center;
            justify-content: center;
            flex: 1;
        }
        .quantity-btn {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            border: 1px solid #ddd;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 16px;
        }
        .quantity-btn.minus {
            color: #888;
        }
        .quantity-btn.plus {
            background-color: #ff4081;
            color: white;
            border: none;
        }
        .quantity {
            margin: 0 10px;
            font-weight: bold;
            width: 30px;
            text-align: center;
        }
        .discount {
            flex: 1;
            text-align: right;
            color: #ff4081;
            font-weight: bold;
        }
        .subtotal-section {
            margin-top: 30px;
        }
        .subtotal-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }
        .subtotal-label {
            font-size: 16px;
            color: #333;
        }
        .subtotal-value {
            font-size: 16px;
            font-weight: bold;
        }
        .total-payment {
            background-color: #f9f9f9;
            padding: 25px;
            border-radius: 10px;
            margin-top: 30px;
        }
        .total-row {
            display: flex;
            justify-content: space-between;
        }
        .total-label {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
        .total-value {
            font-size: 18px;
            font-weight: bold;
            color: #ff4081;
        }
        .input-field {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 15px;
            font-size: 14px;
        }
        .voucher-section {
            margin-bottom: 25px;
        }
        .voucher-label {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .voucher-text {
            font-size: 16px;
            color: #333;
        }
        .voucher-promo {
            font-size: 12px;
            color: #ff4081;
            background-color: #ffebee;
            padding: 4px 8px;
            border-radius: 4px;
        }
        .shipping-options {
            margin-bottom: 25px;
        }
        .shipping-carriers {
            display: flex;
            gap: 15px;
            margin-top: 10px;
        }
        .carrier {
            max-width: 70px;
            max-height: 30px;
        }
        .payment-options {
            margin-bottom: 25px;
        }
        .payment-methods {
            display: flex;
            gap: 15px;
            margin-top: 10px;
        }
        .payment-method {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 8px 15px;
            max-width: 100px;
            max-height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .payment-method img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }
        .message-section {
            margin-bottom: 25px;
        }
        .message-input {
            width: 100%;
            height: 80px;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            resize: none;
            font-size: 14px;
        }
        .order-button {
            width: 100%;
            padding: 15px;
            background-color: #ff4081;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .order-button:hover {
            background-color: #e91e63;
        }
        @media (max-width: 900px) {
            .container {
                flex-direction: column;
            }
            .cart-section {
                border-right: none;
                border-bottom: 1px solid #f0f0f0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="cart-section">
            <h1>Keranjang Belanja</h1>
            <div class="product-list">
                <div class="product-item">
                    <span class="remove-item">×</span>
                    <div class="product-image">
                        <img src="{{ asset('images/lendir.jpeg') }}" alt="Mie Lendir">
                    </div>
                    <div class="product-details">
                        <div class="product-name">Mie Lendir</div>

                    </div>
                    <div class="product-price">
                        <div class="current-price">Rp. 50.000</div>
                    </div>
                    <div class="quantity-control">
                        <div class="quantity-btn plus">+</div>
                        <div class="quantity">1</div>
                        <div class="quantity-btn minus">−</div>
                    </div>
                </div>
                <div class="product-item">
                    <span class="remove-item">×</span>
                    <div class="product-image">
                        <img src="{{ asset('images/tarempa.jpg') }}" alt="Mie Tarempa">
                    </div>
                    <div class="product-details">
                        <div class="product-name">Mie Tarempa</div>
                    </div>
                    <div class="product-price">
                        <div class="current-price">Rp. 80.000</div>
                    </div>
                    <div class="quantity-control">
                        <div class="quantity-btn plus">+</div>
                        <div class="quantity">2</div>
                        <div class="quantity-btn minus">−</div>
                    </div>
                </div>
                <div class="product-item">
                    <span class="remove-item">×</span>
                    <div class="product-image">
                        <img src="{{ asset('images/laksa.png') }}" alt="Laksa">
                    </div>
                    <div class="product-details">
                        <div class="product-name">laksa</div>
                    </div>
                    <div class="product-price">
                        <div class="current-price">Rp. 20.000</div>
                    </div>
                    <div class="quantity-control">
                        <div class="quantity-btn plus">+</div>
                        <div class="quantity">1</div>
                        <div class="quantity-btn minus">−</div>
                    </div>
                </div>
                </div>
            <div class="subtotal-section">
                <div class="subtotal-row">
                    <div class="subtotal-label">Subtotal Untuk Produk:</div>
                    <div class="subtotal-value">Rp. 170.000</div>
                </div>
                <div class="subtotal-row">
                    <div class="subtotal-label">Subtotal Pengiriman:</div>
                    <div class="subtotal-value">Rp.10.000</div>
                </div>
            </div>
            <div class="total-payment">
                <div class="total-row">
                    <div class="total-label">Total Pembayaran</div>
                    <div class="total-value">Rp. 180.000</div>
                </div>
            </div>
        </div>
    <script>
        // Simple functionality for quantity buttons
        document.querySelectorAll('.quantity-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const quantityElement = this.parentElement.querySelector('.quantity');
                let quantity = parseInt(quantityElement.textContent);

                if (this.classList.contains('plus')) {
                    quantity++;
                } else if (this.classList.contains('minus') && quantity > 1) {
                    quantity--;
                }

                quantityElement.textContent = quantity;
            });
        });

        // Remove item functionality
        document.querySelectorAll('.remove-item').forEach(btn => {
            btn.addEventListener('click', function() {
                this.closest('.product-item').remove();
            });
        });
    </script>
        <div class="payment-section">
            <h2>Pesan Khusus</h2>
            <textarea class="message-input" placeholder="Tulis pesan khusus untuk penjual"></textarea>
            <button class="order-button">Pesan Sekarang</button>
        </div>
</body>
</html>
