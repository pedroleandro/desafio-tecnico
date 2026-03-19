<?php

require __DIR__ . "/Connection.php";

try {

    $connection = Connection::getInstance();

    $queryListStudents = "SELECT * FROM students";
    $resultListStudents = $connection->query($queryListStudents);

    $students = $resultListStudents->fetchAll(PDO::FETCH_OBJ);

    require __DIR__ . "/list.php";


} catch (\RuntimeException $runtimeException) {
    echo "Erro: " . $runtimeException->getMessage();
}