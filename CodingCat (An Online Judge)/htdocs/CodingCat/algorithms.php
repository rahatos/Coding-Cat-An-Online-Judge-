<?php
    include("loginCheck.php");
    error_reporting(0);
    session_start();
    $user = $_SESSION['loggedInUser'];
    //$user = "rahatos";

    //$user = "rahatos";
    $row = [];
    $problem_id = $problem_name = $max_score = $difficulty = "";

    include("connection.php");
    $query = "SELECT problem_id, problem_name, max_score, difficulty FROM algorithms";
    
    // store the result
    $result = mysqli_query( $conn, $query );
    
    // verify if result is returned
    if( !mysqli_num_rows($result) ) {
        
        echo "Error: ". $query . "<br>" . mysqli_error($conn);
        // store basic user data in variables
        
    }
?>

<?php include("header.php"); ?>

<!DOCTYPE>
<html>
    <head>
             <link href="css/dashboard.css" rel="stylesheet">
             <link href="css/algorithms.css" rel="stylesheet">
            
    </head>

    <body>
        <?php include("includes/navbar.php"); ?>
        <section style="background:white;">
               <div class="container">
                   <div class="row">
                       <h4 class="display-4 py-4" style="color:green;"><strong>Algorithms</strong></h4>
                   </div>
               </div>
        </section>
        
        <div class="container dark-theme">
               <div class="row">
                      <p class="py-5"> Problem Solving</p>
               </div>
        </div>
        
        
           
        <div class="container ">
            <?php 
                while( $row = mysqli_fetch_assoc($result) ) {
                 $problem_id         = $row['problem_id'];
                 $problem_name       = $row['problem_name'];
                 $max_score          = $row['max_score'];
                 $difficulty         = $row['difficulty'];
          
            ?>
              <div class="card .bg-dark">
                <div class="card-body bg-dark text-white">
                    
                    <div class="container">
                            <div class="row">
                                
                            <div class="col-lg-6">
                                <p class="card-title"><strong><?php echo $problem_name; ?></strong></p>
                                <span style="color: <?php if (strtolower($difficulty) != 'easy') echo 'red'; else echo 'green';?>;" > <?php echo $difficulty ?>, </span><span>Max Score: <?php echo $max_score ; ?></span>
                            </div>
                            <div class="col-lg-6">
                                 
                                <a type="button" href="problem.php?id=<?php echo $problem_id ?>" class="btn btn-outline-success btn-lg" style="float:right; border-radius:5px;"> <strong>Solve MEOW!</strong></a>
                            </div>
                                                    
                        </div>
                    </div>
                </div>
              </div>
            <?php } ?>
        </div>
        
          
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
       
    </body>
    
  
</html>