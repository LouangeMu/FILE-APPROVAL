<?php
 require_once("../db.php");



    $pro=$_POST['pro'];
    $sms=$_POST['comm'];
    
    $findowner=$pdo_conn->prepare("SELECT * FROM tbl_projects where p_code='".$pro."'");
    $findowner->execute();
    $userrow=$findowner->fetch();

   $p_code=$userrow['p_code'];


$findeng=$pdo_conn->prepare("SELECT * FROM tbl_task_assign where p_id='".$p_code."' and ass_stat=1");
$findeng->execute();

$roweng=$findeng->fetch();

$engid=$roweng['ass_eng'];


$findnum=$pdo_conn->prepare("SELECT * FROM users where u_id='".$engid."'");
$findnum->execute();

$rowengenu=$findnum->fetch();

$upgone=$rowengenu['phone'];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.mista.io/sms',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('to' => $upgone,'from' => 'STMP','unicode' => '0','sms' => $sms,'action' => 'send-sms'),
  CURLOPT_HTTPHEADER => array(
    'x-api-key:104|DGd1MSVUczaGGQV3AUrawMUGlP6yUggiIoD7IUL9'
  ),
));

$response = curl_exec($curl);

curl_close($curl);


  $ins=$pdo_conn->prepare("INSERT INTO smstest (phone,sms) VALUES('".$upgone."','".$sms."')");
    $ins->execute();







 ?>