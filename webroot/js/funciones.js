$('document').ready(function() {
    $('.moneda').mask('000,000,000,000,000.00', {
        reverse: true
    });
    $('#cat1').change(function() {
        var op = $("#cat1 option:selected").val();
        subcat(op);
    });

    function subcat(op) {
        var op = op;
        $.ajax({
            method: 'get',
            url: "/ajax/subcategorias/" + op, //localhost
            success: function(response) {
                $("#subcat1").empty();
                var length = response.length;
                for (i = 0; i < length; i++) {
                    $("#subcat1").append('<option disabled selected>--Select--</option>');
                    for (j = 0; j < 500; j++) {
                        if (response[i][j]['id_grupos'] != '') {
                            $("#subcat1").append('<option value="' + response[i][j]['id'] + '">' + response[i][j]['denominacion'] + '</option>');
                        }
                    }
                }
            },
            error: function(response) {
                alert("error");
            }
        })
    }
});
$('#form_login').attr('autocomplete', 'off');
document.getElementById('form_login').setAttribute('autocomplete', 'off');
//Formato Gringo
$("#FormatoGringo").on({
    "focus": function(event) {
        $(event.target).select();
    },
    "keyup": function(event) {
        $(event.target).val(function(index, value) {
            return value.replace(/\D/g, "").replace(/([0-9])([0-9]{2})$/, '$1.$2').replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
        });
    }
});
//Formato Gringo
$("#FormatoGringo2").on({
    "focus": function(event) {
        $(event.target).select();
    },
    "keyup": function(event) {
        $(event.target).val(function(index, value) {
            return value.replace(/\D/g, "").replace(/([0-9])([0-9]{2})$/, '$1.$2').replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
        });
    }
});

function verificarpassword() {
    var password = document.getElementById("password").value;
    var password2 = document.getElementById("password2").value;
    if (password != password2) {
        document.getElementById("validatepass").style.display = "block";
    } else {
        document.getElementById("validatepass").style.display = "none";
    }
}
//==============================================================================
//Funcion para colocar todo el texto del input en mayusculas
function mayus(e) {
    e.value = e.value.toUpperCase();
}
//Funcion para permitir solo numeros
function soloNum(e) {
    var key = window.Event ? e.which : e.keyCode
    return ((key >= 48 && key <= 57) || (key == 8))
}
//Funcion para permitir solo numeros
function soloNumPunto(e) {
    var key = window.Event ? e.which : e.keyCode
    return ((key >= 48 && key <= 57) || (key == 8) || (key == 46))
}
//Funcion para permitir solo letras
function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-39-46";
    tecla_especial = false
    for (var i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }
    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
    }
}

