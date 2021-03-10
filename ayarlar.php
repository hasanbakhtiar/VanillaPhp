<?php
// $baglan = mysql_connect("localhost","root","");
// $vt_sec = mysql_select_db("test",$baglan);
// mysql_query("SET CHARACTER SET utf8");
$server = "localhost";
$user = "root";
$pass = "";
$db = "test";

$elaqe = new mysqli ($server,$user,$pass,$db);

if ($elaqe -> connect_error) {
    echo "elaqe qurulmadi";
}else{
    echo "Baglanti quruldu";
}


?>