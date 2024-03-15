<?php

$conexion = mysqli_connect("localhost", "mymisticke7b", "aSW43LqM","creartickets");


$titulo=$_POST['titulo'];
$estado=$_POST['estado'];
$fecha=$_POST['fecha'];
$solicitante=$_POST['solicitante'];
$categoria=$_POST['categoria'];
$descripcion=$_POST['descripcion'];

$query="INSERT INTO tickets(titulo,estado,fecha_apertura,solicitante,categoria,descripcion) VALUES
    ('$titulo','$estado','$fecha','$solicitante','$categoria','$descripcion')";


$ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Ticket subido exitosamente");
                window.location = "tickets.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Intentalo de nuevo, usuario no almacenado");
                window.location = "tickets.php";
            </script>
        ';
    }

    mysqli_close($conexion);
?>
