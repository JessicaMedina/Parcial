<html> 

    <head> 
        <title>Registro eliminado.</title> 
        <META name='robot' content='noindex, nofollow'> 
    </head> 

    <body> 

        <?php
        $id = $_POST['id'];

        include('../conexion.php');

        $query = "delete from platos where id = '$id'";
        $result = mysql_query($query);


        echo '<script>
                        var msg = "Plato Eliminado Exitosamente"
                        alert(msg);
                        
                      
                    </script>';
         echo '<script> window.location="eliminar.php";</script>';
    
        ?> 

    </body> 

</html> 

