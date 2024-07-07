<h1>Your Cart</h1>

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
                    @php
                        $grandTotal = 0;
                    @endphp
                    @foreach($cartItems as $item)
                    @php
                        $grandTotal += $item['price'] * $item['quantity'];
                    @endphp
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['quantity'] }}</td>
                            <td>${{ number_format($item['price'], 2) }}</td>
                            <td>${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                            <td>
                                    <a href="javascript:void(0)" onclick="removeItem()" class="btn-remove">Remove</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="cart-total">
                <h3>Total: ${{ number_format($grandTotal, 2) }}</h3>
            </div>
            <div class="checkout-button">
                <a href="{{ route('checkout.index') }}" class="btn-checkout">Proceed to Checkout</a>
            </div>
        @endif