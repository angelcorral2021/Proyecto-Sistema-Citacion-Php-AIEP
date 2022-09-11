<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>citacion</title>
</head>


<body>
<?php
error_reporting(0);
date_default_timezone_set('America/Santiago');//configurar zona horaria chile

$DateAndTime = date('d-m-Y h:i:s a', time());//crear variable feha y hora

if($_POST['cancelar'] == 'Cancelar'){
    echo "<script type = 'text/javascript'>window.location='funcionario.php'</script>";
}
?>

    <form action="" method="POST">
    <?php
error_reporting(0);
if($_POST['registro'] == 'Registro familiar'){
    echo "<script type = 'text/javascript'>window.location='registrofamiliar.php'</script>";
}
?>
        <center>
            <h1>SISTEMA CITACIONES</h1>
            <tr>

                
            </tr>
            <table border="0">
                <br><br><br>


                <tr>
                    <td>Folio: </td>
                    <td><input type="number" name="folio" value="" ></td>
                    <td><input type="submit" name="bcita" value="Buscar citacion" ></td>
                </tr>
                <tr>
                    <td>Fecha creacion: </td>
                    <td><input type="text" name="fcrea" value="<?php echo $DateAndTime ?>" ></td>
                    
                </tr>
                <tr>
                    <td>Fecha citacion: </td>
                    <td><input type="date" name="fcita" value="" ></td>
                    <td><input type="submit" name="bfecha" value="Buscar por fecha" ></td>
                </tr>
                <!--<tr>
                    <td>Correo funcionario: </td>
                    <td><input type="text" name="correo" value="" ></td>
                </tr>
                <tr>
                    <td>Nombre funcionario: </td>
                    <td><input type="text" name="nombre" value="" ></td>
                </tr>-->
                <tr>
                    <td>Correo familiar: </td>
                    <td><input type="text" name="correofamilia" value="" ></td>
                    <td><input type="submit" name="bcorreofamilia" value="Buscar por correo" ></td>
                </tr>
                <tr>
                
                    <td>Nombres y apellidos estudiante: </td>
                    <td><input type="text" name="nombres" value="" ></td>
                    <td><input type="submit" name="registro" value= "Registro familiar"></td>
                </tr>
               
                <tr>
                    <td>Curso: </td>
                    <td><input type="text" name="curso" value="" ></td>
                </tr>
                <tr>
                    <td>Nombres y apellido apoderado: </td>
                    <td><input type="text" name="nombresapo" value="" ></td>
                    <td><input type="submit" name="registro" value= "Registro familiar"></td>
                </tr>
              
                <tr>
                    <td>Telefono: </td>
                    <td><input type="text" name="telefono" value="" ></td>
                </tr>
                









            </table>


        </center>
        <br><br><br>
        <center>

           


            
            <input type="submit" name="motivo" value="Motivo">
            <input type="submit" name="observaciones" value="Observaciones">
            <input type="submit" name="acuerdos" value="Acuerdos">
            <input type="submit" name="estado" value="Estado">
            <br><br>
            <input type="submit" name="guardar" value="Guardar">
            <input type="submit" name="generar" value="Generar">
            <input type="submit" name="cancelar" value="Cancelar">
            <input type="submit" name="eliminar" value="Eliminar">
            <br>
            
        </center>
    </form>

</body>

</html>