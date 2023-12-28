

@extends('layouts.app_dash')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="mb-2">
                <h1>Clients</h1>
                
                <div class="top-right-button-container">
                    @can('create_clients')
                    <button type="button" class="btn btn-outline-primary btn-lg top-right-button  mr-1" data-toggle="modal" data-backdrop="static" data-target="#addClientsModal">Create a new Client</button>
                    @endcan
                    <div class="modal fade modal-right" id="addClientsModal" tabindex="-1" role="dialog" aria-labelledby="addClientsModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addClientsModalLabel">New Client Form</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form id="form_clients" name="form_clients"  accept-charset="UTF-8" >
                                        <input type="hidden" id="_url"  name="_url" value="{{url('clients')}}">
                                        <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" id="id_user_create" name="id_user_create" value="{{ Auth::user()->id }}" >
                                        @csrf
                                       
                                       
                                        <div class="form-group">
                                            <label>Client Name</label>
                                            <input type="text" class="form-control"  id="fullnameClient" name="fullnameClient" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control"  id="email" name="email" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control"  id="password" name="password" placeholder="">
                                        </div>
                                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                                        <button type="submit"  class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Modal para edicion --}}
                    <div class="modal fade modal-right" id="EditClients" tabindex="-1" role="dialog" aria-labelledby="EditClientsLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="EditClientsLabel">Edit Client Form</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form id="form_edit_clients" name="form_edit_clients"  accept-charset="UTF-8" >
                                        <input type="hidden" id="_url"  name="_url" value="{{url('clients')}}">
                                        <input type="hidden" id="_edit_id"  name="_edit_id" value="{{url('clients')}}">
                                        <input type="hidden" id="id_user_edit" name="id_user_edit" value="{{ Auth::user()->id }}" >
                                        <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                        @csrf
                                        <div class="form-group">
                                            <label>Client Name</label>
                                            <input type="text" class="form-control"  id="edit_fullnameClient" name="edit_fullnameClient" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control"  id="edit_email" name="edit_email" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control"  id="edit_password" name="edit_password" placeholder="">
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
          
     
        @can('view_clients')
            <table class="table table-bordered" id="clients_table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Client Name</th>
                        <th>Username</th>
                        <th>Created At</th>
                        <th></th>
                    </tr>
                </thead>
            </table>
            @endcan
        </div>
    </div>
</div>


@endsection
@push('scripts')
    <script src="{{asset('js/clients.js')}}"></script>
   <script>
       

        
      
    var ClientsTable= $('#clients_table').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                Search:true,
                ajax: {
                    url: '{!! route('Clients.data') !!}',
                },
                
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name'},
                    { data: 'username', name: 'username'},
                    { data: 'created_at', name: 'created_at'},
                    { data: 'actions', name: 'actions', orderable:false, searchable:false },
                ]
        });
    $('#search-form').on('submit', function(e) {
        ClientsTable.draw();
        e.preventDefault();
    });
    //metodo para eliminar registro
    function drop(event){
        var ID =event.id;
        let confirmacion=confirm("¿Esta seguro de eliminar? No puede reversar esta accion.");
        if(confirmacion){
            $.ajax({
                url: $("#form_clients #_url").val() +"/"+ ID,
                headers: {'X-CSRF-TOKEN': $('#_token').val()},
                type: 'DELETE',
                success: function (response) {
                  var json = $.parseJSON(response);
                  if(json.success){
                    $('#clients_table').DataTable().ajax.reload();
                    alert('Cliente eliminado exitosamente');
                    location.href=$("#_url").val();
                    }else{
                    alert(json.data);
                    }
                }
              }).fail( function( response ) {
                alert( 'Error 101-1 : No se puede Eliminar - Este registro hace parte de otro modulo!' );
            });
            return false;
                
        }
    }
    function vaciarEditInputs(){
            $("#_edit_id").val("");
            $('#edit_fullnameClient').val("");
            $('#edit_email').val("");
            $('#edit_password').val("");
        }

    function edit(event){
        vaciarEditInputs();
        var ID =event.id;
            $.ajax({
                url: $("#form_clients #_url").val() +"/"+ID+"/edit" ,
                headers: {'X-CSRF-TOKEN': $('#_token').val()},
                type: 'GET',
                success: function (response) {
                  var json = $.parseJSON(response);
                  if(json.success){
                    console.log(json);
                    $('#EditClients').modal('show');
                    $("#_edit_id").val(json.data.id);
                    $('#edit_fullnameClient').val(json.data.name);
                    $('#edit_email').val(json.user.email);
                    }else{
                    alert(json.data);
                    }
                }
              }).fail( function( response ) {
                alert( 'Error 101-1 : Ha ocurrido un error!' );
            });
            return false;
    }

   
    </script>
@endpush