function detalles_pago(data) {
    var data = data;
    $('#detalles').modal();
    /*$('#d_id').val($(data).attr('id'));
    $('#d_monto_a_pagar').val($(data).attr('monto_a_pagar'));
    $('#d_banco').val($(data).attr('banco'));
    $('#d_numero_cuenta').val($(data).attr('numero_cuenta'));
    $('#d_tipo_cuenta').val($(data).attr('tipo_cuenta'));
    $('#d_identificacion').val($(data).attr('identificacion'));
    $('#d_identificacion2').val($(data).attr('identificacion'));
    $('#d_titular').val($(data).attr('titular'));
    $('#d_telefono').val($(data).attr('telefono'));
    $('#d_correo').val($(data).attr('correo'));
    $('#d_referencia').val($(data).attr('referencia'));
    $('#d_fecha_pago').val($(data).attr('fecha_pago'));
    $('#d_concepto').val($(data).attr('concepto'));
    $('#d_direccion_envio').val($(data).attr('direccion_envio'));
    $('#d_direccion').val($(data).attr('direccion'));
    $('#d_code').val($(data).attr('code'));
    $('#d_state').val($(data).attr('state'));
    if ($(data).attr('d_numero_cuenta') != '') {
        document.getElementById("trasnf").style.display = "none";
        document.getElementById("pmov").style.display = "flex";
    } else {
        document.getElementById("pmov").style.display = "none";
        document.getElementById("trasnf").style.display = "flex";
    }*/
    //=====================================================================================
    document.getElementById("c_usuario_nombres2").innerHTML = "";
    document.getElementById("c_usuario_nombres2").innerHTML = $(data).attr('usuario_nombres');
    document.getElementById("c_usuario_apellidos2").innerHTML = "";
    document.getElementById("c_usuario_apellidos2").innerHTML = $(data).attr('apellidos');
    document.getElementById("c_usuario_compania2").innerHTML = "";
    document.getElementById("c_usuario_compania2").innerHTML = $(data).attr('compania');
    document.getElementById("c_usuario_correo2").innerHTML = "";
    document.getElementById("c_usuario_correo2").innerHTML = $(data).attr('usuario_correo');
    document.getElementById("c_usuario_movil2").innerHTML = "";
    document.getElementById("c_usuario_movil2").innerHTML = $(data).attr('usuario_movil');
    document.getElementById("c_usuario_direccion22").innerHTML = "";
    document.getElementById("c_usuario_direccion22").innerHTML = $(data).attr('direccion_envio');
    //=====================================================================================
    document.getElementById('url').setAttribute('href', '/pedidos/reporte/' + $(data).attr('id'));
    //=====================================================================================
    op = $(data).attr('id');
    $.ajax({
        method: 'get',
        //url: "/ajax/cargarcuenta/" + op, //Servidor
        url: "/ajax/productos/" + op, //localhost
        success: function(response) {
            document.getElementById("prod2").innerHTML = "";
            var tabla = "<table class=\"table table-hover\">" + "<thead>" + "<th>" + "<th>Quantity</th>" + "</th>" + "<th>Description</th>" + "<th>Price</th>" + "</thead>" + "<tbody>";
            response[0].forEach(element => tabla += "<tr>" + "<td> <img src=\"/productos/productos/photo/" + element['photo_dir'] + "/" + element['photo'] + "\" style=\" height: 100px\"> </td>" + "<td>" + element['cantidad'] + "<td>" + element['denominacion'] + "</td>" + "</td>" + "<td>" + (element['precio'] * element['cantidad']) + "</td>" + "</tr>");
            tabla += "</tbody>" + "</table>";
            document.getElementById("prod2").innerHTML = tabla;
        }
    })
}

function ver_cliente(data) {
    var data = data;
    $('#ver_cliente').modal();
    $('#c_usuario_cedula').val($(data).attr('usuario_cedula'));
    $('#c_usuario_nombres').val($(data).attr('usuario_nombres'));
    $('#c_usuario_correo').val($(data).attr('usuario_correo'));
    $('#c_usuario_movil').val($(data).attr('usuario_movil'));
    $('#c_usuario_fijo').val($(data).attr('usuario_fijo'));
    $('#c_usuario_direccion').val($(data).attr('direccion_envio'));
    $('#c_usuario_direccion2').val($(data).attr('direccion_envio'));
    $('#c_usuario_company').val($(data).attr('concepto'));
    $('#c_usuario_apellidos').val($(data).attr('apellidos'));
    $('#c_usuario_compania').val($(data).attr('compania'));
}

function declina(data) {
    var data = data;
    $('#declinar').modal();
    $('#r_id').val($(data).attr('id'));
    $('#r_motivo').val($(data).attr('motivo'));
    $('#rechazar').attr('action', '/pedidos/declinar'); //servidor
    //$('#rechazar').attr('action', '/registros/declinar');//servidor
}

