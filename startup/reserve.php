<?php (include'process.php');

 ?> 


<div class="modal-header">
            <h4 class="modal-title" style="margin-left: 110px;"><img src="img/artisano.png" style="height:60% ;width:70%;"></h4>
          <button type="button" class="close"><a href="packages.php">&times;</a></button>
          </button> 
        </div>


<div class="col-sm-12" id="reserve" >
                <form method="post" class="">
        
        <div class="col-sm-12" style="text-align: center;font-size: 20px;">
            
                   <?php echo $p_category ?>
              
        </div>
        
        <div class="col-sm-12" style="text-align: center;font-size: 15px; margin-bottom: 8%;">
                
                    <?php echo $p_type?>
                     
        </div>
 
                     <input type="hidden" required="" name="r_category" class="form-control" value="<?php echo $p_category;?>" >
                     <input type="hidden" required="" name="r_type" class="form-control" value="<?php echo $p_type;?>" >
                     <input type="hidden" required="" name="r_status" class="form-control" value="Pending" >
                     <input type="hidden" required="" name="r_approve" class="form-control" value="Approved" >


                    <div class="form-group col-sm-6">
                        <label for="number">First Name</label>
                        <input type="text" required="" name="r_first_name" class="form-control" placeholder="first name" maxlength="16" autocomplete="off">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="number">Last Name</label>
                        <input type="text" required="" name="r_last_name" class="form-control" placeholder="last name" maxlength="16" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="number">Address</label>
                        <input type="text" required="" name="r_address" class="form-control" placeholder="address" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="number">Event Venue</label>
                        <input type="text" required="" name="r_event" class="form-control" placeholder="venue" autocomplete="off">
                    </div>

                     <label for="number" class="col-sm-12">Event Date</label>
                    <div class="form-group col-md-6">
                        <label for="number">Start</label>
                            <input id="datepicker1" name="r_event_start" width="170" type="Date">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="number">End</label>
                            <input id="datepicker2" name="r_event_end" width="170"  type="Date">
                    </div>
                     
                    <div class="form-group">
                        <label for="number">Email address</label>
                        <input type="Email" required="" name="r_email" class="form-control" placeholder="example@gmail.com" autocomplete="off">
                    </div>
                     <div class="form-group">
                        <label for="number">Contact number</label>
                        <input required="" name="r_contact" class="form-control" placeholder="contact number" autocomplete="off" type="number">
                    </div>

                    <div class="form-group">
                        <label for="number">Message(OPTIONAL)</label>
                       <textarea class="form-control" name="r_message" aria-label="With textarea"></textarea>
                    </div>

                    <div class="form-group" id="btn">
                        <input type="submit" name="Send" class="btn btn-primary btn-block" value="Send" >
                    </div>    

                    <script>
        function myFunction() {
         alert("SUCCESSFUL RESERVATION!");
            }
        </script>

                </form>
            </div>
             <div class="" id="btn" style="text-align: right; margin-right: 3%;">
                 <a href="packages.php"><button class=" btn btn-danger ">Cancel</button></a>
            </div>