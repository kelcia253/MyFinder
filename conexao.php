<?php
$servername = "localhost";
$database = "myfinder";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Falha ao conectar ao banco de dados: " . mysqli_connect_error());
}
echo "Conectado com sucesso";
mysqli_close($conn);
?>