function ver_productos(data) {
    var data = data;
    op = $(data).attr('id');
    $('#ver_productos').modal();
    $.ajax({
        method: 'get',
        //url: "/ajax/cargarcuenta/" + op, //Servidor
        url: "/ajax/productos/" + op, //localhost
        success: function(response) {
            document.getElementById("prod").innerHTML = "";
            var tabla = "<table class=\"table table-hover\">" + "<thead>" + "<th>" + "<th>Quantity</th>" + "</th>" + "<th>Description</th>" + "<th>Price</th>" + "<th></th>" + "</thead>" + "<tbody>";
            response[0].forEach(element => tabla += "<tr>" + "<td> <img src=\"/productos/productos/photo/" + element['photo_dir'] + "/" + element['photo'] + "\" style=\" height: 100px\"> </td>" + "<td>" + element['cantidad'] + "<td>" + element['denominacion'] + "</td>" + "</td>" + "<td>" + (element['precio'] * element['cantidad']) + "</td>" + "<td>" + "<a class='btn btn-danger' href='/pedidos/eliminarproducto/" + op + "/" + element['id_producto'] + "'> <i class='fa fa-trash'></i> </a>" + "</td>" + "</tr>");
            tabla += "</tbody>" + "</table>";
            document.getElementById("prod").innerHTML = tabla;
        }
    })
}

function modificar_admin(data) {
    var data = data;
    $('#modificar_admin').modal();
    $('#m_a_id').val($(data).attr('id'));
    $('#m_a_cedula').val($(data).attr('cedula'));
    $('#m_a_nombres').val($(data).attr('nombres'));
    $('#m_a_correo').val($(data).attr('correo'));
    $('#m_a_password').val($(data).attr('password'));
    $('#m_a_movil').val($(data).attr('movil'));
    $('#m_a_direccion').val($(data).attr('direccion'));
    $('#m_a_privilegio').val($(data).attr('privilegio'));
}

function modificar_cliente(data) {
    var data = data;
    $('#modificar_cliente').modal();
    $('#m_c_id').val($(data).attr('id'));
    $('#m_c_cedula').val($(data).attr('cedula'));
    $('#m_c_nombres').val($(data).attr('nombres'));
    $('#m_c_apellidos').val($(data).attr('apellidos'));
    $('#m_c_correo').val($(data).attr('correo'));
    $('#m_c_password').val($(data).attr('password'));
    $('#m_c_movil').val($(data).attr('movil'));
    $('#m_c_direccion').val($(data).attr('direccion'));
    $('#m_c_city').val($(data).attr('city'));
    $('#m_c_state').val($(data).attr('state'));
    $('#m_c_code').val($(data).attr('code'));
    $('#m_c_movil').val($(data).attr('movil'));
    $('#m_c_fijo').val($(data).attr('fijo'));
    $('#m_c_movil2').val($(data).attr('movil2'));
    $('#m_c_company').val($(data).attr('company'));
    $('#m_c_nota').val($(data).attr('nota'));
    $('#m_c_privilegio').val($(data).attr('privilegio'));
}

function editar_cuenta(data) {
    var data = data;
    $('#editar_cuenta').modal();
    $('#c_id').val($(data).attr('id'));
    $('#c_banco').val($(data).attr('banco'));
    $('#c_numero_cuenta').val($(data).attr('numero_cuenta'));
    $('#c_tipo_cuenta').val($(data).attr('tipo_cuenta'));
    $('#c_responsable').val($(data).attr('responsable'));
    $('#c_cedula').val($(data).attr('cedula'));
    $('#c_correo').val($(data).attr('correo'));
    $('#c_telefono').val($(data).attr('telefono'));
}

function modificar_producto(data) {
    var data = data;
    $('#modificar_producto').modal();
    $('#pd_id').val($(data).attr('id'));
    $('#pd_id_grupo').val($(data).attr('id_grupo'));
    $('#pd_denominacion').val($(data).attr('denominacion'));
    $('#pd_descripcion').val($(data).attr('descripcion'));
    $('#pd_codigo').val($(data).attr('codigo'));
    $('#FormatoGringo2').val($(data).attr('precio'));
}

