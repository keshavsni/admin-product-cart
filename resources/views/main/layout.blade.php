<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .product-detail {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .product-images {
            flex: 1;
            min-width: 300px;
        }
        .product-info {
            flex: 2;
            min-width: 300px;
        }
        .product-slider img {
            width: 100%;
            height: auto;
        }
        .product-info h1 {
            font-size: 2em;
            color: #333;
            margin-bottom: 20px;
        }
        .product-info p {
            color: #666;
            margin-bottom: 20px;
        }
        .product-info .price {
            font-size: 1.5em;
            color: #007bff;
            margin-bottom: 20px;
        }
        .product-info .btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .product-info .btn:hover {
            background-color: #0056b3;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
        }
        .cart-icon {
            position: relative;
            font-size: 1.5em;
            color: #fff;
            cursor: pointer;
        }
        .cart-icon .cart-count {
            position: absolute;
            top: -10px;
            right: -10px;
            background-color: red;
            color: #fff;
            border-radius: 50%;
            padding: 2px 6px;
            font-size: 0.8em;
        }
        .checkout-button {
            text-align: right;
            margin-top: 20px;
        }
        .btn-checkout {
            background-color: #28a745;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn-checkout:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <a href="/" style="color: #fff; text-decoration: none;">MyShop</a>
        </div>
        <div class="cart-icon">
            <a href="{{ route('cart.index') }}" style="color: #fff;">
                <i class="fas fa-shopping-cart"></i>
                <span class="cart-count">{{ session()->get('cart') ? count(session()->get('cart')) : 0  }}</span>
            </a>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('scripts')
</body>
</html>
