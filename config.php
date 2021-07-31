<?php

$dbhost = 'localhost';
$username = 'root';
$password = '';
$dbname = 'uniba';

$conexao = new mysqli($dbhost, $username, $password, $dbname);


//if($conexao->connect_errno){
	//echo "error";
//}else{
	//echo "conexão efetuada com sucesso";
//}

?>