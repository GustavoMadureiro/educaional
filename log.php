<?php
$file = 'log.txt';
$log_data = $_POST['log_data'];
file_put_contents($file, $log_data, FILE_APPEND | LOCK_EX);
?>