<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/images/iconoarriba.png"/>
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

    <style>
        .image-container {
            display: flex;
            justify-content: space-around;
        }

        .image-container img {
            transition: all 0.3s ease;
            width: 100px;
            height: 100px;
        }

        .image-container img:hover {
            transform: translateY(-10px);
        }

        .image-container img.active {
            transform: scale(1.2);
        }

        .image-container img.inactive {
            transform: scale(0.8);
        }

        #divCurso {
            opacity: 0;
            transition: opacity 2s;
        }
    </style>

</head>
<body class="vertical  light  ">
<div class="wrapper">
    <?php
            require_once('estaticos/navegador.php');
    ?>
    <main role="main" class="main-content">
        <center><img src="assets/images/escuela.png" style="width: 30%"></center>
        <br><br>



        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="page-title">Ingresa el curso</h2>
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <strong class="card-title">Curso</strong>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group mb-3">
                                        <label for="cbCurso">Seleccione el curso</label>
                                        <select class="custom-select" id="cbCurso" onchange="cargarFechasHorarios()">
                                            <option selected>Abrir menu</option>
                                        </select>
                                    </div>



                                </div> <!-- /.col -->
                                <div class="col-md-6">

                                    <div class="form-group mb-3">
                                        <label for="cbFechaHora">Fecha y horario disponible</label>
                                        <select class="custom-select" id="cbFechaHora">
                                            <option selected>Abrir menu</option>
                                        </select>
                                        <br>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div> <!-- / .card -->
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->



        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="page-title">Registrarse a los asistentes al curso</h2>
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <strong class="card-title">Usuario</strong>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="txtNominaCurso">Nomina</label>
                                        <input type="text" class="form-control" id="txtNominaCurso" value="">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="txtNombrePersonaCurso">Nombre</label>
                                        <input type="text" readonly="" class="form-control-plaintext"
                                               id="txtNombrePersonaCurso" value="">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Tipo de usuario :</label>
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Administrativo">
                                            <label class="form-check-label" for="inlineRadio1">Administrativo</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Operativo">
                                            <label class="form-check-label" for="inlineRadio2">Operativo</label>
                                        </div>
                                    </div>
                                </div> <!-- /.col -->
                                <div class="col-md-6" id="">

                                    <div class="form-group mb-3" id="divApu" style="display: none">
                                        <label for="cbApu">Apu</label>
                                        <select class="custom-select" id="cbApu" onchange="llenarSuper()">
                                            <option selected>Abrir menu</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3" id="divSupervisor" style="display: none">
                                        <label for="cbSupervisor">Supervisor</label>
                                        <select class="custom-select" id="cbSupervisor" onchange="llenarShift()">
                                            <option selected>Abrir menu</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3" id="divShiftleader" style="display: none">
                                        <label for="cbShiftleader">Shifleader</label>
                                        <select class="custom-select" id="cbShiftleader">
                                            <option selected>Abrir menu</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-3" id="divEncargado" style="display: none">
                                        <label for="cbEncargado">Encargado</label>
                                        <select class="custom-select" id="cbEncargado">
                                            <option selected>Abrir menu</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" onclick="cargarUsuario()"
                                    class="btn mb-2 btn-info float-right text-white">Agregar<span
                                    class="fe fe-plus fe-16 ml-2"></span></button>
                        </div>
                    </div> <!-- / .card -->
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Pre-Lista</h5>
                            <table id="tablaCursosPendientes" class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Nomina</th>
                                    <th>Nombre</th>
                                    <th>Apu</th>
                                    <th>Supervisor</th>
                                    <th>ShiftLeader</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div> <!-- / .card -->
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->

        <div class="container-fluid">
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <button type="button" onclick="guardarLista()"
                            class="btn mb-2 btn-success text-white">Subir<span
                            class="fe fe-airplay fe-16 ml-2"></span></button>

                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->




    </main> <!-- main -->
