<?php
header('Content-Type: text/html; charset=UTF-8');
error_reporting(0);
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
                        <a class="nav-link" href="fase3_preinscripcion.php">3 | Preinscripción</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="fase4_votacion.php">4 | Votación</a>
                    </li>
                    <li class="nav-item" style="background-color: #FFC300;">
                        <a class="nav-link" href="fase5_resultados.php"><b>5 | Resultados</b></a>
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
                <div style="font-size: 18pt"><b>Fase 4 votación</b></div>
                <div style="font-size: 14pt"><hr>En las serranías del municipio se instalaron mesas de votación presencial, los jurados fueron capacitados para la jornada.
En las diferentes comunas participantes según acuerdo 021 de 2.017 las votaciones fueron virtuales.
Se coordinó el centro de operaciones en la secretaria de planeación municipal dando apertura y cierre de las votaciones acompañados con ediles, presidentes, procuraduría, contraloría quienes corroboraron la transparencia del proceso.
</div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12" align="center">
                <div style="font-size: 24pt"><br>Fase cerrada acorde a cronograma<br><br></div>
            </div>
        </div>

        <hr><br>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-xs-4" align="center">
                <img src="images/fotos_votacion/F1.jpeg" width="100%">
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4" align="center">
            <img src="images/fotos_votacion/F2.jpeg" width="100%">
            </div>            
            <div class="col-lg-4 col-md-4 col-xs-4" align="center">
            <img src="images/fotos_votacion/F3.jpeg" width="100%">
            </div>
        </div>

        <hr><br>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-xs-4" align="center">
                <img src="images/fotos_votacion/F4.jpeg" width="100%">
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4" align="center">
            <img src="images/fotos_votacion/F5.jpeg" width="100%">
            </div>            
            <div class="col-lg-4 col-md-4 col-xs-4" align="center">
            <img src="images/fotos_votacion/F6.jpeg" width="100%">
            </div>
        </div>

        <hr><br>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-xs-4" align="center">
                <img src="images/fotos_votacion/F7.jpeg" width="100%">
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4" align="center">
            <img src="images/fotos_votacion/F8.jpeg" width="100%">
            </div>            
            <div class="col-lg-4 col-md-4 col-xs-4" align="center">
            <img src="images/fotos_votacion/F9.jpeg" width="100%">
            </div>
        </div>

        <hr><br>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-xs-4" align="center">
                <img src="images/fotos_votacion/F10.jpeg" width="100%">
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4" align="center">
            <img src="images/fotos_votacion/F11.jpeg" width="100%">
            </div>            
            <div class="col-lg-4 col-md-4 col-xs-4" align="center">
            <img src="images/fotos_votacion/F12.jpeg" width="100%">
            </div>
        </div>

        <hr><br>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-xs-4" align="center">
                <img src="images/fotos_votacion/F13.jpeg" width="100%">
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4" align="center">
            <img src="images/fotos_votacion/F14.jpeg" width="100%">
            </div>            
            <div class="col-lg-4 col-md-4 col-xs-4" align="center">
            <img src="images/fotos_votacion/F15.jpeg" width="100%">
            </div>
        </div>

        <hr><br>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-6" align="center">
                <img src="images/fotos_votacion/F17.jpeg" width="100%">
            </div>
            <div class="col-lg-6 col-md-6 col-xs-6" align="center">
            <img src="images/fotos_votacion/F18.jpeg" width="100%">
            </div>            
        </div>

        <hr><br>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-6" align="center">
                <img src="images/fotos_votacion/F19.jpeg" width="100%">
            </div>
            <div class="col-lg-6 col-md-6 col-xs-6" align="center">
            <img src="images/fotos_votacion/F20.jpeg" width="100%">
            </div>            
        </div>
        
        <hr><br>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12" align="center">
                <iframe width="100%" height="520" src="https://www.youtube.com/embed/i9_nyHxprsA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <hr><br>


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