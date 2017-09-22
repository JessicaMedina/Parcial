<?php
session_start();

// Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
if (!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 4) {
    header('location: ../../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Usuario</title>

        <!-- Bootstrap Core CSS -->
        <link href="../../css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../../css/sb-admin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../../css/plugins/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">




    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
<!--                    <a class="navbar-brand" href="#">RESTAURANTE</a>-->
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  Usuario 3 <?php echo ucfirst($_SESSION['nombre']); ?> <b class="caret"></b></a>

                        <ul class="dropdown-menu">
                            
                            <li class="divider"></li>
                            <li>
                                <a href="../../controller/cerrarSesion.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="platos">
                    <ul class="nav navbar-nav side-nav">


                        <li>
<!--                            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Carta <i class="fa fa-fw fa-caret-down"></i></a>-->
                            <ul id="demo" class="collapse">
                               
                   
                            </ul>
                             <li>
                                 <a href="../../Plato/CatalogoPlatos.php"><i class="fa fa-fw fa-desktop"></i> Leer</a>
                    </li>
                           
                        </li>


                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            <div id="page-wrapper">

                <div class="container-fluid">

                    <header class="full header valign-wrapper">
                        <div class="container valign">
                            <div class="row">

                                <center>
                                    <h1 class="titulo" >Bandeja Paisa</h1>
                                    <div class="col s12 m6">
                                        <figure>
                                            <img src="../../img/bandejaP.jpg" height="20%" width="20%" alt="Header" class="responsive-img center-box">
                                        </figure>
                                    </div>

                                    <div class="parrafo">

                                        <p class="flow-text" style=" font-family: monospace"  >
                                            Es el plato más representativo de la región, típico de la cocina antioqueña,
                                            correspondiente a los actuales territorios de Antioquia, el Viejo Caldas o 
                                            Eje Cafetero (Caldas, Quindío y Risaralda), parte del norte del Valle del Cauca 
                                            y el norte del Tolima, Colombia.
                                        </p>
                                    </div>
                                    <h1 class="titulo" >Ajiaco</h1>
                                    <div class="col s12 m6">
                                        <figure>
                                            <img src="../../img/ajiaco.jpg" height="20%" width="20%" alt="Header" class="responsive-img center-box">
                                        </figure>
                                    </div>

                                    <div class="parrafo">

                                        <p class="flow-text" style=" font-family: monospace"  >
                                            El ajiaco es presentado normalmente a los turistas en Bogotá como el plato tradicional de la ciudad. Se conoce como ajiaco con pollo, pues es hecho a base de pollo, papas y guascas; pero no siempre fue el plato tradicional bogotano, ni se hizo con pollo, papas, alcaparra, crema de leche y guascas.
                                        </p>
                                    </div>
                                                  <h1 class="titulo" >Mute Santanderiano</h1>
                                    <div class="col s12 m6">
                                        <figure>
                                            <img src="../../img/mute.jpg" height="20%" width="20%" alt="Header" class="responsive-img center-box">
                                        </figure>
                                    </div>

                                    <div class="parrafo">

                                        <p class="flow-text" style=" font-family: monospace"  >
                                          El Mute es una plato típico de Santander y Norte de Santander en Colombia. Está hecho a base de maíz,costilla de res y carne de cerdo con presencia de una gran cantidad de verduras y especias. El mute, tradicionalmente puede cocinarse en fogones de leña para obtener un mejor sabor.
                                        </p>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </header>
<!--                    <section class="full new-prod">
                        <center>
                            <h5 class="tittles center-align">PRODUCTOS MAS COMPRADOS</h5>
                            <div class="container">
                                <div class="row">
                                    <div class="col s12 m6 l4">
                                        <div class="card hoverable">
                                            <figure class="card-image">
                                                <img src="assets/img/mac.jpg" height="250px" width="250px" >
                                                <figcaption class="card-title">Mac PRO</figcaption>
                                            </figure>
                                            <div class="card-content">
                                                <p>
                                                </p>
                                            </div>
                                            <div class="card-action">
                                                <a href="detalles.php?id=1">VER</a>
                                            </div>
                                        </div>
                                    </div>	
                                    <div class="col s12 m6 l4">
                                        <div class="card hoverable">
                                            <figure class="card-image">
                                                <img src="productos/iphone.jpg" height="250px" width="250px" >
                                                <figcaption class="card-title">Iphone</figcaption>
                                            </figure>
                                            <div class="card-content">
                                                <p>
                                                </p>
                                            </div>
                                            <div class="card-action">
                                                <a href="detalles.php?id=3">VER</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l4">
                                        <div class="card hoverable">
                                            <figure class="card-image">
                                                <img src="productos/ipod.jpg" height="250px" width="250px" >
                                                <figcaption class="card-title">Ipod</figcaption>
                                            </figure>
                                            <div class="card-content">
                                                <p>

                                                </p>
                                            </div>
                                            <div class="card-action">
                                                <a href="detalles.php?id=2">VER</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </center>
                    </section>
-->




                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../../js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../../js/bootstrap.min.js"></script>

        <!-- Morris Charts JavaScript -->


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>

    </body>

</html>
