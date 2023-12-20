@extends('layouts.website_auth')

@section('content')

<style>


        .oculto {
            display: none !important; /* La clase oculta el elemento */
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                
            
                <div class="team-details-area">
                    <div class="m-4">
                    <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="team-details-content">
                                    <div class="team-details-title">
                                        <h4>Select Project</h4>
                                    </div>
                                    <div class="team-details-discription">
                                        <form id="form_projects" name="form_projects"  accept-charset="UTF-8" >
                                            <input type="hidden" id="_url"  name="_url" value="{{url('project_showData')}}">
                                            <input type="hidden" id="urlHome"  name="urlHome" value="{{url('/')}}">
                                            <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                            @csrf
                                       
                                        </form>
                                            <select name="select_project" id="select_project" class="form-control">
                                                    <option value="">Select</option>
                                                @foreach ($projects as $project )
                                                    <option value="{{$project->id}}">{{$project->name}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row mt-4">
                            <div class="col-xxl-8 col-xl-8">
                                <div class="ba-team-details-author-skill-area pb-20 pb-xl-0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="widget-categories-box">
                                                <div class="widget-catagories-title">
                                                    <h4>Phases</h4>
                                                </div>
                                                <!-- widget categories menu -->
                                                <div class="widget-categories-menu" id="list-phases">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="widget-categories-box">
                                                <div class="widget-catagories-title">
                                                    <h4>Floorplans</h4>
                                                </div>
                                                <!-- widget categories menu -->
                                                <div class="widget-categories-menu" id="list-floorplan">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="team-details-author-img"> <h4>Floorplan Image</h4>
                                                <img id="imagenMostrada" class="oculto" src="" alt="Image">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /. team details author skill -->
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <!-- start progress bar -->
                                <iframe src="" frameborder="0" class="oculto"  id="frame_matterport" style="width: 100%;height:60%"></iframe>
                                <!-- end progress bar -->
                            </div>
                        </div>
                       
                    </div>
                </div>
               
                <div class="separator mb-5"></div>
            </div>
        </div>
    </div>
    
@endsection
@push('scripts')
<script>
$(function () {


    function showImageOnClick() {
    $('#showImage li').click(function () {
        let img = document.getElementById('imagenMostrada');
        // Alternar la clase 'oculto'
        img.classList.remove('oculto');
        // Obtener la ruta de la imagen desde el atributo data
        let rutaImagen = $(this).data('imagen');
        let url = $('#urlHome').val();
        console.log(url+"/"+rutaImagen);

        // Cambiar el atributo src de la etiqueta img
        $('#imagenMostrada').attr('src', url+"/storage/"+rutaImagen);
    });
}

    function fillFloorplan(floorplans){
        let contentHtml=`<ul id="showImage" name="showImage">`;
        floorplans.forEach(element => {
            label=element.floor_label.replace(/_/g, ' ');
            contentHtml+=` <li data-imagen="${element.name}"  style="color:black">${label} <span><i class="bi bi-chevron-right"></i></span></li>`;
        });
        contentHtml+=`</ul>`;
        $('#list-floorplan').html(contentHtml);
        showImageOnClick();
    }


    function showFrameOnClick() {
    $('#showMatterport li').click(function () {
        let frame = document.getElementById('frame_matterport');
        // Alternar la clase 'oculto'
        frame.classList.remove('oculto');
        // Obtener la ruta de la imagen desde el atributo data
        let rutaMatterport = $(this).data('link');

        // Cambiar el atributo src de la etiqueta img
        $('#frame_matterport').attr('src', rutaMatterport);
    });
}
    function fillPhases(phases){
        let contentHtml=`<ul id="showMatterport" name="showMatterport">`;
        phases.forEach(element => {
            contentHtml+=` <li data-link="${element.url_matterport}"  style="color:black">${element.phase_name} <span><i class="bi bi-chevron-right"></i></span></li>`;
        });
        contentHtml+=`</ul>`;
        console.log(phases,contentHtml);
        $('#list-phases').html(contentHtml); 
        showFrameOnClick();
    }


 // Manejar el evento de cambio en el select
 $('#select_project').change(function () {
        // Obtener el valor seleccionado
        let projectSelected = $(this).val();
        if(projectSelected!=""){
             // Realizar la solicitud AJAX
            $.ajax({
            url: $("#form_projects #_url").val() +"/"+projectSelected ,
            headers: {'X-CSRF-TOKEN': $('#_token').val()},
            type: 'GET',
            success: function (data) {
                var json = $.parseJSON(data);

                console.log(json);
                  if(json.success){
                        fillFloorplan(json.Floorplans);
                        fillPhases(json.projectPhases);
                    }else{
                    alert("Error trayendo datos");
                    }
            }
            });
        }else{
            let img = document.getElementById('imagenMostrada');
            // Alternar la clase 'oculto'
            img.classList.add('oculto');
            $('#list-floorplan').empty();

            let frame = document.getElementById('frame_matterport');
            // Alternar la clase 'oculto'
            frame.classList.add('oculto');
            $('#list-phases').empty();
        }
       
      });
});
     
</script>
@endpush


