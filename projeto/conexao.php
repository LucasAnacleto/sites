<?php

$conn = mysqli_connect('localhost:3306', 'root', '') or die ("Falha na conexao");

mysqli_select_db($conn, 'login');

?>