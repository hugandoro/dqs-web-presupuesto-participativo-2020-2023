<?php
header('Content-Type: text/html; charset=UTF-8');
error_reporting(0);
$currentPage = $_SERVER["PHP_SELF"];
require_once('bd/sle.php');
?>

<!-- CONTADOR DE VISITAS -->
<?php
$archivo = "contador.txt"; //el archivo que contiene en numero
$f = fopen($archivo, "r"); //abrimos el archivo en modo de lectura
if ($f) {
    $contador = fread($f, filesize($archivo)); //leemos el archivo
    $contador = $contador + 1; //sumamos +1 al contador
    fclose($f);
}
$f = fopen($archivo, "w+");
if ($f) {
    fwrite($f, $contador);
    fclose($f);
}
?>
<!-- FIN CONTADOR -->

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
                        <a class="nav-link" href="#">1 | Socialización</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">2 | Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">3 | Preinscripción</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">4 | Votación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">5 | Resultados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="prensa.php">Prensa y medios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Vigencia 2021/index.php" target="_blank">Historico 2021</a>
                    </li>

                </ul>
            </div>
        </nav>

        <hr>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12" align="center">
                <div style="font-size: 32pt"><b>Presupuesto participativo en Dosquebradas (Risaralda)</b></div>
                <div style="font-size: 18pt"><b>Vigencia 2022</b></div>
                <div><img src="/images/portada.jpg" alt="" width="100%"></div>
            </div>
        </div>
        <hr><br>


        <!--
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12" align="center">
                <iframe width="100%" height="520" src="https://www.youtube.com/embed/i9_nyHxprsA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        -->

        <div class="row">

            <div class="col-lg-4 col-md-4 col-xs-4">
                <div><a href="/seguimiento_2021.php"><img src="/images/seguimiento_proyectos.jpg" alt="" width="100%"></a></div>
            </div>
            <div class="col-lg-8 col-md-8 col-xs-8">
                <div style="font-size: 32pt"><b>Seguimiento proyectos PP 2021</b></div>
                <div style="font-size: 18pt">Consulte estado de ejecucion de los proyectos ganadores durante el ejercicio de Presupuesto Participativo del año 2021, comuna impactada, responsables, nivel de avance e informacion relevante al respecto.</div>
            </div>

        </div>

        <br><hr><br>
    
        <div class="row">

            <div class="col-lg-8 col-md-8 col-xs-8">
                <div style="font-size: 32pt"><b>Caja de herramientas normativa</b></div>
                <div style="font-size: 18pt">Se pone a disposicion ciudadana esta caja que agrupa recursos normativos, técnicos, de conocimiento, de comunicación y académicos para el público en general interesado en el proceso de Presupuesto Participativo en Dosquebradas.</div>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-4">
                <div><a href="https://presupuestoparticipativo.dosquebradas.gov.co/repositorio/caja de herramientas/"><img src="/images/documentos.jpg" alt="" width="100%"></a></div>
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
                    <div style="font-size: 18pt">
                        <center>Eres nuestra visita N°</center>
                    </div>
                    <div style="font-size: 50pt; background-color: #FE434E;color: #ffffff;">
                        <center><b><?php echo $contador; ?></b></center>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md">
                <div>
                    <center><br><hr><a href='https://www.freepik.es'>Creditos | Imagenes vectorizadas - www.freepik.es</a></center>
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