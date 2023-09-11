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

if(isset($_POST['changepass'])){


    $newpass=$_POST['newpass'];

    $change=$pdo_conn->prepare("UPDATE users set password='".$newpass."' where username='".$username."'");
    $change->execute();

}


?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <style>
        .warning-message {
  color: red;
  font-size: 12px;
  display: block;
}

        </style>
</head>
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
                                            <form action="changepass.php" method="POST">
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
                                                        <input type="password" class="form-control" value="" name="pcode" id="input1" required  />
                                                        <span id="input1Warning" class="warning-message"></span>
                                                    </div>
                                                </div>
                                                <br><br><br><br>
                                                <div class="col-lg-6">
                                                    <div class="touchspin-inner">
                                                        <label>New Password</label>
                                                        <input type="password" class="form-control"  name="newpass" id="input2"/>
                                                        <span id="input2Warning" class="warning-message"></span>
                                                    <span id="input3Warning" class="warning-message"></span>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="touchspin-inner">
                                                        <label>Repeat password</label>
                                                        <input type="password" class="form-control" value="" name="pcode" required id="input3" />
                                                    </div>
                                                </div>
                                               
                                                
                                                <br><br><br><br><br>
                                                
                                                
                                                <div class="col-lg-12">
                                                    <div class="touchspin-inner">
                                                    <div class="btn-group project-list-ad">
                                                    <button type="submit" id="submitButton" class="btn btn-primary" name="changepass" disabled>Save Change</button>
                                                    <!-- <button id="submitButton" name="changepass" disabled>Submit</button> -->
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
$pass=$row_id['password'];

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
// Get references to the input elements, warning messages, and the submit button
const input1 = document.getElementById("input1");
const input2 = document.getElementById("input2");
const input3 = document.getElementById("input3");
const input1Warning = document.getElementById("input1Warning");
const input2Warning = document.getElementById("input2Warning");
const input3Warning = document.getElementById("input3Warning");
const submitButton = document.getElementById("submitButton");

// Add event listeners to the input elements
input1.addEventListener("input", checkFormValidity);
input2.addEventListener("input", checkFormValidity);
input3.addEventListener("input", checkFormValidity);

function checkFormValidity() {
    var oldp="<?php echo $pass?>";
  const specifiedValue = oldp; // Replace this with the actual specified value

  // Check if input1 value is equal to the specified value
  const input1Value = input1.value.trim();
  const isInput1Valid = input1Value === specifiedValue;
  input1Warning.textContent = isInput1Valid ? "" : "Input 1 value must be equal to the specified value.";

  // Check if input2 and input3 have the same value
  const input2Value = input2.value.trim();
  const input3Value = input3.value.trim();
  const areInput2AndInput3Valid = input2Value === input3Value;
  input2Warning.textContent = areInput2AndInput3Valid ? "" : "Input 2 and Input 3 values must be the same.";
  input3Warning.textContent = areInput2AndInput3Valid ? "" : "";

  // Enable the button only if both conditions are met
  submitButton.disabled = !(isInput1Valid && areInput2AndInput3Valid);
}


    </script>