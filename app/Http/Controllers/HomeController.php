<?php

namespace App\Http\Controllers;

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
        $usuario = Auth::user();
        return view('cards',compact('usuario'));
    }

    public function admin()
    {
        return view('home');
    }

    public function prohund(){
        if (Auth::check()) {
            // Obtener el usuario autenticado
            $usuario = Auth::user();
            $isSuperAdmin=$usuario->hasRole('SuperAdmin');
            $isAdmin=$usuario->hasRole('Admin');
            if($isSuperAdmin || $isAdmin ){
                    $projects=projects::all();
                return view('home_client',compact('projects'));
            }else{
                $projects=projects::where('user_id','=',$usuario->id)->get();
                
                return view('home_client',compact('projects'));
            }
        }

    }
    public function GetData ($idProject){
        $projectPhases=ProjectPhases::select('id','date_initiate','url_matterport','phase_name')->where('project_id','=',$idProject)->get();
        $Floorplans=ProjectFloorplans::select('id','url_floorplan','floor_label','name')->where('project_id','=',$idProject)->get();

        return json_encode(['success' => true,'projectPhases' =>$projectPhases, 'Floorplans'=>$Floorplans]);
    }

    public function siteworkPremium(){
        return view('premium.siteworkPremium');
    }
    public function restorationPremium(){
        return view('premium.restorationPremium');
    }
    public function buildingPremium(){
        return view('premium.buildingPremium');
    }

}
