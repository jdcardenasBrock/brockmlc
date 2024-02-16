@extends('layouts.app_dash')

@section('content')
<div class="container-fluid">
    <div class="row app-row">
        <div class="col-12">
            <div class="mb-2">
                <h1>User List</h1>
                <div class="top-right-button-container">
                    <button type="button" class="btn btn-outline-primary btn-lg top-right-button  mr-1" data-toggle="modal" data-backdrop="static" data-target="#addUser">Create User</button>
                    <div class="modal fade modal-right" id="addUser" tabindex="-1" role="dialog" aria-labelledby="addUserLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addUserLabel">New User Form</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form id="form_add_users" name="form_add_users"  accept-charset="UTF-8" >
                                        <input type="hidden" id="_url"  name="_url" value="{{url('users')}}">
                                        <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                        @csrf
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" class="form-control"  id="name" name="name" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control"  id="email" name="email" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control"  id="password" name="password" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Select a Rol</label>
                                                <div class="mb-4">
                                                    @foreach ($roles as $id => $role)
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="Rol_{{$id}}" name="rol_user" class="custom-control-input" value="{{$id}}">
                                                            <label class="custom-control-label" for="Rol_{{$id}}">{{$role}} </label><br>
                                                        </div>
                                                    @endforeach
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="block_option">Do you want to add a session expiration date?</label>
                                                <select class="form-control" id="block_option" name="block_option">
                                                    <option value="0">No</option>
                                                    <option value="1">Yes</option>
                                                </select>
                                            </div>

                                            <div id="block_date" style="display: none;" class="form-group">
                                                <label for="block_date_select">Select a session expiration date</label>
                                                <select class="form-control" id="block_date_select" name="block_date_select">
                                                <option value="">Select</option>    
                                                <option value="1">1 Day</option>
                                                    <option value="7">1 Week</option>
                                                    <option value="30">1 Month</option>
                                                </select>
                                            </div>
                                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                                        <button type="submit"  class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- Modal para edicion --}}
                    <div class="modal fade modal-right" id="EditUser" tabindex="-1" role="dialog" aria-labelledby="EditUserLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="EditUserLabel">Form Edit User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form id="form_edit_users" name="form_edit_users"  accept-charset="UTF-8" >
                                        <input type="hidden" id="_url"  name="_url" value="{{url('users')}}">
                                        <input type="hidden" id="_edit_id"  name="_edit_id" value="">
                                        <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                        @csrf
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" class="form-control"  id="edit_name" name="edit_name" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control"  id="edit_email" name="edit_email" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control"  id="edit_password" name="edit_password" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Select a Rol</label>
                                                <div class="mb-4">
                                                    @foreach ($roles as $id => $role)
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="edit_Rol_{{$id}}" name="edit_rol_user" class="custom-control-input" value="{{$id}}">
                                                            <label class="custom-control-label" for="edit_Rol_{{$id}}">{{$role}} </label><br>
                                                        </div>
                                                    @endforeach
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="edit_block_option">Do you want to add a session expiration date?</label>
                                            <select class="form-control" id="edit_block_option" name="edit_block_option">
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <span id="span_block_option" name="span_block_option"></span>
                                        </div>
                                            
                                        <div id="edit_block_date" style="display: none;" class="form-group">
                                            <label for="edit_block_date_select">Select a new session expiration date</label>
                                            <select class="form-control" id="edit_block_date_select" name="edit_block_date_select">
                                            <option value="">Select</option>    
                                            <option value="1">1 Day</option>
                                                <option value="7">1 Week</option>
                                                <option value="30">1 Month</option>
                                            </select>
                                        </div>
                                       
                                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                                        <button type="submit"  class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="separator mb-5"></div>

            <table class="table table-bordered" id="users_table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Rol Assigned</th>
                        <th>Created At</th>
                        <th></th>
                    </tr>
                </thead>
            </table>

        </div>
    </div>
</div>
<div class="app-menu">
    <div class="p-4 h-100">
        <div class="scroll ps">
            <p class="text-muted text-small">Description</p>
            <p class=" text-small">Here you can find all users with their corresponding creation dates, and actions to edit or delete a record. Performing an action can affect the functionality of the web application and its components.</p>

        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
    </div>
    
   
</div>

@endsection
@push('scripts')
    <script src="{{asset('js/users.js')}}"></script>
   <script>
       $(function do_users_table() {
            $('#users_table').DataTable({
                
                processing: true,
                responsive: true,
                serverSide: true,
                ajax: '{!! route('users.data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    {data:'rolAsiggn', name:'rolAsiggn'},
                    { data: 'date_created', name: 'date_created' },
                    { data: 'actions', name: 'actions' },
                ]
            });
        });

        // Function for edit

        function EmptyEditInputs(){
            $("#edit_name_role").val("");
        }
    function rellenarRoles(array){
        $('input[type=checkbox]:checked').prop('checked',false);
        array.forEach(element => {
            $(`#edit_permission_${element}`).prop('checked', true)
           


        });
    }
    function edit(event){
        EmptyEditInputs();
        var ID =event.id;
            $.ajax({
                url: $("#form_edit_users #_url").val() +"/"+ID+"/edit" ,
                headers: {'X-CSRF-TOKEN': $('#_token').val()},
                type: 'GET',
                success: function (response) {
                  var json = $.parseJSON(response);
                  if(json.success){
                    $('#EditUser').modal('show');
                    $("#_edit_id").val(json['users'].id);
                    $("#edit_name").val(json['users'].name);
                    $("#edit_email").val(json['users'].email);
                    let blocked_until=json['users'].blocked_until;

                    if(blocked_until!=null){
                        $("#edit_block_option").val(1);
                        document.getElementById('edit_block_date').style.display = 'block';
                        $("#span_block_option").html("Last Session Expiration Date: <br> "+json['users'].blocked_until);
                    }
                    console.log(json['roles']);
                    rellenarRoles(json['roles']);
                    }else{
                    alert("Error");
                    }
                }
              }).fail( function( response ) {
                alert( 'Error 101-1 : Error!' );
            });
            return false;
    }

     //metodo para eliminar registro
     function drop(event){
        var ID =event.id;
        let confirmacion=confirm("Are you sure you want to delete? You cannot reverse this action");
        if(confirmacion){
            $.ajax({
                url: $("#form_edit_users #_url").val() +"/"+ ID,
                headers: {'X-CSRF-TOKEN': $('#form_edit_users #_token').val()},
                type: 'DELETE',
                success: function (response) {
                  var json = $.parseJSON(response);
                  if(json.success){
                    $('#EditUser').DataTable().ajax.reload();
                    alert('User deleted successfully.');
                    }else{
                    alert(json.data);
                    }
                }
              }).fail( function( response ) {
                alert( 'Error 101-1 : Cannot delete - Check foreign keys!' );
            });
            return false;
                
        }
    }

    document.getElementById('block_option').addEventListener('change', function() {
        if (this.value === '1') {
            document.getElementById('block_date').style.display = 'block';
        } else {
            document.getElementById('block_date').style.display = 'none';
        }
    });

    document.getElementById('edit_block_option').addEventListener('change', function() {
        if (this.value === '1') {
            document.getElementById('edit_block_date').style.display = 'block';
        } else {
            document.getElementById('edit_block_date').style.display = 'none';
        }
    });

    </script>
@endpush