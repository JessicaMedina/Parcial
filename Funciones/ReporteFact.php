<?php
session_start();
include '../conexion.php';

if (isset($_SESSION['cargo'])) {
    ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Reporte Facturación</title>
        <link rel="stylesheet" type="text/css" href="../estilo/estilos.css">
        <script type="text/javascript"  href="js/scripts.js"></script>
    </head>
    <body style="height: 100%;">


        <nav class="NavBar full">
            <div class="row">
                <center><a href="../view/admin/index.php"<div class="tittles NavBar-logo col s12 m3" style="font-size:30px; font-family: monospace">Restaurante</div></a></center>

                <i class="zmdi zmdi-more-vert full btn-menu hide-on-med-and-up waves-effect"></i>

            </div>


        </nav>  
        <div class="tabla2" style="font-family: monospace; font-size: 20px; color:#16a09b ;  width: 50%s">

            <?php

            include("../conexion.php");
         

            $result = mysql_query("SELECT * FROM factura");
            ?>
            <center><h1>Reporte de Facturación</h1>
            <?php
            echo "<table>";
            echo "<tr>";
            echo "<th>Numero Factura</th>";
            echo "<th>Cedula</th>";
            echo "<th>Nombre</th>";
            echo "<th>Ciudad</th>";
            echo "<th>Direccion</th>";
            echo "<th>Pago</th>";
            echo "</tr>";
      
            while ($row = mysql_fetch_row($result)) {
                echo "<tr>";
                echo "<td>$row[0]</td>";
                echo "<td>$row[2]</td>";
                echo "<td>$row[3]</td>";
                echo "<td>$row[4]</td>";
                echo "<td>$row[5]</td>";
                echo "<td>$row[6]</td>";
                echo "</tr>";
            }
            

            echo "</table>";
            ?>  
            </center>
            
            <?php
        } else {
            echo '<script>
                        var msg = "Debes estar Logueado"
                        alert(msg);

                    </script>';
            echo '<script> window.location="../index.php";</script>';
        }
        ?>
        </div>
    </body>
</html>

