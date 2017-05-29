<html>
<head><title>Aplikasi Menghitung Volume Balok</title>

<style type="text/css">
body {
 background:#66CCFF;
 }  
#header {
  color:white;
  padding:1px;
  margin-bottom:30px; margin-right:0px;margin-left:0px;
  background:-webkit-gradient(linear, right top, left center, color-stop(0, #6666CC),color-stop(0.5, #6600CC),color-stop(1, #3399FF));
  }
  #P, #L, #T, #tombol { 
       color:white;
       text-align:center;
       background:-webkit-gradient(linear, right top, right bottom, from(blue), to(pink));
  }
</style>
</head>
<body>
<center>
<div id="header"><h1>Menghitung Volume Balok</h1></div>
<form action="Latihan1.php" method="GET">
<table border="1" id="table">
<tr>
<td id="P">Panjang Balok</td>
<td><input type="text" name="P"></td>
</tr>
<tr>
<td id="L">Lebar Balok</td>
<td><input type="text" name="L"></td>
</tr>
<tr>
<td id="T">Tinggi Balok</td>
<td><input type="text" name="T"></td>
</tr>
<tr>
<td colspan="2" id="tombol"><input type="submit" value="submit"><input type="reset" value="reset"></td>
</tr>
</table>
</form>
<?php
//Mengambil Nilai Input
  if(isset($_GET["P"]) && isset($_GET["L"]) && isset($_GET["T"]))
    {
     $P=$_GET["P"];
     $L=$_GET["L"];
     $T=$_GET["T"];
     $V=$P*$L*$T; //Rumus Volume
     echo "Volume balok adalah $V "; //Hasil Output
    }
  else
    {
     echo "Kamu belum isi data";
    }
?>
</center>
</body>
</html>