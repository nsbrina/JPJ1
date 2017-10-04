<?php
include('config.php');
$nama_penuh=$_POST['nama_penuh'];
$username=$_POST['username'];
$password=$_POST['password'];


echo "<br>";

$query="insert into pelanggan values
('$nama_penuh','$username','$password','$jantina','$jenis_lesen')";
if(mysql_query($query)){
    echo "pendaftaran berjaya";
	echo "-->";
echo "<a href=\"login.php\">list</a>";}
else
    echo "something went wrong";
?>