<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $request->validate([
            'menu_item_id' => 'required|exists:menu_items,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $menuItem = MenuItem::findOrFail($request->menu_item_id);

        // Retrieve the cart from session or initialize it
        $cart = session()->get('cart', []);

        // Update the quantity if the item already exists in the cart
        if (isset($cart[$menuItem->id])) {
            $cart[$menuItem->id]['quantity'] += $request->quantity;
        } else {
            $cart[$menuItem->id] = [
                'name' => $menuItem->name,
                'price' => $menuItem->price,
                'quantity' => $request->quantity,
            ];
        }

        // Save the cart to the session
        session()->put('cart', $cart);

        return response()->json(['message' => 'Item added to cart!', 'cart' => $cart]);
    }

    public function viewCart()
    {
        $cart = session()->get('cart', []);
        return view('edu-global.cart.index', compact('cart'));
    }

    public function removeFromCart($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Item removed from cart.');
    }

    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->route('cart.index')->with('success', 'Cart cleared.');
    }
}
