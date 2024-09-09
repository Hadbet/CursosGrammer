<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>GRAMMER RH</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="css/feather.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="css/app-dark.css" id="darkTheme" disabled>
    <!-- CSS -->
    <link rel="stylesheet" href="lib/sweetalert2.css">
    <!-- JavaScript -->
    <script src="lib/sweetalert2.all.min.js"></script>

</head>
<body class="vertical  light  ">
<div class="wrapper">
    <?php
            require_once('estaticos/navegador.php');
    ?>
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="h3 mb-4 page-title">Perfil Laboral</h2>
                    <div class="row mt-5 align-items-center">
                        <div class="col-md-3 text-center mb-5">
                            <div class="avatar avatar-xl">
                                <img id="ImagenPerfil" src="./assets/images/verde.png" alt="..." class="avatar-img rounded-circle">
                            </div>
                            <br>
                            <button type="button" class="btn mb-2 btn-dark text-white" data-toggle="modal" data-target="#varyModal" data-whatever="@mdo">Cambiar fotografia<span class="fe fe-chevron-right fe-16 ml-2"></span></button>
                        </div>

                        <div class="col">
                            <div class="row align-items-center">
                                <div class="col-md-7">
                                    <h4 class="mb-1" id="txtNombre"></h4>
                                    <p class="small mb-3"><span class="badge badge-dark" id="txtPuesto"></span></p>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-7">
                                    <div class="form-group mb-3">
                                        <label for="txtFechaNacimiento">Fecha de nacimiento</label>
                                        <input type="date" class="form-control" id="txtFechaNacimiento">
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="form-group mb-3">
                                        <label for="txtCorreo">Correo</label>
                                        <input type="email" class="form-control" id="txtCorreo">
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <p class="text-muted"> Toda la información que ingreses aquí será guardada y respalda
                                        , y usada solamente para méritos laborales, eres libre de poder llenarlo o no. </p>
                                </div>

                                <div class="col-md-7">
                                    <button type="button" onclick="ingresoDatos();" id="btnGuardarPerfil" class="btn mb-2 btn-success text-white">Guardar<span class="fe fe-chevron-right fe-16 ml-2"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <h3>Destacados</h3>

                    <div class="row my-4" id="cartasDestacados">
                    </div>

                </div> <!-- /.col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->

    </main> <!-- main -->
</div> <!-- .wrapper -->

<div class="modal fade" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">Configuración de perfil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="dao/subirPerfil.php" method="post" enctype="multipart/form-data">
                    <div class="form-group mb-3">

                        <label for="nominaUser">Nomina</label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="nomina" id="nominaUser" value="00001606" >
                        </div>

                        <label for="customFile">Cambio de foto de perfil</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="imagenes[]" id="customFile">
                            <label class="custom-file-label" for="customFile">Seleccione la imagen</label>
                        </div>
                        <p></p>
                        <label for="customFile" style="color: red;">Se les notifica que solo se les permitira fotos en donde este visible su cara, en dado caso de
                        subir una fotografia no adecuada se cambiara o reportara.</label>
                        <br><br>
                        <button type="submit" class="btn mb-2 btn-primary float-right">Subir</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/simplebar.min.js"></script>
<script src='js/daterangepicker.js'></script>
<script src='js/jquery.stickOnScroll.js'></script>
<script src="js/tinycolor-min.js"></script>
<script src="js/config.js"></script>
<script src="js/apps.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', 'UA-56159088-1');

    cargarEmpleado();
    function cargarEmpleado() {
        $.getJSON('https://arketipo.mx/RH/CursosRH/dao/consultaPerfil.php?nomina=00001606', function (data){

            var nombre = data.data.length > 0 ? data.data[0].Nombre : '';
            var email = data.data.length > 0 ? data.data[0].Email : '';
            var fechaNacimiento = data.data.length > 0 ? data.data[0].FechaNacimiento : '';
            var area = data.data.length > 0 ? data.data[0].Area : '';
            var rol = data.data.length > 0 ? data.data[0].Rol : '';
            var telefonoEmergencia = data.data.length > 0 ? data.data[0].TelefonoEmergencia : '';
            var idImagen = data.data.length > 0 ? data.data[0].IdImagenPerfil : '';

            document.getElementById("txtNombre").innerHTML = nombre;
            document.getElementById("txtPuesto").innerHTML = area;
            document.getElementById("txtFechaNacimiento").value = fechaNacimiento;
            document.getElementById("txtCorreo").value = email;
            if (idImagen === ""){
            }else {
                document.getElementById("ImagenPerfil").src = "perfiles/00001606/"+idImagen;
            }
        });
    }
    cargarCursos();
    function cargarCursos() {
        $.getJSON('https://arketipo.mx/RH/CursosRH/dao/consultaCursoUsuario.php?nomina=00001606', function (data){
            for (var i = 0; i < data.data.length; i++) {
                if (data.data[i].EstatusAsistencia==="3"){
                    if (data.data[i].Evaluacion>9){estatusImagen = "primero";}
                    if (data.data[i].Evaluacion<9 && data.data[i].Evaluacion>=8){estatusImagen = "segundo";}
                    if (data.data[i].Evaluacion<8){estatusImagen = "tercero";}
                    document.getElementById("cartasDestacados").innerHTML += "<div class=\"col-md-2\"><div class=\"card mb-12 shadow\"><div class=\"card-body my-n3\"><div class=\"row align-items-center\"><div class=\"col-12 text-center\"><h3 class=\"h5 mt-4 mb-1\">"+data.data[i].Curso+"</h3><img src=\"assets/images/medallas/"+estatusImagen+".png\"></div></div></div><div class=\"card-footer\"><a class=\"d-flex justify-content-between text-muted\"><span>Calificacion</span><i class=\"fe fe-chevron-right\">"+data.data[i].Evaluacion+"</i></a></div></div></div>";
                }
            }
        });
    }

    function ingresoDatos() {
        var fechaNacimiento = document.getElementById("txtFechaNacimiento").value;
        var correo = document.getElementById("txtCorreo").value;

        const data = new FormData();

        data.append('fechaNacimiento', fechaNacimiento);
        data.append('correo', correo);
        data.append('nomina', "00001606");

        fetch('dao/actualizarPerfil.php', {
            method: 'POST',
            body: data
        })
            .then(function (response) {
                if (response.ok) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Enviado.', showConfirmButton: false, input: 'none',
                        text: 'Registro enviado.'
                    })
                    location.reload();
                } else {
                    throw "Error en la llamada Ajax";
                }

            })
            .then(function (texto) {
                console.log(texto);
            })
            .catch(function (err) {
                console.log(err);
            });

    }
</script>
</body>
</html>