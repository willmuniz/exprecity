<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid white;
    height: 40px;
width: 1160px;

}
body{
background-color:#F4A460;
}
h2{
  color: white;
}
td{
    color:#8B0000;
    font-size: 19px;
  text-align:center;
  
}

h1{
    color:white;
}

th{
    font-size:21px;
    color:white;
}
a{
    font-size: 22px;
    color: 	black;
}
.voltar{
    background-color:red;
}
</style>
</head>
<body>
 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exprecity";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT CEP, Rua, Numero, Complemento, Bairro, Cidade, Estado, Referencia, ID FROM endereco";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<br><center><h2>A Seguir os Endereços já Cadastrados</h2><center>";
    echo "<center><table><tr><th>CEP</th><th>Rua</th><th>Número</th><th>Complemento</th><th>Bairro</th><th>Cidade</th><th>Estado</th><th>Ponto de Referência</th><th>ID</th><th>Escolha</th></tr></center><br><br>";

    while($row = $result->fetch_assoc()) {
        echo "<center><tr><td>" . $row["CEP"]. "</td><td>" . $row["Rua"]. " </td><td> " . $row["Numero"]  .  " </td><td> " .$row["Complemento"].  " </td><td> ". $row["Bairro"]. "</td><td>" . $row["Cidade"]. "</td><td>" . $row["Estado"]. " </td><td> " . $row["Referencia"]  .  " </td><td> " .$row["ID"].  "</td><td>". "<a href='fim.html" . "'>Selecionar</a> </td></tr></center>  ";

    }
    echo "</table>";



} else {
    echo "<center><h1>Não tem nenhum endereço cadastrado ainda<h1></center>";
 echo "<br><br><br><center><a href=entrada.html>Volte para Área do Menu</a><br><center>";
}
$conn->close();
?>

</body>
</html>