

$(document).ready(function(){
    // Evento que ocurre cuando es cambiado el usuario
    //y se rellena el correo electronico en el campo
    
 function vaciar_Inputs_Add(){
    $('#name').val("");
 }
    //metodo para ingresar registro
    $('#form_add_roles').submit(function(event){
        if ($('#name').val() === "") {
            alert('You must enter the role name.','Warning!');
            $('#name').focus();
            return false;
        }
        if ($('input[type=checkbox]:checked').length==0){       
          alert("Specify at least one permission");
          return false;
       }
       
      

        let confirmacion=confirm("Are you sure you want to add this information?");
          if(confirmacion){

            var data = $('#form_add_roles').serialize();
            $.ajax({
              url: $('#form_add_roles #_url').val(),
              headers: {'X-CSRF-TOKEN': $('#form_add_roles #_token').val()},
              type: 'POST',
              cache: false,
              data: data,
              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                $("#addRoles").modal('hide');
                vaciar_Inputs_Add();
                $('#roles_table').DataTable().ajax.reload();
                 alert('Role created successfully');
                  
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
    $('#form_edit_role').submit(function(event){
        if ($('#edit_name_role').val() === "") {
            alert('You must enter the Role Name','Warning!');
            $('#edit_name_role').focus();
            return false;
        }
      

        let confirmacion=confirm("Are you sure you want to edit this information?");
          if(confirmacion){
            let ID= document.getElementById("_edit_id").value;
            var data = $('#form_edit_role').serialize();
            $.ajax({
              url: $('#form_edit_role #_url').val()+"/"+ID,
              headers: {'X-CSRF-TOKEN': $('#form_edit_role #_token').val()},
              type: 'PUT',
              cache: false,
              data: data,
              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                $("#EditRole").modal('hide');
                Empty_Inputs_Edit();
                $('#roles_table').DataTable().ajax.reload();
                 alert('Role edited Successfully exitosamente');
                  
                }else{
                  alert(json.data);
                }
              }
           });
          }
          
         return false;

    });


    
});