<?php



$num1 = $_POST['parcial_1'];
$num2 = $_POST['parcial_2'];
$num3 = $_POST['parcial_3'];
$exFin = $_POST['examen_final'];
$traFin= $_POST['trabajo_final'];


$promedio=($num1 + $num2 + $num3)/3;
$promedioParciales=$promedio*0.35;
$promedioExFin=$exFin*0.35;
$promedioTraFin=$traFin*0.30;

$notaFinal=$promedioParciales+$promedioExFin+$promedioTraFin;


echo "El promedio de los parciales es: ".$promedio. '<br />';
echo "El promedio del examen final es: ".$exFin. '<br />';
echo "El promedio del trabajo final es: ".$traFin. '<br />'.'<br />'; 
echo "La nota final es: ".$notaFinal. '<br />';


if ($notaFinal <3) {
    echo "Reprobó";
} elseif ($notaFinal >3){
    echo "Aprobó";
}


?>