<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
</head>


<body>


    <form action="" method="POST">

        <?php
        error_reporting(0);


        if ($_POST['ingresar'] == 'Ingresar') {

            if ($_POST['txtusuario'] == null and $_POST['txtpass'] == null) {
                echo "<script>alert('Usuario o Contraseña Incorrecta!')</script>";
            } else {
                switch ($_POST['tipo']) {
                    case "funcionario":
                        if ($_POST['txtusuario'] == 'marta' and $_POST['txtpass'] == '111') {
                            include("funciones.php");
                            $cnn = Conectar();
                            $us = $_POST['txtusuario'];
                            $pa = $_POST['txtpass'];
                            $sql = "select * from funcionario where usua = '$us' and pass = '$pa'";
                            $rs = mysqli_query($cnn, $sql);
                            if (mysqli_num_rows($rs) != 0) {
                                if ($row = mysqli_fetch_array($rs)) {
                                    $rut = $row[0]; //rut
                                    $nom = $row[1]; //nombre
                                    $cargo = $row[2]; //cargo
                                    $apellido = $row[4]; //apellido
                                    $correo = $row[5]; //correo
                                    echo "<script>alert('Usted es $nom y su cargo es $cargo')</script>";
                                    echo "<script type = 'text/javascript'>window.location='funcionario.php'</script>";
                                }
                            }
                        }
                        break;
                    case "apoderado":
                        echo "<script type = 'text/javascript'>window.location='apoderado.php'</script>";
                        break;
                    case "administrador":
                        echo "<script type = 'text/javascript'>window.location='administrador.php'</script>";
                        break;
                    case "alumno":
                        echo "<script type = 'text/javascript'>window.location='alumno.php'</script>";
                        break;
                }
            }
        }



        ?>

        <center>
            <br><br><br><br>
            <img src="img\rrss.jpg" width="450" height="250" alt="">
            <br><br><br><br><br><br>
            <table border="0">
                <br><br>
                <tr>
                    <td>Usuario:</td>
                    <td><input type="text" name="txtusuario" value=""></td>
                </tr>
                <tr>
                    <td>Contraseña:</td>
                    <td><input type="password" name="txtpass" value=""></td>
                </tr>
                <tr>
                    <td>Tipo de usuario:</td>
                    <td><select name="tipo">
                            <option value="funcionario">Funcionario</option>
                            <option value="administrador">Administrador</option>
                            <option value="apoderado">Apoderado</option>
                            <option value="alumno">Alumno</option>





                        </select></td>
                </tr>

            </table>
            <br>
            <table border="0">
                <tr>
                    <td><input type="submit" name="ingresar" value="Ingresar"></td>
                </tr>
            </table>
            <br>
            <table border="0">
                <tr>
                    <td><input type="submit" name="recovery" value="Recuperar Usuario y Contraseña"></td>
                </tr>

            </table>







            <br><br>
            <h2>Integrantes: Angel Corral- Mauricio Alarcon- Alexis Jara - Fernando Zamorano</h2>
        </center>
    </form>

</body>

</html>