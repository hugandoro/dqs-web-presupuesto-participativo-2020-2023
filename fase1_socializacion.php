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

<body style="background-color:#ffffff;">

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
                        <a class="nav-link" href="https://presupuestoparticipativo.dosquebradas.gov.co/app_votacion_2021">3 | Preinscripción</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="fase4_votacion.php">4 | Votación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="fase5_resultados.php">5 | Resultados</a>
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
                <div style="font-size: 36pt"><b>Presupuesto Participativo | Dosquebradas</b></div>
                <div style="font-size: 18pt"><b>Fase 1 socializacion</b></div>
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
            <div class="col-md-4" align="center">
                <div style="font-size: 15pt">Ley 1757 de 2015<br><br></div>
                <div><a href="repositorio/ley_1757_2015_version_resumida.pdf"><img src="images/icono-pdf.png" width="50%"></a></div>
            </div>

            <div class="col-md-4" align="center">
                <div style="font-size: 15pt">Acuerdo 021 de 2017<br><br></div>
                <div><a href="repositorio/acuerdo_021_2017_pp_presupuesto_participativo.pdf"><img src="images/icono-pdf.png" width="50%"></a></div>
            </div>

            <div class="col-md-4" align="center">
                <div style="font-size: 15pt">Reglamento interno del acuerdo<br><br></div>
                <div><a href="repositorio/reglamento_interno_acuerdo_021_2017.pdf"><img src="images/icono-pdf.png" width="50%"></a></div>
            </div>
        </div>

        <hr><br>

        <div class="row">

            <div class="col-md-3" align="center">
                <div style="font-size: 14pt">Plan de capacitaciones 2021<br><br></div>
                <div><a href="repositorio/pp_plan_capacitaciones_2021.pdf"><img src="images/icono-pdf.png" width="50%"></a></div>
                <div style="font-size: 12pt">Juntas administradoras locales | Presidentes de junta | Lideres | Comunidad | Enlaces<br><br></div>
            </div>

            <div class="col-md-3" align="center">
                <div style="font-size: 14pt">Circular N° 005 de 2021 <br><br></div>
                <div><a href="repositorio/pp_circular_005_2021_padrinos_comunas.pdf"><img src="images/icono-pdf.png" width="50%"></a></div>
                <div style="font-size: 12pt">Plan de apadrinamiento institucional por comunas<br><br></div>
            </div>

             <div class="col-md-3" align="center">
                <div style="font-size: 14pt">Seguimiento PP 2020<br><br></div>
                <div><a href="repositorio/Presentacion_Seguimiento_PP_Presupuesto_Participativo_2020.pdf"><img src="images/icono-pdf.png" width="50%"></a></div>
                <div style="font-size: 12pt">Presentacion seguimiento politica pública de Presupuesto Participativo 2020<br><br></div>
            </div>

            <div class="col-md-3" align="center">
                <div style="font-size: 14pt">Cronograma PP 2021<br><br></div>
                <div><a href="repositorio/Cronograma_PP_2021.pdf"><img src="images/icono-pdf.png" width="50%"></a></div>
                <div style="font-size: 12pt">Cronograma politica pública presupuesto participativo 2021<br><br></div>
            </div>

        </div>

        <br><br>
        <hr>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <h2>Plan de capacitaciones - Presupuesto Participativo 2021</h2>
            </div>

            <div class="col-lg-12 col-md-12 col-xs-12" align="center">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Fecha</th>
                            <th scope="col">Comuna / Grupo poblacional</th>
                            <th scope="col">Lugar</th>
                            <th scope="col">Hora</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Febrero 18</th>
                            <td>Comuna 2</td>
                            <td>Caseta comunal El Japón</td>
                            <td>7:00 pm</td>
                        </tr>

                        <tr>
                            <th scope="row">Marzo 09</th>
                            <td>Ediles</td>
                            <td>Camara de Comercio de Dosquebradas</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th scope="row">Marzo 16</th>
                            <td>Comuna 2 - Ediles del sector</td>
                            <td></td>
                            <td>7:00 pm</td>
                        </tr>

                        <tr>
                            <th scope="row">Abril 07</th>
                            <td>Comuna 5</td>
                            <td>Caseta Violetas</td>
                            <td>7:00 pm</td>
                        </tr>

                        <tr>
                            <th scope="row">Abril 08</th>
                            <td>Comuna 3</td>
                            <td>Caseta Campestre C</td>
                            <td>7:00 pm</td>
                        </tr>

                        <tr>
                            <th scope="row">Abril 12</th>
                            <td>Comuna 8</td>
                            <td>Caseta Primavera Azul</td>
                            <td>5:30 pm</td>
                        </tr>

                        <tr>
                            <th scope="row">Abril 12</th>
                            <td>Comuna 9</td>
                            <td>Caseta barrio Venus I</td>
                            <td>7:00 pm</td>
                        </tr>

                        <tr>
                            <th scope="row">Abril 13</th>
                            <td>Enlaces de la Administración Municipal</td>
                            <td>Camara de Comercio de Dosquebradas</td>
                            <td>8:00 am</td>
                        </tr>

                        <tr>
                            <th scope="row">Abril 14</th>
                            <td>Comuna 1</td>
                            <td>Caseta Villa Alexandra</td>
                            <td>6:00 pm</td>
                        </tr>

                        <tr>
                            <th scope="row">Abril 16</th>
                            <td>Comité Técnico de Presupuesto Participativo</td>
                            <td>Virtual</td>
                            <td>8:00 am</td>
                        </tr>

                        <tr>
                            <th scope="row">Abril 16</th>
                            <td>Corregimiento Alto del Nudo</td>
                            <td>Camara de Comercio de Dosquebradas</td>
                            <td>2:00 pm</td>
                        </tr>

                        <tr>
                            <th scope="row">Abril 16</th>
                            <td>Comuna 4</td>
                            <td>Caseta Santa Isabel</td>
                            <td>6:00 pm</td>
                        </tr>

                        <tr>
                            <th scope="row">Abril 17</th>
                            <td>Reunión programada con presidentes de diferentes comunas y corregimientos</td>
                            <td>Camara de Comercio de Dosquebradas</td>
                            <td>5:00 pm</td>
                        </tr>

                        <tr>
                            <th scope="row">Abril 23</th>
                            <td>Corregimiento La Marcada</td>
                            <td>Camara de Comercio de Dosquebradas</td>
                            <td>2:00 pm</td>
                        </tr>

                        <tr>
                            <th scope="row">Mayo 04</th>
                            <td>Comuna 2</td>
                            <td>Caseta barrio Japon</td>
                            <td></td>
                        </tr>

                        <tr>
                            <th scope="row">Mayo 05</th>
                            <td>Comuna 2</td>
                            <td>Caseta barrio Japon</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <br><br><br>
        <hr>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <h2>Que es un plan zonal, plan de desarrollo estrategico comunal corregimental y/o plan local ?</h2><br>
                Es un documento que contiene el diagnóstico de una zona identificada (barrio, Comuna, vereda o corregimiento) del municipio, que presenta y prioriza las potencialidades y necesidades más relevantes de ese territorio; con objetivos, con metas e indicadores; Determina unas estrategias generales definidas en proyectos y un plan de inversiones (locales, comunales, veredales o corregimentales).<br><br>
                Pero lo más importante que estos documentos son construidos de manera participativa entre la administración y las diferentes comunidades de dicha unidad territorial.<br><br>
                Dosquebradas, ha construidos varios documentos de este tipo con los líderes, y comunidades en la fase de diagnósticos y definición de propuestas ciudadanas definiendo los problemas comunitarios en los diferentes sectores sociales, económicos, ambientales y culturales.<br><br>
            </div>

            <div class="col-lg-12 col-md-12 col-xs-12" align="center">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Comuna</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Año</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">PDF</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">2</th>
                            <td>Circunvalar</td>
                            <td>2017</td>
                            <td>Estratégico Comunal</td>
                            <td><a href="https://www.dosquebradas.gov.co/web/index.php/about/planes-estrategicos-sectoriales-e-institucionales/send/421-ano-2017/3454-plan-de-desarrollo-estrategico-comunal-y-comunitario-comuna-2-2017"><img src="images/icono-pdf.png" width="25px"></a></td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                            <td>socialización documento Comuna 2</td>
                            <td>2017</td>
                            <td>Anexo de socialización- registro fotográfico </td>
                            <td><a href="https://www.dosquebradas.gov.co/web/index.php/about/planes-estrategicos-sectoriales-e-institucionales/send/421-ano-2017/3453-anexo-socializacion-del-documento-terminado-con-la-comunidad"><img src="images/icono-pdf.png" width="25px"></a></td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                            <td>Plan de Desarrollo Comuna 3</td>
                            <td>2015</td>
                            <td>Plan de Desarrollo Comuna 3</td>
                            <td><a href="https://www.dosquebradas.gov.co/web/index.php/about/planes-estrategicos-sectoriales-e-institucionales/send/422-ano-2015/3455-plan-de-desarrollo-comuna-3-vigencia-2015-2025"><img src="images/icono-pdf.png" width="25px"></a></td>
                        </tr>
                        <th scope="row">4</th>
                            <td>Santa Isabel </td>
                            <td>2019</td>
                            <td>Estratégico Comunal y Comunitario</td>
                            <td><a href="https://www.dosquebradas.gov.co/web/index.php/about/planes-estrategicos-sectoriales-e-institucionales/send/423-ano-2019/3456-plan-de-desarrollo-estrategico-comunal-y-comunitario-comuna-4"><img src="images/icono-pdf.png" width="25px"></a></td>
                        </tr>
                        <th scope="row">6</th>
                            <td>Plan de desarrollo zonal Comuna 6</td>
                            <td>2016</td>
                            <td>Zonal</td>
                            <td><a href="https://www.dosquebradas.gov.co/web/index.php/about/planes-estrategicos-sectoriales-e-institucionales/send/424-ano-2016/3458-plan-de-desarrollo-zonal-comuna-6-2016-2026"><img src="images/icono-pdf.png" width="25px"></a></td>
                        </tr>
                        <th scope="row">8</th>
                            <td>Nuestra Señora de Chiquinquirá</td>
                            <td>2017</td>
                            <td>Estratégico Comunal</td>
                            <td><a href="https://www.dosquebradas.gov.co/web/index.php/about/planes-estrategicos-sectoriales-e-institucionales/send/421-ano-2017/3459-plan-de-desarrollo-estrategico-comunal-y-comunitario-comuna-8"><img src="images/icono-pdf.png" width="25px"></a></td>
                        </tr>
                        <th scope="row">9</th>
                            <td>Manuel Elkin Patarroyo</td>
                            <td>2018</td>
                            <td>Estratégico Comunal</td>
                            <td><a href="https://www.dosquebradas.gov.co/web/index.php/about/planes-estrategicos-sectoriales-e-institucionales/send/423-ano-2019/3460-plan-de-desarrollo-estrategico-comunal-y-comunitario-comuna-9-2018"><img src="images/icono-pdf.png" width="25px"></a></td>
                        </tr>
                        <th scope="row">10</th>
                            <td>Estación Gutiérrez</td>
                            <td>2018</td>
                            <td>Estratégico Comunal</td>
                            <td><a href="https://www.dosquebradas.gov.co/web/index.php/about/planes-estrategicos-sectoriales-e-institucionales/send/425-ano-2018/3462-plan-de-desarrollo-estrategico-comunal-y-comunitario-comuna-10"><img src="images/icono-pdf.png" width="25px"></a></td>
                        </tr>
                        <th scope="row">11</th>
                            <td>Los Fundadores</td>
                            <td>2016</td>
                            <td>Zonal</td>
                            <td><a href="https://www.dosquebradas.gov.co/web/index.php/about/planes-estrategicos-sectoriales-e-institucionales/send/424-ano-2016/3463-plan-de-desarrollo-zonal-comuna-11"><img src="images/icono-pdf.png" width="25px"></a></td>
                        </tr>
                        <th scope="row">Alto del Nudo</th>
                            <td>Serranía Alto del Nudo</td>
                            <td>2018</td>
                            <td>Corregimental</td>
                            <td><a href="https://www.dosquebradas.gov.co/web/index.php/about/planes-estrategicos-sectoriales-e-institucionales/send/425-ano-2018/3464-plan-de-desarrollo-estrategico-comunal-y-comunitario"><img src="images/icono-pdf.png" width="25px"></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <br><br><br>
        <hr>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12" align="center">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/jv644HA9hx4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="col-lg-6 col-md-6 col-xs-12" align="center">
                <img src="images/participacion.png" width="90%">
            </div>
        </div>

        <br><br><br>
        <hr>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12" align="center">
                <div><img src="images/infografia1.jpg" width="100%"></div>Fuente - https://www.funcionpublica.gov.co/eva/es/abc
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