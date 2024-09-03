<?php

namespace App\Http\Controllers;

use App\Events\CreateOrderEvent;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class OrderController extends Controller
{
    public function create()
    {
       
        Artisan::call('make:order', ['user_id' => rand(1, 100), 'amount' => rand(10, 1000) ]); //llamada a comandos a través de instaladores, puede ser util para hacer una instalación de nuestra App
       // CreateOrderEvent::dispatch($order); //Crea el evento CreateOrder y por ende se ejecutan todos los listeners asociados.
        return response()->json("Éxito");
    }
}
