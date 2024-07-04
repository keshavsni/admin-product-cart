<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }}</title>
    <!-- Include CSS for styling -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
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
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            
            <a href="/" style="color: #fff; text-decoration: none;">MyShop</a>
        </div>
        <div class="cart-icon">
            <i class="fas fa-shopping-cart"></i>
            <span class="cart-count">2</span>
        </div>
    </nav>
    <div class="container">
        <div class="product-detail">
            <div class="product-images">
                
                <div class="product-slider">
                    @php
                            $images = json_decode($product->images);
                    @endphp
                    @foreach($images as $image)
                        <div><img src="{{ Storage::url($image) }}" alt="{{ $product->name }}"></div>
                    @endforeach
                </div>
            </div>
            <div class="product-info">
                <h1>{{ $product->name }}</h1>
                <p>{{ $product->description }}</p>
                <p class="price">${{ $product->price }}</p>
                <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" value="1" min="1" class="quantity-input">
                    <button type="button" class="btn">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Include jQuery and Slick JS for the image slider -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.product-slider').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                adaptiveHeight: true
            });
        });
    </script>
</body>
</html>
