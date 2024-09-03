<?php

namespace App\Http\Controllers;

use App\Events\CreateOrderEvent;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create()
    {
        $order = Order::create([
            'user_id' => 1,
            'amount' => 25
        ]);

       // CreateOrderEvent::dispatch($order); //Crea el evento CreateOrder y por ende se ejecutan todos los listeners asociados.

        return response()->json("Éxito");
    }
}
