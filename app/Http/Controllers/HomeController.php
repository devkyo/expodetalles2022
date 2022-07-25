<?php

namespace App\Http\Controllers;

use App\Models\Visitante;
use App\Models\expo2022;

use Illuminate\Http\Request;

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
        $visitantes = Visitante::all();
        return view('home',compact('visitantes'));
        // return dd($visitantes);
        
    }
}
