

$(document).ready(function(){
    // Evento que ocurre cuando es cambiado el usuario
    //y se rellena el correo electronico en el campo
    
 function vaciar_Inputs_Add(){
    $('#name').val("");
 }
    //metodo para ingresar registro
    $('#form_add_permissions').submit(function(event){
        if ($('#name').val() === "") {
            alert('You must enter the permission name','Atencion!');
            $('#name').focus();
            return false;
        }
       
      

        let confirmacion=confirm("¿Are you sure about create this information?");
          if(confirmacion){

            var data = $('#form_add_permissions').serialize();
            $.ajax({
              url: $('#form_add_permissions #_url').val(),
              headers: {'X-CSRF-TOKEN': $('#form_add_permissions #_token').val()},
              type: 'POST',
              cache: false,
              data: data,
              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                $("#addPermissions").modal('hide');
                vaciar_Inputs_Add();
                $('#permissions_table').DataTable().ajax.reload();
                 alert('Permission created successfully');
                  
                }else{
                  alert(json.data);
                }
              }
           });
          }
          
         return false;

    });
    function Empty_Inputs_Edit(){
      $("#edit_name_permission").val("");
    }
    $('#form_edit_permission').submit(function(event){
        if ($('#edit_name_permission').val() === "") {
            alert('You must enter the permission name','Atencion!');
            $('#edit_name_permission').focus();
            return false;
        }
      

        let confirmacion=confirm("¿Are you sure about editing this information??");
          if(confirmacion){
            let ID= document.getElementById("_edit_id").value;
            var data = $('#form_edit_permission').serialize();
            $.ajax({
              url: $('#form_edit_permission #_url').val()+"/"+ID,
              headers: {'X-CSRF-TOKEN': $('#form_edit_permission #_token').val()},
              type: 'PUT',
              cache: false,
              data: data,
              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                $("#EditPermission").modal('hide');
                Empty_Inputs_Edit();
                $('#permissions_table').DataTable().ajax.reload();
                 alert('Permission edited successfully');
                  
                }else{
                  alert(json.data);
                }
              }
           });
          }
          
         return false;

    });


    
});