<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
                <span class="cart-count">{{ session()->get('cart') ? session()->get('cart')->count() : 0  }}</span>
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
