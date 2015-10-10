<?php
//my work ashaba isabella
//connection to the databse
$slau = mysql_connect("localhost", "root", "")or die("<h1 align='center'>Sorry You cannot connect to the Server</br></h1><h2 align='center'>Contact Server Admin--info@slau.ac.ug</h2>");
mysql_select_db("compan", $slau)or die("<h1 align='center'>Cannot connect to mysql Database</h1>");
//studnt table
$id = $_POST['id'];
$aa = $_POST['username'];
$ab = $_POST['password'];
$ac = $_POST['email'];

$sql = "insert into login(id,username,password,email) values('$id','$aa','$ab','$ac')";
$done= mysql_query($sql);

?>