</div> <!-- .wrapper -->

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

    var radios = document.getElementsByName('inlineRadioOptions');

    // Recorre todos los elementos
    for(var i = 0; i < radios.length; i++){
        radios[i].addEventListener('click', function(){
            if(this.value == "Administrativo"){
                var divApu = document.getElementById("divApu");
                divApu.style.display = 'none';
                divApu.classList.add('animate__animated', 'animate__bounceIn');

                var divSupervisor = document.getElementById("divSupervisor");
                divSupervisor.style.display = 'none';
                divSupervisor.classList.add('animate__animated', 'animate__bounceIn');

                var divShiftleader = document.getElementById("divShiftleader");
                divShiftleader.style.display = 'none';
                divShiftleader.classList.add('animate__animated', 'animate__bounceIn');

                var divSuper = document.getElementById("divEncargado");
                divSuper.style.display = 'block';
                divSuper.classList.add('animate__animated', 'animate__bounceIn');
            }else{

                var divApu = document.getElementById("divEncargado");
                divApu.style.display = 'none';
                divApu.classList.add('animate__animated', 'animate__bounceIn');

                var divSuper = document.getElementById("divApu");
                divSuper.style.display = 'block';
                divSuper.classList.add('animate__animated', 'animate__bounceIn');
            }
        });
    }

    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', 'UA-56159088-1');


    // Obtén el elemento
    var input = document.getElementById('txtNominaCurso');

    // Agrega el evento 'keypress'
    input.addEventListener('keypress', function(e){
        // Verifica si la tecla presionada fue Enter
        if(e.key === 'Enter' || e.keyCode === 13){
            document.getElementById("txtNominaCurso").value = generarNomina(document.getElementById("txtNominaCurso").value);
            $.getJSON('https://arketipo.mx/RH/CursosRH/dao/consultaEmpleadoGeneral.php?nomina=' + document.getElementById("txtNominaCurso").value, function (data) {
                for (var i = 0; i < data.data.length; i++) {
                    document.getElementById("txtNombrePersonaCurso").value = data.data[i].NomUser;
                }
            });
        }
    });
    llenarAPU();

    function llenarAPU() {
        $.getJSON('https://grammermx.com/RH/Cursos/dao/daoApu.php', function (data) {
            var select = document.getElementById("cbApu");
            for (var i = 0; i < data.data.length; i++) {
                var createOption = document.createElement("option");
                createOption.text = data.data[i].Nombre;
                createOption.value = data.data[i].Puesto;
                select.appendChild(createOption);
            }
        });
    }

    llenarEncargado();

    function llenarEncargado() {
        $.getJSON('https://grammermx.com/RH/Cursos/dao/daoEncargado.php', function (data) {
            var select = document.getElementById("cbEncargado");
            for (var i = 0; i < data.data.length; i++) {
                var createOption = document.createElement("option");
                createOption.text = data.data[i].nombre;
                createOption.value = data.data[i].nombre;
                select.appendChild(createOption);
            }
        });
    }

    function llenarSuper() {
        $.getJSON('https://grammermx.com/RH/Cursos/dao/daoSupervisor.php?APU=' + document.getElementById("cbApu").value, function (data) {
            var selectS = document.getElementById("cbSupervisor");
            selectS.innerHTML = "";

            var selectA = document.getElementById("cbShiftleader");
            selectA.innerHTML = "";


            var createOptionDef = document.createElement("option");
            createOptionDef.text = "Seleccione";
            createOptionDef.value = "";
            selectS.appendChild(createOptionDef);

            for (var i = 0; i < data.data.length; i++) {
                var createOptionS = document.createElement("option");
                createOptionS.text = data.data[i].Supervisor;
                createOptionS.value = data.data[i].Supervisor;
                selectS.appendChild(createOptionS);
            }

            var divSuper = document.getElementById("divSupervisor");
            divSuper.style.display = 'block';
            divSuper.classList.add('animate__animated', 'animate__bounceIn');

        });
    }

    function llenarShift() {
        $.getJSON('https://grammermx.com/RH/Cursos/dao/daoShiftLeader.php?APU=' + document.getElementById("cbSupervisor").value, function (data) {
            var selectS = document.getElementById("cbShiftleader");
            selectS.innerHTML = "";

            var createOptionDefS = document.createElement("option");
            createOptionDefS.text = "Seleccione";
            createOptionDefS.value = "";
            selectS.appendChild(createOptionDefS);

            for (var i = 0; i < data.data.length; i++) {
                var createOptionS = document.createElement("option");
                createOptionS.text = data.data[i].ShiftLeader;
                createOptionS.value = data.data[i].ShiftLeader;
                selectS.appendChild(createOptionS);
            }

            var divShift = document.getElementById("divShiftleader");
            divShift.style.display = 'block';
            divShift.classList.add('animate__animated', 'animate__bounceIn');

        });
    }
    cargarCursosSelect();
    var cursos = [];

    function cargarCursosSelect() {

        $.getJSON('https://grammermx.com/RH/Cursos/dao/consultaCursoCapacidad.php', function (data) {
            cursos = data.data;
            var select = document.getElementById("cbCurso");
            select.innerHTML = "";
            var nombresCursos = [];

            var createOption = document.createElement("option");
            createOption.text = "Seleccione curso";
            createOption.value = "Seleccione curso";
            select.appendChild(createOption);

            for (var i = 0; i < cursos.length; i++) {
                if (!nombresCursos.includes(cursos[i].NombreCurso)) {
                    nombresCursos.push(cursos[i].NombreCurso);
                    createOption = document.createElement("option");
                    createOption.text = cursos[i].NombreCurso;
                    createOption.value = cursos[i].NombreCurso;
                    select.appendChild(createOption);
                }
            }
            var divCurso = document.getElementById("divCurso");
            divCurso.style.display = 'block';
            divCurso.classList.add('animate__animated', 'animate__bounceIn');
        });
    }

    function cargarFechasHorarios() {
        var select = document.getElementById("cbFechaHora");
        select.innerHTML = ""; // Limpiar el select
        var cursoSeleccionado = document.getElementById("cbCurso").value;
        for (var i = 0; i < cursos.length; i++) {
            if (cursos[i].NombreCurso == cursoSeleccionado) {

                if (parseInt(cursos[i].CapacidadRestante) <= 0){

                }else{
                    var createOption = document.createElement("option");
                    createOption.text = cursos[i].Fecha + ", " + cursos[i].Horario + " (" + cursos[i].CapacidadRestante + " disponibles)";
                    createOption.value = cursos[i].Fecha + ", " + cursos[i].Horario;
                    select.appendChild(createOption);
                }

            }
        }
    }



    async function agregarAsistenciaCurso() {
        var nomina = document.getElementById("txtNominaCurso");
        var nombre = document.getElementById("txtNombrePersonaCurso");
        var apu = document.getElementById("cbApu");
        var supervisor = document.getElementById("cbSupervisor");
        var shiftLeader = document.getElementById("cbShiftleader");
        var cursos = document.getElementById("cbHorario");

        var errorOcurrido = false;

        const dataRegistro = new FormData();

        dataRegistro.append('nomina', nomina.value.trim());
        dataRegistro.append('nombre', nombre.value.trim());
        dataRegistro.append('apu', apu.value.trim());
        dataRegistro.append('supervisor', supervisor.value.trim());
        dataRegistro.append('shiftLeader', shiftLeader.value.trim());

        var fetchPromises = [];

        for (var i = 0; i < cursos.options.length; i++) {
            dataRegistro.append('horario', cursos.options[i].value.trim());

            var horarioNormal = cursos.options[i].value;
            var horarioParts = horarioNormal.split(", ");

            var Curso = horarioParts[0].trim();
            var Fecha = horarioParts[1].trim();
            var HorarioCurso = horarioParts[2].trim();

            await $.getJSON('https://grammermx.com/RH/Cursos/dao/consultaCapacidad.php?curso=' + Curso + '&fecha=' + Fecha + '&horario=' + HorarioCurso, function (data) {
                if (data.data[0].Contador < data.data[0].Capacidad) {
                    var fetchPromise = fetch('dao/guardarBitacoraCurso.php', {
                        method: 'POST',
                        body: dataRegistro
                    })
                        .then(function (response) {
                            if (!response.ok) {
                                throw "Error en la llamada Ajax";
                            }
                        })
                        .catch(function (err) {
                            console.log(err);
                        });

                    fetchPromises.push(fetchPromise);
                } else {
                    errorOcurrido = true;
                    Swal.fire({
                        icon: 'error',
                        title: 'Cupo lleno.', showConfirmButton: false, input: 'none',
                        text: 'No se acompleto el registro debido a la capacidad del curso.'
                    })
                }
            });

        }

        Promise.all(fetchPromises)
            .then(function () {
                if (!errorOcurrido) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Enviado.', showConfirmButton: false, input: 'none',
                        text: 'Registro enviardo.'
                    })
                    location.reload();
                }
            })
            .catch(function (err) {
                console.log(err);
            });


    }

    var lista = [];

    function cargarUsuario() {

        var table = $("#tablaCursosPendientes");
        var radioValue = document.querySelector('input[name="inlineRadioOptions"]:checked').value;
        var nominaValue = document.getElementById("txtNominaCurso").value;
        var nombreValue = document.getElementById("txtNombrePersonaCurso").value;

        // Verifica si el número de nómina y el nombre ya existen en la lista
        for (var i = 0; i < lista.length; i++) {
            if (lista[i][0] === nominaValue || lista[i][1] === nombreValue) {
                // Si el número de nómina y el nombre ya existen, retorna de la función sin hacer nada
                return;
            }
        }

        if (radioValue === "Administrativo"){
            var newRow = $("<tr></tr>");
            var nominaCell = $("<td></td>").text(nominaValue);
            var nombreCell = $("<td></td>").text(nombreValue);
            var apuCell = $("<td></td>").text(document.getElementById("cbEncargado").value);
            var supervisorCell = $("<td></td>").text("NA");
            var shiftleaderCell = $("<td></td>").text("NA");
            lista.push([nominaCell.text(), nombreCell.text(), apuCell.text(), supervisorCell.text(), shiftleaderCell.text()]);
            newRow.append(nominaCell);
            newRow.append(nombreCell);
            newRow.append(apuCell);
            newRow.append(supervisorCell);
            newRow.append(shiftleaderCell);
            table.append(newRow);
        }else{
            var newRow = $("<tr></tr>");
            var nominaCell = $("<td></td>").text(nominaValue);
            var nombreCell = $("<td></td>").text(nombreValue);
            var apuCell = $("<td></td>").text(document.getElementById("cbApu").value);
            var supervisorCell = $("<td></td>").text(document.getElementById("cbSupervisor").value);
            var shiftleaderCell = $("<td></td>").text(document.getElementById("cbShiftleader").value);
            lista.push([nominaCell.text(), nombreCell.text(), apuCell.text(), supervisorCell.text(), shiftleaderCell.text()]);
            newRow.append(nominaCell);
            newRow.append(nombreCell);
            newRow.append(apuCell);
            newRow.append(supervisorCell);
            newRow.append(shiftleaderCell);
            table.append(newRow);
        }

        document.getElementById("txtNominaCurso").value="";
        document.getElementById("txtNombrePersonaCurso").value="";

    }


    function guardarEvaluacion() {

        var nomina = document.getElementById("txtNominaCurso");
        var nombre = document.getElementById("txtNombrePersonaCurso");
        var comentarios = document.getElementById("txtComentariosCurso");

        const data = new FormData();

        data.append('nomina', cursoGlobal);
        data.append('nombre', horarioGlobal);
        data.append('apu', fechaGlobal);
        data.append('supervisor', comentarios.value);
        data.append('shiftLeader', calificacionGlobal);
        data.append('horario', nomina.value);

        fetch('dao/guardarBitacoraCurso.php', {
            method: 'POST',
            body: data
        })
            .then(function (response) {
                if (response.ok) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Enviado.', showConfirmButton: false, input: 'none',
                        text: 'Registro enviardo.'
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

    function guardarLista() {
        var horario = document.getElementById("cbCurso").value+", "+document.getElementById("cbFechaHora").value;

        for (var i = 0; i < lista.length; i++) {

            const data = new FormData();

            data.append('nomina', lista[i][0]);
            data.append('nombre', lista[i][1]);
            data.append('apu', lista[i][2]);
            data.append('supervisor', lista[i][3]);
            data.append('shiftLeader', lista[i][4]);
            data.append('horario', horario);

            fetch('dao/guardarBitacoraCurso.php', {
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


        location.reload();
    }

    function generarNomina(nomina) {

        if (nomina.length === 1){return nomina = "0000000"+nomina;}
        if (nomina.length === 2){return nomina = "000000"+nomina;}
        if (nomina.length === 3){return nomina = "00000"+nomina;}
        if (nomina.length === 4){return nomina = "0000"+nomina;}
        if (nomina.length === 5){return nomina = "000"+nomina;}
        if (nomina.length === 6){return nomina = "00"+nomina;}
        if (nomina.length === 7){return nomina = "0"+nomina;}
        if (nomina.length === 8){return nomina = nomina;}


    }


</script>
</body>
</html>