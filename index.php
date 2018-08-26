<?php

require_once("config.php");

$jose = new Usuario();

$jose->loadById(5);

echo $jose;


//phpinfo();

?>