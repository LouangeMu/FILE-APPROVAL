<?php
require_once("../db.php");
// include("rand.php");
session_start();
$me=$_SESSION['username'];

$find_id=$pdo_conn->prepare("SELECT * FROM users where username='".$me."'");
$find_id->execute();
$row_id=$find_id->fetch();
$id=$row_id['u_id'];

if(isset($_POST['addass'])){

$eng=$_POST['eng'];
$pcode=$_POST['pcode'];
$dline=$_POST['dline'];

$findtask=$pdo_conn->prepare("SELECT * FROM tbl_task_assign WHERE p_id='".$pcode."'");
$findtask->execute();
$totnumber=$findtask->rowcount();

$assscore=$pdo_conn->prepare("INSERT INTO tbl_score(feasiblility,entegrity,accuracy,project) VALUES(0,0,0,'".$pcode."')");
$assscore->execute();

$adddede=$pdo_conn->prepare("UPDATE tbl_projects set deadline='".$dline."' where p_code='".$pcode."'  ");
$adddede->execute();

if($totnumber>=1){

    $updateexistingassign=$pdo_conn->prepare("UPDATE tbl_task_assign set ass_stat=2 where p_id='".$pcode."'");
    $updateexistingassign->execute();
    $addass=$pdo_conn->prepare("INSERT INTO tbl_task_assign (p_id,ass_eng,ass_by) VALUES('".$pcode."','".$eng."','".$id."')");
    $addass->execute();

    $changestat=$pdo_conn->prepare("UPDATE tbl_projects set status=4 where p_code='".$pcode."'");
    $changestat->execute();

    $assscore=$pdo_conn->prepare("INSERT INTO tbl_score(feasiblility,entegrity,accuracy,project) VALUES(0,0,0,'".$pcode."')");
$assscore->execute();


$adddede=$pdo_conn->prepare("UPDATE tbl_projects set deadline='".$dline."' where p_code='".$pcode."' ");
$adddede->execute();

}

else{

$addass=$pdo_conn->prepare("INSERT INTO tbl_task_assign (p_id,ass_eng,ass_by) VALUES('".$pcode."','".$eng."','".$id."')");
$addass->execute();

$changestat=$pdo_conn->prepare("UPDATE tbl_projects set status=4 where p_code='".$pcode."'");
$changestat->execute();

}
}





?>
<!doctype html>
<html class="no-js" lang="en">
<!-- <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css">
</head> -->

<?php include 'includes/header.php' ?>

<body class="materialdesign">

    <?php include 'includes/sidebar.php' ?>
    <?php include 'includes/topbar.php' ?>

    <!-- Breadcome start-->
    <div class="breadcome-area mg-b-30 small-dn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list shadow-reset">
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- <div class="breadcome-heading">
                                    <form role="search" class="">
                                        <input type="text" placeholder="Search..." class="form-control">
                                        <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </div> -->
                            </div>
                            <div class="col-lg-6">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Projects</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcome End-->

    <!-- Breadcome start-->
    <div class="breadcome-area mg-b-30 des-none">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="breadcome-heading">
                                    <form role="search" class="">
                                        <input type="text" placeholder="Search..." class="form-control">
                                        <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">My projects</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcome End-->

    <!-- Static Table Start -->
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline13-list shadow-reset">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1><i class="fa big-icon fa-folder-open"></i> New Project Management</h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">

                                <div class="row">
                                    <div class="col-lg-12">
                                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
  Add Customer
</button> -->

                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                            data-show-export="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <!-- <th data-field="state" data-checkbox="true"></th> -->
                                                    <th>#</th>
                                                    <th>Project code.</th>
                                                    <th>Project name</th>
                                                    <th>customer</th>
                                                   
                                                    <th>Link</th>
                                                   
                                                    <th>Date Uploaded</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>

<?php


$findeng=$pdo_conn->prepare("SELECT * FROM tbl_projects where status=8");
$findeng->execute();
$i=0;
while($row=$findeng->fetch()){
   $i +=1;

?>
    <tr>
        <td><?php echo $i?></td>
        <td><?php echo $row['p_code']?></td>
        <td><?php echo $row['p_name']?></td>
        <td><?php 
        
        $findowner=$pdo_conn->prepare("SELECT * FROM users where u_id='".$row['p_owner']."'");
      $findowner->execute();
      $rowowner=$findowner->fetch();
      echo $owner=$rowowner['fname']." ".$rowowner['lname'];
        
        ?></td>
        
        <td><?php echo $row['link']?></td>
       
        <!-- // $checkass=$pdo_conn->prepare("SELECT * FROM tbl_task_assign where p_id='".$row['p_code']."' and ass_stat=1");
        // $checkass->execute();
        // $count=$checkass->rowCount(); -->

    


        



        <td><?php echo $row['received_date']?></td>
        <td>
      <?php
      
      $findstat=$pdo_conn->prepare("SELECT * FROM tbl_status where st_id='".$row['status']."'");
      $findstat->execute();
      $rowstat=$findstat->fetch();
      echo $stat=$rowstat['stat_name'];
      
      ?>
        
      </td>
            <td>
            <!-- <div class="btn-group project-list-ad"> -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#test<?php echo $row['p_code']?>">
              <i class="fa fa-user"></i>
</button>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#view<?php echo $row['p_code']?>">
              <i class="fa fa-eye"></i>
</button>
            <!-- </div> -->
            <!-- <div class="btn-group project-list-ad-rd"> -->
                <a href="#" class="btn btn-white btn-xs"><i
                        class="fa fa-trash"></i> </a>
            <!-- </div> -->
        </td>
    </tr>
 <?php
 include("assignmodal.php");
 include("viewpromodal.php");
}
?>

</tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Static Table End -->
    </div>
    </div>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>

  <script>
    $(document).ready(function() {
      $("#userButton").click(function() {
        $("#userModal").modal("show");
      });

      $("#selectField").select2();
    });
  </script> -->

    <?php include 'includes/footer.php' ?>
</body>

</html>