<?php
function fechaEnCartaFormal($fecha) {
    // Convertir la fecha a timestamp
    $timestamp = strtotime($fecha);

    // Obtener el día, mes y año
    $diaSemana = date('l', $timestamp);
    $dia = date('d', $timestamp);
    $mes = date('F', $timestamp); // Nombre completo del mes
    $anio = date('Y', $timestamp);

    // Días de la semana en español
    $diasSemanaES = array(
        'Monday' => 'Lunes',
        'Tuesday' => 'Martes',
        'Wednesday' => 'Miércoles',
        'Thursday' => 'Jueves',
        'Friday' => 'Viernes',
        'Saturday' => 'Sábado',
        'Sunday' => 'Domingo'
    );

    // Meses en español
    $mesesES = array(
        'January' => 'Enero',
        'February' => 'Febrero',
        'March' => 'Marzo',
        'April' => 'Abril',
        'May' => 'Mayo',
        'June' => 'Junio',
        'July' => 'Julio',
        'August' => 'Agosto',
        'September' => 'Septiembre',
        'October' => 'Octubre',
        'November' => 'Noviembre',
        'December' => 'Diciembre'
    );

    // Convertir el día de la semana y el mes al español
    $diaSemanaES = $diasSemanaES[$diaSemana];
    $mesES = $mesesES[$mes];

    // Construir la cadena con el formato deseado
    $cartaFormal = "$diaSemanaES, $dia de $mesES del $anio";
    
    return $cartaFormal;
}

// Ejemplo de uso
$fecha = "2014-03-19";
$cartaFormal = fechaEnCartaFormal($fecha);
echo $cartaFormal; // Miercoles, 19 de Marzo del 2014
?>