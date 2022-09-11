<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>administrador</title>
</head>


<body>
    
    <form action="" method="POST">
        <?php
error_reporting(0);
if($_POST['cerrar'] == 'Cerrar sesion'){
    echo "<script type = 'text/javascript'>window.location='index.php'</script>";
}
?>
<?php
error_reporting(0);
if($_POST['agregar'] == 'Agregar Apoderado'){
    echo "<script type = 'text/javascript'>window.location='AgregarApoderado.php'</script>";
}
?>

        <center>
            <h1>Menu Administrador</h1>
            <tr>

                <td><img src="img\gestion-de-datos.png" alt=""></td>
            </tr>
            <table border="0">
                <br><br><br>



                <h2>Sus datos: </h2>
                <tr>
                    <td>Correo: </td>
                    <td><input type="text" name="correo" value="" placeholder="correo@gmail.com"></td>
                </tr>
                <tr>
                    <td>Rut: </td>
                    <td><input type="text" name="rut" value="" placeholder="xx.xxx.xxx-x"></td>
                </tr>
                <tr>
                    <td>Nombre: </td>
                    <td><input type="text" name="nombre" value="" placeholder="jhon"></td>
                </tr>
                <tr>
                    <td>Apellido: </td>
                    <td><input type="text" name="apellido" value="" placeholder="Doe"></td>
                </tr>
                <tr>
                    <td>Cargo: </td>
                    <td><input type="text" name="cargo" value="" placeholder="Administrador"></td>
                </tr>
            






            </table>
<br><br>
            <tr>
                 
                 <td><input type="submit" name="cambiocontraseña" value="Cambiar contraseña" ></td>
             </tr>

        </center>
        <br><br><br>
        <center>

            <input type="submit" name="a/efuncio" value="Agregar/Eliminar Funcionario">
            <input type="submit" name="a/eapo" value="Agregar/Eliminar Apoderado">
            <input type="submit" name="a/alu" value="Agregar/Eliminar Alumno">
            <br>


            <br><br>
            <input type="submit" name="historialfunci" value="Historial citaciones por funcionario">
            <input type="submit" name="historialapo" value="Historial citaciones por apoderado">
            <br><br><br>
            <input type="submit" name="modifun" value="Modificar datos funcionario">
            <input type="submit" name="modiapo" value="Modificar datos apoderado">
            <br><br>
        <input type="submit" name="cerrar" value="Cerrar sesion">
        </center>
    </form>

</body>

</html>