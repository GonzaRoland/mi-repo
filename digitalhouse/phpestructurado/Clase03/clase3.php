<?php


$dni = 33103353;
$nombre = "Gonzalo";
$apellido = "Roland";
$monto = 50000; 
$tasa = 10; 
$dia = 2; 
$cuotas = 10;






switch ($dia) {
    case 1: $dia = "Lunes";
        break;
    case 2: $dia = "Martes";
        break;
    case 3: $dia = "Miercoles";
        break;
    case 4: $dia = "Jueves";
        break;
    case 5: $dia = "Viernes";
        break;
    case 6: $dia = "Sábado";
        break;
    case 7: $dia = "Domingo"; 
        break;
    default: echo "Solamente se pueden seleccionar días desde el Lunes (1) hasta el Domingo (7)";
        exit;
}

if ($monto < 1000 || $monto > 72000) {
    echo "El monto debe ser de un minimo de $100 y un máximo de $72000";
    exit;
} else if ($tasa != 5 && $tasa != 10 && $tasa != 15 && $tasa != 20) {
    echo "La tasa solo puede ser del 5%, 10%, 15% o 20%";
    exit;
} else if ($cuotas < 3 || $cuotas > 36 ) {
    echo "Las cuotas deben ser un mínimo de 3 y un máximo de 36";
    exit;
} else {



$comision = $monto * $tasa/100;
$total = $monto + $comision;
$cuota = $total / $cuotas;
$listacuotas = [];
for ($i = 1; $i <= $cuotas; $i++) {
    $listacuotas[$i] = "Cuota $i, monto a pagar: $ $cuota"; 
}






echo "<h1>Estimado $nombre $apellido el día de hoy $dia se le aprobó el crédito de $ $monto, a una tasa del $tasa%,
usted de be cancelar un total de $ $total, a razón de $cuotas cuotas y el valor de cada una es de: </h1>";

foreach ($listacuotas as $valor) {
    echo $valor;
    echo "<hr>";
}

echo "<strong>Gracias por confiar en nuestro servicio de préstamos en linea!</strong>";
}
?>