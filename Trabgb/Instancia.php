<?php
require "Conta.php";
require "Cliente.php";

$conta = new Conta("21.453.321-9", "João","1.235");
$cliente = new Cliente("João", "387.137.038-32", "Rua Alianca N°32", "27.389.422",$conta);


echo "---------------------".PHP_EOL;
echo $cliente->exibirConta()->exibirNomeConta();