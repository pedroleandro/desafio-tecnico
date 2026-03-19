# Teste Técnico iG7 Tecnologia

### Requisitos

- php 7.4
- mysql

### Download do Projeto

#### Faça o download do projeto em /htdocs

```
git clone https://github.com/pedroleandro/desafio-tecnico.git
```

### Instalação

#### Criar Banco de Dados

```
CREATE DATABASE desafio_tecnico_ig7 CHAR SET utf8mb4 COLLATE utf8mb4_general_ci;
```

### Criar Tabela Students

```
CREATE TABLE students(
     id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(150) NOT NULL,
     mail VARCHAR(150) NOT NULL UNIQUE,
     registration VARCHAR(20) NOT NULL UNIQUE,
     status ENUM('ativo', 'inativo') NOT NULL DEFAULT 'ativo',
     date_of_birth DATETIME
);
```

#### Acessar index.php

```
http://localhost/desafio-tecnico/
```