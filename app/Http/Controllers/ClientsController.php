<?php

namespace App\Http\Controllers;

use App\Models\clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clients.index');
    }

  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $user = User::Create(
            [
                'name' => $request->fullnameClient,
                'username' => $request->email,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $user->syncRoles("Client");

        
            clients::Create([
                'name'=>$request->fullnameClient,
                'rel_user'=>$user->id,
                'created_by'=>$request->id_user_create,
            ]);

            return json_encode(['success' => true]);    

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = clients::where('id', $id)->first();
        $user= user::select('email')->where('id', $data->rel_user)->first();
        return json_encode(['success' => true, 'data' => $data,'user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client= clients::findOrFail($id);
        $client->name=$request->edit_fullnameClient;
        $client->modified_by=$request->id_user_edit;
        $client->save();

        $user_rel_id=clients::select('rel_user')->where('id','=',$id)->first();

        $user=User::findOrFail($user_rel_id->rel_user);
        $user->name=$request->edit_fullnameClient;
        $user->email=$request->edit_email;
        $user->username=$request->edit_email;

        if($request->edit_password!=''){
            $user->password = Hash::make($request->edit_password);
        }
        $user->save();

        return json_encode(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $idUser=clients::select('rel_user')->where('id','=',$id)->first();
        $reg = clients::find($id)->delete();
        $regUser=User::where('id','=',$idUser->rel_user)->delete();
        if ($reg && $regUser) {
            return json_encode(['success' => true]);
        } else {
            return json_encode(['success' => false, 'data' => 'No se puede eliminar, hace parte de otro modulo.']);
        }
    }
    public function getData(Request $request)
    {
        $Client = clients::select('id','name', 'rel_user', 'created_by', 'modified_by', 'created_at')
        ->orderBy('id', 'asc');

        $datatables =  app('datatables')->of($Client)
           
            ->addColumn('date_created', function ($Client) {
                $timestamp = strtotime($Client->created_at);
                $newDate = date("m-d-Y", $timestamp);
                return $newDate;
            })
            ->addColumn('actions', function ($User) {
                return '<div class="dropdown d-inline-block">
                
                
                    <button class="btn btn-outline-primary dropdown-toggle mb-1" type="button" id="dropdownMenuButtonUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Options
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonUser" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">  
                        <a class="dropdown-item" onclick="edit(this)" id="' . $User->id . '">Edit</a>
                        <a class="dropdown-item" onclick="drop(this)" id="' . $User->id . '">Delete</a>
                    </div>
                </div>';
            })
            // ->addColumn('actions', function ($Client) {
            //     return view('clients.edit', ['id' => $Client->id]);
            // })
            ->addColumn('username', function ($Client) {
                $user=User::select('username')->where('id','=',$Client->rel_user)->first();
                return $user->username;
            })
            ->rawColumns(['date_created', 'actions','username']);

        return $datatables->make(true);
    }

}