function modificar_foto(data) {
    var data = data;
    $('#modificar_foto').modal();
    $('#pdf_id').val($(data).attr('id'));
}

function editar_subcategoria(data) {
    var data = data;
    $('#editar_subcategoria').modal();
    $('#sub_id').val($(data).attr('id'));
    $('#sub_id_grupos').val($(data).attr('id_grupos'));
    $('#sub_denominacion').val($(data).attr('denominacion'));
}

function editar_grupo(data) {
    var data = data;
    $('#editar_grupo').modal();
    $('#g_id').val($(data).attr('id'));
    $('#g_denominacion').val($(data).attr('denominacion'));
}

function editar_bancos(data) {
    var data = data;
    $('#editar_bancos').modal();
    $('#gd_id').val($(data).attr('id'));
    $('#gd_denominacion').val($(data).attr('denominacion'));
    $('#gd_url').val($(data).attr('url'));
}

function pagar(data) {
    var data = data;
    $('#pagar').modal();
    $('#p_id').val($(data).attr('id'));
    $('#pe_id').val($(data).attr('id'));
    $('#p_monto').val($(data).attr('monto'));
    $('#p_monto_bs').val($(data).attr('monto_bs'));
    $('#p_montoe').val($(data).attr('monto'));
    $('#p_monto_bse').val($(data).attr('monto_bs'));
    $('#p_compania').val($(data).attr('compania'));
    $('#p_direccion').val($(data).attr('direccion') + ' ' + $(data).attr('city') + ' ' + $(data).attr('state') + ' ' + $(data).attr('code') );
    $('#p_code').val($(data).attr('code'));
    $('#p_state').val($(data).attr('state'));
}
/*$('document').ready(function() {
    $('#banco').change(function() {
        var op = $("#banco option:selected").val();
        bancos(op);
    });

    function bancos(op) {
        var op = op;
        $.ajax({
            method: 'get',
            url: "/ajax/cuentas/" + op, //localhost
            success: function(response) {
                if (response[0]['numero_cuenta'] == '') {
                    document.getElementById("t").style.display = "none";
                    document.getElementById("pm").style.display = "flex";
                    $("#p_telefono").val(response[0]['telefono']);
                    $("#p_identificacion").val(response[0]['cedula']);
                    //=====================================================
                    $("#p_numero_cuenta").val("");
                    $("#p_rif").val("");
                    $("#p_titular").val("");
                    $("#p_correo").val("");
                    $("#p_tipo_cuenta").val("");
                } else {
                    document.getElementById("pm").style.display = "none";
                    document.getElementById("t").style.display = "flex";
                    $("#p_telefono").val("");
                    $("#p_identificacion").val("");
                    //=====================================================
                    $("#p_numero_cuenta").val(response[0]['numero_cuenta']);
                    $("#p_rif").val(response[0]['cedula']);
                    $("#p_titular").val(response[0]['responsable']);
                    $("#p_correo").val(response[0]['correo']);
                    $("#p_tipo_cuenta").val(response[0]['tipo_cuenta']);
                }
            },
            error: function(response) {
                alert("error");
            }
        })
    }
    //===========================================================================================================D
    $('#cat').change(function() {
        var op = $("#cat option:selected").val();
        alert(op);
        subcat(op);
    });

    function subcat(op) {
        var op = op;
        $.ajax({
            method: 'get',
            url: "/ajax/subcategorias/" + op, //localhost
            success: function(response) {
                $("#subcat").empty();
                var length = response.length;
                for (i = 0; i < length; i++) {
                    $("#subcat").append('<option disabled selected>--Select--</option>');
                    for (j = 0; j < 500; j++) {
                        if (response[i][j]['id_grupos'] != '') {
                            $("#subcat").append('<option value="' + response[i][j]['id'] + '">' + response[i][j]['denominacion'] + '</option>');
                        }
                    }
                }
            },
            error: function(response) {
                alert("error");
            }
        })
    }
});*/