<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\ShippingAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function checkout(Request $request)
    {
        // Define custom error messages for validation
        $customMessages = [
            'cartItems.required' => 'The cart items are required.',
            'cartItems.*.qty.min' => 'The cart item quantity min at least 1.',

            'cartItems.*.name.required' => 'The cart item name required.',

            'cartItems.*.price.required' => 'The cart item price required.',

            'shippingAddress.name.required' => 'The shipping address name is required.',
            'shippingAddress.address.required' => 'The shipping address is required.',
            'shippingAddress.email.required' => 'The shipping address email is required.',
            // Add custom messages for other fields if needed
        ];

        // Validate the incoming data
        $request->validate([
            'cartItems' => 'required|array|min:1',
            'cartItems.*.id' => 'required|string',
            'cartItems.*.name' => 'required|string',
            'cartItems.*.price' => 'required|numeric',
            'cartItems.*.photo' => 'required|string',
            'cartItems.*.qty' => 'required|integer|min:1',

            'shippingAddress.name' => 'required|string',
            'shippingAddress.email' => 'required|email',
            'shippingAddress.address' => 'required|string',
        ], $customMessages);

        // Insert data into the database tables
        $cartItems = $request->input('cartItems');
        $userId = $request->input('userId');

        foreach ($cartItems as $cartItem) {
            $order = Order::create([
                'user_id' => $userId,
                'item_id' => $cartItem['id'],
                'item_name' => $cartItem['name'],
                'price' => $cartItem['price'],
                'qty' => $cartItem['qty'],
            ]);
        }

        // Insert shipping address into the 'shipping_addresses' table
        $shippingAddressData = $request->input('shippingAddress');
        ShippingAddress::create([
            'order_id' => $order->id,
            'name' => $shippingAddressData['name'],
            'email' => $shippingAddressData['email'],
            'address' => $shippingAddressData['address'],
            // Other fields for city, zip code, country, etc.
        ]);

        // return $request;
        return response()->json(['message' => 'Checkout completed successfully']);
    }
}
