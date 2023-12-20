<?php

namespace App\Http\Controllers;

use App\Models\clients;
use App\Models\projects;
use App\Models\ProjectPhases;
use App\Models\ProjectFloorplans;
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

    public function GetData ($idProject){
        $projectPhases=ProjectPhases::select('id','date_initiate','url_matterport','phase_name')->where('project_id','=',$idProject)->get();
        $Floorplans=ProjectFloorplans::select('id','url_floorplan','floor_label','name')->where('project_id','=',$idProject)->get();

        return json_encode(['success' => true,'projectPhases' =>$projectPhases, 'Floorplans'=>$Floorplans]);
    }
}
