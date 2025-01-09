

<h1>Your Cart</h1>
@if(empty($cart))
    <p>Your cart is empty.</p>
@else
    <table>
        <tr>
            <th>Item</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Actions</th>
        </tr>
        @foreach($cart as $id => $item)
        <tr>
            <td>{{ $item['name'] }}</td>
            <td>${{ $item['price'] }}</td>
            <td>{{ $item['quantity'] }}</td>
            <td>${{ $item['price'] * $item['quantity'] }}</td>
            <td>
                <form action="{{ route('cart.remove', $id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Remove</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <form action="{{ route('cart.clear') }}" method="POST">
        @csrf
        <button type="submit">Clear Cart</button>
    </form>
    <form action="{{ route('order.process') }}" method="POST">
        @csrf
        <label for="user_name">Your Name:</label>
        <input type="text" name="user_name" id="user_name" required>
        <button type="submit">Checkout</button>
    </form>
@endif
