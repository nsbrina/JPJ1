  <?php
include ('config.php');
$username=$_POST['username'];
$password=$_POST['password'];

echo"<br>";


$query="insert into login_pelanggan values ('$username','$password')";
if(mysql_query($query))
{
    echo"pendaftaran berjaya";
    echo"-->";
    echo"<a href=\"loginuser.php\">Kembali ke Login page.</a>";
}
else
echo"Data yang dimasukkan adalah salah <a href=\"loginuuser.php\">Kembali ke Login page</a><a href=\"signup.php\"> dan Signup</a>";

?>