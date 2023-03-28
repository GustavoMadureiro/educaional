<?php
    $ip = $_SERVER['REMOTE_ADDR']; // Obtém o endereço IP do visitante
    $date = date('d/m/Y H:i:s'); // Obtém a data e hora atual
    $log = $ip.' - '.$date."\n"; // Formata a linha do log

    file_put_contents('log.txt', $log, FILE_APPEND); // Adiciona a linha ao arquivo de log
?>
