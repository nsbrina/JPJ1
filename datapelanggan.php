<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>KADET PENGANGKUTAN JALAN</title>
<img src="logoJPJ.png" alt="jpj" style="width:175px;height:250px;"/>
<img src="logoJPJ.png" alt="jpj" align="right" style="width:175px;height:250px;"/>
<style>
table,th,td{
border:1px solid black;
border-collapse;
}
body{
background-color: lightblue;
}
</style>



  <style>
body {margin:0;}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    position: fixed;
    top: 0;
    width: 100%;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
</style>
</head>
</body>

<ul>
  <li><a class="active" href="index.html">Home</a></li>
  <li><a href="signup.php">Sign up</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="loginadmin.php">LOG IN ADMIN</a></li>
  <li><a href="http://www.jpj.gov.my/ms/web/guest/johor">Contact</a></li>
  <li><a href="http://www.jpj.gov.my/ms/web/guest/sumber_dan_berita">About</a></li>
</ul>



<?php
include('config.php');
$sql="SELECT *from pelanggan ORDER BY nama_penuh";
$result=mysql_query($sql)or die(mysql_error());
?>
<center><table style="width:70%">
KADET PENGANGKUTAN JALAN(JPJ)<br>
<p><strong><center>Senarai Nama Pelanggan</strong></center>
<table border="1" width="849" align="center" cellspacing="2" cellpadding="2">
<tr>
<td align="center" bgcolor="#FFCC00"><strong>Nama Penuh</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>Nombor Kad Pengenalan</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>Tempat Lahir</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>Jantina</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>Jenis Lesen</strong></td>


</tr>

<?php
while ($row=mysql_fetch_array($result))
{
echo"<tr>";
echo"<td>".$row["nama_penuh"]."</td>";
echo"<td>".$row["no_ic"]."</td>";
echo"<td>".$row["tempat_lahir"]."</td>";
echo"<td>".$row["jantina"]."</td>";
echo"<td>".$row["jenis_lesen"]."</td>";

}

echo"</table>";
echo"<center>";
echo"<br>";

?>
</table>


<a href="login.php" target="_top">Daftar Keluar Pengguna(Logout)</a><br></br>
</center>
</body>
</head>
</html>