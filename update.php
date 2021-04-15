<?php
$malcher = $_GET['maIcher8'];
$pabbloo = $_GET['pabbloo13'];
$wasil = $_GET['wasil48'];
$kucyk = $_GET['kucyk12pl'];
$warrior = $_GET['warriorlfk'];
$trututu = $_GET['trututu20'];
$ch_m = $_GET['ch_m'];
$ch_p = $_GET['ch_p'];
$ch_was = $_GET['ch_was'];
$ch_k = $_GET['ch_k'];
$ch_war = $_GET['ch_war'];
$ch_tru = $_GET['ch_tru'];

$roznica=999;

include 'db.php';

$sql="SELECT * FROM maIcher8 ORDER BY id DESC LIMIT 1";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
	
	date_default_timezone_set('Europe/Warsaw');
	
	$data=$row['data'];
	$datazbazy=strtotime($data);
	$datateraz=time();
	$roznica=$datateraz-$datazbazy;
}


if ($roznica > 600){
	$sql1= "INSERT INTO maIcher8 (mmr,ch) VALUES (".$malcher.",".$ch_m.")";
	$sql2= "INSERT INTO pabbloo13 (mmr,ch) VALUES (".$pabbloo.",".$ch_p.")";
	$sql3= "INSERT INTO wasil48 (mmr,ch) VALUES (".$wasil.",".$ch_was.")";
	$sql4= "INSERT INTO kucyk12PL (mmr,ch) VALUES (".$kucyk.",".$ch_k.")";
	$sql5= "INSERT INTO WarriorLFK (mmr,ch) VALUES (".$warrior.",".$ch_war.")";
	$sql6= "INSERT INTO Trututu20 (mmr,ch) VALUES (".$trututu.",".$ch_tru.")";
	

	$con->query($sql1);
	$con->query($sql2);
	$con->query($sql3);
	$con->query($sql4);
	$con->query($sql5);
	$con->query($sql6);
	
	
	function get_ip_address(){
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
        if (array_key_exists($key, $_SERVER) === true){
            foreach (explode(',', $_SERVER[$key]) as $ip){
                $ip = trim($ip); // just to be safe

                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                    return $ip;
                }
            }
        }
    }
}
	$adres = get_ip_address();
	$wersja = $_SERVER['HTTP_USER_AGENT'];
	
	$sql7= "INSERT INTO aktualizacja (ip,wersja) VALUES ('".$adres."','".$wersja."')";
	$con->query($sql7);
	$con->close();
	echo "<meta http-equiv='Refresh' content='0; url=/index.php' />";
}
else{
	$con->close();
	echo "<meta http-equiv='Refresh' content='0; url=/index.php' />";
}
