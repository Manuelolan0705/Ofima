    var tableVale;
    document.addEventListener('DOMContentLoaded', function () {


        tableVale = $('#tableVale').dataTable({
            "aProcessing": true,
            "aServerSide": true,
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            },
            "ajax": {
                "url": " " + base_url + "/Vale/getVale",
                "dataSrc": ""
            },
            "columns": [{
                    "data": "idpersona"
                },
                {
                    "data": "indentificacion"
                },
                {
                    "data": "nombres"
                },
                {
                    "data": "appat"
                },
                {
                    "data": "apmat"
                },
                {
                    "data": "direccion"
                },
                {
                    "data": "idvale"
                },
                {
                    "data": "monto"
                },
                {
                    "data": "pago"
                },
                {
                    "data": "quincenas"
                }
            ],
            'dom': 'lBfrtip',
            'buttons': [{
                "extend": "copyHtml5",
                "text": "<i class='fa fa-files-o' aria-hidden='true'></i> Copiar",
                "titleAttr": "Copiar",
                "className": "btn btn-secondary"
            }, {
                "extend": "excelHtml5",
                "text": "<i class='fa fa-file-excel-o' aria-hidden='true'></i> Excel",
                "titleAttr": "Esportar a Excel",
                "className": "btn btn-success"
            }, {
                "extend": "pdfHtml5",
                "text": "<i class='fa fa-file-pdf-o' aria-hidden='true'></i> PDF",
                "titleAttr": "Esportar a PDF",
                "className": "btn btn-danger"
            }],
            "resonsieve": "true",
            "bDestroy": true,
            "iDisplayLength": 10,
            "order": [
                [0, "desc"]
            ]
        });

        //NUEVO VALE 
        var formVale = document.querySelector("#formVale");
        formVale.onsubmit = function (e) {
            e.preventDefault();

            var intIdvp = document.querySelector('#txtIdentificacion').value;
            var doubleMonto = document.querySelector('#listMon').value;
            var doublePago = document.querySelector('#txtPago').value;
            var intQuinc = document.querySelector('#listQuin').value;
            if (intIdvp == '' || doubleMonto == '' || intQuinc == '') {
                //el letro de campos 
                swal("Atención", "Todos los campos son obligatorios.", "error");
                return false;
            }
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl = base_url + '/Vale/setVale';
            var formData = new FormData(formVale);
            request.open("POST", ajaxUrl, true);
            request.send(formData);
            request.onreadystatechange = function () {
                if (request.readyState == 4 && request.status == 200) {
                    var objData = JSON.parse(request.responseText);
                    if (objData.status) {
                        $('#modalFormVale').modal("hide");
                        formVale.reset();
                        swal("Seccion de vales", objData.msg, "success");
                        tableVale.api().ajax.reload(function () {});
                    } else {
                        swal("Error", objData.msg, "error");
                    }
                }
            }

        }



    });

    window.addEventListener('load', function () {}, false);

    function obtenerValeUsuario() {
        var idpersona = $("#txtIdentificacion").val();
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = base_url + '/Vale/getVales_x_Usuario/' + idpersona;
        request.open("GET", ajaxUrl, true);
        request.send();
        //$('#modalViewUser').modal('show');
        request.onreadystatechange = function () {
            if (request.readyState == 4 && request.status == 200) {
                
                var objData = JSON.parse(request.responseText);
                console.log(objData);
                $("#txtNombre").val(objData[0].nombres);
                $("#txtApellidoPat").val(objData[0].appat);
                $("#txtApellidoMat").val(objData[0].apmat);

                // Usa esa estructura 
                // ya chingate los demas
            } else {
               swal("Error", objData.msg, "error");
            }
        }
    }

    $("#btnBuscarPersona").click(function(e) {
        e.preventDefault();
        console.log("dsdf");
        obtenerValeUsuario();
      });

    $('#tableVale').DataTable();

    function openModal() {
        document.querySelector('#idUsuario').value = "";
        document.querySelector('.modal-header').classList.replace("headerUpdate", "headerRegister");
        document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
        document.querySelector('#btnText').innerHTML = "Guardar";
        document.querySelector('#btnTextb').innerHTML = "Buscar";
        document.querySelector('#titleModal').innerHTML = "Nuevo Vale";
        document.querySelector("#formVale").reset();
        $('#modalFormVale').modal('show');
    }

