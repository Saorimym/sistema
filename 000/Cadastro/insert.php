<?php

$banco = "banco.txt";
$conteudo = $_POST["nome"] . "\n" . $_POST["idade"] . "\n" . $_POST["endereco"] . "\n" . str_replace("\n", "<br>", $_POST["comanda"])
. "\n";
$criar = fopen($banco, "a+");
fwrite($criar, $conteudo);

if ($criar == true) {
    echo "Dados armazenados em banco.txt";
} else {
    echo "Erro ao salvar dados em banco.txt";
};
fclose($criar);
header('Location: index.php#footer');

?>