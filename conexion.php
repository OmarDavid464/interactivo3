<?php
    $conexion = mysqli_connect(
"sql100.infinityfree.com",
"if0_40590712",
"Oscar313016",
"if0_40590712_XXX"
);
if(!$conexion){
    die("Error de conexion: " . mysql_connect_error());
}
?>