if(!empty($_GET['modulo'])) {
    $modulo = basename($_GET['modulo']); // Previene path traversal
    $ruta_modulo = 'modulos/' . $modulo . '.php';
    
    if(file_exists($ruta_modulo) && is_file($ruta_modulo)) {
        include($ruta_modulo);
    } else {
        echo "<p>Módulo no encontrado</p>";
    }
}
