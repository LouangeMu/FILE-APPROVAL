<?php
session_start();
 require_once("../db.php");
// $_REQUEST['p_id']=$_REQUEST['p_id'];
$find_id=$pdo_conn->prepare("SELECT * FROM tbl_projects where p_code='".$_REQUEST['pid']."'");
 $find_id->execute();
 $row_id=$find_id->fetch();
 $title=$row_id['p_name'];
 $code=$row_id['p_code'];
 $deadl=$row_id['deadline'];
 $sta=$row_id['status'];


 


//  $me=$_SESSION['username'];

// $find_id=$pdo_conn->prepare("SELECT * FROM users where username='".$me."'");
// $find_id->execute();
// $row_id=$find_id->fetch();
// $id=$row_id['u_id'];
// $fullnames=$row_id['lname']." ".$row_id['fname'];
// $username=$row_id['username'];

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
                                   <?php $pro=$_REQUEST['pid']?> 
                                    <li><span class="bread-blod"><?php echo $pro?></span>
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
                                <h1><?php echo $_REQUEST['pid']."     ||".$title ." Deadline  ". $deadl?></h1>
                            </div>
                        </div>
                        
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">

                                <div class="row">


<?php

$viewscore=$pdo_conn->prepare("SELECT * FROM tbl_score where project='".$pro."' and status=1");
$viewscore->execute();

$rowdate=$viewscore->fetch();

?>

                                <div class="col-lg-4">
                                    <table data-toggle="table">
                                            <thead>
                                                <tr>
                                                    <th>Metrics</th>
                                                    <th>Score/10</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <div id="resp">   
                                                <tr>
                                                        <td>User Interface</td>
                                                        <td><?php echo $rowdate['ui']?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Data Integrity</td>
                                                        <td><?php echo $rowdate['entegrity']?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Feasibility</td>
                                                        <td><?php echo $rowdate['feasiblility']?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Accuracy</td>
                                                        <td><?php echo $rowdate['accuracy']?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Status</td>
                                                        <td>


                                                        <form action="" method="POST" id="close">

                                                        <?php 
                                                        if($sta==4){
                                                            ?>
                                                            <input type="hidden" class="form-control" value="<?php echo $pro ?>" name="pro" required />

                                                            <button type="submit"  class="btn btn-primary" >Close</button>

                                                        <?php
                                                        }

                                                        elseif($sta==6){
                                                            ?>

                                                    <button type="submit"  class="btn btn-danger" disabled >Closed</button>

                                                            <?php


                                                        }
                                                        
                                                        ?>
                                                          

                                                    </form>


                                                        </td>
                                                    </tr>
                                               
                                            </div>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-lg-8">
                                    <form action="" id="savesco" method="POST">
                                            <div class="row">
                                               
                                                <div class="col-lg-4">
                                                    <div class="touchspin-inner">
                                                        <label>User Interface</label>
                                                        <input type="number" class="form-control" value="<?php echo $rowdate['ui']?>" name="ui" max="10" required oninput="validateInput(this)" />
                                                        <input type="hidden" class="form-control" value="<?php echo $pro ?>" name="pro" required />
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="touchspin-inner">
                                                        <label>Feasibility</label>
                                                        <input type="number" class="form-control" value="<?php echo $rowdate['feasiblility']?>" name="fea" id="myField" required oninput="validateInput(this)"  />
                                                    </div>
                                                </div>
                                                <br><br><br><br>
                                                <div class="col-lg-4">
                                                    <div class="touchspin-inner">
                                                        <label>Data Integrity</label>
                                                        <input type="number" class="form-control" value="<?php echo $rowdate['entegrity']?>" name="inte" oninput="validateInput(this)"/>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="touchspin-inner">
                                                        <label>Accuracy</label>
                                                        <input type="number" class="form-control" value="<?php echo $rowdate['accuracy']?>" name="acc" required oninput="validateInput(this)" />
                                                    </div>
                                                </div>
                                                <br><br><br><br>
                                                <div class="row">
                                                <div class="col-lg-8">
                                                <div class="touchspin-inner">
                                                        <label>Comments</label>
                                                        <textarea class="form-control" value="" name="comm" required /></textarea>
                                                    </div>
