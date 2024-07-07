@extends('main.layout')

@section('title', 'Your Cart')

@section('content')
    <div class="container" id="cart-html">
        
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

<script>

    window.onload = (event) => {
        alert();
        loadCart();
    };


    function loadCart(){
        $.ajax({
                url: "{{ url('load-cart') }}",
                type: "GET",
                dataType: "HTML",
                success:function(res){
                    $("#cart-html").html(res);
                }
            })
    }
    function removeItem(){
        if(confirm('Are you sure you want to remove this item?')){
            $.ajax({
                url: "{{ url('remove-from-cart') }}",
                type: "DELETE",
                dataType: "JSON",
                success:function(res){
                    console.log(res);
                    loadCart();
                }
            })
        }
    }
</script>
