<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller
{
    public function index(){
        $shops = Shop::get()->toTree();
        return view('shop', compact('shops'));
    }
}
