<?php

namespace App\Http\Controllers;
use App\Models\Orders;

use Illuminate\Http\Request;

class ordersController extends Controller
{
    function show_orders(){
        $order=Orders::all();
    }
}
