<?php
//d = dia
//M = mês
//y = ano
//H = hora
//i = minutos
//s = segundos

$diaDeHoje = date_create("2024-04-29");
//echo time();
echo date_format($diaDeHoje, 'd/M/y H:i:s');
echo "<br>";
echo date_format($diaDeHoje, 'd / m / Y H:i:s');
echo '<br>';
echo date_format(date_create("now"), 'd / M / Y h:i:s a');
echo '<br>';
