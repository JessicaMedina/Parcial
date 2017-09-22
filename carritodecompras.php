<?php
session_start();
include './conexion.php';
if (isset($_SESSION['carrito'])) {
    if (isset($_GET['id'])) {
        $arreglo = $_SESSION['carrito'];
        $encontro = false;
        $numero = 0;
        for ($i = 0; $i < count($arreglo); $i++) {
            if ($arreglo[$i]['Id'] == $_GET['id']) {
                $encontro = true;
                $numero = $i;
            }
        }
        if ($encontro == true) {
            $arreglo[$numero]['Cantidad'] = $arreglo[$numero]['Cantidad'] + 1;
            $_SESSION['carrito'] = $arreglo;
        } else {
            $nombre = "";
            $precio = 0;
            $imagen = "";
            $re = mysql_query("select * from platos where id=" . $_GET['id']);
            while ($f = mysql_fetch_array($re)) {
                $nombre = $f['nombre'];
                $precio = $f['precio'];
                $imagen = $f['imagen'];
            }
            $datosNuevos = array('Id' => $_GET['id'],
                'Nombre' => $nombre,
                'Precio' => $precio,
                'Imagen' => $imagen,
                'Cantidad' => 1);

            array_push($arreglo, $datosNuevos);
            $_SESSION['carrito'] = $arreglo;
        }
    }
} else {
    if (isset($_GET['id'])) {
        $nombre = "";
        $precio = 0;
        $imagen = "";
        $re = mysql_query("select * from platos where id=" . $_GET['id']);
        while ($f = mysql_fetch_array($re)) {
            $nombre = $f['nombre'];
            $precio = $f['precio'];
            $imagen = $f['imagen'];
        }
        $arreglo[] = array('Id' => $_GET['id'],
            'Nombre' => $nombre,
            'Precio' => $precio,
            'Imagen' => $imagen,
            'Cantidad' => 1);
        $_SESSION['carrito'] = $arreglo;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Carrito de Compras</title>
        <link rel="stylesheet" type="text/css" href="./estilo//estilos_1.css">
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script type="text/javascript"  src="./js/scripts.js"></script>
    </head>
    <body>

        <header>
        </header>
        <nav class="NavBar full">
            <div class="row">
            </center><div class="tittles NavBar-logo col s12 m3" style="font-family: monospace ;font-size:30px;">CARRO DE COMPRAS</div></center>
        <li><a href="view/user/index.php" class="waves-effect" style=" font-size:30px;color:#010302; font-family: monospace">Menú</a></li>
            </div>
        </nav>
        <p class="center-align" style="color: #2F9FF3;">
            <i class="zmdi zmdi-shopping-cart zmdi-hc-5x"></i>		
        </p>
        <section>
            <?php
            $total = 0;
            if (isset($_SESSION['carrito'])) {
                $datos = $_SESSION['carrito'];

                $total = 0;
                for ($i = 0; $i < count($datos); $i++) {
                  
                    ?>
                    <div class="producto">
                        <center>
                            <img src="./img/<?php echo $datos[$i]['Imagen']; ?>"><br>
                            <span ><?php echo $datos[$i]['Nombre']; ?></span><br>
                            <span>Precio: <?php echo $datos[$i]['Precio']; ?></span><br>
                            <span>Cantidad: 
                                <input type="text" value="<?php echo $datos[$i]['Cantidad']; ?>"
                                       data-precio="<?php echo $datos[$i]['Precio']; ?>"
                                       data-id="<?php echo $datos[$i]['Id']; ?>"
                                       class="cantidad">
                            </span><br>
                            <span class="subtotal">Subtotal:<?php echo $datos[$i]['Cantidad'] * $datos[$i]['Precio']; ?></span>
                            <br></br>
                            <a href="#" class="eliminar" data-id="<?php echo $datos[$i]['Id'] ?>">Eliminar</a>
                            <br></br>

                        </center>
                    </div>


                    <?php
                    $total = ($datos[$i]['Cantidad'] * $datos[$i]['Precio']) + $total;
                }
            } else {
                echo '<center><h2>CARRO DE COMPRAS VACIÓ</h2></center>';
            }
            echo '<center><h2 id="total" style="font-size: 25px">Total: ' . $total . '</h2></center>';
            if ($total != 0) {
                echo '<center><a href="compras.php" style="font-size: 25px" class="aceptar">Comprar</a></center>;';
            }
            ?>
            <center><a href="Plato/CatalogoPlatos.php" style="font-size: 25px;">Añadir Producto</a></center>
            
        </section>

    </body>
</html>