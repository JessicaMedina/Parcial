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
      
        </head>
        
        <body style="height: 200%; width: 100%; ">
            <nav class="NavBar full">
                <div class="row">
                    <center><a href="../view/root/index.php"<div class="tittles NavBar-logo col s12 m3" style="font-size:30px; font-family: monospace">Restaurante</div></a></center>

                    <i class="zmdi zmdi-more-vert full btn-menu hide-on-med-and-up waves-effect"></i>


            </nav>  


 
        

        <div class="tabla5" style="font-family: monospace; font-size: 20px; color:#16a09b ;  width: 50%s">
            
                <h1>Eliminar Plato</h1>
                <form method="POST" action="borrar.php"> 
     
        <tr> 
            
            
   
        <p align="center"><center><input  style="width: 300px" type="text" placeholder="ID a Eliminar"name="id" size="20"></center></td> 
        </tr> 
      
        <tr> 
          
            <p align="center"> 
            <center><input type="submit" value="Eliminar" name="B1"></center></td> <br></br>
        </tr> 
        </form> 
                <table width="100%">
                    <tr>
                        <td>Id</td>
                        <td>Nombre</td>
                        <td>Cantidad</td>
                        <td>Descripcion</td>
                        <td>Precio</td>
                       
                    </tr>
                    <?php
                    include '../conexion.php';
                    $resultado = mysql_query("select * from platos");
                    while ($row = mysql_fetch_array($resultado)) {
                        echo '
				<tr>
					<td>
                                        <input type="hidden" value="' . $row[0] . '">' . $row[0] . '
                                       
					</td>
					<td><input type="text" class="nombre" value="' . $row[1] . '"></td>
                                        <td><input type="text" class="cantidad" value="' . $row[2] . '"></td>
					<td><input type="text" class="descripcion" value="' . $row[3] . '"></td>
					<td><input type="text" class="precio" value="' . $row[5] . '"></td>
					
				</tr>
				';
                    }
                    ?>
                    
                       
                </table>
                
          
    </table> 
</div> 
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
