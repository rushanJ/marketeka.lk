
<div class="admin-login" style="width: 80%;">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3" id="adminl">
                <div class="admin-login-header">
                <img src="../../images/loginLogo.png" alt="Avatar" class="avatar" style="width: 120px;">
                <br><br>
                    <h4><b>Register</b></h4><br>
                    <p>First time here? Create an account!</p>
                    <br>
                    <p>Already have an account? <a href="../index/">Login</a></p>
                    
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9" id="adminr">
            <div class="row">
                <div class="admin-form" style="max-width: 100%;padding-top: 5%;padding-bottom: 5%;">
                
                  
                  <form method="POST" action="../php/register.php">
                  <div class="col-lg-4">
                      <label for="uname" >Shop Name</label>
                      <input type="text" class="form-control" name="shopName" required><br>

                      <label for="Password">Contact No</label>
                      <input type="text" class="form-control" name="contactNo" required><br>

                      <label for="uname">Address</label>
                      <textarea class="form-control" name="address" required></textarea><br>

                      <label for="uname" >District</label>
                      <input type="text" class="form-control" name="district" required><br>

                      <label for="uname" >Nearest Town</label>
                      <input type="text" class="form-control" name="nearestTown" required><br>


                  </div>
                  <div class="col-lg-4">

                      <label for="Password">Delivery Charge</label>
                      <input type="text" class="form-control" name="charge" required><br>

                      <label for="uname" >Shop email(This will be used as the login)</label>
                      <input type="text" class="form-control" name="email" required><br>

                      <label for="uname" >Password</label>
                      <input type="text" class="form-control" name="pass" required><br>

                      <label for="uname" >Retype Password</label>
                      <input type="text" class="form-control" name="pass" required><br>

                      <label for="Password">Owner Name</label>
                      <input type="text" class="form-control" name="ownerName" required><br>


                  </div>
                  <div class="col-lg-4">

                      <label for="uname" >Owner Address </label>
                      <textarea class="form-control" name="ownerAddress" required></textarea><br>

                      <label for="uname" >NIC</label>
                      <input type="text" class="form-control" name="NIC" required><br>

                      <label for="uname" >Business Registration Number(If you have)</label>
                      <input type="text" class="form-control" name="br_no" required><br>

                      <label for="uname" >Owner Email</label>
                      <input type="text" class="form-control" name="ownerEmail" required><br>

                  </div>
                  <div class="text-center">
                  <p><br><br>
                      <input class="btn btn-success" type="submit" value="Register">
                  </div>
                  </form>   
                  </div>
                
                </div>
            </div>
        </div>
    </div>