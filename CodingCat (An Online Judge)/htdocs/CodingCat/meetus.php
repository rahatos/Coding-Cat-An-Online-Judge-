<?php
    error_reporting(0);
    session_start();
    $user = $_SESSION['loggedInUser'];
    
 $status ="";
    function validateFormData( $formData ) {
        $formData = trim( stripslashes( htmlspecialchars( $formData ) ) );
        return $formData;
    }
if( isset( $_POST['send-message'] ) ) {

    // connect to database
    include('connection.php');
    
    $firstname = validateFormData( $_POST['firstname'] );
    $lastname = validateFormData( $_POST['lastname'] );
    $email = validateFormData( $_POST['email'] );
    $phone = validateFormData( $_POST['phone'] );
    $message = validateFormData( $_POST['message'] );

    
        $query = "INSERT INTO mails (firstname, lastname, email, phone, message)
        VALUES ('$firstname', '$lastname', '$email', '$phone', '$message')";

        if( mysqli_query( $conn, $query ) ) {
            $status = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>Thank you for your message!</strong>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>';
        } else {
            echo "Error: ". $query . "<br>" . mysqli_error($conn);
        }
        
    mysqli_close($conn);
    
}
?>

<!DOCTYPE>
<html>
    <head>
            <?php include("header.php"); ?>
             <link href="css/meetus.css" rel="stylesheet">
        
    </head>

    <body>
        
        
        
        <?php echo $status; 
        if($user)
        {
            include("includes/navbar.php");
        }else { ?>
            <nav class="navbar transparent navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div>
                    <div class="center-block">
                        <style scoped>
                            a { color: white; }
                        </style>
                            <a class="navbar-brand" href="index.php">
                            <img class="img-fluid" src="images/iconwhite.png" width="60" height="33" class="d-inline-block align-top" alt="codingcatlogo"> 
                                CODING<strong>CAT</strong>
                            </a>
                    </div>
                </div>
            </div>
        </nav>
        <?php } ?>
<section>
    <div class="container ">
      <div class="row">
          <div class="center-block ">
              <h1 class="display-3" style="color:white;">bonjour.</h1>
              <hr>
          </div>
      </div>
    </div>
</section>

<section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="images/02.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5" style="color:white;">
            <h2 class="display-4">Rahat Bin Osman</h2>
            <blockquote class="blockquote text-center">
                      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                      <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section  style="margin-bottom: 100px;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="images/03.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6" >
          <div class="p-5" style="color:white;">
            <h2 class="display-4">Aniqua Tabassum</h2>
            <blockquote class="blockquote text-center">
                      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                      <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  </section>

        
    <section class="contact" id="contact13">
            <div class="container">
                <div class="row align-items-center">
                <blockquote class="blockquote text-center">
                    
                    <h2 class="display-4" id="contact23">&ldquo;Swing by for a cup of coffee, or leave us a message... &rdquo;</h2> 
       
                    </blockquote>
                </div>
                
            <div class="row">
                

                <div class="col-xl-8 offset-xl-2 py-5">

                   <form id="contact-form" method="post" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" role="form">

                        <div class="messages"></div>

                        <div class="controls">
                                                       
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname"><b>Firstname *</b></label>
                                        <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname"><b>Lastname *</b></label>
                                        <input id="lastname" type="text" name="lastname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email"><b>Email *</b></label>
                                        <input id="email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                      
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_need"><b>Phone </b></label>
                                        <input id="form_need" type="tel" name="phone" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message"><b>Message *</b></label>
                                        <textarea id="message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                      
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send" value="send message" name="send-message">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-muted">
                                        <strong>*</strong> These fields are required.</p>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>

            </div>

        </div>
        </section>
    <footer>
            crafted with &#10084;&#65039; in AUST by <a href="meetus.php"> rahat &amp; aniqua </a>
        </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
        
</html>