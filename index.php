<?php

require_once("config.php");

//Carrega um usuário
//$jose = new Usuario();
//$jose->loadById(5);
//echo $jose;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("pedro");
//echo json_encode($search);

//carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("root", "122070");

echo $usuario;

?>