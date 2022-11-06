<?php error_reporting(0); 
$CEP= $_POST['cep'];
$Rua= $_POST['rua'];
$Numero= $_POST['num'];
$Complemento = $_POST['compl'];
$Bairro = $_POST['bairro'];
$Cidade = $_POST['cidade'];
$Estado = $_POST['uf'];
$Referencia = $_POST['ref'];
$Nome = $_POST['nome_supervisor'];
$CPF = $_POST['cpf_supervisor'];
$Telefone = $_POST['telefone_supervisor'];

$nome_servidor = "localhost";
$usuario = "root";
$senha = "";
$nome_bd = "exprecity";

$conexao = new mysqli($nome_servidor, $usuario, $senha, $nome_bd);

if($conexao -> connect_error){
    echo "Algo deu errado, não está certo! <br>";
}
$comando_cadastrar = "INSERT INTO cad_ponto VALUES ('$CEP','$Rua','$Numero', '$Complemento', '$Bairro' ,'$Cidade','$Estado', '$Referencia ','$Nome','$CPF', '$Telefone ')";

if($conexao->query($comando_cadastrar) == TRUE){

    echo "<script>alert('Cadastro feito com Sucesso!!');
	window.location='entradaemp.html'; </script>";


}else{
    echo "<script>alert('Erro no Cadastro');
	 </script>";
}

$conexao->close();
?>