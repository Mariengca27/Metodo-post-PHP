<?php include_once "config.php"?>

<html> 
<body>


<?php
 // Colocando os métodos de post
$arr = $_POST["arr"];
$fec = $_POST["fec"];

$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

mysqli_select_db($conn, '$dbname');
	

$sql = "INSERT INTO listaDoBanco (arr, fec) VALUES ('$arr', '$fec')";

//Condicionais para entrada de dados e alerta de erros. 
if(mysqli_query($conn,$sql)){
echo "<script> alert ('SALVEI OS DADOS!'); window.location = 'index1.php';</script>";
}

else{
echo "Deu erro:" . $sql. "<br>". mysqli_error($conn);

}
mysqli_close($conn);




?>

</body>
</html>