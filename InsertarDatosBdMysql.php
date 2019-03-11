<?php


include("ConexionDbMysql_Prueba.php");


mysql_select_db("$db_name", $conexion)or die("cannot select DB");

$name=$_POST["Nombre_Persona"];
$lastname=$_POST["Codigo_Persona"];



$conexion = mysql_connect("$host", "$username", "$password")or die("Error de conexi¨®n con base de datos"); 
//Aqu¨ª hay que sustituir la el nombre de la base de datos
mysql_select_db("$db_name", $conexion)or die("cannot select DB");

// Get values from form 

//$datos=$_POST






// Insert data into mysql 
$sql="INSERT INTO $tbl_name(Nombre_Persona,Codigo_Persona) VALUES('".$name."', '".$lastname."')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='index.html'>Back to main page</a>";
}

else {
echo "ERROR";
echo "<BR>";
echo "<a href='ContactsR.html'>Back to contact form page</a>";
}
?> 

<?php 
// close connection 
mysql_close();
?>
