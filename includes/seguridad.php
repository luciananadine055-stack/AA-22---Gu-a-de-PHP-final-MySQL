<?php
function sanitizar($dato) {
    return htmlspecialchars(trim($dato), ENT_QUOTES, 'UTF-8');
}

function validarModulo($modulo) {
    $modulos_permitidos = [
        'ejercicio1', 'ejercicio2', 'ejercicio3', 
        'ejercicio4', 'ejercicio5'
    ];
    return in_array($modulo, $modulos_permitidos);
}
?>
