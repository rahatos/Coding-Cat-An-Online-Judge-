<?php
        $user = "";
        $loginError = "";

    if($user) {
       header("Location: dashboard.php"); 
       exit();
   }
?>
<!DOCTYPE>
<html>

    <head>
            <?php include("header.php"); ?>
             <link href="css/stylesheet.css" rel="stylesheet">
    </head>

    <body>
        <nav class="navbar transparent navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div>
                    <div class="center-block">
                <a class="navbar-brand" href="index.php">
                <img class="img-fluid" src="images/iconwhite.png" width="60" height="33" class="d-inline-block align-top" alt="codingcatlogo"> 
                    CODING<strong>CAT</strong>
                </a>
                    </div>
                </div>
            </div>
        
        </nav>
        
             <?php echo $loginError; ?>
        <div class = "container" id = "welcome">

            <div class="row">
            
                <img class="center-block" src="images/logo-new.png" width="255" height="293">
            </div>
            <div class="row">
                <div class="cover-text center-block">
                    <h1 id="page-title">CODING CAT</h1>
                    <h2>Join over 5 million developers.</h2>
                    <p class="lead">Practice coding, prepare for interviews, and get hired</p>
                    <button type="button" class="btn btn-outline-danger btn-lg" data-toggle="modal" data-target="#loginModal">Let's GO!</button>
                </div>
            </div>
            
        </div>
        
        <?php include("loginOrSignupModal.php"); ?>
        
        <footer>
            crafted with &#10084;&#65039; in AUST by <a href="meetus.php"> rahat &amp; aniqua </a>
        </footer>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    
</html>