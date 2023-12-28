<?php

namespace App\Http\Controllers;

use App\Models\clients;
use App\Models\ProjectFloorplans;
use App\Models\ProjectPhases;
use App\Models\projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients=clients::select('id','name')->get();
        return view('project.index',compact('clients'));
    }

 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        projects::create([
            'name' => $request->project_name,
            'address' => $request->address,
            'client_id' => $request->client,
        ]);

        return json_encode(['success' => true]);  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_clients=clients::select('id','name')->get();
        $data= projects::where('id', $id)->first();
        return json_encode(['success' => true, 'data' => $data,'edit_clients' => $edit_clients]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client= projects::findOrFail($id);
        $client->name=$request->edit_project_name;
        $client->address=$request->edit_address;
        $client->client_id=$request->edit_client;
        $client->save();
        return json_encode(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reg = projects::findOrFail($id)->delete();
        if ($reg) {
            return json_encode(['success' => true]);
        } else {
            return json_encode(['success' => false, 'data' => 'No se puede eliminar.']);
        }
    }
    public function getData(Request $request)
    {
        $Client = projects::select('projects.id','projects.name', 'projects.address', 'clients.name as client_name', 'projects.created_at')
        ->leftJoin('clients','clients.id','client_id')
        ->orderBy('projects.id', 'asc');


        $datatables =  app('datatables')->of($Client)
           
            ->addColumn('date_created', function ($Client) {
                $timestamp = strtotime($Client->created_at);
                $newDate = date("m-d-Y", $timestamp);
                return $newDate;
            })
            ->addColumn('phases', function($Client){
                $spanPhases='';
                $phases=ProjectPhases::getPhases($Client->id);
                foreach ($phases as $value) {
                    $spanPhases.='<span class="badge badge-pill badge-outline-primary mb-1">'.$value->phase_name.'</span><br>';
                }
                return $spanPhases;
            })
            ->addColumn('actions', function ($Client) {
                return '<div class="dropdown d-inline-block">
                
                
                    <button class="btn btn-outline-primary dropdown-toggle mb-1" type="button" id="dropdownMenuButtonUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Options
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonUser" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">  
                        <a class="dropdown-item" onclick="phases(this)" id="' . $Client->id . '">Add Phases</a>
                        <a class="dropdown-item" onclick="floorplan(this)" id="' . $Client->id . '">Add Floorplans </a>
                        <a class="dropdown-item" onclick="edit(this)" id="' . $Client->id . '">Edit</a>
                        <a class="dropdown-item" onclick="drop(this)" id="' . $Client->id . '">Delete</a>
                    </div>
                </div>';
            })
            ->rawColumns(['date_created', 'actions','username','phases']);

        return $datatables->make(true);
    }

    public function fill_project_phases($id){
        $data=ProjectPhases::where('project_id','=',$id)->get();

        $quantity=ProjectPhases::where('project_id','=',$id)->count();
        return json_encode(['success' => true, 'data' => $data,'quantity' =>$quantity]);  
    }

    public function fill_project_floorplan($id){
        $planos=ProjectFloorplans::where('project_id','=',$id)->get();
        $quantity=ProjectFloorplans::where('project_id','=',$id)->count();
        return json_encode(['success' => true, 'data' => $planos,'quantity' =>$quantity]);  
    }

    public function MakePhases(Request $request){

        ProjectPhases::where('project_id','=',$request->id_project_for_phases)->delete();
        foreach ($request->phase_names as $key => $value) {
            ProjectPhases::create([
                'date_initiate'=>$request->dates[$key],
                'url_matterport'=>$request->url_matterports[$key],
                'phase_name'=>$value,
                'project_id'=>$request->id_project_for_phases,
            ]);
        }
        session()->flash('mensaje', 'Phases added successfully');
        return redirect(route('project.index'));
    }

    public function UploadFloorplans(Request $request){
        
        ProjectFloorplans::where('project_id','=',$request->id_project_for_floorplan)->delete();

        $request->validate([
            'files.*' => 'required|mimes:jpg,png,jpeg|max:2048',
        ]);

        $uploadedFiles = [];

        foreach ($request->file('files') as $key => $file) {
            $filenameWeb=str_replace(' ','_',$request->floorplan_names[$key]);

            $fileName = time() . '_' . $filenameWeb.'.'.$file->getClientOriginalExtension();
            $url = Storage::putFileAs('public', $file, $fileName);

            // Guarda información en la base de datos (si es necesario)
            ProjectFloorplans::create(['floor_label'=>$filenameWeb,
                                    'url_floorplan' => $url, 'name'=> $fileName ,'project_id' =>$request->id_project_for_floorplan]);

            $uploadedFiles[] = $fileName;
        }

        session()->flash('mensaje', 'Floorplans added successfully');
        return redirect(route('project.index'));

      
    }
}
