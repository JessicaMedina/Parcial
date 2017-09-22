<?php
session_start();
include "conexion.php";
if (isset($_SESSION['cargo'])) {
    ?>
 
    <!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="utf-8"/>
            <title>Compras </title>
            <link rel="stylesheet" type="text/css" href="estilo/estilos.css">
            <script type="text/javascript"  href="js/scripts.js"></script>
        </head>
        <body style="height: 100%;">


            <nav class="NavBar full">
                <div class="row">
                    <center><div class="tittles NavBar-logo col s12 m3" style="font-size:30px; font-family: monospace">Facturación</div></center>
                  
                    <i class="zmdi zmdi-more-vert full btn-menu hide-on-med-and-up waves-effect"></i>
                    
                </div>
                s
                
            </nav>
         
               <?php
        include 'conexion.php';

        $result = mysql_query(" select * from usuarios ");
        if ($row = mysql_fetch_array($result))
            $fole = $row["nombre"];
        ?>            
               <div class="derecha">
                <form action="Funcion.php" method="POST" id="datosP" >
                    <fieldset class="margen">
                        <h3 style="color:#16a09b;">Datos Personales</h3>
                        <input type="text" placeholder="Correo" name="correo"  style="width: 400px"required >
                        <input maxlength="10" type="text" placeholder="Cedula" name="cedula"  style="width: 200px"required >
                        <input type="text" placeholder="Nombre" name="nombre"  style="width: 200px"required>
                        <input type="text" placeholder="Ciudad" name="ciud" style="width: 200px"required>
                        <input type="text" placeholder="Direccion" name="dire" style="width: 200px"required><br>
                        <h3 style="color:#16a09b;" >Metodo de Pago</h3>


                        <input type="text" placeholder="Tipo Tarjeta" name="TipoTarjeta" style= "width: 200px" required="">
                        <input maxlength="10" type="text" placeholder="Numero de Tarjeta" name="NumeroTarjeta" style="width: 200px" required=""><br>
                        <label for="fecha"  style=" text-align:center; font-size:11px;">Fecha de caducidad:

                            <input id="fecha" name="fec" type="date" class="validate"  style="width: 300px" required>

                            <input maxlength="4"type="text" placeholder="Codigo de Seguridad" name="CodigoSeguridad" style="width: 400px"required=""><br>
                            </fieldset>

                 
                <button type="submit" name="buy" class="btn btn-primary">
                                        <i class="icon-user icon-white"></i> COMPRAR
                    </button>
                                <br></br>

                            
               </div>
            
                            
  <div class="tabla" style="font-family: monospace; font-size: 20px; color:#16a09b ;  width: 50%s">
            <?php
            
            
     include "conexion.php";
		$arreglo=$_SESSION['carrito'];
		
		$numeroventa=0;

		$re=mysql_query("select * from compras order by numeroventa DESC limit 1") or die(mysql_error());	
		while (	$f=mysql_fetch_array($re)) {
					$numeroventa=$f['numeroventa'];	
		}
		if($numeroventa==0){
			$numeroventa=1;
		}else{
			$numeroventa=$numeroventa+1;
		}
		for($i=0; $i<count($arreglo);$i++){
			mysql_query("insert into compras (numeroventa, imagen,nombre,precio,cantidad,subtotal) values(
				".$numeroventa.",
				'".$arreglo[$i]['Imagen']."',
				'".$arreglo[$i]['Nombre']."',	
				'".$arreglo[$i]['Precio']."',
				'".$arreglo[$i]['Cantidad']."',
				'".($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad'])."'
				)")or die(mysql_error());
		}
	
	?>
      <center><h1 style="font-size: 40px">Compra</h1></center>
      <?php
		$total=0;
		$tabla='<table border="1"><tr>
		<th>Nombre</th>
		<th>Cantidad</th>
		<th>Precio</th>
		<th>Subtotal</th></tr>';
		for($i=0;$i<count($arreglo);$i++){
			
			$tabla=$tabla.'<tr>
			<td>'.$arreglo[$i]['Nombre'].'</td>
			<td>'.$arreglo[$i]['Cantidad'].'</td>
			<td>'.$arreglo[$i]['Precio'].'</td>
			<td>'.$arreglo[$i]['Cantidad'] * $arreglo[$i]['Precio'].'</td>
			</tr>';
			$total=$total+($arreglo[$i]['Cantidad'] * $arreglo[$i]['Precio']);			
		}
		$tabla.'</table>';
                
		
		echo $tabla;
       
		
		unset($_SESSION['carrito']);
//		header("Location: compras/compras.php");

?>
</div>
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