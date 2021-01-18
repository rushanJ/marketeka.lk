
<div class="admin-login">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4" id="adminl">
                <div class="admin-login-header">
                <img src="../../images/loginLogo.png" alt="Avatar" class="avatar" style="width: 120px;">
                <br><br>
                    <h4><b>Register</b></h4><br>
                    <p>First time here? Create an accout!</p>
                    
                    
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8" id="adminr">
                <div class="admin-form">
                    <form method="POST" action="../php/auth.php">
                        <label for="uname" >Username</label>
                        <input type="text" class="form-control" placeholder="Enter Username" name="userName" required><br>

                        <label for="Password">Password</label>
                        <input type="text" class="form-control" placeholder="Enter Password" name="pass" required><br>
                    
                       
                        <br><br>
                        <div class="text-center">
                            <input class="btn btn-success" type="submit" value="Login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>