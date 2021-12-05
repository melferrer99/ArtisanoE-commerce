<?php (include'process.php');?> 

<div class="modal-header">
            <h4 class="modal-title">Do you want to approve?</h4>
          
        </div>


<div class="col-sm-12" id="reserve" >
                <form method="post" class="">

                     
 
                     <input type="hidden" required="" name="a_category" class="form-control" value="<?php echo $r_category;?>" >
                     <input type="hidden" required="" name="a_type" class="form-control" value="<?php echo $r_type;?>" >

                     <input type="hidden" required="" name="a_first_name" class="form-control" value="<?php echo $r_first_name;?>" >

                     <input type="hidden" required="" name="a_last_name" class="form-control" value="<?php echo $r_last_name;?>" >

                     <input type="hidden" required="" name="a_address" class="form-control" value="<?php echo $r_address;?>" >

                     <input type="hidden" required="" name="a_event" class="form-control" value="<?php echo $r_event;?>" >

                     <input type="hidden" required="" name="a_event_start" class="form-control" value="<?php echo $r_event_start;?>" >

                     <input type="hidden" required="" name="a_event_end" class="form-control" value="<?php echo $r_event_end;?>" >

                     <input type="hidden" required="" name="a_email" class="form-control" value="<?php echo $r_email;?>" >

                     <input type="hidden" required="" name="a_contact" class="form-control" value="<?php echo $r_contact;?>" >

                     <input type="hidden" required="" name="a_message" class="form-control" value="<?php echo $r_message;?>" >                    


                     <input type="hidden" required="" name="a_status" class="form-control" value="Pending" >
                     <input type="hidden" required="" name="a_approve" class="form-control" value="Approve" >

                    <div class="form-group" id="btn">
                        <input type="submit" name="YES" class="btn btn-primary btn-block" value="YES" >
                    </div>    
            
            <div class="" id="btn" style="text-align: right;">
                 <a href="messages.php"><button class=" btn btn-danger btn-block">NO</button></a>
            </div>
            

                    <script>
        function myFunction() {
         alert("SUCCESSFUL RESERVATION!");
            }
        </script>

                </form>
            </div>
             