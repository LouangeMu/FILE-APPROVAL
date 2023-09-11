<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Fill form below with Customer details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="manager-customers.php">
      <div class="form-group-inner">
                                                    <div class="row">
                                                    <div class="col-lg-4">
                                                        <label style="float:left;padding-left:15px">First name </label>
</div>

                                                        <div class="col-lg-6">
                                                            <input type="text" class="form-control"
                                                                placeholder="ex. Kalisa" required name="fname"/>
                                                        </div>
                                                    </div>
                                                    <div class="row"></div>
                                                    <div class="row">
                                                    <div class="col-lg-4">
                                                        <label style="float:left;padding-left:15px">Other names</label>
</div>

                                                        <div class="col-lg-6">
                                                            <input type="text" class="form-control"
                                                                placeholder="ex. John" required name="oname"/>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-lg-4">
                                                        <label style="float:left;padding-left:15px">email</label>
</div>

                                                        <div class="col-lg-6">
                                                            <input type="email" class="form-control"
                                                                placeholder="ex. john@uk.co" required name="email"/>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-lg-4">
                                                        <label style="float:left;padding-left:15px">Phone</label>
</div>

                                                        <div class="col-lg-6">
                                                            <input type="text" class="form-control"
                                                               id="phone" placeholder="ex. 0786262626" required name="phone"/>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-lg-4">
                                                        <label style="float:left;padding-left:15px">username</label>
</div>

                                                        <div class="col-lg-6">
                                                            <input type="text" class="form-control"
                                                                placeholder="ex. John" required name="username"/>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-lg-4">
                                                        <label style="float:left;padding-left:15px">start date</label>
</div>

                                                        <div class="col-lg-6">
                                                            <input type="date" class="form-control"
                                                                placeholder="ex. 11-11-2020" required name="sdate"/>
                                                        </div>
                                                    </div>
                                                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="addcust">Add customer</button>

      </div>
      </form>
    </div>
  </div>
</div>


<script>
   
  
const phone = document.getElementById('phone');

phone.addEventListener('input', function(event) {
  // Get the input value and remove any characters that are not "+" or numeric digits
  let inputValue = event.target.value.replace(/[^+\d]/g, '');

  // Update the input field value with the cleaned value
  event.target.value = inputValue;
});
</script>
<script>
  const numberInput = document.getElementById("phone");

  numberInput.addEventListener("input", function () {
    const maxLength = 10; // Set the maximum length here
    if (numberInput.value.length > maxLength) {
      numberInput.value = numberInput.value.slice(0, maxLength);
    }
  });
</script>





   