<?php
header('Content-Type: text/html; charset=UTF-8');
//error_reporting(0);
$currentPage = $_SERVER["PHP_SELF"];
require_once('bd/sle.php');
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="application-name" content="Presupuesto Participativo - Dosquebradas 2020 - 2023">
    <meta name="author" content="Alcaldia Municipio de Dosquebradas">
    <meta name="description" content="Presupuesto Participativo - Dosquebradas 2020 - 2023">
    <meta name="generator" content="www.dosquebradas.gov.co">
    <meta name="keywords" content="Presupuesto Participativo, Dosquebradas">

    <title>Presupuesto Participativo - Dosquebradas</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="ajax_arbol_plan.js"></script>

</head>

<!-- <body style="background-color:#F1F7E5;"> -->

<body>

    <div class="container">

        <!-- Barra de navegacion superior -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
            <a class="navbar-brand" href="index.php"><img src="images/logo_miniatura_administracion.png" width="25" height="25" alt=""></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Presupuesto participativo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="fase1_socializacion.php">1 | Socialización</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="fase2_formulacion_proyectos.php">2 | Formulación proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://presupuestoparticipativo.dosquebradas.gov.co/app_votacion_2021/?c=Preinscripcion&a=Index&token="><b>3 | Preinscripción</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://presupuestoparticipativo.dosquebradas.gov.co/app_votacion_2021/?c=Votacion&a=Index&token=">4 | Votación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://presupuestoparticipativo.dosquebradas.gov.co/app_votacion_2021/?c=Resultados&a=Index&token=">5 | Resultados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="prensa.php">Prensa y medios</a>
                    </li>

                </ul>
            </div>
        </nav>

        <hr>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12" align="center">
                <div style="font-size: 32pt"><b>Presupuesto participativo Dosquebradas</b></div>
                <div style="font-size: 18pt"><b>Fase 2 formulacion de proyectos</b></div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12" align="center">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/hMYk6x-nlcE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="col-lg-6 col-md-6 col-xs-12" align="center">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/ZItVFhTyHtQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <hr><br>

        <div class="row">
            <div class="col-md-3" align="center">
                <div style="font-size: 12pt">Formato unico proyecto<br><br></div>
                <div><a href="repositorio/formato_unico_proyecto_idea_v2.docx"><img src="images/icono-word.png" width="50%"></a></div>
            </div>

            <div class="col-md-3" align="center">
                <div style="font-size: 12pt">Restricciones de viabilidad<br><br></div>
                <div><a href="repositorio/restricciones_viabilidad_proyecto_idea.docx"><img src="images/icono-word.png" width="50%"></a></div>
            </div>

            <div class="col-md-3" align="center">
                <div style="font-size: 12pt">Mecanismo concertacion proyectos presupuesto participativo<br><br></div>
                <div><a href="repositorio/mecanismo_concertacion_proyectos_presupuesto_participativo_v3.pdf"><img src="images/icono-pdf.png" width="20%"></a></div>
            </div>

            <div class="col-md-3" align="center">
                <div style="font-size: 12pt">Circular N° 061 solicitud certificacion viabilidad tecnica<br><br></div>
                <div><a href="repositorio/circular_061_solicitud_viabilidad_tecnica.pdf"><img src="images/icono-pdf.png" width="20%"></a></div>
            </div>

        </div>

        <br><hr><br><br>

        <?php 
            // Consulta los proyectos a listar
            $sql = "SELECT * FROM proyectos";
            $result = mysqli_query($sle, $sql);
        ?>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <center><h2>Proyectos inscritos por comunas - Vigencia 2021</h2></center><br><br>
            </div>

            <div class="col-lg-12 col-md-12 col-xs-12" align="center">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" style="width: 20%;">Comuna</th>
                            <th scope="col">Proyecto</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php 
                    while($rows = mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<th scope='row'>Comuna N° $rows[2]</th>";
                        echo "<td>$rows[1]</td>";
                        echo "</tr>";
                    }
                    ?>

                    </tbody>
                </table>
            </div>
        </div>

        <br><hr><br><br>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <center><h2>Proyectos inscritos zona rural - Vigencia 2021</h2></center><br><br>
            </div>

            <div class="col-lg-12 col-md-12 col-xs-12" align="center">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" style="width: 20%;">Comuna</th>
                            <th scope="col">Proyecto</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                        <th scope='row'>Serrania Las Marcadas</th>
                        <td>Mejoramiento vial vía rural acceso vereda alto del oso, constituido por: cunetas, transversales manejo de agua lluvia, disipadores de energía. Tramo comprendido desde el punto de partida de la Y vía Frailes al alto del Oso 330 mts adelante de la comuna Serranía de las Marcadas del municipio de Dosquebradas-Risaralda.</td>
                        </tr>

                        <tr>
                        <th scope='row'>Serrania Las Marcadas</th>
                        <td>Tecnología informática comunitaria en zona rural.</td>
                        </tr>

                        <tr>
                        <th scope='row'>Serrania Las Marcadas</th>
                        <td>Dotación de bicicletas para la comunidad de la vereda el alto del oso municipio de Dosquebradas-Risaralda.</td>
                        </tr>

                        <tr>
                        <th scope='row'>Serrania Alto del Nudo</th>
                        <td>Dotación móvil y tecnológica.</td>
                        </tr>

                        <tr>
                        <th scope='row'>Serrania Alto del Nudo</th>
                        <td>Dotación de herramientas para mantenimiento de vías  terciarias de la serranía alto del nudo.</td>
                        </tr>

                        <tr>
                        <th scope='row'>Serrania Alto del Nudo</th>
                        <td>Implementación de sistema de vigilancia con vídeo.</td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>


        <!-- Pie de pagina -->
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <center><img class="mb-2" src="images/logo_miniatura_administracion.png" alt="" width="100" height="100">
                        <small class="d-block mb-3 text-muted">Secretaria Municipal de Planeación</small>
                        <small class="d-block mb-3 text-muted">&copy; 2020-2023</small>
                    </center>
                </div>
                <div class="col-6 col-md">
                    <h5>Referentes de consulta Institucional</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="https://www.dosquebradas.gov.co/web/">Página oficial</a></li>
                        <li><a class="text-muted" href="https://plandesarrollo.dosquebradas.gov.co">Plan de desarrollo "Dosquebradas Empresa de Todos 2020 - 2023</a></li>
                        <li><a class="text-muted" href="https://pot.dosquebradas.gov.co">POT Plan de ordenamiento territorial</a></li>
                        <li><a class="text-muted" href="https://www.dosquebradas.gov.co/web/index.php/nuestro-municipio/politicas-publicas">Políticas publicas municipales</a></li>
                        <li><a class="text-muted" href="https://www.dosquebradas.gov.co/web/index.php/about/gaceta-municipal/decretos/category/2-normatividad">Normatividad municipal</a></li>

                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Referentes de consulta Nacional</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="/repositorio/programa-de-gobierno.pdf">Programa de Gobierno 2020-2023</a></li>
                        <li><a class="text-muted" href="https://www.undp.org/content/undp/es/home/sustainable-development-goals.html">ODS Objetivos desarrollo sostenible</a></li>
                        <li><a class="text-muted" href="https://www.dnp.gov.co/DNPN/Paginas/Plan-Nacional-de-Desarrollo.aspx">Plan de desarrollo nacional</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <center><a href="https://participacion.mininterior.gov.co"><img class="mb-2" src="images/logo_min_interior.png" alt="" width="100%"></a></center>
                </div>
            </div>
        </footer>
    </div>

    <?php
    $IDUSER = $_SERVER['REMOTE_ADDR'];
    $aux = 999999;
    if (isset($_GET['id'])) $aux = $_GET['id'];

    $sql = "SELECT * FROM visitas WHERE direccion_ip = '$IDUSER' AND fecha=CURDATE() AND aporte=$aux";
    $result = mysqli_query($sle, $sql);
    if (mysqli_num_rows($result) == 0) {
        $sql = "INSERT INTO visitas VALUES(NULL,'$IDUSER',CURDATE(),'999999')";
        mysqli_query($sle, $sql);
    }

    $sql = "UPDATE contador SET portada = portada + 1 WHERE id = 1";
    mysqli_query($sle, $sql) or die(mysql_error());
    ?>

</body>

</html>