<?php
    // a function to validate data
    function validateFormData( $formData ) {
        $formData = trim( stripslashes( htmlspecialchars( $formData ) ) );
        return $formData;
    }

if( isset( $_POST['login'] ) ) {
    
    // connect to database
    include('connection.php');
    
    
    $username = validateFormData( $_POST['login-username'] );
    $password = validateFormData( $_POST['login-password'] );
    
    // create SQL query
    $query = "SELECT username, email, password FROM user WHERE username='$username'";
    
    // store the result
    $result = mysqli_query( $conn, $query );
    
    // verify if result is returned
    if( mysqli_num_rows($result) > 0 ) {
        
        // store basic user data in variables
        while( $row = mysqli_fetch_assoc($result) ) {
            $user       = $row['username'];
            $email      = $row['email'];
            $hashedPass = $row['password'];
        }
        
        // verify hashed password with the typed password
        if( password_verify( $password, $hashedPass ) ) {
            
            // correct login details!
            // start the session
            session_start();
            
            // store data in SESSION variables
            $_SESSION['loggedInUser'] = $user;
            $_SESSION['loggedInEmail'] = $email;
            
            header("Location: dashboard.php");
        
        } else { // hashed password didn't verify
            
            // error message
            $loginError = "<div class='alert alert-danger'>Wrong username / password combination. Try again.</div>";
            
        }
        
    } else { // there are no results in database
        
        $loginError = "<div class='alert alert-danger'>No such user in database. Please try again. <a class='close' data-dismiss='alert'>&times;</a></div>";
        
    }
    
    // close the mysql connection
    mysqli_close($conn);
    
}

if( isset( $_POST['signup'] ) ) {
    
    // connect to database
    include('connection.php');
    
    $username = validateFormData( $_POST['signup-username'] );
    $email = validateFormData( $_POST['signup-email'] );
    $password = password_hash (validateFormData( $_POST['signup-password'] ), PASSWORD_DEFAULT);
    
        $query = "INSERT INTO user (username, password, email, signup_date, bio)
        VALUES ('$username', '$password', '$email', CURRENT_TIMESTAMP, NULL)";

        if( mysqli_query( $conn, $query ) ) {
           session_start();
            
            // store data in SESSION variables
            $_SESSION['loggedInUser'] = $user;
            $_SESSION['loggedInEmail'] = $email;
            
            header("Location: dashboard.php");
        } else {
            echo "Error: ". $query . "<br>" . mysqli_error($conn);
        }
        
    mysqli_close($conn);
    
}

?>


        <form class="modal fade" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post" id="loginModal">
            <div class="modal-dialog">
                <div class="modal-content">
                
                    <div class="modal-header">
                        <h1 class="modal-title"> Login </h1>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        
                    </div>
                    
                    <div class="modal-body">
                    
                        <div class="form-group">
                            <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                  </div>
                                  <input type="text" class="form-control" id="login-username" placeholder="Username" name="login-username" required >
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="input-group mb-1">
                          <input type="password" class="form-control" id="login-password" placeholder="Password" name="login-password" required>
                            </div>
                        </div>
                        <button type="submit" for="Login_submit" class="btn btn-primary btn-lg btn-block" name="login">Login</button>
                        

                    </div>
                    
                    <div class="modal-footer">

                        <h5>or</h5> <a data-toggle="modal" class="close" data-target="#SignupModal" data-dismiss="modal" href="#" style="margin-bottom:10px; color: hotpink">register</a>
                        
                    </div>
              
                </div>
                
            </div>
            
        </form> 
        
        <form class="modal fade" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post" id="SignupModal">
            
            <div class="modal-dialog">
            
                <div class="modal-content">
                
                    <div class="modal-header">
                        <h1 class="modal-title"> SIGNUP </h1>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                        
                    </div>
                    
                    <div class="modal-body">
                    
                        <div class="form-group">
                            <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@</span>
                          </div>
                          <input type="text" class="form-control" id="formUsername" placeholder="Username" name="signup-username" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="input-group mb-3">
                         
                          <input type="email" class="form-control" id="formEmail" placeholder="Email" name="signup-email" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="input-group mb-1">
                          <input type="password" class="form-control" placeholder="Password" id="formPassword" name="signup-password" required>
                            </div>
                        </div>

                        <button type="submit" for="Signup_submit" class="btn btn-primary btn-lg btn-block" name="signup">Sign Up</button>
                        

                    </div>
                    
                   <div class="modal-footer">

                        <h5>Already a member? Go </h5> <a data-toggle="modal" class="close" data-target="loginModal" data-dismiss="modal" href="#" style="margin-bottom:10px; color: hotpink">log in</a>
                        
                    </div>
                        
                    </div>
                
                
                </div>
        </form>
   