
<?php
session_start();
require_once("../db.php");

if(isset($_POST['addeng'])){

    $fname=$_POST['fname'];
    $lname=$_POST['oname'];
    $sdate=$_POST['sdate'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $phone1=$_POST['phone'];
    $phone="+25".$phone1;
    $password=$username."@123!";
    $role=3;
    $sms="your account has been created successfully.your username is ".$username." and password is ".$password;
    
    $addeng=$pdo_conn->prepare("INSERT INTO users (fname,lname,username,phone,email,role,password) VALUES('".$fname."','".$lname."','".$username."','".$phone."','".$email."','".$role."','".$password."')");
    $addeng->execute();

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
      CURLOPT_POSTFIELDS => array('to' => $phone,'from' => 'STMP','unicode' => '0','sms' => $sms,'action' => 'send-sms'),
      CURLOPT_HTTPHEADER => array(
        'x-api-key:104|DGd1MSVUczaGGQV3AUrawMUGlP6yUggiIoD7IUL9'
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);



}

if(isset($_POST['updateeng'])){

    $fname=$_POST['fname'];
    $lname=$_POST['oname'];
    $uid=$_POST['uid'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
   

    $updatecust=$pdo_conn->prepare("UPDATE users set fname='".$fname."',lname='".$lname."',username='".$username."',phone='".$phone."',email='".$email."' where u_id='".$uid."'");
    $updatecust->execute();
    

}

if(isset($_GET['eid'])){
    $uid=$_GET['eid'];

    $deletecustomer=$pdo_conn->prepare("UPDATE users set stat=9 where u_id='".$uid."'");
    $deletecustomer->execute();
    
}


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
                                    <li><span class="bread-blod">Manage Engineers</span>
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
                                    <li><span class="bread-blod">Manage Engineers</span>
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
                                <h1><i class="fa big-icon fa-user"></i> Manage Engineers</h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">

                                <div class="row">
                                    <!-- <div class="col-lg-4">
                                        <div class="basic-login-inner"><br><br>
                                            <h3>Create New Approver User</h3><br>
                                            <form action="#">
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <label style="float:left;padding-left:15px"><i class="fa big-icon fa-user"></i> User Information</label>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <label style="float:left;padding-left:15px">Full
                                                            Name</label>
                                                        <div class="col-lg-12">
                                                            <input type="text" class="form-control"
                                                                placeholder="ex. John Doe" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <label style="float:left;padding-left:15px">Designation</label>
                                                        <div class="col-lg-12">
                                                            <input type="text" class="form-control"
                                                                placeholder="ex. Designation1" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <label style="float:left;padding-left:15px">Profile</label>
                                                        <div class="col-lg-12">
                                                            <input type="file" class="form-control"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <label style="float:left;padding-left:15px"><i class="fa big-icon fa-lock"></i> Account Information</label>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <label style="float:left;padding-left:15px">Username</label>
                                                        <div class="col-lg-12">
                                                            <input type="tet" class="form-control" placeholder="John"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <label style="float:left;padding-left:15px">Password</label>
                                                        <div class="col-lg-12">
                                                            <input type="password" class="form-control" placeholder="**********"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="btn-group project-list-ad">
                                                                <a href="#" class="btn btn-md btn-block"><i
                                                                        class="fa fa-paper-plane"></i> Submit</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div> -->
                                    
                                    <div class="col-lg-12">
                                        
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                            data-show-export="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <!-- <th data-field="state" data-checkbox="true"></th> -->

                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
  Add Engineer
</button>
<?php 

include("addeng.php"); 

?>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Other names</th>
                                                    <th>Phone</th>
                                                    <th>email</th>
                                                    <th>status</th>
                                                    <th data-field="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            <?php
                                            require_once("../db.php");

                                            $findeng=$pdo_conn->prepare("SELECT * FROM users where role=3 and stat=1");
                                            $findeng->execute();
$a=0;
                                            while($row=$findeng->fetch()){

                                                $a++;
                                            
                                            
                                            ?>
                                                <tr>
                                                    <td><?php echo $a?></td>
                                                    <td><?php echo $row['fname']?></td>
                                                    <td><?php echo $row['lname']?></td>
                                                    <td><?php echo $row['username']?></td>
                                                    <td><?php echo $row['email']?></td>
                                                    <td>
                                                    <?php 
                                                    
                                                    if($row['stat']==1){

                                                        ?>
                                                        <button class="btn btn-white btn-xs">Active</button>

                                                        <?php
                                                    } 
                                                    elseif($row['stat']==2){
                                                    ?>    
                                                    <div class="btn-group project-list-ad-rd">
                                                    <button class="btn btn-white btn-xs">not Active</button>
                                                        </div>
                                                    
                                                    <?php 
                                                    
                                                }
                                                ?></td>
                                                        <td>
                                                        <div class="btn-group project-list-ad">
                                                            <a href="#" data-toggle="modal" data-target="#editeng<?php echo $row['u_id']?>" class="btn btn-white btn-xs"><i
                                                                    class="fa fa-pencil"></i> Edit</a>
                                                        </div>
                                                        <div class="btn-group project-list-ad-rd">
                                                            <a href="approver-user.php?eid=<?php echo $row['u_id']?>" class="btn btn-white btn-xs"><i
                                                                    class="fa fa-trash"></i> Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                             <?php
                                             
                                             include("editeng.php");
                                            
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