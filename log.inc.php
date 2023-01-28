<?php
$dt = time();
$page = $_SERVER['REQUEST_URI'];
$ref = $_SERVER['HTTP_REFERER'];
$path = "$dt | $page | $ref \n";
$journal = file_put_contents("log/".PATH_LOG, $path, FILE_APPEND);
?>
