<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
   <?php

    use MyApp\Query\Ejecuta;
    use MyApp\Query\Select;
    require("../../vendor/autoload.php");

    $query = new Select();
    $insert=new Ejecuta();

    $nombre = $_POST['nombre'];
    $correo=$_POST['correo'];
    $contra = $_POST['contrasena'];

    session_start();
    
    try{

    }
    catch(PDOException $e){
        echo "<div class='alert alert-danger' role='alert' style='text-align: center;'><strong>Error: Algo salio mal: " . $e->getMessage() ."</strong></div>";
        echo "<a href='../register.php> Intentalo de nuevo</a>";
    }
    
?> 

</body>
</html>
