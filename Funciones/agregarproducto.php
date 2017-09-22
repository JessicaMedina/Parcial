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
            <script type="text/javascript"  href="js/scripts.js"></script>
        </head>
        <body style="height: 100%;">
            <nav class="NavBar full">
                <div class="row">
                    <center><a href="../view/root/index.php"<div class="tittles NavBar-logo col s12 m3" style="font-size:30px; font-family: monospace">Restaurante</div></a></center>

                    <i class="zmdi zmdi-more-vert full btn-menu hide-on-med-and-up waves-effect"></i>

                </div>


            </nav>  

<div class="tabla4" style="font-family: monospace; font-size: 20px; color:#16a09b ;  width: 50%s">
        <center><h1>Nuevo Producto</h1></center>
        <form action="altaproducto.php" method = "post" enctype="multipart/form-data">
            <fieldset>
              
                <input type="text" placeholder="Nombre" name="nombre" required>
            </fieldset>
            <fieldset>
              
                <input type="text" placeholder="Cantidad" name="cantidad" required>
            </fieldset>
            <fieldset>
             
                <input type="text" placeholder="Descripción" name="descripcion" required>
            </fieldset>
            <fieldset>
                Imagen:
                <input type="file" name="file" required>
            </fieldset>
            <fieldset>
               
                <input type="text" placeholder="Precio"name="precio" required>
            </fieldset>

            <center><div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <div class="spacing-2"></div>
                    <button type="submit" class="btn btn-primary btn-block" name="accion" id="accion">Enviar</button>
                </div>
                </div></center>
        </form>	

    </form>
    </section>
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
</div>
</body>
</html>