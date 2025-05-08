<?php

namespace App\Http\Controllers;

use App\Models\Order; // Assuming you have an Order model
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show($orderId)
    {
        $order = Order::findOrFail($orderId); // Fetch order details
        return view('order.show', compact('order')); // Pass data to the view
    }
}