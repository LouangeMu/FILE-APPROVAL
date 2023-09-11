<?php
require_once("../db.php");
// include("rand.php");
session_start();
$me=$_SESSION['username'];

$find_id=$pdo_conn->prepare("SELECT * FROM users where username='".$me."'");
$find_id->execute();
$row_id=$find_id->fetch();
$id=$row_id['u_id'];


?>

<!doctype html>
<html class="no-js" lang="en">

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
                                    <!-- <li><a href="#">Home</a> <span class="bread-slash">/</span> -->
                                    </li>
                                    <li><span class="bread-blod">Open Projects</span>
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

    <!-- Static Table Start -->
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline13-list shadow-reset">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1><i class="fa big-icon fa-folder-open"></i> My Open Projects</h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">

                                <div class="row">
                                    <div class="col-lg-12">
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                            data-show-export="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <!-- <th data-field="state" data-checkbox="true"></th> -->
                                                    <th>#</th>
                                                    <th>Project code.</th>
                                                    <th>Project name</th>
                                                    <th>Customer</th>
                                                    <th>Link</th>
                                                    <th>Date Uploaded</th>
                                                    <th>date assigned</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>

<?php


$findeng=$pdo_conn->prepare("SELECT * FROM tbl_projects INNER JOIN tbl_task_assign ON tbl_projects.p_code=tbl_task_assign.p_id 
where tbl_task_assign.ass_eng='".$id."' and tbl_task_assign.ass_stat=1 and tbl_projects.status !=6

 ");
$findeng->execute();
$i=0;
while($row=$findeng->fetch()){
   $i +=1;

?>
    <tr>
        <td><?php echo $i?></td>
        <td><?php echo $row['p_code']?></td>
        <td><?php echo $row['p_name']?></td>
        <td>

        <?php
      
      $findowner=$pdo_conn->prepare("SELECT * FROM users where u_id='".$row['p_owner']."'");
      $findowner->execute();
      $rowowner=$findowner->fetch();
      echo $owner=$rowowner['fname']." ".$rowowner['lname'];
      
      ?>

        </td>
        
        <td><?php echo $row['link']?></td>
        <td><?php echo $row['received_date']?></td>
        <td><?php echo $row['ass_date']?></td>
        <td>
      <?php
      
      $findstat=$pdo_conn->prepare("SELECT * FROM tbl_status where st_id='".$row['status']."'");
      $findstat->execute();
      $rowstat=$findstat->fetch();
      echo $stat=$rowstat['stat_name'];
      
      ?>
        
      </td>
            <td>
            <!-- <div class="btn-group project-list-ad">
                <a href="#" class="btn btn-white btn-xs"><i
                        class="fa fa-pencil"></i> Edit</a>
            </div> -->
           
            <div class="btn-group project-list-ad">
                <a href="prodet.php?pid=<?php echo $row['p_id'] ?>" class="btn btn-white btn-xs"><i
                        class="fa fa-arrow-right"></i> Go</a>
            </div>
        </td>
    </tr>
 <?php
 

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


    <?php include 'includes/footer.php' ?>
</body>

</html>