
  <!-- Modal content-->

    <div class="modal fade" id="edit_RE<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    
    
      <!-- Modal content-->
      <div class="modal-content" style="padding: 5%">
        <div class="modal-header">
            <h4 class="modal-title" style="margin-left: 110px;"><img src="img/artisano.png" style="height:60% ;width:70%;"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>  
        </div>
        <div class="col-sm-12" style="text-align: center; font-size: 2em;">EDIT</div>
       <div class="col-sm-12" id="Reserve" style="margin-top: 3%;">
                <form method="post" class="jumbotron">
                           
    <input type="hidden" name="id" value="<?php echo $row['id']; ?> ">

    <div class="gallery " style="text-align: center;">
    <?php echo "<img src='images/".$row['image']."' >"; ?>
    </div>

    <div class="file-field" >
      <div class="btn btn-outline-white btn-rounded" >
        <input type="file" multiple name="image">
      </div>
       <div class="col-sm-12" style="text-align: center;">Picture Name</div>
      <input type="text" required="" name="image_text" class="form-control" input type="text" value="<?php echo  $row['image_text']; ?>">
 

  <button class="btn btn-outline-secondary btn-block  btn-success" type="submit" name="updateRE" style="border: solid 1px;margin-top: 5%;">Update</button>
  
</form>
  </div>
        </div></div></div></div>
<!-- end modal -->
