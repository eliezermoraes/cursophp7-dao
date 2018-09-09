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
//$usuario = new Usuario();
//$usuario->login("root", "122070");
//echo $usuario;

//$aluno = new Usuario();
//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("12201970");
//$aluno->insert();
//echo $aluno;
//
//Criando um novo Usuário
/*
$aluno = new Usuario("aluno", "@lun0");
$aluno->insert();
echo $aluno;
*/

$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("professor", "!@#$%&*");

echo $usuario;

?>