<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>registro</title>
</head>


<body>
<?php
error_reporting(0);
if($_POST['cerrar'] == 'Cerrar sesion'){
    echo "<script type = 'text/javascript'>window.location='citacion.php'</script>";
}
?>

    <form action="" method="POST">

        <center>
            <h1>Registro Familiar</h1>

            <table border="0">
                <br>

<img src="img\familia.png" alt="">
<br><br><br>

                
                <tr>
                    <td>Correo: </td>
                    <td><input type="text" name="correo"  placeholder="correo@gmail.com"></td>
                </tr>
                <tr>
                    <td>Rut apoderado: </td>
                    <td><input type="text" name="rutapo"  placeholder="xx.xxx.xxx-x"></td>
                </tr>
                <td>Nombres apoderado: </td>
                <td><input type="text" name="nombresapo"  placeholder="jhon"></td>
                </tr>
                <tr>
                    <td>Apellidos apoderado: </td>
                    <td><input type="text" name="apellidosapo"  placeholder="Doe"></td>
                </tr>
                <tr>
                    <td>Rut estudiante: </td>
                    <td><input type="text" name="rutalu"  placeholder="xx.xxx.xxx-x"></td>
                </tr>

                <tr>
                    <td>Nombres estudiante: </td>
                    <td><input type="text" name="nombresalu"  placeholder="jhon"></td>
                </tr>
                <tr>
                    <td>Apellidos estudiante: </td>
                    <td><input type="text" name="apellidoalu"  placeholder="Doe"></td>
                </tr>
                <tr>
                    <td>Curso: </td>
                    <td><input type="text" name="curso"  placeholder="4 C"></td>
                </tr>
                <tr>
                    <td>Direccion: </td>
                    <td><input type="text" name="direccion"  placeholder="Siempre viva 123"></td>
                </tr>
                <tr>
                    <td>Telefonos: </td>
                    <td><input type="text" name="fono"  placeholder="934345454"></td>
                </tr>







            </table>

            <br><br><br><br><br>
        <input type="submit" name="cerrar" value="Cerrar sesion">
        </center>

    </form>

</body>

</html>