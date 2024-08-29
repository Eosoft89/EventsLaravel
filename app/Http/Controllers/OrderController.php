<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create()
    {
        Order::create([
            'user_id' => 1,
            'amount' => 25
        ]);
    }
}
