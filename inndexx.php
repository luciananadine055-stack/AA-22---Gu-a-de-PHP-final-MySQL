// En lugar de:
$sql = mysqli_query($con, "SELECT * FROM menu");

// Mejor:
$sql = mysqli_query($con, "SELECT nombre FROM menu");
if($sql && mysqli_num_rows($sql) > 0) {
    while($r = mysqli_fetch_assoc($sql)) {
        echo htmlspecialchars($r['nombre']) . "<br>";
    }
} else {
    echo "No hay elementos en el menú";
}
