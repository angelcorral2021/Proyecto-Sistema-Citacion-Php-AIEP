<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>funcionario</title>
</head>


<body>
<?php

    include("funciones.php");
    $cnn = Conectar();
    
    $sql = "select * from funcionario where usua = 'marta' and pass = '111'";
    $rs = mysqli_query($cnn, $sql);
    if (mysqli_num_rows($rs) != 0) {
        if ($row = mysqli_fetch_array($rs)) {
            $rut = $row[0]; //rut
            $nom = $row[1]; //nombre
            $cargo = $row[2]; //cargo
            $apellido = $row[4]; //apellido
            $correo = $row[5]; //correo
        }
    } 
error_reporting(0);
if($_POST['cerrar'] == 'Cerrar sesion'){
    echo "<script type = 'text/javascript'>window.location='index.php'</script>";
}
?>
      <?php
error_reporting(0);
if($_POST['sistema'] == 'Sistema citacion'){
    echo "<script type = 'text/javascript'>window.location='citacion.php'</script>";
}
?>

    <form action="" method="POST">

        <center>
            <h1>Menu Funcionario</h1>
            <tr>
   
    <td><img src="img\gerente.png" alt=""></td>
    </tr>
<table border="0">
    <br><br><br>
    

    
<h2>Sus datos: </h2>
    <tr>
    <td>Correo: </td><td><input type="text" name="correo"  value="<?php echo $correo?>"></td>
    </tr>
    <tr>
    <td>Rut: </td><td><input type="text" name="rut" value="<?php echo $rut?>"></td>
    </tr>
    <tr>
    <td>Nombre: </td><td><input type="text" name="nombre"  value="<?php echo $nom?>"></td>
    </tr>
    <tr>
    <td>Apellido: </td><td><input type="text" name="apellido"  value="<?php echo $apellido?>"></td>
    </tr>
    <tr>
    <td>Cargo: </td><td><input type="text" name="cargo"  value="<?php echo $cargo?>"></td>
    </tr>
    
        





        </table>


        </center>
        <br><br><br>
        <center>
        
        
        <input type="submit" name="cambiarpass" value="Cambiar contraseña">
        
       
        <input style="background-color:blue"    type="submit" name="sistema" value="Sistema citacion">
        <br><br><br><br><br>
        <input type="submit" name="cerrar" value="Cerrar sesion">
        </center>
    </form>

</body>

</html>