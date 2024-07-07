@extends('main.layout')

@section('title', 'Checkout')

@section('content')
    <div class="container">
        <h1>Checkout</h1>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('checkout.process') }}" method="POST">
            @csrf
            <div class="form-section">
                <h2>Billing Details</h2>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" class="form-control" value="{{ old('address') }}" required>
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" class="form-control" value="{{ old('city') }}" required>
                </div>
                <div class="form-group">
                    <label for="state">State</label>
                    <input type="text" id="state" name="state" class="form-control" value="{{ old('state') }}" required>
                </div>
                <div class="form-group">
                    <label for="zipcode">Zip Code</label>
                    <input type="text" id="zipcode" name="zipcode" class="form-control" value="{{ old('zipcode') }}" required>
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" id="country" name="country" class="form-control" value="{{ old('country') }}" required>
                </div>
            </div>

            <div class="form-section">
                <h2>Your Order</h2>
                <table class="order-summary">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cartItems as $item)
                            <tr>
                                <td>{{ $item['name'] }} x {{ $item['quantity'] }}</td>
                                <td>${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td><strong>Total</strong></td>
                            <td><strong>${{ number_format($total, 2) }}</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="form-section">
                <button type="submit" class="btn-checkout">Place Order</button>
            </div>
        </form>
    </div>

    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-section {
            margin-bottom: 20px;
        }
        .form-section h2 {
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .order-summary {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .order-summary th, .order-summary td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        .order-summary th {
            background-color: #f8f9fa;
        }
        .btn-checkout {
            background-color: #28a745;
            color: #fff;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.2em;
            text-align: center;
            display: block;
            width: 100%;
            transition: background-color 0.3s ease;
        }
        .btn-checkout:hover {
            background-color: #218838;
        }
        .alert {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #d6d8db;
            border-radius: 5px;
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
@endsection
