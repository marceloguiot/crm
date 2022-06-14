<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $count_emple = DB::table('empleados')->count();
        $count_comp = DB::table('companies')->count();


        return view('home',['count_comp' => $count_comp, 'count_emple' =>$count_emple]);
    }
}
