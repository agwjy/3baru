
<html> 
<head> 
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1">

<title> Form Data user </title> 

 <link href="css/bootstrap.min.css" rel="stylesheet">

</head>



<body> 
<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="Home.html">Home</a></li>
  <li role="presentation"><a href="profil_user.php">Profil</a></li>
  <li role="presentation"><a href="register.html">register</a></li>
</ul>

<?php
$ nis = $ _key ['nis' ];
$ nama = $ _POST [ 'nama']; 
$ Tempat = $ _POST [ 'Tempat']; 
$ tgl = $ _POST [ 'tgl']; 
$ bln = $ _POST [ 'bln']; 
$ thn = $ _POST [ 'thn']; 
$ jenis_kelamin = $ _POST [ 'jenis_kelamin']; 
$ agama = $ _POST [ 'agama']; 
$ almt = $ _POST [ 'almt']; 
$ No_tlp = $ _POST [ 'NO_tlp']; 
$ email = $ _POST [ 'email']; 
$ ekskul = $ _POST [ 'ekskul1']; 
$ eksku2 = $ _POST [ 'ekskul2'];
$ eksku3 = $ _POST [ 'ekskul3'];

echo "<table menyelaraskan 'pusat' =>
<tr> <td colspan = '2'> <div align = 'center'> <strong> data Mahasiswa </tr> </td> </strong> 
<tr> <td> Nama User </td> <td>: $ nama </td> </tr> 
<tr> <td> Tempat, Tanggal lahir </td> <td>: $ Tempat, $ tgl $ Miliar $ thn < br> </ td> </ tr> 
<tr> <td> jenis_kelamin </td> <td>: $ jenis_kelamin </td> </tr> 
<tr> <td> Agama </td> <td>: $ agama </td> </tr> 
<tr> <td> Alamat </td> <td>: $ almt </td> </tr> 
<tr> <td> Telepon </td> <td>: $ tlp </td> </tr> 
<tr> <td> email </td> <td>: $ email </td> </tr> 
<tr> <td> Hobby </td> <td>: $ hobi1 $ hobi2 $ hobi3 </td> </tr> ";

?> 
</body> 
</html>