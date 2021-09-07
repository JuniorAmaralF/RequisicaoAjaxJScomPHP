<?php

require_once "../conexao.php";

$statement=$pdo->query("SELECT * FROM registro;");
$registroList=$statement->fetchAll(PDO::FETCH_ASSOC);

//var_dump($registroList);
//echo "here <br>";
foreach ($registroList as $linhas){
   echo  $linhas['name']."<br>";
   echo $linhas['idade']."<br>";
}
