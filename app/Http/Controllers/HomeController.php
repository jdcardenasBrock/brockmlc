<?php

namespace App\Http\Controllers;

use App\Models\clients;
use App\Models\projects;
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
        if (Auth::check()) {
            // Obtener el usuario autenticado
            $usuario = Auth::user();
            $a=$usuario->hasRole('Client');

            if($a){
                $client_id=clients::select('id')->where('rel_user','=',$usuario->id)->first();
                $projects=projects::where('client_id','=',$client_id->id)->get();


                return view('home_client',compact('client_id','projects'));
            }else{
                return view('home');
            }

           
        }
    }
}
