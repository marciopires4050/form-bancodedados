<?php
// session_start();
include_once("conexao.php");

$name = $_POST['name'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$message = $_POST['message'];


//echo "<br> Nome: $name <br>";
//echo "E-mail: $email <br>";
//echo "Assunto: $assunto <br>";
//echo "Menssagem: $message<br>";


$result = "INSERT INTO formulario(name, email, assunto, message) VALUES ('$name', '$email', '$assunto', '$message')";
$resultado = mysqli_query($conn, $result);

echo "<meta http-equiv='refresh' content='10;URL=../formulario11/marcioteste_form.html'>";

?>