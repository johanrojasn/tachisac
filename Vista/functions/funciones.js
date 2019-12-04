
//---------------------------------------Mantenimiento Usuario-------------------------------------------------//
function agregardatosusuario(nombre, pass, perfil, empleado) {

    cadena = "nombre=" + nombre +
            "&pass=" + pass +
            "&perfil=" + perfil +
            "&empleado=" + empleado;

    $.ajax({
        type: "POST",
        url: "../Controlador/Usuario/Registrar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {

                setTimeout(function () {
                    window.location.reload(1);
                }, 970);
                alertify.success("Agregado con exito :)");

            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}


function agregaformusuario(datos) {
    d = datos.split('||');
    $('#idusuario').val(d[0]);
    $('#nombreu').val(d[1]);
    $('#passu').val(d[2]);
    $('#perfilu').val(d[3]);
    $('#empleadou').val(d[4]);
    $('#estadou').val(d[5]);

}



function actualizaDatosUsuario() {
    id = $('#idusuario').val();
    nombre = $('#nombreu').val();
    pass = $('#passu').val();
    perfil = $('#perfilu').val();
    empleado = $('#empleadou').val();
    estado = $('#estadou').val();

    cadena = "id=" + id +
            "&nombre=" + nombre +
            "&pass=" + pass +
            "&perfil=" + perfil +
            "&empleado=" + empleado +
            "&estado=" + estado;

    $.ajax({
        type: "POST",
        url: "../Controlador/Usuario/Actualizar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                setTimeout(function () {
                    window.location.reload(1);
                }, 970);
                alertify.success("Actualizado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}




function eliminarDatosUsuario(id) {
    cadena = "id=" + id;
    $.ajax({
        type: "POST",
        url: "../Controlador/Usuario/Eliminar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                setTimeout(function () {
                    window.location.reload(1);
                }, 970);
                alertify.success("Eliminado con exito!");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}
function preguntarSiNoUsuario(id) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de ELIMINAR este registro?',
            function () {
                eliminarDatosUsuario(id)
            }
    , function () {
        alertify.error('Se a Cancelado')
    });
}


//------------------------------------------------------------------------------------------------------------------------------//

//--------------------------------------------Mantenimiento Perfil-------------------------------------------------//

function AgregarPerfil(perfil) {

    cadena = "Perfil=" + perfil;

    $.ajax({
        type: "POST",
        url: "../Controlador/Perfil/Registrar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                setTimeout(function () {
                    window.location.reload(1);
                }, 970);
                alertify.success("Agregado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}
function AgregarFrmPerfil(datos) {
    d = datos.split('||');
    $('#idperfil').val(d[0]);
    $('#perfil2').val(d[1]);
}

function ActualizarPerfil() {
    idPerfil = $('#idperfil').val();
    Perfil = $('#perfil2').val();

    cadena = "idPerfil=" + idPerfil +
            "&Perfil=" + Perfil;

    $.ajax({
        type: "POST",
        url: "../Controlador/Perfil/Actualizar.php",
        data: cadena,
        success: function (r) {

            if (r == 1) {
                setTimeout(function () {
                    window.location.reload(1);
                }, 970);
                alertify.success("Actualizado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function eliminarPerfil(idperfil) {

    cadena = "idperfil=" + idperfil;

    $.ajax({
        type: "POST",
        url: "../Controlador/Perfil/Eliminar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                setTimeout(function () {
                    window.location.reload(1);
                }, 970);
                alertify.success("Eliminado con exito!");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}
function preguntarSiNoPerfil(idperfil) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de ELIMINAR este registro?',
            function () {
                eliminarPerfil(idperfil)
            }
    , function () {
        alertify.error('Se a Cancelado')
    });
}

//------------------------------------------------------------------------------------------------------------------------------//

//--------------------------------------------Mantenimiento Empleado-------------------------------------------------//

function AgregarEmpleado(Nombres, Apellidos) {

    cadena = "Nombres=" + Nombres +
            "&Apellidos=" + Apellidos;
    $.ajax({
        type: "POST",
        url: "../Controlador/Empleado/Registrar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                setTimeout(function () {
                    window.location.reload(1);
                }, 970);
                alertify.success("Agregado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function AgregarFrmEmp(datos) {
    d = datos.split('||');
    $('#idEmpleado').val(d[0]);
    $('#Nombres2').val(d[1]);
    $('#Apellidos2').val(d[2]);
}

function actualizaEmpleados() {
    idEmpleado = $('#idEmpleado').val();
    Nombres2 = $('#Nombres2').val();
    Apellidos2 = $('#Apellidos2').val();

    cadena = "idEmpleado=" + idEmpleado +
            "&Nombres2=" + Nombres2 +
            "&Apellidos2=" + Apellidos2;

    $.ajax({
        type: "POST",
        url: "../Controlador/Empleado/Actualizar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                setTimeout(function () {
                    window.location.reload(1);
                }, 970);
                alertify.success("Actualizado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function eliminarEmpleado(idEmpleado) {

    cadena = "idEmpleado=" + idEmpleado;

    $.ajax({
        type: "POST",
        url: "../Controlador/Empleado/Eliminar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                setTimeout(function () {
                    window.location.reload(1);
                }, 970);
                alertify.success("Eliminado con exito!");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}
function preguntarSiNoEmpleado(idEmpleado) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de ELIMINAR este registro?',
            function () {
                eliminarEmpleado(idEmpleado)
            }
    , function () {
        alertify.error('Se a Cancelado')
    });
}

//------------------------------------------------------------------------------------------------------------------------------//

//--------------------------------------------Mantenimiento Entrada-------------------------------------------------//

function AgregarEntrada(Fecha, Materia, Comprobante, Proveedor, Cantidad, PrecioU, Calidad, Comentario) {

    cadena = "Fecha=" + Fecha +
            "&Materia=" + Materia +
            "&Comprobante=" + Comprobante +
            "&Proveedor=" + Proveedor +
            "&Cantidad=" + Cantidad +
            "&PrecioU=" + PrecioU +
            "&Calidad=" + Calidad +
            "&Comentario=" + Comentario;
    $.ajax({
        type: "POST",
        url: "../Controlador/Entrada/Registrar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                setTimeout(function () {
                    window.location.reload(1);
                }, 970);
                alertify.success("Agregado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function AgregarFrmEntrada(datos) {
    d = datos.split('%&74%6%#');
    $('#idEntrada').val(d[0]);
    $('#Fecha2').val(d[1]);
    $('#Materia2').val(d[2]);
    $('#').val(d[3]);
    $('#Comprobante2').val(d[4]);
    $('#Proveedor2').val(d[5]);
    $('#').val(d[6]);
    $('#Cantidad2').val(d[7]);
    $('#PrecioU2').val(d[8]);
    $('#Calidad2').val(d[9]);
    $('#Comentario2').val(d[10]);
}
function AgregarFrmPedidos(datos) {
    d = datos.split('%&74%6%#');
    $('#idPedido').val(d[0]);
    $('#Fecha3').val(d[1]);
    $('#Producto').val(d[3]);
    $('#nOrden').val(d[4]);
    $('#Proveedor3').val(d[6]);
    $('#Cantidad3').val(d[7]);
    $('#PrecioU3').val(d[8]);   
    $('#Total').val(d[11]);
}

function ActualizarEntrada() {
    idEntrada = $('#idEntrada').val();
    Fecha2 = $('#Fecha2').val();
    Materia2 = $('#Materia2').val();
    Comprobante2 = $('#Comprobante2').val();
    Proveedor2 = $('#Proveedor2').val();
    Cantidad2 = $('#Cantidad2').val();
    PrecioU2 = $('#PrecioU2').val();
    Calidad2 = $('#Calidad2').val();
    Comentario2 = $('#Comentario2').val();

    cadena = "idEntrada=" + idEntrada +
            "&Fecha2=" + Fecha2 +
            "&Materia2=" + Materia2 +
            "&Comprobante2=" + Comprobante2 +
            "&Proveedor2=" + Proveedor2 +
            "&Cantidad2=" + Cantidad2 +
            "&PrecioU2=" + PrecioU2 +
            "&Calidad2=" + Calidad2 +
            "&Comentario2=" + Comentario2;


    $.ajax({
        type: "POST",
        url: "../Controlador/Entrada/Actualizar.php",
        data: cadena,
        success: function (r) {

            if (r == 1) {
                setTimeout(function () {
                    window.location.reload(1);
                }, 970);
                alertify.success("Actualizado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function eliminarEntrada(idEntrada) {

    cadena = "idEntrada=" + idEntrada;

    $.ajax({
        type: "POST",
        url: "../Controlador/Entrada/Eliminar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                setTimeout(function () {
                    window.location.reload(1);
                }, 970);
                alertify.success("Eliminado con exito!");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}
function preguntarSiNoEntrada(idEntrada) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de ELIMINAR este registro?',
            function () {
                eliminarEntrada(idEntrada)
            }
    , function () {
        alertify.error('Se a Cancelado')
    });
}

//------------------------------------------------------------------------------------------------------------------------------//

//--------------------------------------------Mantenimiento Materia-------------------------------------------------//
function AgregarMateria(Materia, tMateria) {

    cadena = "Materia=" + Materia +
            "&tMateria=" + tMateria;
    $.ajax({
        type: "POST",
        url: "../Controlador/Materia/Registrar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                setTimeout(function () {
                    window.location.reload(1);
                }, 970);
                alertify.success("Agregado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function agregaformMateria(datos) {
    d = datos.split('||');
    $('#idMateria').val(d[0]);
    $('#Materia2').val(d[1]);
    $('#tMateria2').val(d[2]);

}



function actualizaMateria() {
    idMateria = $('#idMateria').val();
    Materia2 = $('#Materia2').val();
    tMateria2 = $('#tMateria2').val();
  

    cadena = "idMateria=" + idMateria +
            "&Materia2=" + Materia2 +
            "&tMateria2=" + tMateria2;

    $.ajax({
        type: "POST",
        url: "../Controlador/Materia/Actualizar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                setTimeout(function () {
                    window.location.reload(1);
                }, 970);
                alertify.success("Actualizado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}




function eliminarDatosMateria(idMateria) {
    cadena = "idMateria=" + idMateria;
    $.ajax({
        type: "POST",
        url: "../Controlador/Materia/Eliminar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                setTimeout(function () {
                    window.location.reload(1);
                }, 970);
                alertify.success("Eliminado con exito!");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}
function preguntarSiNoUsuario(idMateria) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de ELIMINAR este registro?',
            function () {
                eliminarDatosMateria(idMateria)
            }
    , function () {
        alertify.error('Se a Cancelado')
    });
}

//------------------------------------------------------------------------------------------------------------------------------//

//--------------------------------------------Mantenimiento Proveedor-------------------------------------------------//

function AgregarProveedor(Nombres, Apellidos,Dni,Celular) {

    cadena = "Nombres=" + Nombres +
             "&Apellidos=" + Apellidos +
             "&Dni=" + Dni +
             "&Celular=" + Celular;
    $.ajax({
        type: "POST",
        url: "../Controlador/Proveedor/Registrar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                setTimeout(function () {
                    window.location.reload(1);
                }, 970);
                alertify.success("Agregado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function agregaformProveedor(datos) {
    d = datos.split('||');
    $('#idProveedor').val(d[0]);
    $('#Nombres2').val(d[1]);
    $('#Apellidos2').val(d[2]);
    $('#Dni2').val(d[3]);
    $('#Celular2').val(d[4]);
}

function actualizaProveedor() {
    idProveedor = $('#idProveedor').val();
    Nombres2 = $('#Nombres2').val();
    Apellidos2 = $('#Apellidos2').val();
    Dni2 = $('#Dni2').val();
    Celular2 = $('#Celular2').val();

    cadena = "idProveedor=" + idProveedor +
            "&Nombres2=" + Nombres2 +
            "&Apellidos2=" + Apellidos2 +
            "&Dni2=" + Dni2 +
            "&Celular2=" + Celular2;

    $.ajax({
        type: "POST",
        url: "../Controlador/Proveedor/Actualizar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                setTimeout(function () {
                    window.location.reload(1);
                }, 970);
                alertify.success("Actualizado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

function eliminarDatosProveedor(idProveedores) {
    cadena = "idProveedores=" + idProveedores;
    $.ajax({
        type: "POST",
        url: "../Controlador/Proveedor/Eliminar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                setTimeout(function () {
                    window.location.reload(1);
                }, 970);
                alertify.success("Eliminado con exito!");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });
}
function preguntarSiNoProveedor(idProveedores) {
    alertify.confirm('Eliminar Datos', '¿Esta seguro de ELIMINAR este registro?',
            function () {
                eliminarDatosProveedor(idProveedores)
            }
    , function () {
        alertify.error('Se a Cancelado')
    });
}

//------------------------------------------------------------------------------------------------------------------------------//

//--------------------------------------------Mantenimiento Salida-------------------------------------------------//

function AgregarSalida(idEntrada, Cantidad,PrecioU,nOllas) {

    cadena = "idEntrada=" + idEntrada +
             "&Cantidad=" + Cantidad +
             "&PrecioU=" + PrecioU +
             "&nOllas=" + nOllas;
    $.ajax({
        type: "POST",
        url: "../Controlador/Salida/Registrar.php",
        data: cadena,
        success: function (r) {
            if (r == 1) {
                setTimeout(function () {
                    window.location.reload(1);
                }, 970);
                alertify.success("Agregado con exito :)");
            } else {
                alertify.error("Fallo el servidor :(");
            }
        }
    });

}

