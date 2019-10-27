var tabla;

//Función que se ejecuta al inicio
function init(){
    mostrarTabla(false);
    
    $("#formBuscar").on("submit",function(e)
    {
        guardaryeditar(e);	
    })
}

//Función mostrar formulario
function mostrarTabla(flag)
{
    if (flag)
    {
        //getActa();
                        
        $("#div-tabla").show();
    }
    else
    {
        $("#div-tabla").hide();
    }
}

//Función Listar
//Función para guardar o editar

function guardaryeditar(e)
{
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardar").prop("disabled",true);
    var formData = new FormData($("#formulario")[0]);

    $.ajax({
        url: "../ajax/categoria.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,

        success: function(datos)
        {                    
            bootbox.alert(datos);	          
            mostrarform(false);
            tabla.ajax.reload();
        }

    });
    limpiar();
}

function getActa(idMesa)
{
    $.post("../ajax/categoria.php?op=mostrar",{idcategoria : idcategoria}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);

		$("#nombre").val(data.nombre);
		$("#descripcion").val(data.descripcion);
 		$("#idcategoria").val(data.idcategoria);

 	})
}


init();