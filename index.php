<?php

require __DIR__ . "/Connection.php";

try {

    echo "Teste de conexão com o banco de dados.</br>";

    $connection = Connection::getInstance();

    var_dump($connection);

    echo "Conexão com o banco de dados bem sucedida!";

} catch (\RuntimeException $runtimeException) {
    echo "Erro: " . $runtimeException->getMessage();
}
