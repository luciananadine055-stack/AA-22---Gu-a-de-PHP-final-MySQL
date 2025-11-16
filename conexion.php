<?php
function conectar() {
    global $con;
    
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "ucp2025";
    
    $con = mysqli_connect($host, $user, $pass, $db);
    
    if (mysqli_connect_errno()) {
        error_log("Error de conexión: " . mysqli_connect_error());
        // En producción, mostrar mensaje genérico
        die("Error en la conexión a la base de datos");
    }
    
    $con->set_charset("utf8");
    return true;
}

function desconectar() {
    global $con;
    if(isset($con)) {
        mysqli_close($con);
    }
}
?>
