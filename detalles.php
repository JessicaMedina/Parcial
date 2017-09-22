<?php
session_start();
include 'conexion.php';

if (isset($_SESSION['cargo'])) {
    ?>
    <!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="utf-8"/>
            <title>Carrito de Compras</title>
            <link rel="stylesheet" type="text/css" href="./estilo/estilos_1.css">
            <script type="text/javascript"  href="./js/scripts.js"></script>
        </head>
        <body >

            <nav class="NavBar full">
                <div class="row">
                    <div class="tittles NavBar-logo col s12 m3" style="font-family: monospace ;font-size:30px;">Descripcion del Producto</div>
<!--                    <li><a href="../view/user3/index.php" class="waves-effect" style="color:black; font-family: monospace">MENU</a></li>-->
                    <i class="zmdi zmdi-more-vert full btn-menu hide-on-med-and-up waves-effect"></i>
                </div>
            </nav>

            <section>

                <?php
                include 'conexion.php';
                $re = mysql_query("select * from platos where id=" . $_GET['id'])or die(mysql_error());
                while ($f = mysql_fetch_array($re)) {
                    ?>
                    <div class="detalle">

                        <center>
                            <span style=" font-family: monospace; font-size: 40px; width: 10px; height: 10px"><?php echo $f['nombre']; ?></span><br></br> 
                            <img src="./img/<?php echo $f['imagen']; ?>" height="100%" width="30%" ><br></br>
                            <div class="detalle2" style="width: 50%" align="left">
                                <span style="font-family: monospace; font-size: 20px;"><?php echo $f['descripcion']; ?></span><br>
                            </div><br>
<!--                            <span style="font-family: monospace; font-size: 20px; width: 10px; height: 10px">Ingredientes: <?php echo $f['ingredientes']; ?></span><br></br>-->
                            <span style="font-family: monospace; font-size: 30px; width: 10px; height: 10px">Precio: <?php echo $f['precio']; ?></span>
                            <br></br>
<!--                            <a href="./carritodecompras.php?id=<?php echo $f['id']; ?>" style="font-size: 20px" >Hacer Pedido</a>-->
                            <br></br>

                            <a href="Plato/CatalogoPlatos.php">Ver Platos</a>
                        </center>

                    </div>
                    <?php
                }
                ?>

            </section>

            <?php
        } else {
            echo '<script>
                        var msg = "Debes estar Logueado"
                        alert(msg);

                    </script>';
            echo '<script> window.location="index.php";</script>';
        }
        ?>
    </body>
</html>

