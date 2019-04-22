<?php
    include("loginCheck.php");
    session_start();
    $user = $_SESSION['loggedInUser'];
    //$user = "rahatos";
    $row = [];
    $problem_id = $_GET['id'];

    $problem_name = $max_score = $difficulty = $description = $input_format = $output_format = $constrains = $sample_input = $sample_output = $notes = $test_cases = $test_case_output = "";

    include("connection.php");

    
    $query = "SELECT * FROM algorithms WHERE problem_id='$problem_id'";
    
    // store the result
    $result = mysqli_query( $conn, $query );
    
    
    if( !mysqli_num_rows($result) ) {  
        //header("Location: dashboard.php");
    }

    while( $row = mysqli_fetch_assoc($result) ) {
     $problem_id            = $row['problem_id'];
     $problem_name          = $row['problem_name'];
     $max_score             = $row['max_score'];
     $difficulty            = $row['difficulty'];
     $description           = $row['description'];
     $input_format          = $row['input_format'];
     $output_format         = $row['output_format'];
     $constrains            = $row['constrains'];
     $sample_input          = $row['sample_input'];
     $sample_output         = $row['sample_output'];
     $notes                 = $row['notes'];
     $test_cases            = $row['test_cases'];
     $test_case_output      = $row['test_case_output'];
    }
    error_reporting(0);
    session_start();
	$_SESSION['test_case'] = $test_cases;
	$_SESSION['test_case_output'] = $test_case_output;

               
?>

<?php include("header.php"); ?>

<!DOCTYPE>
<html>
    <head>
             <link href="css/dashboard.css" rel="stylesheet">
             <link href="css/algorithms.css" rel="stylesheet">
            <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
            
    </head>

    <body>
        <?php include("includes/navbar.php"); ?>

        <section style="background:white;">
               <div class="container">
                   <div class="row">
                       <h4 class="display-4 py-4" style="color:green;"><strong><?php echo "$problem_name".' ('."$difficulty".')'; ?></strong></h4>
                   </div>
               </div>
        </section>
        <div class="container">
        <div class="card text-center shadow-lg p-3 mb-5 bg-white rounded">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#">Problem</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Submissions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">Leaderboard</a>
              </li>
                <li class="nav-item">
                <a class="nav-link " href="#">Discussions</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
              <table class="table table-striped">
                <tbody>
                    <?php if ($description) echo '<tr><th> Description </th></tr>
                                                  <tr><td><pre>'."$description".'</pre></td></tr>';?>
                    <?php if ($input_format) echo '<tr><th> Input Format </th></tr>
                                                  <tr><td><pre>'."$input_format".'</pre></td></tr>';?>
                    <?php if ($output_format) echo '<tr><th> Output Format </th></tr>
                                                  <tr><td><pre>'."$output_format".'</pre></td></tr>';?>
                    <?php if ($constrains) echo '<tr><th> Constrains </th></tr>
                                                  <tr><td><pre>'."$constrains".'</pre></td></tr>';?>
                    <?php if ($sample_input) echo '<tr><th> Sample Input </th></tr>
                                                  <tr><td><pre>'."$sample_input".'</pre></td></tr>';?>
                    <?php if ($sample_output) echo '<tr><th> Sample Output </th></tr>
                                                  <tr><td><pre>'."$sample_output".'</pre></td></tr>';?>
                    <?php if ($notes) echo '<tr><th> Explanation </th></tr>
                                                  <tr><td><pre>'."$notes".'</pre></td></tr>';?>
                </tbody>
              </table>
          </div>
        </div>
           <div class="row">
                     <div class="card text-center shadow-lg p-3 mb-5 bg-white rounded col-md-8">
            
                <form id="submit-form" method="POST" action="compile.php" role="form">
                <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea id="code" name="fcode" class="form-control" placeholder="Write Your Code Here..." rows="16" required="required" ></textarea>
                            </div>
                        </div>
                </div>
             <div class="row">
               <div class="form-group col-md-6">
                  <select name="language" id="language" class="form-control">
                    <option selected>c</option>
                    <option>cpp</option>
                    <option>cpp11</option>
                    <option>java</option>
                    <option>python2.7</option>
                    <option>python3.2</option>
                  </select>
                </div>
                <div class="form-group col-md-6" >
                    <input type="submit" id="st" class="btn btn-success btn-md " style="float:right;" value="Submit Code" name="submit-code">
                </div>
            </div>
            </form>
                
        </div>
            
            <div class="col-md-4">
                      <div>
                <h1  id="ok">oeat</h1>
            </div>
            </div>
            </div>
           
<script type="text/javascript">
    
  $(document).ready(function(){

     $("#st").click(function(){
  
           $("#ok").html("Cat foods loading...");

     });

  });

</script> 
            
<script type="text/javascript">
    $(document).ready(function(){
        $('#st').focus();
        $('#st').click(function(event){
            event.preventDefault();
            var code = $('#code').val();
            var language = $('#language').val();
            $.ajax({
                method: "POST",
                url: "compile.php",
                data: {code: code, language: language},// test_case: test_case},
                success: function(msg){
                    
                   if(msg == 'Accepted')
                        $('#ok').html(msg + "&#9989;");
                   else
                     $('#ok').html(msg + "&#10060;");
                }
            });
            
            
        });
    });
    
    
</script>  
            
      
 
</div>
        
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>  
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
        <!-- Include all compiled plugins (below), or include individual files as needed -->
<!--        <script src="js/bootstrap.min.js"></script>-->


        
          
     
    </body>
</html>