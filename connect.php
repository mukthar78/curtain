<?php
$a=$_POST["name"];
$b=$_POST["age"];
$c=$_POST["dob"];
$d=$_POST["gen"];
$e=$_POST["email"];
$f=$_POST["password"];
$g=$_POST["size"];
$con=mysql_connect("localhost","root","");
mysql_select_db("curtain");
mysql_query("insert into reg(name,age,dob,gen,email,password,size) values('$a','$b','$c','$d','$e','$f','$g')");
echo("upload suceessfully");
include("register.php");
mysql_close("$con");
?>
