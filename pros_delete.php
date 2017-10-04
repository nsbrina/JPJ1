<?php

include ('config.php');

$no_ic=$_GET['no_ic'];
$query="delete from pelanggan where no_ic='$no_ic'";

$result=mysql_query($query);

echo $no_ic;

if ($result==TRUE) echo "berjaya <a href=\"datapelanggan1.php\">senarai</a>";

if (result==false) echo "gagal <a href=\"datapelanggan1.php\">senarai<?a>";

?>