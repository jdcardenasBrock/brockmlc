@extends('layouts.app_dash')

@section('content')
<div class="container-fluid">
    <div class="row app-row">
        <div class="col-12">
            <div class="mb-2">
                <h1>Role List</h1>
                <div class="top-right-button-container">
                    <button type="button" class="btn btn-outline-primary btn-lg top-right-button  mr-1" data-toggle="modal" data-backdrop="static" data-target="#addRoles">Create a new Role</button>
                    <div class="modal fade modal-right" id="addRoles" tabindex="-1" role="dialog" aria-labelledby="addRolesLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addRolesLabel">Add New Role Form</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form id="form_add_roles" name="form_add_roles"  accept-charset="UTF-8" >
                                        <input type="hidden" id="_url"  name="_url" value="{{url('roles')}}">
                                        <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                        @csrf
                                        <div class="form-group">
                                            <label>Role</label>
                                            <input type="text" class="form-control"  id="name" name="name" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Permissions</label>
                                            <div class="mb-4">
                                                    @foreach($permissions as $id => $permission)
                                                        <div class="custom-control custom-checkbox mb-4">
                                                            <input type="checkbox" class="custom-control-input" id="permission_{{$id}}" name="permissions[]" value="{{$id}}">
                                                            <label class="custom-control-label" for="permission_{{$id}}" >{{$permission}}</label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                        </div>
                                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                                        <button type="submit"  class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Modal para edicion --}}
                    <div class="modal fade modal-right" id="EditRole" tabindex="-1" role="dialog" aria-labelledby="EditRoleLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="EditRoleLabel">Edit Rol Form</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form id="form_edit_role" name="form_edit_role"  accept-charset="UTF-8" >
                                        <input type="hidden" id="_url"  name="_url" value="{{url('roles')}}">
                                        <input type="hidden" id="_edit_id"  name="_edit_id" value="">
                                        <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                        @csrf
                                        <div class="form-group">
                                            <label>Role</label>
                                            <input type="text" class="form-control"  id="edit_name_role" name="edit_name_role" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Permissions</label>
                                            <div class="mb-4">
                                                    @foreach($permissions as $id => $permission)
                                                        <div class="custom-control custom-checkbox mb-4">
                                                            <input type="checkbox" class="custom-control-input" id="edit_permission_{{$id}}" name="permissions[]" value="{{$id}}">
                                                            <label class="custom-control-label" for="edit_permission_{{$id}}" >{{$permission}}</label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                        </div>
                                       
                                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                                        <button type="submit"  class="btn btn-primary">Edit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="separator mb-5"></div>

            <table class="table table-bordered" id="roles_table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Role</th>
                        <th>Permissions</th>
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
            <p class=" text-small">Here you can find all the Roles with their corresponding creation dates, and the actions to edit or delete a record. Performing an action may alter the functioning of the web application and its components.</p>

        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
    </div>
    
   
</div>

@endsection
@push('scripts')
    <script src="{{asset('js/roles.js')}}"></script>
   <script>
       $(function do_roles_table() {
            $('#roles_table').DataTable({
                processing: true,
                responsive: true,
                serverSide: true,
                ajax: '{!! route('roles.data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'permission' , name:'permission' },
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
                url: $("#form_edit_role #_url").val() +"/"+ID+"/edit" ,
                headers: {'X-CSRF-TOKEN': $('#_token').val()},
                type: 'GET',
                success: function (response) {
                  var json = $.parseJSON(response);
                  if(json.success){
                    $('#EditRole').modal('show');
                    $("#_edit_id").val(json[0].data.id);
                    $("#edit_name_role").val(json[0].data.name);
                    rellenarRoles(json[0].permissions);
                    }else{
                    alert(json.data);
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
        let confirmacion=confirm("Are you sure you want to delete? You cannot reverse this action.");
        if(confirmacion){
            $.ajax({
                url: $("#form_edit_role #_url").val() +"/"+ ID,
                headers: {'X-CSRF-TOKEN': $('#form_edit_role #_token').val()},
                type: 'DELETE',
                success: function (response) {
                  var json = $.parseJSON(response);
                  if(json.success){
                    $('#roles_table').DataTable().ajax.reload();
                    alert('Role deleted successfully.');
                    }else{
                    alert(json.data);
                    }
                }
              }).fail( function( response ) {
                alert( 'Error 101-1 :Cannot delete - Check Foreign Keys!' );
            });
            return false;
                
        }
    }


    </script>
@endpush