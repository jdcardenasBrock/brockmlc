

$(document).ready(function(){
    // Evento que ocurre cuando es cambiado el usuario
    //y se rellena el correo electronico en el campo
    
 function vaciar_Inputs_Add(){
    $('#name').val("");
    $('#email').val("");
    $('#password').val("");
 }
    //metodo para ingresar registro
    $('#form_add_users').submit(function(event){
        if ($('#name').val() === "") {
            alert('You must enter the full name','Warning!');
            $('#name').focus();
            return false;
        }
        if ($('#email').val() === "") {
          alert('You must enter the username','Warning!');
          $('#email').focus();
          return false;
        }
        if ($('#password').val() === "") {
          alert('You must enter the password','Warning!');
          $('#password').focus();
          return false;
        }

        if ($('#block_option').val() === 1) {
          if ($('#block_date_select').val() === "") {
            alert('You must select the block date','Warning!');
            $('#block_date_select').focus();
            return false;
          }
        }
       
      

        let confirmacion=confirm("Are you sure you want to add this information?");
          if(confirmacion){

            var data = $('#form_add_users').serialize();

            $.ajax({
              url: $('#form_add_users #_url').val(),
              headers: {'X-CSRF-TOKEN': $('#form_add_users #_token').val()},
              type: 'POST',
              cache: false,
              data: data,
              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                $("#addUser").modal('hide');
                vaciar_Inputs_Add();
                $('#users_table').DataTable().ajax.reload();
                 alert('User created Successfully');
                  
                }else{
                  alert(json.data);
                }
              }
           });
          }
          
         return false;

    });

    function validateRadioButtons(inputName){
      let seleccionado = false;
      
      for (var i = 0; i < inputName.length; i++) {
        if (inputName[i].checked) {
          seleccionado = true;
          break;
        }
      }
      return seleccionado;
    }

    function Empty_Inputs_Edit(){
      $("#edit_name_permission").val("");
      $('#edit_email').val("");
      $('#edit_password').val("");
      $('#edit_block_option').val(0);
      $('#edit_block_date_select').val("");
    }


    
    $('#form_edit_users').submit(function(event){
        if ($('#edit_name').val() === "") {
            alert('You must enter the full name','Atention!');
            $('#edit_name').focus();
            return false;
        }
      
        if ($('#edit_email').val() === "") {
          alert('You must enter the username','Atention!');
          $('#edit_email').focus();
          return false;
        }
        if ($('#edit_password').val() === "") {
          alert('You must enter the password','Atention!');
          $('#edit_password').focus();
          return false;
        }
        
        let rol_user = document.getElementsByName("edit_rol_user"); 
        let rolIsSelected=validateRadioButtons(rol_user);
        if (!rolIsSelected) {
          alert("You must select a rol.",'Atention!');
          return false;
        }

        let confirmacion=confirm("Are you sure you want to edit this information?");
          if(confirmacion){
            let ID= document.getElementById("_edit_id").value;
            var data = $('#form_edit_users').serialize();
            $.ajax({
              url: $('#form_edit_users #_url').val()+"/"+ID,
              headers: {'X-CSRF-TOKEN': $('#form_edit_users #_token').val()},
              type: 'PUT',
              cache: false,
              data: data,
              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                $("#EditUser").modal('hide');
                Empty_Inputs_Edit();
                $('#users_table').DataTable().ajax.reload();
                 alert('User edited successfully');
                  
                }else{
                  alert(json.data);
                }
              }
           });
          }
          
         return false;

    });


    
});