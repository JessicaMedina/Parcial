<?php
session_start();
include '../conexion.php';

if (isset($_SESSION['cargo'])) {
    ?>
    <!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="utf-8"/>
            <title>Compras </title>
            <link rel="stylesheet" type="text/css" href="../estilo/estilos.css">
            <script type="text/javascript"  href="../js/scripts"></script>
            <script type="text/javascript" src="../js/modificar.js"></script>
        </head>
        
        <body style="height: 200%; width: 100%; ">
            <nav class="NavBar full">
                <div class="row">
                    <center><a href="../view/root/index.php"<div class="tittles NavBar-logo col s12 m3" style="font-size:30px; font-family: monospace">Restaurante</div></a></center>

                    <i class="zmdi zmdi-more-vert full btn-menu hide-on-med-and-up waves-effect"></i>


            </nav>  
             <form method="POST" action=""> 
            <div class="tabla5" style="font-family: monospace; color:#16a09b ;  width: 50%s">
                <h1>Modificar Plato</h1>
                <table width="100%">
                    <tr>
                        <td>Id</td>
                        <td>Nombre</td>
                        <td>Cantidad</td>
                        <td>Descripcion</td>
                        <td>Precio</td>
                        <td>Modificar</td>
                    </tr>
                    <?php
                    $resultado = mysql_query("select * from platos");
                    while ($row = mysql_fetch_array($resultado)) {
                   ?>
                    
                    <tr>
                        <td><?php echo $row[0];?></td>
                        <td><?php echo $row[1];?></td>
                        <td><?php echo $row[2];?></td>
                        <td><?php echo $row[3];?></td>
                        <td><?php echo $row[5];?></td>
                        <td><a href="editar.php?id=<?php echo $row['id'];?>">Modificar</a></td>

                    
                    </tr>
                    <?php
                    }
                    ?>
                   
                    
                </table>
            </div>
             </form>
            <?php
        } else {
            echo '<script>
                        var msg = "Debes estar Logueado"
                        alert(msg);

                    </script>';
            echo '<script> window.location="../index.php";</script>';
        }
        ?>

</body>
</html>