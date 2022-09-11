<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>apoderado</title>
</head>


<body>

<?php
error_reporting(0);
if($_POST['cerrar'] == 'Cerrar sesion'){
    echo "<script type = 'text/javascript'>window.location='index.php'</script>";
}
?>
    <form action="" method="POST">

        <center>
            <h1>Menu Apoderados</h1>
            <tr>
   
    <td><img src="img\personas (1).png" alt=""></td>
    </tr>
<table border="0">
    <br><br><br>
    

    
<h2>Sus datos: </h2>
    <tr>
    <td>Correo: </td><td><input type="text" name="correo"  placeholder="correo@gmail.com"></td>
    </tr>
    <tr>
    <td>Rut: </td><td><input type="text" name="rut"  placeholder="xx.xxx.xxx-x"></td>
    </tr>
    <tr>
    <td>Nombres: </td><td><input type="text" name="nombres"  placeholder="jhon"></td>
    </tr>
    <tr>
    <td>Apellidos: </td><td><input type="text" name="apellidos"  placeholder="Doe"></td>
    </tr>
    
        





        </table>


        </center>
        <br><br><br>
        <center>
        <input type="submit" name="citaprogram" value="Citaciones programadas">
        <input type="submit" name="histocita" value="Historial citaciones">
        <input type="submit" name="cambiarpass" value="Cambiar contraseña">
        <br><br><br><br><br>
        <input type="submit" name="cerrar" value="Cerrar sesion">
        </center>
        
    </form>

</body>

</html>