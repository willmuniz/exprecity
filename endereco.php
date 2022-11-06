<?php error_reporting(0);
$CEP= $_GET['cep'];
$ID= $_GET['id'];
$Rua= $_GET['rua'];
$Numero= $_GET['num'];
$Complemento = $_GET['compl'];
$Bairro = $_GET['bairro'];
$Cidade = $_GET['cidade'];
$Estado = $_GET['uf'];
$Referencia = $_GET['ref'];

$nome_servidor = "localhost";
$usuario = "root";
$senha = "";
$nome_bd = "exprecity";

$conexao = new mysqli($nome_servidor, $usuario, $senha, $nome_bd);

if($conexao -> connect_error){
    echo "Algo deu errado, não está certo! <br>";
}
$comando_cadastrar = "INSERT INTO endereco VALUES ('$CEP','$ID','$Rua','$Numero', '$Complemento', '$Bairro' ,'$Cidade','$Estado', '$Referencia ')";

if($conexao->query($comando_cadastrar) == TRUE){

    echo "<script>alert('Cadastro feito com Sucesso!!');
	window.location='entrada.html'; </script>";


}else{
    echo "<script>alert('Erro no Cadastro');
	 </script>";
}

$conexao->close();
?>