<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Payment;
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

            'cartDetails.card_name.required' => 'The card holder name is required.',
            'cartDetails.card_number.required' => 'The card number is required.',
            'cartDetails.expire.required' => 'The card expire is required.',
            'cartDetails.cvc.required' => 'The card cvc is required.',
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

            'paymentInfo.card_name' => 'required|string',
            'paymentInfo.card_number' => 'required|string',
            'paymentInfo.expire' => 'required|string',
            'paymentInfo.cvc' => 'required|string',


        ], $customMessages);

        // Insert data into the database tables

        $cartItems = $request->input('cartItems');
        
        $userId = $request->input('userId');

        $order = Order::create([
            'user_id' => $userId,
        ]);

        $shippingCost = 5;
        foreach ($cartItems as $cartItem) {
            $total = $cartItem['price'] * $cartItem['qty'];
            $taxRate = $total * 0.1;
            $totalPrice = $total + $taxRate + $shippingCost;
             Cart::create([
                'order_id' => $order->id,
                'item_id' => $cartItem['id'],
                'item_name' => $cartItem['name'],
                'price' => $cartItem['price'],
                'qty' => $cartItem['qty'],
                'total' => $totalPrice
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
        // Insert payment deatails in databse
        $paymentInfo = $request->input('paymentInfo');
        Payment::create([
            'order_id' => $order->id,
            'card_name' => $paymentInfo['card_name'],
            'card_number' => $paymentInfo['card_number'],
            'expire' => $paymentInfo['expire'],
            // Other fields for city, zip code, country, etc.
        ]);

        
        return response()->json(['message' => 'Checkout completed successfully']);
    }
}
