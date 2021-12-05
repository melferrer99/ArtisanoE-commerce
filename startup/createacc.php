
        <div class="modal-header">
            <h4 class="modal-title" style="margin-left: 110px;"><img src="img/artisano.png" style="height:60% ;width:70%;"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>  
        </div>

       <div class="col-sm-12" id="Reserve" style="margin-top: 3%;">
                <form method="post" class="">

                          <div class="form-group col-sm-6">
                        <label for="number">First Name</label>
                        <input required="" name="u_Fname" class="form-control" placeholder="first name" autocomplete="off">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="number">Last Name</label>
                        <input  required="" name="u_Lname" class="form-control" placeholder="last name" autocomplete="off">
                    </div>
                     <div class="form-group">
                        <label for="Email">Email address</label>
                        <input  required="" type="Email" name="u_Email" class="form-control" placeholder="example@gmail.com" autocomplete="off">
                    </div>
                     <div class="form-group">
                        <label for="number">Contact number</label>
                        <input type="number" required="" name="u_Cnumber" class="form-control" placeholder="contact number" autocomplete="off" maxlength="11">
                    </div>


                    <div class="form-group">
                        <label for="number">Password</label>
                        <input class="form-control" type="Password" autocomplete="off" id="u_Password" name="u_Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>   
                        <div id="message">
  <h6>Password must contain the following:</h6>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>

<script>
var myInput = document.getElementById("u_Password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
            </div>

                    <label>User Type</label>
                    <div class="form-group">
                     <select name="u_type" class="form-group" style="padding:2%;" required="">
                        <option disabled="true" selected="true">User Type</option>
                        <option>SuperAdmin</option>
                        <option>Admin</option>
                    </select>
                    </div>

                    <div class="form-group" id="btn">
                        <Button type="submit" name="Signup" class="btn btn-primary btn-block" >Sign up</Button>
                    </div>




                </form>
            </div>
