<?php
namespace App\Http\Controllers;

 
use App\Models\Order;
use App\Models\OrderItem;

use Illuminate\Http\Request;
 
class OrderController extends Controller
{
    public function processOrder(Request $request)
    {
        $request->validate(['user_name' => 'required|string|max:255']);

        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Cart is empty.');
        }

        // Calculate the total price
        $totalPrice = array_reduce($cart, function ($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        }, 0);

        // Save the order in the database
        $order = Order::create(['user_name' => $request->user_name, 'total_price' => $totalPrice]);

        // Save the order items
        foreach ($cart as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'menu_item_name' => $item['name'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }

        // Clear the cart from the session
        session()->forget('cart');

        return redirect()->route('order.success')->with('success', 'Order placed successfully!');
    }

    public function successPage()
    {
        return view('order.success');
    }
}
