<?php
    include("loginCheck.php");
    //$user = "fapNinja";
    $email = $bio = $photo = "";

//include("loginCheck.php");
session_start();
// if user is not logged in
$user = $_SESSION['loggedInUser'];
// connect to database
include('connection.php');


// query the database with client ID
$query = "SELECT * FROM user WHERE username='$user'";
$result = mysqli_query( $conn, $query );

// if result is returned
if( mysqli_num_rows($result) > 0 ) {
    
    // we have data!
    // set some variables
    while( $row = mysqli_fetch_assoc($result) ) {
        $id             = $row['id'];
        $username       = $row['username'];
        $password       = $row['password'];
        $email          = $row['email'];
        $bio            = $row['bio'];
        $photo          = $row['photo'];
    }
} else { // no results returned
    // $alertMessage = "<div class='alert alert-warning'>Nothing to see here. <a href='clients.php'>Head back</a>.</div>";
}
?>

<?php include("header.php"); ?>

<!DOCTYPE>
<html>
    <head>
             <link href="css/dashboard.css" rel="stylesheet">
    </head>

    <body>

        <?php include("includes/navbar.php"); ?>
        
           <section style="background:white;">
               <div class="container">
                   <div class="row">
                       <h4 class="display-4 py-4">WELCOME, <strong><?php echo $user ?></strong></h4>
                   </div>
               </div>
          
        </section>
        
        <section >
       
               
            <div class="container my-4">
            <div class="card-deck ">
              <div class="card">
                <div class="card-body ">
                        
                    <form action="edit.php" method="post">
                            <div class="row">
                                <div class="col-md-3 order-lg-1">
                               <img src="images/56526673_407199536746476_882768491185176576_n.jpg" width="200px" height="200px">
                                <br><br>
                                </div>
                                
                            <div class="col-md-9 order-lg-2">
                                
                               <a href="edit.php?=<?php echo $id ?>" class="btn btn-success" style="float: right; margin-top:150px;" name ="update"> Update Profile </a>
                            <br><br>
                          </div>
                                
                            </div>
                          
                        
                          
                          <div class="form-row">
                                    <label for="formUsername" class="col-md-3 col-form-label"> <strong> Username: </strong></label>
                              <div class="form-group  col-md-9">
                                    <div class="input-group ">
                                      <input type="text" class="form-control" id="formUsername" placeholder= "<?php echo $user ?>" name="username" readonly>
                                  </div>
                                </div>
                          </div>
                          
                          
                          <div class="form-row">
                              <label for="formUsername" class="col-md-3 col-form-label"><strong> Email: </strong></label>
                                <div class="form-group col-md-9">
                                    <div class="input-group">
                                    <input type="text" class="form-control" id="formUsername" placeholder="<?php echo $email ?>" name="email" readonly>
                                    </div>
                                </div>
                          </div>
                          
                          <div class="form-row">
                              <label for="formUsername" class="col-md-3 col-form-label"><strong> Bio: </strong></label>
                              
                              <?php if($bio) { ?>
                                <div class="form-group col-md-9">
                                    <div class="input-group">
                                     <textarea id="bio" name="fcode" class="form-control"  rows="16" readonly><?php echo $bio ?></textarea>
                                    </div>
                                </div>
                                </div>
                               <?php } else echo '<button type="submit" class="btn btn-warning" name ="update"> Add bio </button>' ?>
                                
                          
                      </form>
                </div>

              </div>
                </div>
            </div>
        </section>
        
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
    </body>

  
</html>