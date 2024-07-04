<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <!-- Include CSS for styling -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
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
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .alert {
            text-align: center;
            margin-bottom: 20px;
        }
        .product-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-around;
        }
        .product-item {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            width: 100%;
            text-align: center;
        }
        .product-slider img {
            width: 100%;
            height: auto;
        }
        .product-item h2 {
            font-size: 1.5em;
            color: #333;
            margin: 10px 0;
        }
        .product-item p {
            color: #666;
            margin: 10px 20px;
        }
        .product-item .btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin: 20px 0;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .product-item .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Product List</h1>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="product-list">
            @foreach($products as $product)
                <div class="product-item">
                    <a href="{{ route('prdouct.view',$product->id) }}">
                    <div class="product-slider">
                        @php
                            $images = json_decode($product->images);
                        @endphp
                        @foreach($images as $image)
                            <div><img src="{{ Storage::url($image) }}" alt="{{ $product->name }}"></div>
                        @endforeach
                    </div>
                    </a>
                    <h2>{{ $product->name }}</h2>
                    <p>{{ $product->description }}</p>
                    <p>${{ $product->price }}</p>
                   
                        <button type="button" class="btn">Add to Cart</button>
                </div>
            @endforeach
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
