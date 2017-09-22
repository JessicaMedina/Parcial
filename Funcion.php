<DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
        </head>
        <body>

            <?php
            include 'conexion.php';

            if (isset($_POST['buy'])) {
                $correo = $_POST['correo'];
                $Cedula = $_POST['cedula'];
                $Nombre = $_POST['nombre'];
                $City = $_POST['ciud'];
                $Direccion = $_POST['dire'];
                $TipoT = $_POST['TipoTarjeta'];
                $N_tarjeta = $_POST['NumeroTarjeta'];
                $F_Caducidad = $_POST['fec'];
                $C_seguridad = $_POST['CodigoSeguridad'];
                
               
                $enciptar2= sha1($N_tarjeta);
               

                $sql = "INSERT INTO factura(Num_factura,correo, cedulaU, nombre,ciudad, direccion, Tipo_tarjeta, N_tarjeta, F_caducidad, C_seguridad) VALUES ('','$correo','$Cedula','$Nombre','$City','$Direccion','$TipoT','$enciptar2','$F_Caducidad','$C_seguridad')";
                $re = mysql_query($sql, $conexion) or die(mysql_error());


                    if (!$re) {
               
                    echo 'LA COMPRA NO SE PUDO REALIZAR';
                } else {
                    
                    echo '<script>
                        var msg = "COMPRA EXITOSA"
                        alert(msg);
                        
                    </script>';
                    
                    ?>


                    <?php
                }
                
            }
            require 'carritodecompras.php';
            ?>       
            
        </body>
    </html>
