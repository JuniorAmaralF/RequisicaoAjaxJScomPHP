<?php

$caminhoBanco = __DIR__.'/banco.sqlite';

$pdo = new PDO('sqlite:'.$caminhoBanco);

echo 'Conectei';

//$pdo->exec("INSERT INTO registro (name,idade) values (test,30);");

/*
$criarTabelaSql = "CREATE TABLE IF NOT EXISTS registro (
                        id INTERGER PRIMARY KEY,
                        name TEXT,
                        idade TEXT
);";

$res=$pdo->exec($criarTabelaSql);
echo "Executado";
*/