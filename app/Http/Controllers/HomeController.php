<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{kelahiran, domisili};

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
        $lahir = kelahiran::all();
        $dom = domisili::all();

        $total_domisili =  count($dom);
        $total_lahir = count($lahir);
        return view('home', compact('total_lahir','total_domisili'));
    }
}
