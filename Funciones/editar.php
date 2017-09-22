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
    <body>
        
        
         <nav class="NavBar full">
                <div class="row">
                    <center><a href="../view/root/index.php"<div class="tittles NavBar-logo col s12 m3" style="font-size:30px; font-family: monospace">Restaurante</div></a></center>

                    <i class="zmdi zmdi-more-vert full btn-menu hide-on-med-and-up waves-effect"></i>


            </nav>  
    <center>
        <?php
        
        $id=$_REQUEST['id'];
        include '../conexion.php';

        $resultado = mysql_query("select * from platos WHERE id='$id'");
        while ($row = mysql_fetch_array($resultado)) {
            
       
            ?>
        <form action="modificar_proceso.php?id=<?php echo $row['id'];?>" method="POST">
        <div class="tabla5" style="font-family: monospace; color:#16a09b ;  width: 50%s">
        
            <h1>Plato</h1>
            <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre'];?>"  required style="width:400px;"><br>
            <input type="text" name="cantidad" placeholder="Cantidad" value="<?php echo $row['cantidad'];?>" required=" "style="width:400px;"><br>
            <input type="text" name="descripcion" placeholder="Descripcion" value="<?php echo $row['descripcion'];?>" required style="width:400px"><br>
            <input type="text" name="precio" placeholder="Precio" value="<?php echo $row['precio'];?>"required style="width:400px"><br>
            <center><input type="submit" value="Aceptar" name="B1"></center></td> 
    </center>
</div>
    <?php
        }
        ?>
    
       <?php
        } else {
            echo '<script>
                        var msg = "Debes estar Logueado"
                        alert(msg);

                    </script>';
            echo '<script> window.location="../index.php";</script>';
        }
        ?>

    </form>
    </body>
</html>







