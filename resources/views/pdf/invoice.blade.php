<!DOCTYPE html>
<html>

<head>
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
        }

        .section {
            margin-bottom: 20px;
        }

        h1,
        h3 {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>



    <h1>INVOICE</h1>

    <div class="section">
        <strong>ALUA Jewels</strong><br>
        16/w, CSI Church Street, Coimbatore<br>
        Phone: 8270241319
    </div>

    <div class="section">
        <h3>Customer Details</h3>
        <p>Name: {{ $addresses->name }}</p>
        <p>Email: {{ $addresses->email }}</p>
        <p>Phone: {{ $addresses->phone_number }}</p>
        <p>Address: {{ $addresses->address }}</p>
        <p>Pin Code: {{ $addresses->pincode }}</p>
        <p>Payment Type: {{ $addresses->payment_type }}</p>
    </div>

    <div class="section">
        <h3>Items</h3>
        @foreach ($cartContent as $item)
        <p>{{ $item->orderUser }} (Qty: {{ $item->Gender }}) -{{ number_format($item->OrderPrice, 2) }}</p>
        @endforeach
    </div>

    <div class="section">
        <h3>Total: {{ number_format($finalDiscount, 2) }}</h3>
    </div>

    <div class="section">
        <p><em>“Crafted with care, chosen by you. Thank you for your trust in our craftsmanship may your new piece bring you lasting joy.”</em></p>
    </div>
    <div class="section">
        <h5 style="color: green; text-align: center;">We’re preparing your order with care! Your jewels will be arriving at your doorstep very soon</h5>
    </div>
</body>

</html>
