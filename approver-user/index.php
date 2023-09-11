<?php

 require_once("../db.php");
session_start(); 

 $me=$_SESSION['username'];

 $find_id=$pdo_conn->prepare("SELECT * FROM users where username='".$me."'");
 $find_id->execute();
 $row_id=$find_id->fetch();
 $id=$row_id['u_id'];

 $pro = $pdo_conn->prepare("SELECT count(*) as pro FROM tbl_projects  WHERE p_owner='".$id."'");
$pro->execute();
$procount = $pro->fetch();

$profin = $pdo_conn->prepare("SELECT count(*) as pro FROM tbl_projects  WHERE p_owner='".$id."' and status=2");
$profin->execute();
$procount2 = $profin->fetch();

$propend = $pdo_conn->prepare("SELECT count(*) as pro FROM tbl_projects  WHERE p_owner='".$id."' and status=6");
$propend->execute();
$procount3 = $propend->fetch();


 
 
 ?>




<!doctype html>
<html class="no-js" lang="en">

<?php include 'includes/header.php'?>
<body class="materialdesign"><div class="wrapper-pro">

    <?php include 'includes/sidebar.php'?>
    <?php include 'includes/topbar.php'?>

    <!-- Breadcome start-->
    <div class="breadcome-area mg-b-30 small-dn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list map-mg-t-40-gl shadow-reset">
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
                                    <li><span class="bread-blod">Dashboard</span>
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
    <div class="breadcome-area des-none mg-b-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="breadcome-heading">
                                    <form role="search" class="">
                                        <input type="text" placeholder="Search..." class="form-control">
                                        <a href=""><i class="fa fa-*"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Dashboard</span>
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
    <!-- income order visit user Start -->
    <div class="income-order-visit-user-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="income-dashone-total shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>All projects</h2>
                                <div class="main-income-phara">
                                <p><i class="fa big-icon fa-folder fa-2x"></i></p>
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3><span class="counter"><?php echo $procount['pro']?></span></h3>
                                </div>
                                <div class="price-graph">
                                    <span id="sparkline1"></span>
                                </div>
                            </div>
                            <div class="income-range">
                                <p>All uploaded</p>
                                <span class="income-percentange">98% <i class="fa fa-thumbs-up"></i></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="income-dashone-total shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Pending projects</h2>
                                <div class="main-income-phara order-cl">
                                <p><i class="fa big-icon fa-folder fa-2x"></i></p>
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3><span class="counter"><?php echo $procount2['pro'] ?></span></h3>
                                </div>
                                <div class="price-graph">
                                    <span id="sparkline6"></span>
                                </div>
                            </div>
                            <div class="income-range order-cl">
                                <p>Ongoing review</p>
                                <span class="income-percentange">66% <i class="fa fa-file"></i></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="income-dashone-total shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Closed Project</h2>
                                <div class="main-income-phara visitor-cl">
                                <p><i class="fa big-icon fa-folder-open fa-2x"></i></p>
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3><span class="counter"><?php echo $procount3['pro']?></span></h3>
                                </div>
                                <div class="price-graph">
                                    <span id="sparkline2"></span>
                                </div>
                            </div>
                            <div class="income-range visitor-cl">
                                <p>Fully closed</p>
                                <span class="income-percentange">55% <i class="fa fa-eye"></i></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


    <?php include 'includes/footer.php'?>
</body>

</html>