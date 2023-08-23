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
            $taxRate = $total * 0.1 / 100;
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

    public function orders()
    {
        $orders = Order::with('user')->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('layouts.order.index')->with(['orders' => $orders]);
    }


    public function pending_orders()
    {
        $orders = Order::with('user')
            ->where('status', 'pending')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('layouts.order.pending-order')->with(['orders' => $orders]);
    }

    public function view_order($id)
    {
        $order = Order::with('user', 'carts.food')->where('id', $id)->first();

        // return $order;
        return view('layouts.order.view-order')->with(['order' => $order]);
    }

    public function change_status($id, $status)
    {
        $order = Order::find($id);
        if (!$order) {
            return response()->json(['message' => 'Model not found'], 404);
        }
        $order->update(['status' => $status]);

        return response()->json(['message' => 'Status updated successfully']);
    }

    public function delete_order($id)
    {
        $order = Order::find($id);

        if (!$order) {
            return redirect()->back()->with('error', 'Record not found');
        }

        $order->carts()->delete();
        $order->payments()->delete();
        $order->shipping_addresses()->delete();

        // Delete the record
        $order->delete();

        return redirect()->back()->with('message', 'Order deleted successfully');
    }

    public function myaccount()
    {

        $user = Auth::user();
        $orders = Order::with('user')
            ->where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        // return $orders;

        return view('layouts.frontend.pages.myorders')->with(['orders' => $orders]);
    }

    public function customer_view_order($id)
    {
        $user = Auth::user();
        $order = Order::with('user', 'carts.food')
            ->where('id', $id)
            ->where('user_id', $user->id)
            ->first();

        // return $order;
        return view('layouts.frontend.pages.myorder')->with(['order' => $order]);
    }
}
