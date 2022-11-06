<?php
$Nome= $_POST['nome_usuario'];
$Sobrenome = $_POST['sobrenome_usuario'];
$CPF = $_POST['CPF_usuario'];
$Telefone = $_POST['telefone_usuario'];
$Email = $_POST['email_usuario'];
$Login = $_POST['login_usuario'];
$Senha = $_POST['senha_usuario'];

$nome_servidor = "localhost";
$usuario = "root";
$senha = "";
$nome_bd = "exprecity";

$conexao = new mysqli($nome_servidor, $usuario, $senha, $nome_bd);

if($conexao -> connect_error){
    echo "Algo deu errado, não está certo! <br>";
}
$comando_cadastrar = "INSERT INTO cad_usu VALUES ('$Nome', '$Sobrenome', '$CPF', '$Telefone' ,'$Email','$Login', '$Senha ')";

if($conexao->query($comando_cadastrar) == TRUE){

    echo "<script>alert('Cadastro feito com Sucesso!!');
	window.location='entrada.html'; </script>";


}else{
    echo "<script>alert('Erro no Cadastro');
	 </script>";
}

$conexao->close();
?>