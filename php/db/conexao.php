<?php

// definindo constantes para conexão com o banco
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', 'root');
define('DB', 'taskManager');

// realizando a conexão e guardando o valor em uma variável
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possível conectar');

?>