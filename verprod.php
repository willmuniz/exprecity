<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid white;
    height: 40px;
width: 660px;

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
    color: 	#4F4F4F;
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

$sql = "SELECT ID, Nome, Valor, Validade, Marca, Estoque FROM prod";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<br><center><h2>A Seguir os Produtos já Cadastrados</h2><center>";
    echo "<center><table><tr><th>ID</th><th>Nome</th><th>Valor (R$)</th><th>Validade</th><th>Marca</th><th>Estoque</th></tr></center><br><br>";

    while($row = $result->fetch_assoc()) {
        echo "<center><tr><td>" . $row["ID"]. "</td><td>" . $row["Nome"]. " </td><td> " . $row["Valor"]  .  " </td><td> " .$row["Validade"].  " </td><td> ". $row["Marca"]. "</td><td>" . $row["Estoque"].  "</td></tr></center>";
    }
    echo "</table>";
    echo "<br><br><br><a href=inicio.html>Volte para Área do Menu</a><br>";
    
} else {
    echo "<center><h1>Não tem nenhum produto cadastrado ainda<h1></center>";
 echo "<br><br><br><center><a href=entradaemp.html>Volte para Área do Menu</a><br><center>";
}
$conn->close();
?>

</body>
</html>