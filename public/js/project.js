$(document).ready(function () {
    // Evento que ocurre cuando es cambiado el usuario
    //y se rellena el correo electronico en el campo

    function vaciar_Inputs_Add() {
        $("#project_name").val("");
        $("#address").val("");
        $("#client").val("");
    }
    function vaciar_Inputs_Edit() {
        $("#edit_project_name").val("");
        $("#edit_address").val("");
        $("#edit_client").val("");
    }

    //metodo para ingresar registro
    $("#form_projects").submit(function (event) {
        if ($("#project_name").val() == "") {
            alert("Debe ingresar el nombre del cliente", "Atencion!");
            $("#project_name").focus();
            return false;
        }
        if ($("#address").val() == "") {
            alert("Debe seleccionar el tipo de identificación", "Atencion!");
            $("#address").focus();
            return false;
        }
        if ($("#client").val() == "") {
            alert("Debe ingresar el numero de identificación", "Atencion!");
            $("#client").focus();
            return false;
        }
        if ($("#id_user_create").val() == "") {
            alert("No se encuentra el id del usuario");
            $("#id_user_create").focus();
            return false;
        }
        let confirmacion = confirm("¿Esta seguro de agregar esta información?");
        if (confirmacion) {
            var data = $("#form_projects").serialize();

            console.log(data);
            $.ajax({
                url: $("#form_projects #_url").val(),
                headers: { "X-CSRF-TOKEN": $("#form_projects #_token").val() },
                type: "POST",
                cache: false,
                data: data,
                
                success: function (response) {
                    var json = $.parseJSON(response);
                    if (json.success) {
                        $("#addProjectsModal").modal("hide");
                        vaciar_Inputs_Add();
                        $("#projects_table").DataTable().ajax.reload();
                        alert("Project created successfully");
                    } else {
                        alert(json.data);
                    }
                },
            });
        }
        return false;
    });

    $("#form_edit_projects").submit(function (event) {
        if ($("#edit_project_name").val() == "") {
            alert("Debe ingresar el nombre del cliente", "Atencion!");
            $("#project_name").focus();
            return false;
        }
        if ($("#edit_address").val() == "") {
            alert("Debe seleccionar el tipo de identificación", "Atencion!");
            $("#address").focus();
            return false;
        }
        if ($("#edit_client").val() == "") {
            alert("Debe ingresar el numero de identificación", "Atencion!");
            $("#client").focus();
            return false;
        }
        if ($("#id_user_edit").val() == "") {
            alert("No se encuentra el id del usuario");
            $("#id_user_create").focus();
            return false;
        }
        let confirmacion = confirm("¿Esta seguro de editar esta información?");
        if (confirmacion) {
            let ID = document.getElementById("_edit_id").value;
            var data = $("#form_edit_projects").serialize();
            $.ajax({
                url: $("#form_projects #_url").val() + "/" + ID,
                headers: {
                    "X-CSRF-TOKEN": $("#form_projects #_token").val(),
                },
                type: "PUT",
                cache: false,
                data: data,
                success: function (response) {
                    var json = $.parseJSON(response);
                    if (json.success) {
                        $("#EditProjects").modal("hide");
                        vaciar_Inputs_Edit();
                        $("#projects_table").DataTable().ajax.reload();
                        alert("Project edited successfully");
                    } else {
                        alert(json.data);
                    }
                },
            });
        }

        return false;
    });
});
