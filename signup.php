<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Signup</title>


<style>
  body{
  background-color:lightblue;
}



</style>
<form action="signup_process.php" method="post">
<body bgcolor="cyan">


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
<body>

<ul>
  <li><a class="active" href="index.html">Home</a></li>
  <li><a href="signup.php">Sign up</a></li>
  <li><a href="login.php">Login</a></li>
 <li><a href="loginadmin.php">LOG IN ADMIN</a></li>
  <li><a href="http://www.jpj.gov.my/ms/web/guest/johor">Contact</a></li>
  <li><a href="http://www.jpj.gov.my/ms/web/guest/sumber_dan_berita">About</a></li>
</ul>



<br><br><br><br><br>
<img src="logoJPJ.png" alt="jpj" align="left" style="width:175px;height:250px;"/>
<img src="logoJPJ.png" alt="jpj" align="right"
style="width:175px;height:250px;"/>
<style>
h1 {
    text-shadow: 2px 2px red;
}
</style>
</head>
<body>
<h1><center>Daftar Masuk Pengguna</center></h1>

<center><img src="1.png" alt="jpj" align="left" style="width:300x;height:250px;"/></center>


<span style="text-align: left"></span>
<center><table width="543" border="3" align="center" cellpadding="5" cellspacing="2">
<tr>
  <td width="170">Username :</td>
  <td width="331">
  <input type="text"name="username"value=""size="50"/></td>
</tr>
<tr>
<td>Password :</td>
<td><input type="password"name="password"value=""size="50"/></td>
</tr>
<tr>
<td height="51">Re-Enter Password:</td>
<td><input type="password"name="password"value=""size="50"/></td>
</tr>
</table>
 
</center>

<center><table width="386" height="102" class="b">
 <tr>
 <td width="124" height="88"> 
<br> <a class="button" href="login.php">Login</a></td>
 <td width="116">
  <input class="button" type="reset"value="Reset" align="left">
  </td>
  <td width="116">
  <input type="submit" class="button"value="Submit" align="right">
  </td>
   <td width="124" height="88">  <br><a class="button" href="index.html">Main Page</a></td>
  </tr>
  </table>
</center>
</body>
</html>

