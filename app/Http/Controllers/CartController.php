<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        $updatedcart = session()->get('cart', []);

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
        session()->put('cart', $updatedcart);
        session()->save(); // Force save if needed


        return redirect()->route('menu');
    }

    public function viewCart()
    {
        $cart = session()->get('cart', []);
        return view('edu-global.cart.index', compact('cart'));
    }

    public function update(Request $request)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$request->id])) {
            $cart[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
            Log::info($cart);


        }
        return response()->json(['success' => true]);
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);
        unset($cart[$id]);
        session()->put('cart', $cart);
        return response()->json(['success' => true]);
    }

    public function clear()
    {
        session()->forget('cart');
        return response()->json(['success' => true]);
    }


}
