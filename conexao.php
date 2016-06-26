<?php
$servidor = "localhost";
$usuario  = "postgres";
$senha    = "12345";
$base     = "postgres";

$conexao  = pg_connect("host=$servidor port=5432 dbname=$base user=$usuario password=$senha");
?>