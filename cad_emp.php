<?php
$Nome= $_POST['nome_empresa'];
$CNPJ = $_POST['CNPJ_empresa'];
$Telefone = $_POST['telefone_empresa'];
$Email = $_POST['email_empresa'];
$Login = $_POST['login_empresa'];
$Senha = $_POST['senha_empresa'];

$nome_servidor = "localhost";
$usuario = "root";
$senha = "";
$nome_bd = "exprecity";

$conexao = new mysqli($nome_servidor, $usuario, $senha, $nome_bd);

if($conexao -> connect_error){
    echo "Algo deu errado, não está certo! <br>";
}
$comando_cadastrar = "INSERT INTO cad_emp VALUES ('$Nome',  '$CNPJ', '$Telefone' ,'$Email','$Login', '$Senha ')";

if($conexao->query($comando_cadastrar) == TRUE){

    echo "<script>alert('Cadastro feito com Sucesso!!');
	window.location='entradaemp.html'; </script>";


}else{
    echo "<script>alert('Erro no Cadastro');
	 </script>";
}

$conexao->close();
?>