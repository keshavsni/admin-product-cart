@extends('main.layout')

@section('title', 'Your Cart')

@section('content')
    <div class="container">
        <h1>Your Cart</h1>
        @if(session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: '{{ session('success') }}'
                });
            </script>
        @endif

        @if(empty($cartItems))
            <p>Your cart is empty.</p>
        @else
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cartItems as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>${{ number_format($item->price, 2) }}</td>
                            <td>${{ number_format($item->price * $item->quantity, 2) }}</td>
                            <td>
                                <form action="{{ route('cart.remove') }}" method="POST" onsubmit="return confirm('Are you sure you want to remove this item?');">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button type="submit" class="btn-remove">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="cart-total">
                <h3>Total: ${{ number_format(\Cart::getTotal(), 2) }}</h3>
            </div>
        @endif
    </div>

    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .cart-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .cart-table th, .cart-table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }
        .cart-table th {
            background-color: #f8f9fa;
        }
        .btn-remove {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn-remove:hover {
            background-color: #c82333;
        }
        .cart-total {
            text-align: right;
            font-size: 1.2em;
            font-weight: bold;
        }
    </style>

    <!-- Include SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
