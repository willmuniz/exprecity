<?php
$ID= $_POST['id_moto'];
$Nome= $_POST['nome_moto'];
$Sobrenome= $_POST['sobrenome_moto'];
$CPF = $_POST['CPF_empresa'];
$Telefone = $_POST['telefone_moto'];
$Email = $_POST['email_moto'];
$Login = $_POST['login_moto'];
$Senha = $_POST['senha_moto'];

$nome_servidor = "localhost";
$usuario = "root";
$senha = "";
$nome_bd = "exprecity";

$conexao = new mysqli($nome_servidor, $usuario, $senha, $nome_bd);

if($conexao -> connect_error){
    echo "Algo deu errado, não está certo! <br>";
}
$comando_cadastrar = "INSERT INTO cad_moto VALUES ('$ID','$Nome','$Sobrenome', '$CPF', '$Telefone' ,'$Email','$Login', '$Senha ')";

if($conexao->query($comando_cadastrar) == TRUE){

    echo "<script>alert('Cadastro feito com Sucesso!!');
	window.location='entradaemp.html'; </script>";


}else{
    echo "<script>alert('Erro no Cadastro');
	 </script>";
}

$conexao->close();
?>