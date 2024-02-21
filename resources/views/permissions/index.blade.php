@extends('layouts.app_dash')

@section('content')
@if (auth()->user()->hasAnyPermission(['view_permissions','create_permissions','edit_permissions','delete_permissions']))
<div class="container-fluid">
    <div class="row app-row">
        <div class="col-12">
            <div class="mb-2">
                <h1>Permission List</h1>
                <div class="top-right-button-container">
                    <button type="button" class="btn btn-outline-primary btn-lg top-right-button  mr-1" data-toggle="modal" data-backdrop="static" data-target="#addPermissions">Add a new Permission</button>
                    <div class="modal fade modal-right" id="addPermissions" tabindex="-1" role="dialog" aria-labelledby="addPermissionsLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addPermissionsLabel">Permission Form</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form id="form_add_permissions" name="form_add_permissions"  accept-charset="UTF-8" >
                                        <input type="hidden" id="_url"  name="_url" value="{{url('permissions')}}">
                                        <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                        @csrf
                                        <div class="form-group">
                                            <label>Permission Name</label>
                                            <input type="text" class="form-control"  id="name" name="name" placeholder="">
                                        </div>
                                       
                                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                                        <button type="submit"  class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Modal para edicion --}}
                    <div class="modal fade modal-right" id="EditPermission" tabindex="-1" role="dialog" aria-labelledby="EditPermissionLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="EditPermissionLabel">Permission Form Edit</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form id="form_edit_permission" name="form_edit_permission"  accept-charset="UTF-8" >
                                        <input type="hidden" id="_url"  name="_url" value="{{url('permissions')}}">
                                        <input type="hidden" id="_edit_id"  name="_edit_id" value="">
                                        <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                        @csrf
                                        <div class="form-group">
                                            <label>Permission Name</label>
                                            <input type="text" class="form-control"  id="edit_name_permission" name="edit_name_permission" placeholder="">
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

            <table class="table table-bordered" id="permissions_table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Created at</th>
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
            <p class=" text-small">Here you can find all the permissions with the corresponding creation dates, and the actions to edit or delete a record. Performing an action can alter the operation of the web application and its components.</p>

        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
    </div>
    
   
</div>
@endif
@endsection
@push('scripts')
    <script src="{{asset('js/permissions.js')}}"></script>
   <script>
       $(function do_permissions_table() {
            $('#permissions_table').DataTable({
                processing: true,
                responsive: true,
                serverSide: true,
                ajax: '{!! route('permissions.data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'date_created', name: 'date_created' },
                    { data: 'actions', name: 'actions' },
                ]
            });
        });

        // Function for edit

        function EmptyEditInputs(){
            $("#edit_name_permission").val("");
        }

    function edit(event){
        EmptyEditInputs();
        var ID =event.id;
            $.ajax({
                url: $("#form_edit_permission #_url").val() +"/"+ID+"/edit" ,
                headers: {'X-CSRF-TOKEN': $('#_token').val()},
                type: 'GET',
                success: function (response) {
                  var json = $.parseJSON(response);
                  if(json.success){
                    $('#EditPermission').modal('show');
                    $("#_edit_id").val(json.data.id);
                    $("#edit_name_permission").val(json.data.name);
                    }else{
                    alert(json.data);
                    }
                }
              }).fail( function( response ) {
                alert( 'Error 101-1 : Ha ocurrido un error!' );
            });
            return false;
    }

     //metodo para eliminar registro
     function drop(event){
        var ID =event.id;
        let confirmacion=confirm("¿Esta seguro de eliminar? No puede reversar esta accion.");
        if(confirmacion){
            $.ajax({
                url: $("#form_edit_permission #_url").val() +"/"+ ID,
                headers: {'X-CSRF-TOKEN': $('#form_edit_permission #_token').val()},
                type: 'DELETE',
                success: function (response) {
                  var json = $.parseJSON(response);
                  if(json.success){
                    $('#permissions_table').DataTable().ajax.reload();
                    alert('Permiso eliminado exitosamente');
                    }else{
                    alert(json.data);
                    }
                }
              }).fail( function( response ) {
                alert( 'Error 101-1 : No se puede Eliminar - Verifique Llaves Foraneas!' );
            });
            return false;
                
        }
    }


    </script>
@endpush