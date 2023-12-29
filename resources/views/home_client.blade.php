@extends('layouts.website_auth')

@section('content')

<style>

    .btn_options {
        display: inline-block;
        padding: 10px 20px;
        margin-left: 13px;
        margin-bottom: 13px;
        font-size: 22px;
        text-align: center;
        text-decoration: none;
        cursor: default !important;
        border: 1px solid #3498db; /* Color del borde */
        color: #fff; /* Color del texto */
        background-color: #236040; /* Color de fondo */
        border: none;
        width: 114px !important;
        transition: background-color 0.3s ease; /* Transición suave en el cambio de color de fondo */
        }

        .btn_content {
        height: 46px;
        width: 150px;
        margin-left: 7px !important;
        margin-bottom: 13px !important;
        font-size: 15px !important;
        text-align: center !important;
        text-decoration: none !important;
        border: 1px solid #236040;
        color: #236040 !important;
        background-color: #fff !important;
        word-wrap: break-word; /* Permite que el texto se divida en dos líneas si supera el ancho */
        display: inline-block!important;
        vertical-align: top; /* Alinea los botones en la parte superior */
        margin-right: 10px; /* Espaciado entre botones */
        }
        .contenedor{
            white-space: nowrap; 
        }
        .oculto {
            display: none !important; /* La clase oculta el elemento */
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="m-4">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="team-details-content">
                                <div class="team-details-title">
                                    <h4  style="color:#236040">Select Project</h4>
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
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                            <div class="ba-team-details-author-skill-area pb-20 pb-xl-0">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="row align-items-center">
                                            <div class="blog-details-tag contenedor">
                                                <div id="list-phases"></div>
                                            </div>
                                        </div>

                                        <div class="row align-items-center">
                                            <div class="blog-details-tag contenedor">
                                                <div id="list-floorplan"></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-xxl-12 col-xl-12">
                                <div class="row">
                                <div class="col-lg-4 col-md-4 oculto mr-3" style="background-color: #d4ded9;" id="div_floor">
                                        <div class="team-details-author-img"> 

                                            <h3 id="title_floor" class="oculto" style="color:#236040">FloorPlan</h3>
                                            <h6 id="floorName" name="floorName" style="color:#236040" class="oculto"></h6>
                                            <p style="color:#236040">Click on the floor plan to enlarge the image.</p>
                                            <br>
                                            <a href="" data-fancybox data-caption="Floorplan Image" data-src="" id="imagenLink">
                                                <img id="imagenMostrada" class="oculto imagenFloors" src="" alt="Image" style="max-height: 500px;padding:13px">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 oculto"  id="div_walk" >
                                        <div style="border: #236040;border-width: medium;border-style: double;padding-left: 15px;padding-right: 15px;">
                                            <h3 id="title_walk" class="oculto" style="color:#236040">Walkthrough</h3>
                                            <h6 id="walkName" name="walkName" style="color:#236040" class="oculto"></h6>
                                            <br>
                                            <iframe src="" frameborder="0" class="oculto"  id="frame_matterport" style="width: 100%;height:460px" allowfullscreen allow="xr-spatial-tracking"></iframe>
                                        </div>
                                    </div>
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
          Fancybox.bind("[data-fancybox]", {
    // Your custom options
    });
     function loadPhase(url_matterport,title_walk){
        let frame = document.getElementById('frame_matterport');
        let title=document.getElementById('title_walk');
        let name=document.getElementById('walkName');
        let div=document.getElementById('div_walk');

        // Alternar la clase 'oculto'
        title.classList.remove('oculto');
        name.classList.remove('oculto');
        frame.classList.remove('oculto');
        div.classList.remove('oculto');
        // Obtener la ruta de la imagen desde el atributo data

        name.innerText=title_walk;
        // Cambiar el atributo src de la etiqueta img
        $('#frame_matterport').attr('src', url_matterport);
    }

    function loadFloor(srcImg,floorName){
        let img = document.getElementById('imagenMostrada');
        let title=document.getElementById('title_floor');
        let name=document.getElementById('floorName');
        let div=document.getElementById('div_floor');

        // Alternar la clase 'oculto'
        title.classList.remove('oculto');
        name.classList.remove('oculto');
        img.classList.remove('oculto');
        div.classList.remove('oculto');
        name.innerText=floorName;
        // Obtener la ruta de la imagen desde el atributo data
        let url = $('#urlHome').val();

        // Cambiar el atributo src de la etiqueta img
        $('#imagenMostrada').attr('src', url+"/storage/"+srcImg);
        $('#imagenLink').attr('href',url+"/storage/"+srcImg);
        $('#imagenLink').attr('data-src',url+"/storage/"+srcImg);


        
    }
$(function () {

    function fillFloorplan(floorplans){

        let q=' <button class="btn_options">Floor</button>';
        floorplans.forEach(element => {
            label=element.floor_label.replace(/_/g, ' ');
            q+=` <button class="btn_content" onclick="loadFloor('${element.name}','${label}')"  >${label}</button>`;
        });
        $('#list-floorplan').html(q);
    }


    function fillPhases(phases){
        let q=' <button class="btn_options">Phases</button>';

        phases.forEach(element => {
            q+=` <button class="btn_content" onclick="loadPhase('${element.url_matterport}','${element.phase_name}')" >${element.phase_name} </button>`;
        });
        $('#list-phases').html(q); 
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


