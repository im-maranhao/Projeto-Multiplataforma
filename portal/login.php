<?php
session_start();
include ('../conexao.php');

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: ./index.php');
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
 
// $query = "select usuario_id, usuario from usuario where usuario = '{$usuario}' and senha = '{$senha}')"; 

$result = mysqli_query($conexao, "select usuario_id, usuario from usuario where usuario = '{$usuario}' and senha = '{$senha}'");

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('Location: ./pages/dashboard/dashboard.php');
    exit;
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: ./index.php');
    exit();
}

?>