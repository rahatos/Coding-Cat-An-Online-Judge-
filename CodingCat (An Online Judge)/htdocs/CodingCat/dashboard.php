<?php
    include("loginCheck.php");
    //$user = "rahatos";
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
                       <h4 class="display-4 py-4"><strong>Dashboard</strong></h4>
                   </div>
               </div>
          
        </section>
        
        <section >
               <div class="container light-theme">
                   <div class="row">
                          <p class="py-5"> Explore CodingCat Skills </p>
                   </div>
            </div>
               
            <div class="container">
            <div class="card-deck">
              <div class="card">
                <img class="card-img-top" src="images/catgod_800x600.gif" alt="Card image cap">
                <div class="card-body">
                  <p class="card-title">PAWBLEM SOLVING</p>
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="algorithms.php"><strong>Algorithms</strong></a></li>
                    <li class="list-group-item"><a href="#"><strong>Data Structures</strong></a></li>
                    <li class="list-group-item"><a href="#"><strong>Mathematics</strong></a></li>
                    <li class="list-group-item"><a href="#"><strong>Geometry</strong></a></li>
                    <li class="list-group-item"><a href="#"><strong>Statistics</strong></a></li>
                    </ul>
                </div>

              </div>
              <div class="card">
                <img class="card-img-top" src="images/desgners-mind-3.gif" alt="Card image cap">
                <div class="card-body">
                    <p class="card-title">LANGUAGE PAWFICIENCY</p>
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#"><strong>C</strong></a></li>
                    <li class="list-group-item"><a href="#"><strong>C++</strong></a></li>
                    <li class="list-group-item"><a href="#"><strong>Java</strong></a></li>
                    <li class="list-group-item"><a href="#"><strong>Python</strong></a></li>
                    <li class="list-group-item"><a href="#"><strong>Ruby</strong></a></li>
                    <li class="list-group-item"><a href="#"><strong>Linux Shell</strong></a></li>
                    <li class="list-group-item"><a href="#"><strong>Functional Programming</strong></a></li>
                    </ul>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="images/kittyyingyang_dribbble.gif" alt="Card image cap">
                <div class="card-body">
                    <p class="card-title">SPECIALIZED SKILLS</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#"><strong>Artificial Intelligence</strong></a></li>
                    <li class="list-group-item"><a href="#"><strong>SQL</strong></a></li>
                    <li class="list-group-item"><a href="#"><strong>Data Mining</strong></a></li>
                    <li class="list-group-item"><a href="#"><strong>Regex</strong></a></li>
                    <li class="list-group-item"><a href="#"><strong>Deep Learning</strong></a></li>
                    </ul>
                </div>
              </div>
            </div>
           </div>
          
        </section>
        
        <section >
            <div class="container light-theme">
               <div class="row">
                      <p class="py-5"> Toe-toe-rials</p>
               </div>
            </div>
               
            <div class="container">
            <div class="card-deck">
              <div class="card">
                <img class="card-img-top" src="images/comp_10.gif" alt="Card image cap">
                <div class="card-body">
                  <p class="card-title">INTERVIEW PREPARATION</p>
                   <h5 class="card-title my-4">Learnings from 1000+ Companies. We have carefully curated these challenges to help you prepare in the most comprehensive way possible.</h5>
                   <button class="btn btn-success"><strong>Catfoods!</strong></button>
                </div>

              </div>
              <div class="card">
                <img class="card-img-top" src="images/dribbble_lazycat-04_2x.png" alt="Card image cap">
                <div class="card-body">
                    <p class="card-title">3 DAYS OF EMERGENCY</p>
                    <h5 class="card-title my-4">Learn how to tackle emergency and do a full coding cat project in 3 days. No kitting!</h5>
                    <button class="btn btn-success"><strong>start toe-toe-rial</strong></button>

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