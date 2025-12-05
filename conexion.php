<?php
    $conexion=mysqli_connect("sql100.infinityfree.com","if0_40590712","Oscar313016","if0_40590712_omar",
);

if(!$conexion){
    echo "Error: No se pudo conecetar a MYSQL.";
    echo "errno de depuracion: ".mysqli_connect_errno();
    echo "error de depuracion: ".mysqli_connect_error();
    exit;
}

echo "Exito: Se realizo la conexion apropiada a MYSQL!.";
echo "<br>";
echo "Informacion de host: ". mysqli_get_host_info($conexion);
mysqli_close($conexion);
?>
