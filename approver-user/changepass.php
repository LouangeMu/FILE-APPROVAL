<?php
session_start();
require_once("../db.php");
 $me=$_SESSION['username'];

$find_id=$pdo_conn->prepare("SELECT * FROM users where username='".$me."'");
$find_id->execute();
$row_id=$find_id->fetch();
$id=$row_id['u_id'];
$fullnames=$row_id['lname']." ".$row_id['fname'];
$username=$row_id['username'];

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
                                <div class="breadcome-heading">
                                    <form role="search" class="">
                                        <input type="text" placeholder="Search..." class="form-control">
                                        <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Profile</span>
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
                                    <li><span class="bread-blod">My profile</span>
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
                                <h1><i class="fa big-icon fa-edit"></i>Change password</h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">

                                <div class="row">
                                    <div class="col-lg-8 col-lg-offset-2">
                                        <div class="basic-login-inner"><br><br>
                                            <form action="upload-files.php" method="POST">
                                            <div class="row">
                                                
                                                
                                                <div class="col-lg-12">
                                                    <div class="touchspin-inner">
                                                        <label>Full Names</label>
                                                        <input type="text" class="form-control" name="pname" value="<?php echo $fullnames?>" required readonly/>
                                                    </div>
                                                </div>
                                                <br><br><br><br>
                                                <div class="col-lg-6">
                                                    <div class="touchspin-inner">
                                                        <label>Username</label>
                                                        <input type="text" class="form-control" value="<?php echo $username?>" name="link" required readonly/>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="touchspin-inner">
                                                        <label>Old password</label>
                                                        <input type="text" class="form-control" value="" name="pcode" id="myField" required  />
                                                    </div>
                                                </div>
                                                <br><br><br><br>
                                                <div class="col-lg-6">
                                                    <div class="touchspin-inner">
                                                        <label>New Password</label>
                                                        <input type="text" class="form-control"  name="link"/>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="touchspin-inner">
                                                        <label>Repeat password</label>
                                                        <input type="text" class="form-control" value="" name="pcode" required />
                                                    </div>
                                                </div>
                                               
                                                
                                                <br><br><br><br><br>
                                                
                                                
                                                <div class="col-lg-12">
                                                    <div class="touchspin-inner">
                                                    <div class="btn-group project-list-ad">
                                                    <button type="submit" id="myButton" class="btn btn-primary" name="addpro">Save Change</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
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

<?php

require_once("../db.php");
// include("rand.php");

$me=$_SESSION['username'];

$find_id=$pdo_conn->prepare("SELECT * FROM users where username='".$me."'");
$find_id->execute();
$row_id=$find_id->fetch();
$id=$row_id['u_id'];

if(isset($_POST['addpro'])){

    $pname=$_POST['pname'];
    $pdesc=$_POST['pdesc'];
    $link=$_POST['link'];

   $pcode=$_POST['pcode'];
   $stat=8;
    
    $addpro=$pdo_conn->prepare("INSERT INTO tbl_projects (p_code,p_name,link,p_owner,status) VALUES('".$pcode."','".$pname."','".$link."','".$id."','".$stat."')");
    $addpro->execute();
?>
<?php
}


?>
<script>
    const myField = document.getElementById('myField');
const myButton = document.getElementById('myButton');
const specifiedValue = '12345';

myField.addEventListener('input', function() {
  const currentValue = this.value;

  if (currentValue === specifiedValue) {
    // Field value matches the specified value
    myButton.disabled = false; // Enable the button
  } else {
    // Field value does not match the specified value
    myButton.disabled = true; // Disable the button
  }
});
    </script>