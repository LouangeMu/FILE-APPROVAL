<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Project details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                  <form method="POST" action="files.php">
                       <div class="form-group-inner">
                                                    <div class="row">
                                                    <div class="col-lg-4">
                                                        <label style="float:left;padding-left:15px">Project name  </label>
</div>

                                                        <div class="col-lg-6">
                                                            <input type="text" class="form-control"
                                                                placeholder="ex. SBCA" required name="pname"/>
                                                        </div>
                                                    </div>
                                                    <div class="row"></div>
                                                    <div class="row">
                                                    <div class="col-lg-4">
                                                        <label style="float:left;padding-left:15px">Descriptions</label>
</div>

                                                        <div class="col-lg-6">
                                                            <textarea class="form-control"
                                                                placeholder="add details" required name="pdesc"/></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-lg-4">
                                                        <label style="float:left;padding-left:15px">Link</label>
</div>

                                                        <div class="col-lg-6">
                                                            <input type="text" class="form-control"
                                                                placeholder="ex. http://localhost/files-approval-system" required name="link"/>
                                                        </div>
                                                    </div>
                                        
                                                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="addpro">Save changes</button>

      </div>
      </form>
    </div>
  </div>
</div>