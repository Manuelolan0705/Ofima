var tableClientes; 
var rowTable = "";
var divLoading = document.querySelector("#divLoading");
document.addEventListener('DOMContentLoaded', function(){
 tableClientes = $('#tableClientes').dataTable( {
        "aProcessing":true,
        "aServerSide":true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax":{
            "url": " "+base_url+"/Clientes/getClientes",
            "dataSrc":""
        },
        "columns":[
        {"data":"idpersona"},
        {"data":"indentificacion"},
        {"data":"nombres"},
        {"data":"appat"},
        {"data":"apmat"},
        {"data":"telefono"},
        {"data":"email_user"},
        {"data":"options"},
        ],
             'dom': 'lBfrtip',
        'buttons': [
            {
                "extend": "copyHtml5",
                "text": "<i class='fa fa-files-o' aria-hidden='true'></i> Copiar",
                "titleAttr":"Copiar",
                "className": "btn btn-secondary"
            },{
                "extend": "excelHtml5",
                "text": "<i class='fa fa-file-excel-o' aria-hidden='true'></i> Excel",
                "titleAttr":"Esportar a Excel",
                "className": "btn btn-success"
            },{
                "extend": "pdfHtml5",
                "text": "<i class='fa fa-file-pdf-o' aria-hidden='true'></i> PDF",
                "titleAttr":"Esportar a PDF",
                "className": "btn btn-danger"
            }
        ],
        "resonsieve":"true",
        "bDestroy": true,
        "iDisplayLength": 10,
        "order":[[0,"desc"]]  
    });

var formCliente = document.querySelector("#formCliente");
    formCliente.onsubmit = function(e) {
        e.preventDefault();
        var strIdentificacion = document.querySelector('#txtIdentificacion').value;
        var strNombre = document.querySelector('#txtNombre').value;
        var strApellidoma = document.querySelector('#txtApellidoMat').value;
        var strApellidopa = document.querySelector('#txtApellidoPat').value;
        var strEmail = document.querySelector('#txtEmail').value;
        var intTelefono = document.querySelector('#txtTelefono').value;
        var strDirFiscal = document.querySelector('#txtDirFiscal').value;
        var strPassword = document.querySelector('#txtPassword').value;



        if(strIdentificacion == '' || strNombre == '' ||strApellidoma == '' ||strApellidopa == '' || strEmail == ''  || intTelefono == '' || strDirFiscal == '')
        {
            swal("Atención", "Todos los campos son obligatorios." , "error");
            return false;
            
        }
            let elementsValid = document.getElementsByClassName("valid");
        for (let i = 0; i < elementsValid.length; i++) { 
            if(elementsValid[i].classList.contains('is-invalid')) { 
                swal("Atención", "Por favor verifique los campos en rojo." , "error");
                return false;
            } 
        } 

        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = base_url+'/Clientes/setCliente'; 
        var formData = new FormData(formCliente);
        request.open("POST",ajaxUrl,true);
        request.send(formData);
        request.onreadystatechange = function(){
            if(request.readyState == 4 && request.status == 200){
                var objData = JSON.parse(request.responseText);
                if(objData.status)
                {
                    $('#modalFormCliente').modal("hide");
                    formCliente.reset();
                    swal("Usuarios", objData.msg ,"success");
                  tableClientes.api().ajax.reload(function(){
                       // fntRolesUsuario();
                           /* fntViewUsuario();
                            fntEditUsuario();
                             fntDelUsuario(); */

                   });
                }else{
                    swal("Error", objData.msg , "error");
                }
            }
        }

    }
}, false);



    function fntViewCliente(idpersona){
        
            var idpersona = idpersona;
                var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                var ajaxUrl = base_url+'/Clientes/getCliente/'+idpersona;
                request.open("GET",ajaxUrl,true);
                request.send();
     // $('#modalViewCliente').modal('show');
     request.onreadystatechange = function(){
        if(request.readyState == 4 && request.status == 200){
            var objData = JSON.parse(request.responseText);

            if(objData.status)
            {
               
               document.querySelector("#celIdentificacion").innerHTML = objData.data.indentificacion;
               document.querySelector("#celNombre").innerHTML = objData.data.nombres;
               document.querySelector("#celApellidoPat").innerHTML = objData.data.appat;
               document.querySelector("#celApellidoMat").innerHTML = objData.data.apmat;
               document.querySelector("#celTelefono").innerHTML = objData.data.telefono;
               document.querySelector("#celEmail").innerHTML = objData.data.email_user;
               document.querySelector("#celFechaRegistro").innerHTML = objData.data.fechaRegistro; 
               document.querySelector("#celDireccion").innerHTML = objData.data.direccion;
               $('#modalViewCliente').modal('show');
           }else{
            swal("Error", objData.msg , "error");
           }
      }
    }
}

 
function fntEditCliente(idpersona){


             document.querySelector('#titleModal').innerHTML ="Actualizar Cliente";
             document.querySelector('.modal-header').classList.replace("headerRegister", "headerUpdate");
             document.querySelector('#btnActionForm').classList.replace("btn-primary", "btn-info");
             document.querySelector('#btnText').innerHTML ="Actualizar";

             var idpersona = idpersona;
             var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
             var ajaxUrl = base_url+'/Clientes/getCliente/'+idpersona;
             request.open("GET",ajaxUrl,true);
             request.send();
      //$('#modalViewUser').modal('show');
      request.onreadystatechange = function(){
     //   $('#modalFormUsuario').modal('show')
     if(request.readyState == 4 && request.status == 200){

       var objData = JSON.parse(request.responseText);

       if(objData.status){
        document.querySelector("#idUsuario").value = objData.data.idpersona;
        document.querySelector("#txtIdentificacion").value = objData.data.indentificacion;
        document.querySelector("#txtNombre").value = objData.data.nombres;
        document.querySelector("#txtApellidoPat").value = objData.data.appat;
        document.querySelector("#txtApellidoMat").value = objData.data.apmat;
        document.querySelector("#txtTelefono").value = objData.data.telefono;
        document.querySelector("#txtEmail").value = objData.data.email_user;
        document.querySelector("#txtDirFiscal").value = objData.data.direccion;

    }

}
$('#modalFormCliente').modal('show');
}


    }

    function fntDelCliente(idpersona){


                var idUsuario =idpersona;
                swal({
                    title: "Eliminar Usuario",
                    text: "¿Realmente quiere eliminar el Usuario?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Si, eliminar!",
                    cancelButtonText: "No, cancelar!",
                    closeOnConfirm: false,
                    closeOnCancel: true
                }, function(isConfirm) {

                    if (isConfirm) 
                    {
                        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                        var ajaxUrl = base_url+'/Clientes/delCliente/';
                        var strData = "idUsuario="+idUsuario;
                        request.open("POST",ajaxUrl,true);
                        request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                        request.send(strData);
                        request.onreadystatechange = function(){
                            if(request.readyState == 4 && request.status == 200){
                                var objData = JSON.parse(request.responseText);
                                if(objData.status)
                                {
                                    swal("Eliminar!", objData.msg , "success");
                                 tableClientes.api().ajax.reload(function(){
                            

                                    });
                                }else{
                                    swal("Atención!", objData.msg , "error");
                                }
                            }
                        }
                    }

                });


    }

function openModal()
{
    rowTable = "";
    document.querySelector('#idUsuario').value ="";
    document.querySelector('.modal-header').classList.replace("headerUpdate", "headerRegister");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btnText').innerHTML ="Guardar";
    document.querySelector('#titleModal').innerHTML = "Nuevo Cliente";
    document.querySelector("#formCliente").reset();
    $('#modalFormCliente').modal('show');
}
