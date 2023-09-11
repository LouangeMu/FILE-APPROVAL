<?php
 require_once("../db.php");


   
    $pro=$_POST['pro'];
    
    $today=date('Y-m-d');
    $updatesta=$pdo_conn->prepare("UPDATE tbl_projects set status=6,dateclosed='".$today."' where p_code='".$pro."'");
    $updatesta->execute();

    ?>