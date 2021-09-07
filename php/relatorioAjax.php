<?php

require_once "../conexao.php";

$nome = $_REQUEST['nome'];
$idade = $_REQUEST['idade'];


echo "Nome:".$nome." Idade:".$idade;

$pdo->exec("INSERT INTO registro (name,idade) values ('{$nome}','{$idade}');");

echo "Termina Aqui";
//$statement = $pdo->prepare($sql);

//var_dump($statement);
//$statement->execute();