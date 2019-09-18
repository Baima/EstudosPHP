<?php
require_once("config.php");


$usuario = new Usuario();
$usuario->loadById(11);
$usuario->delete();
echo $usuario;



/*alterar um usuario
$usuario = new Usuario();
$usuario->loadById(10);
$usuario->update("Gabieru","senha");
echo $usuario;
*/

/*Cria um novo usuario com INSERT
$aluno = new Usuario("aluno","@lun0");
$aluno ->insert();
echo $aluno;
*/

/*carrega um usuario usando login e senha
$usuario = new Usuario();
$usuario->login("GABREeL","123");
echo $usuario;*/ 

/*carrega uma lista buscando pelo login
$search = Usuario::search("E");
echo json_encode($search);
*/

/*carrega uma lista de usuários
$lista = Usuario::getList();
echo json_encode($lista);
*/

/*carrega um usuário
$user = new Usuario();
$user->loadById(4);
echo $user;
*/

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/
?>