<?php
if (is_file("log/".PATH_LOG)) {
    $lines = file("log/".PATH_LOG);
    echo "<ol>";
    foreach ($lines as $line) {
        list($dt, $ref, $page) = explode('|', $line);
        $dt = date('d:m:Y H:i:s', $dt);
        echo 
			"<li> [$dt]: $ref --> $page </li>";
	}
	echo "</ol>";
}
?>
