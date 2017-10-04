<!DOCTYPE html>
<html>
<style>
body{
  background-color:lightblue;
}
</style>
<center>
<body bgcolor="cyan">

</style>
</head>
<body>


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


<br><br><br><br><br>
<marquee><center><h1>JABATAN PENGANGKUTAN JALAN JOHOR BAHRU</h1></center></marquee>
<img src="logoJPJ.png" alt="jpj" align="left" style="width:175px;height:250px;"/>
<img src="logoJPJ.png" alt="jpj" align="right"
style="width:175px;height:250px;"/>
 
<form id="form" name="form" method="post" action="pros_insert.php">
<table width="400" border="1">
<tr>
<th scope="col">Nama Penuh:</th>
<th scope="col"><div align="left">
<input type="text" name="nama_penuh" value="" size="50"/>
</div>
</th>
</tr>
<tr>
<th scope="col">Nombor Kad Pengenalan:(Tanpa-)</th>
<th scope="col"><div align="left">
 <input type="text" name="no_ic" value="" size="12"/>
 </div>
</th>
</tr>
<tr>
<th scope="col">Tempat Lahir:</th>
<th scope="col"><div align="left">
<select name="tempat_lahir">
<option value="">Sila Pilih</option>
<option value="johor">Johor</option>
<option value="kedah">Kedah</option>
<option value="kelantan">Kelantan</option>
<option value="melaka">Melaka</option>
<option value="n9">Negeri Sembilan</option>
<option value="pahang">Pahang</option>
<option value="pp">Pulau Pinang</option>
<option value="perak">Perak</option>
<option value="perlis">Perlis</option>
<option value="selngr">Selangor</option>
<option value="ganu">Terengganu</option>
<option value="sbh">Sabah</option>
<option value="srwk">Sarawak</option>
</select>
</div>
</th>
</tr>
<tr>
<th scope="col">Jantina:</th>
<th scope="col"><div align="left">
<input type="radio" name="jantina" value="male">Male<br>
<input type="radio" name="jantina" value="female">Female<br>
</div>
</th>
</tr>
<tr>
<th scope="col">Jenis Lesen:</th>
<th scope="col"><div align="left">
<input type="checkbox" name="jenis_lesen" value="Bike">Motorsikal
(B)<br>
<input type="checkbox" name="jenis_lesen" value="Car">Kereta
</div>
</th>
</tr>
</table>
<br>


<center><button type="submit" value="submit">Hantar</button>
<button type="reset" value="reset">Isi Semula</button>
</br>
</form>


</br>
</br>


<button type><a href="form.php" target="_top">Tambah Pelanggan baru</a><br></br></button>
<br><br>

<button type><a href="datapelanggan.php" target="_top">Paparkan datapelanggan</a><br></br></button>

<br><br>
<button type><a href="login.php" target="_top">Daftar Keluar Pengguna(Logout)</a><br></br></button>
</center>
</body>
</html>