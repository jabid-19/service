<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


//        $orders = Order::orderBy('id', 'desc')->get();

//        $user = User::where('id', Auth::id())->latest()
//            ->get();



        if(Auth::user()->flag == 0){
            $orders = Order::where('user_id', Auth::id())
                ->latest()
                ->get();
            return view('home', compact('orders'));
        }
        else{
            $orders = Order::all();
            return view('admin-home', compact('orders'));
        }

    }
}
