<?php

$servidor = "localhost1"; //também pode ser web(um site como o banco online )  
$dbname = "umnomequalquer"; //Nome do banco de dados a ser colocada a informação. Criado antes no MySQL 
$dbusuario ="root11"; //usuário do banco EXEMPLO. 
$dbsenha = "***"; //Senha do usuário EXEMPLO

//Método de conexão com o Banco de Dados. 
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

if(!$conn){

die ("Conexão falhou: " . mysqli_connect_error());

}


?>