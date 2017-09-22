<?php
session_start();
include '../conexion.php';

if (isset($_SESSION['cargo'])) {
    ?>  
    <!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="utf-8"/>
            <title>Bandeja Paisa</title>
            <link rel="stylesheet" type="text/css" href="../estilo/estilos_1.css">
            <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
            <script type="text/javascript"  href="./js/scripts.js"></script>

        </head>
        <body>


            <nav class="NavBar full">
                <div class="row">
                    <div class="tittles NavBar-logo col s12 m3" style="font-family: monospace ;font-size:30px;">INVENTARIO PLATOS</div>
                    <li><a href="../view/user3/index.php" class="waves-effect" style=" font-size:30px;color:#010302; font-family: monospace"></a></li>
                    <ul class="NavBar-links col m9">
                        

                    </ul>
                    <i class="zmdi zmdi-more-vert full btn-menu hide-on-med-and-up waves-effect"></i>
                 
                </div>
            </nav>


            <section>

                <?php
                include '../conexion.php';
                $re = mysql_query("select * from platos")or die(mysql_error());
                while ($f = mysql_fetch_array($re)) {
                    ?>
                    <div class="producto">
                        <center>
                            <img style="width:230px; "src="../img/<?php echo $f['imagen']; ?>"><br>
                            <span><?php echo $f['nombre']; ?></span><br></br>
                            <a href="../detalles.php?id=<?php echo $f['id']; ?>">ver</a>
                        </center>
                    </div>
                    <?php
                }
                ?>


            </section>


            <?php
}else{
	echo '<script> window.location="index.php";</script>';
}
?>

    </body>
</html>


