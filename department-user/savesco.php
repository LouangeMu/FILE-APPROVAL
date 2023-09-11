<?php
 require_once("../db.php");


    $user=$_POST['logged'];
    $pro=$_POST['pro'];
    $ui=$_POST['ui'];
    $acc=$_POST['acc'];
    $fea=$_POST['fea'];
    $inte=$_POST['inte'];
    $comm=$_POST['comm'];
    
    
    $updatesta=$pdo_conn->prepare("UPDATE tbl_score set status=2 where project='".$pro."'");
    $updatesta->execute();
    
    $newsc=$pdo_conn->prepare("INSERT INTO tbl_score (ui,feasiblility,entegrity,accuracy,project,comment) VALUES('".$ui."','".$fea."','".$inte."','".$acc."','".$pro."','".$comm."')");
    $newsc->execute();
    

   
    $findowner=$pdo_conn->prepare("SELECT * FROM tbl_projects where p_code='".$pro."'");
    $findowner->execute();
    $userrow=$findowner->fetch();

    $owner=$userrow['p_owner'];


    $findownerinfo=$pdo_conn->prepare("SELECT * FROM users where u_id='".$owner."'");
    $findownerinfo->execute();
   $ownerrow=$findownerinfo->fetch();

   $ownerfone=$ownerrow['phone'];
   $ownerfname=$ownerrow['fname'];

$sms=$comm;
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
     CURLOPT_POSTFIELDS => array('to' => $ownerfone,'from' => 'STMP','unicode' => '0','sms' => $sms,'action' => 'send-sms'),
     CURLOPT_HTTPHEADER => array(
       'x-api-key:104|DGd1MSVUczaGGQV3AUrawMUGlP6yUggiIoD7IUL9'
     ),
   ));
   
   $response = curl_exec($curl);
   
   curl_close($curl);

//    $ins=$pdo_conn->prepare("INSERT INTO smstest (phone,msg) VALUES('".$ownerfone."','".$sms."')");
//    $ins->execute();

?>