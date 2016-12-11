<?php


$host = "localhost";
$user = "root";
$senha = "sgtyzm42";
$banco = "bc";

//Executa a conexao com o mysql

$conexao = mysql_connect($host,$user,$senha) or die('Não foi possível conectar :' .mysql_error()) ;
mysql_select_db($banco) or die (mysql_error());
