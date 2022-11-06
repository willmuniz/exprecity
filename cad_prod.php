<?php
$ID= $_POST['id_prod'];
$Nome= $_POST['nome_prod'];
$Valor= $_POST['valor_prod'];
$Validade = $_POST['validade_prod'];
$Marca = $_POST['marca_prod'];
$Estoque = $_POST['estoque_prod'];

$nome_servidor = "localhost";
$usuario = "root";
$senha = "";
$nome_bd = "exprecity";

$conexao = new mysqli($nome_servidor, $usuario, $senha, $nome_bd);

if($conexao -> connect_error){
    echo "Algo deu errado, não está certo! <br>";
}
$comando_cadastrar = "INSERT INTO prod VALUES ('$ID','$Nome','$Valor', '$Validade', '$Marca' ,'$Estoque')";

if($conexao->query($comando_cadastrar) == TRUE){

    echo "<script>alert('Cadastro feito com Sucesso!!');
	window.location='entradaemp.html'; </script>";


}else{
    echo "<script>alert('Erro no Cadastro');
	 </script>";
}

$conexao->close();
?>