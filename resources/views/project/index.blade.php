@extends('layouts.app_dash')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="mb-2">
                @if(session('mensaje'))
                    <div class="alert alert-success">
                        {{ session('mensaje') }}
                    </div>
                    <script>
                    setTimeout(function() {
                        document.getElementById('mensaje').style.display = 'none';
                    }, 5000); // Ocultar después de 5000 milisegundos (5 segundos)
                    </script>
                @endif

                <h1>Projects</h1>
                
                <div class="top-right-button-container">
                    @can('create_clients')
                    <button type="button" class="btn btn-outline-primary btn-lg top-right-button  mr-1" data-toggle="modal" data-backdrop="static" data-target="#addProjectsModal">Create a new Project</button>
                    @endcan
                    <div class="modal fade modal-right" id="addProjectsModal" tabindex="-1" role="dialog" aria-labelledby="addProjectsModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addProjectsModalLabel">New Project Form</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form id="form_projects" name="form_projects"  accept-charset="UTF-8" >
                                        <input type="hidden" id="_url"  name="_url" value="{{url('project')}}">
                                        <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" id="id_user_create" name="id_user_create" value="{{ Auth::user()->id }}" >
                                        @csrf
                                       
                                       
                                        <div class="form-group">
                                            <label>Project Name</label>
                                            <input type="text" class="form-control"  id="project_name" name="project_name" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control"  id="address" name="address" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Client</label>
                                            <select class="custom-select" required="" id="client" name="client">
                                                <option value="">Select an option</option>
                                                @foreach ($clients as $client)
                                                    <option value="{{$client->id}}">{{$client->name}}</option>
                                                @endforeach
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
                    <div class="modal fade modal-right" id="EditProjects" tabindex="-1" role="dialog" aria-labelledby="EditProjectsLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="EditProjectsLabel">Edit Project Form</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form id="form_edit_projects" name="form_edit_projects"  accept-charset="UTF-8" >
                                        <input type="hidden" id="_url"  name="_url" value="{{url('project')}}">
                                        <input type="hidden" id="_edit_id"  name="_edit_id" value="{{url('project')}}">
                                        <input type="hidden" id="id_user_edit" name="id_user_edit" value="{{ Auth::user()->id }}" >
                                        <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                        @csrf
                                        <div class="form-group">
                                            <label>Project Name</label>
                                            <input type="text" class="form-control"  id="edit_project_name" name="edit_project_name" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control"  id="edit_address" name="edit_address" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Client</label>
                                            <select class="custom-select" required="" id="edit_client" name="edit_client">
                                                <option value="">Select an option</option>
                                                @foreach ($clients as $client)
                                                    <option value="{{$client->id}}">{{$client->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                                        <button type="submit"  class="btn btn-primary">Edit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Modal para Phases --}}
                    <div class="modal fade modal-right" id="PhasesModule" tabindex="-1" role="dialog" aria-labelledby="PhasesModuleLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="PhasesModuleLabel">Phases Form</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form id="form_phases_projects" method="POST" name="form_phases_projects"  accept-charset="UTF-8" action="{{url('project_phases')}}">
                                        <input type="hidden" id="id_user_edit" name="id_user_edit" value="{{ Auth::user()->id }}" >
                                        <input type="hidden" id="_url" name="_url" value="{{url('fill_project_phases')}}">
                                        <input type="hidden" id="id_project_for_phases" name="id_project_for_phases" value="" >
                                        <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                        @csrf
                                        <div id="phases-container"></div>

                                        <div class="text-center">
                                            <button type="button" class="btn btn-outline-primary btn-sm mb-2" onclick="addPhase()">
                                                <i class="simple-icon-plus btn-group-icon"></i> Add Phase
                                            </button>
                                        </div>
                                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                                        <button type="submit"  class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Modal para Floorplans --}}
                    <div class="modal fade modal-right" id="FloorplanModule" tabindex="-1" role="dialog" aria-labelledby="FloorplanModuleLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="FloorplanModuleLabel">Floorplans Form</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form id="form_floorplan_projects" method="POST" name="form_floorplan_projects"  enctype="multipart/form-data" accept-charset="UTF-8" action="{{url('project_floorplan')}}">
                                        <input type="hidden" id="id_user_edit" name="id_user_edit" value="{{ Auth::user()->id }}" >
                                        <input type="hidden" id="_url" name="_url" value="{{url('fill_project_floorplan')}}">
                                        <input type="hidden" id="_url_home" name="_url_home" value="{{url('/')}}">
                                        <input type="hidden" id="id_project_for_floorplan" name="id_project_for_floorplan" value="" >
                                        <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                        @csrf
                                        <div id="floorplan-container"></div>

                                        <div class="text-center">
                                            <button type="button" class="btn btn-outline-primary btn-sm mb-2" onclick="addFloorPlan()">
                                                <i class="simple-icon-plus btn-group-icon"></i> Add FloorPlan
                                            </button>
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
          
     
            @can('view_clients')
                <table class="table table-bordered" id="projects_table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Project Name</th>
                            <th>Address</th>
                            <th>Client</th>
                            <th>Created At</th>
                            <th>Phases</th>
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
    <script src="{{asset('js/project.js')}}"></script>
   <script>
    
    var ProjectsTable= $('#projects_table').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                Search:true,
                ajax: {
                    url: '{!! route('Projects.data') !!}',
                },
                
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name'},
                    { data: 'address', name: 'address'},
                    { data: 'client_name', name: 'client_name'},
                    { data: 'date_created', name: 'date_created'},
                    { data: 'phases', name: 'phases', orderable:false, searchable:false },
                    { data: 'actions', name: 'actions', orderable:false, searchable:false },
                ]
    });


    $('#search-form').on('submit', function(e) {
        ProjectsTable.draw();
        e.preventDefault();
    });


    //metodo para eliminar registro
    function drop(event){
        var ID =event.id;
        let confirmacion=confirm("¿Esta seguro de eliminar? No puede reversar esta accion.");
        if(confirmacion){
            $.ajax({
                url: $("#form_projects #_url").val() +"/"+ ID,
                headers: {'X-CSRF-TOKEN': $('#_token').val()},
                type: 'DELETE',
                success: function (response) {
                  var json = $.parseJSON(response);
                  if(json.success){
                    $('#projects_table').DataTable().ajax.reload();
                    alert('Project dropped successfully');
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
            $('#edit_project_name').val("");
            $('#edit_address').val("");
            $('#edit_client').val("");
    }

    function edit(event){
        vaciarEditInputs();

        // Obtén una referencia al elemento select
        
        let ID =event.id;
            $.ajax({
                url: $("#form_projects #_url").val() +"/"+ID+"/edit" ,
                headers: {'X-CSRF-TOKEN': $('#_token').val()},
                type: 'GET',
                success: function (response) {
                  var json = $.parseJSON(response);
                  if(json.success){
                    $('#EditProjects').modal('show');
                    $("#_edit_id").val(json.data.id);

                    $("#edit_project_name").val(json.data.name);
                    $("#edit_address").val(json.data.address);
                    $("#edit_client").val(json.data.client_id);
                    }else{
                    alert(json.data);
                    }
                }
              }).fail( function( response ) {
                alert( 'Error 101-1 : Ha ocurrido un error!' );
            });
            return false;
    }

    function addPhase() {
        var container = $("#phases-container");
        var phaseHtml = `
            <div class="form-group">
                <label>Phase Name</label>
                <input type="text" class="form-control" name="phase_names[]" placeholder="Enter a phase name">
            </div>
            <div class="form-group">
                <label>Date Scanned</label>
                <input type="date" class="form-control datepicker" name="dates[]" placeholder="Select a Date">
            </div>
            <div class="form-group">
                <label>Url Matterport</label>
                <input type="text" class="form-control" name="url_matterports[]" placeholder="Enter a Url">
            </div>
            <div class="separator mb-4"></div>
        `;
        container.append(phaseHtml);
    }

    function formatFecha(fechaOriginal){
        // Crear un objeto Date con la fecha original
        const fecha = new Date(fechaOriginal);

        // Obtener los componentes de la fecha
        const año = fecha.getFullYear();
        const mes = String(fecha.getMonth() + 1).padStart(2, '0');  // El mes es 0-indexado, por eso se suma 1
        const dia = String(fecha.getDate()).padStart(2, '0');

        // Formatear la fecha en el formato "yyyy-MM-dd"
        const fechaFormateada = `${año}-${mes}-${dia}`;
        return fechaFormateada;
    }



    
    function fillPhases(quantity,array){
        var container = $("#phases-container");
        container.empty();
        var phaseHtml="";
        for (let index = 0; index < quantity; index++) {
            let fechaNew=formatFecha(array[index].date_initiate);
            phaseHtml += `
            <div class="form-group">
                <label>Phase Name</label>
                <input type="text" class="form-control" name="phase_names[]" placeholder="Enter a phase name" value="${array[index].phase_name}">
            </div>
            <div class="form-group">
                <label>Date Scanned</label>
                <input type="date" class="form-control datepicker" name="dates[]" value="${fechaNew}" placeholder="Select a Date">
            </div>
            <div class="form-group">
                <label>Url Matterport</label>
                <input type="text" class="form-control" name="url_matterports[]" value="${array[index].url_matterport}" placeholder="Enter a Url">
            </div>
            <div class="separator mb-4"></div>
        `;
        }
       
        container.append(phaseHtml);
    }

    function phases(event){
        let ID =event.id;
        $('#id_project_for_phases').val(ID);
        $('#PhasesModule').modal('show');
        $.ajax({
                url: $("#form_phases_projects #_url").val() +"/"+ID ,
                headers: {'X-CSRF-TOKEN': $('#_token').val()},
                type: 'GET',
                success: function (response) {
                  var json = $.parseJSON(response);
                  if(json.success){
                    console.log(json);
                        fillPhases(json.quantity,json.data);
                    }else{
                    alert("Error trayendo datos");
                    }
                }
              }).fail( function( response ) {
                alert( 'Error 101-1 : Ha ocurrido un error!' );
            });
            return false;
    }

    $(document).ready(function() {
        $("#form_phases_projects").submit(function(event) {
            // Validar los campos aquí antes de enviar el formulario
            if (!validateForm()) {

                // Si la validación falla, detener el envío del formulario
                event.preventDefault();
            }
        });

        function validateForm() {
            // Obtener los valores de los campos dinámicos
            let phaseNames = $("input[name='phase_names[]']");
            let dates = $("input[name='dates[]']");
            let urlMatterports = $("input[name='url_matterports[]']");

            // Validar que al menos un registro se haya ingresado
            if (phaseNames.length === 0) {
                alert("Debe ingresar al menos un registro.");
                return false;
            }
            // Realizar la validación aquí (puedes agregar más condiciones según tus requisitos)
            for (let i = 0; i < phaseNames.length; i++) {
                if (phaseNames[i].value.trim() === '' || dates[i].value.trim() === '' || urlMatterports[i].value.trim() === '') {
                    alert("Todos los campos deben ser completados.");
                    return false;
                }
            }

            // Si todos los campos están llenos, la validación es exitosa
            return true;
        }

             
        // 
        // Validacion de submit de floorplan
        //
        //
        
        
        $("#form_floorplan_projects").submit(function(event) {
            // Validar los campos aquí antes de enviar el formulario
            if (!validateFormFloorplan()) {

                // Si la validación falla, detener el envío del formulario
                event.preventDefault();
            }
        });

        function validateFormFloorplan() {
            // Obtener los valores de los campos dinámicos
            let floorname = $("input[name='floorplan_names[]']");
            let files = $("input[name='files[]']");

            // Validar que al menos un registro se haya ingresado
            if (floorname.length === 0) {
                alert("Debe ingresar al menos un registro.");
                return false;
            }
            if (files.length === 0) {
                alert("Debe adjuntar al menos un soporte.");
                return false;
            }
            // Realizar la validación aquí (puedes agregar más condiciones según tus requisitos)
            for (let i = 0; i < floorname.length; i++) {
                if (floorname[i].value.trim() === '' || files[i].value.trim() === '') {
                    alert("Todos los campos deben ser completados.");
                    return false;
                }
            }

            // Si todos los campos están llenos, la validación es exitosa
            return true;
        }
    });



    function addFloorPlan() {
        var containerfloor = $("#floorplan-container");
        var floorHtml = `
        <div class="form-group">
                <label>FloorPlan Label</label>
                <input type="text" class="form-control" name="floorplan_names[]" placeholder="Enter a FloorPlan label">
            </div>
            <div class="form-group">
                <label>Date Scanned</label>
                <input type="file" class="form-control datepicker" name="files[]" accept=".png, .jpg, .jpeg" >
            </div>
            <div class="separator mb-4"></div>
        `;
        containerfloor.append(floorHtml);
    }

    function cambiarGuionBajoPorEspacio(cadena) {
        return cadena.replace(/_/g, ' ');
    }

    function fillFloorplan(quantity,array){
        var containerFloor = $("#floorplan-container");
        var home_url = $("#_url_home").val();
        
        containerFloor.empty();
        var floorplanHtml="";
        for (let index = 0; index < quantity; index++) {
            let fechaNew=formatFecha(array[index].date_initiate);
            let nameFloor=cambiarGuionBajoPorEspacio(array[index].floor_label);

            let urlFloor=home_url+"/storage/"+array[index].name;

            floorplanHtml += `
            <div class="form-group">
                <label>FloorPlan Label</label>
                <input type="text" class="form-control" name="floorplan_names[]" placeholder="Enter a phase name" value="${nameFloor}">
            </div>
            <a class="d-flex" href="#">
                            <img src="${urlFloor}" alt="${nameFloor}" class="list-thumbnail responsive border-0 card-img-left m-2">
                        </a>
            <div class="form-group">
                <label>Date Scanned</label>
                <input type="file" class="form-control datepicker" name="files[]" accept=".png, .jpg, .jpeg">
            </div>
            <div class="separator mb-4"></div>
        `;
        }
       
        containerFloor.append(floorplanHtml);
    }

    function floorplan(event){
        let ID =event.id;
        $('#id_project_for_floorplan').val(ID);
        $('#FloorplanModule').modal('show');
        $.ajax({
                url: $("#form_floorplan_projects #_url").val() +"/"+ID ,
                headers: {'X-CSRF-TOKEN': $('#_token').val()},
                type: 'GET',
                success: function (response) {
                  var json = $.parseJSON(response);
                  if(json.success){
                    console.log(json);
                        fillFloorplan(json.quantity,json.data);
                    }else{
                    alert("Error trayendo datos");
                    }
                }
              }).fail( function( response ) {
                alert( 'Error 101-1 : Ha ocurrido un error!' );
            });
            return false;
    }

    </script>
@endpush
