<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;


class FoodController extends Controller
{
    function food(){
        return view('food');
    }
    function add_food(){
        $food=new Food;
        $food->image=request()->file('image')->store('public/images');
        $food->foodname=request('foodname');
        $food->description=request('description');
        $food->price=request('price');
        $food->save();
        return redirect('menu.php');
    }
    function update_food(){
        $food=Food::find($id);
        $food->foodname=request('foodname');
        $food->description=request('description');
        $food->price=request('price');
        $food->save();
    }
    function delete_food(){
        $food=Food::find($id);
        $car->delete();
    }
}

