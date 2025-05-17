<h1>Hi {{ $orderData['name'] }},</h1>

<p>Thanks for your order! Here are your order details:</p>

<ul>
    @foreach ($orderData['items'] as $item)
    <li>{{ $item['name'] }} (x{{ $item['qty'] }}) - ₹{{ $item['price'] }}</li>
    @endforeach
</ul>

<p><strong>Total: ₹{{ $orderData['total'] }}</strong></p>

<p>Your order will be shipped soon!</p>