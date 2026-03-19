<?php

require __DIR__ . "/Connection.php";

try {

    $connection = Connection::getInstance();

    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $registration = $_POST["registration"];
    $status = $_POST["status"];
    $date_of_birth = $_POST["date_of_birth"];

    var_dump($_POST);

    $name = trim(strip_tags($name));

    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        echo "Atenção: Não é um e-mail válido!";
        die;
    }

    $queryEmailExists = "SELECT * FROM students WHERE mail = :mail";
    $statementEmailExists = $connection->prepare($queryEmailExists);
    $statementEmailExists->bindParam(":mail", $mail);
    $statementEmailExists->execute();
    $resultEmailExists = $statementEmailExists->fetchAll();

    if (!empty($resultEmailExists)) {
        echo "Atenção: Esse e-mail já foi cadastrado!";
        die;
    }

    $queryRegistrationExists = "SELECT * FROM students WHERE registration = :registration";
    $statementRegistrationExists = $connection->prepare($queryRegistrationExists);
    $statementRegistrationExists->bindParam(":registration", $registration);
    $statementRegistrationExists->execute();
    $resultRegistrationExists = $statementRegistrationExists->fetchAll();

    if (!empty($resultRegistrationExists)) {
        echo "Atenção: Essa matricula já foi cadastrada!";
        die;
    }

    $permittedStatus = [
        "ativo",
        "inativo"
    ];

    if (!in_array($status, $permittedStatus, true)) {
        echo "Atenção: Status inválido!";
        die;
    }

    $newStudent = [
        "name" => $name,
        "mail" => $mail,
        "registration" => $registration,
        "status" => $status,
        "date_of_birth" => $date_of_birth
    ];

    $queryInsertStudent = "INSERT INTO students (name, mail, registration, status, date_of_birth)
                            VALUES (:name, :mail, :registration, :status, :date_of_birth)";

    $statementInsertStudent = $connection->prepare($queryInsertStudent);
    $student = $statementInsertStudent->execute($newStudent);

    if ($student) {
        echo "Sucesso: novo estudante cadastrado com sucesso: " . $connection->lastInsertId();
    }

} catch (\RuntimeException $runtimeException) {
    echo "Erro: " . $runtimeException->getMessage();
}