</div>
                                                    </div>

                                                <br>
                                                
                                                <div class="col-lg-12">
                                                    <div class="touchspin-inner">
                                                    <div class="btn-group project-list-ad">
                                                        <?php if($sta==4){


                                                        ?>
                                                    <button type="submit" id="myButton" class="btn btn-primary" >Update score</button>
                                                <?php 
                                                        }

                                                        elseif($sta==6){
                                                ?>
                                                 <button type="submit" id="myButton" class="btn btn-danger" disabled>Project was closed</button>
                                                 <?php
                                                        }
                                                 ?>
                                                
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
    <!-- Static Table End -->
    </div>
    </div>


    <?php include 'includes/footer.php' ?>
</body>

</html>

<?php

// require_once("../db.php");
// include("rand.php");

// $me=$_SESSION['username'];

// $find_id=$pdo_conn->prepare("SELECT * FROM users where username='".$me."'");
// $find_id->execute();
// $row_id=$find_id->fetch();
// $id=$row_id['u_id'];

// if(isset($_POST['addpro'])){

//     $pname=$_POST['pname'];
//     $pdesc=$_POST['pdesc'];
//     $link=$_POST['link'];

//    $pcode=$_POST['pcode'];
//    $stat=8;
    
//     $addpro=$pdo_conn->prepare("INSERT INTO tbl_projects (p_code,p_name,link,p_owner,status) VALUES('".$pcode."','".$pname."','".$link."','".$id."','".$stat."')");
//     $addpro->execute();
// ?>
 


<script>
$(document).ready(function(){
  
    $("#savesco").submit(function(e){
        e.preventDefault();
    
        var formdata = new FormData(this);
            
        $.ajax({
            url: "savesco.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(formData){
                location.reload();
               // alert(3);
               if(formData==3){
                   
                    pop_up_NO_Input(formData);
                    $('#close_click').trigger('click');
                    // setTimeout(function(){// wait for 5 secs(2)
                    //   location.reload(); // then reload the page.(3)
                    // }, 1000);
         
                    //alert(sect);
           
                    //   $("#citizen_list").load("citizen_list.php?sec_id=" + sect);
                    // location.reload();
                }else {
                   
                    pop_up_request(formData);
                    $('#close_click').trigger('click');
                    // setTimeout(function(){// wait for 5 secs(2)
                    //   location.reload(); // then reload the page.(3)
                    // }, 1000);
                }   
                
                },error: function(){
                    alert("okey");
                }
             });
          });
          
});

  function pop_up_request(feedback) {
        jQuery(function validation(){
        swal("Well done! ", "Excess Quantity saved successful!", "success", {
        button: "ok",
          });
        });
    }
      function pop_up_NO_Input(feedback) {
        jQuery(function validation(){
        swal("Sorry! ", "No Excess Quantity enetered!", "error", {
        button: "ok",
          });
        });
    }
    
</script>
<script>
$(document).ready(function(){
  
    $("#close").submit(function(e){
        e.preventDefault();
    
        var formdata = new FormData(this);
            
        $.ajax({
            url: "close.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(formData){
                location.reload();
               // alert(3);
               if(formData==3){
                   
                    pop_up_NO_Input(formData);
                    $('#close_click').trigger('click');
                    // setTimeout(function(){// wait for 5 secs(2)
                    //   location.reload(); // then reload the page.(3)
                    // }, 1000);
         
                    //alert(sect);
           
                    //   $("#citizen_list").load("citizen_list.php?sec_id=" + sect);
                    // location.reload();
                }else {
                   
                    pop_up_request(formData);
                    $('#close_click').trigger('click');
                    // setTimeout(function(){// wait for 5 secs(2)
                    //   location.reload(); // then reload the page.(3)
                    // }, 1000);
                }   
                
                },error: function(){
                    alert("okey");
                }
             });
          });
          
});

  function pop_up_request(feedback) {
        jQuery(function validation(){
        swal("Well done! ", "Excess Quantity saved successful!", "success", {
        button: "ok",
          });
        });
    }
      function pop_up_NO_Input(feedback) {
        jQuery(function validation(){
        swal("Sorry! ", "No Excess Quantity enetered!", "error", {
        button: "ok",
          });
        });
    }
    
</script>



<script>
        function validateInput(inputField) {
            // Parse the value of the input field as a number
            var value = parseFloat(inputField.value);

            // Check if the value is less than 0
            if (value < 0) {
                // If the value is less than 0, set the value to 0
                inputField.value = 0;
            }

            // Check if the value is greater than 10
            if (value > 10) {
                // If the value is greater than 10, set the value to 10
                inputField.value = 10;
            }
        }
    </script>
