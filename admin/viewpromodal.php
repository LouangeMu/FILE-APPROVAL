<div class="modal fade" id="view<?php echo $row['p_code']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Assign project <?php echo $row['p_code']?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                  <form method="POST" action="files.php">
                       <div class="form-group-inner">
                                                    <div class="row">
                                                    <div class="col-lg-4">
                                                        <label style="float:left;padding-left:15px">Engineer  </label>
</div>

        <div class="col-lg-6">
            <input type="hidden" name="pcode" value="<?php echo $row['p_code']?>">
            <select id="selectField" class="form-control" name="eng" required>
                <option></option>
                    <?php
                    
                    $finfeng=$pdo_conn->prepare("SELECT * FROM users where stat=1 and role=3");
                    $finfeng->execute();
                    

                    while($roweng=$finfeng->fetch()){
                            ?>
        <option value="<?php echo $roweng['u_id']?>"><?php echo $roweng['fname']." ".$roweng['lname']?></option>
                            <?php 

                    }
                    
                    ?>

</select>
                                                        </div>

                                                    </div>

                                                    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="addass">Save </button>

      </div>
      </form>
    </div>
  </div>
</div>