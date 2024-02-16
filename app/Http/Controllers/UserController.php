<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Yajra\Datatables\Datatables;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all()->pluck('name', 'id');
        $users = User::all();
        return view("user.index", ['users' => $users, 'roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blocked_until=null;
        if($request->input('block_option')==1){
            $blocked_until = Carbon::now()->addDays($request->input('block_date_select'));
        }

        $user = User::Create($request->only('name','email') +
            [
                'username' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'blocked_until' =>$blocked_until
            ]);
        $roles = $request->input('rol_user');
       
        $user->syncRoles($roles);
        return json_encode(['success' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::where('id', $id)->first();
        $roles = Role::all()->pluck('name', 'id');

        return json_encode(['success' => true, 'users' => $users, 'roles' => $roles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd('hola');
        // $blocked_until=null;
        // if($request->input('edit_block_option')==1 && $request->input('edit_block_date_select') !=""){
        //     $blocked_until = Carbon::now()->addDays($request->input('bedit_block_date_select'));
        // }
        // dd($request->password);

        // $user = User::findOrFail($id);
        // $user->name = $request->input('edit_name');
        // $user->email = $request->input('edit_email');
        // $user->username = $request->input('edit_email');
        // $user->password = Hash::make($request->input('password'));
        // $user->updated_at = date("Y-m-d H:i:s");
        // $user->blocked_until =$blocked_until;
        // $user->save();
        // $roles = $request->input('edit_rol_user');
        // $user->syncRoles($roles);
        // return json_encode(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->roles()->detach();
        $user->delete();

        return json_encode(['success' => true]);
    }

    public function anyData()
    {
        $User = User::all();
        return Datatables::of(User::query())

            ->addColumn('rolAsiggn', function ($User) {
                $data = "";
                foreach ($User->roles as $role) {
                    $data = $data . '<button type="button" class="fc-today-button btn btn-primary disabled" disabled="">' . $role->name . '</button>';
                }
                return $data;
            })
            ->addColumn('date_created', function ($User) {
                $timestamp = strtotime($User->created_at);
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
            ->rawColumns(['date_created', 'actions', 'rolAsiggn'])
            ->make(true);
    }
}
