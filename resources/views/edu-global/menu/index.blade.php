<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <h1>Restaurant Menu</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1" style="width: 100%; text-align: left;">
        <thead>
            <tr>
                <th>Item</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($menuItems as $menuItem)
            <tr>
                <td>{{ $menuItem->name }}</td>
                <td>{{ $menuItem->description }}</td>
                <td>${{ $menuItem->price }}</td>
                <td>
                    <form action="{{ route('cart.add') }}" method="POST" style="display: inline;">
                        @csrf
                        <input type="hidden" name="menu_item_id" value="{{ $menuItem->id }}">
                        <input type="number" name="quantity" value="1" min="1" required>
                        <button type="submit">Add to Cart</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <br>
    <a href="{{ route('cart.index') }}">View Cart</a>
</body>
</html>
