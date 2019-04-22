<nav class="navbar navbar-dark bg-dark navbar-inverse navbar-expand-lg">
      <div class="navbar-header">
                        <a class="navbar-brand ml-3" style="color:white;" href="dashboard.php">
                            <img class="img-fluid" src="images/iconwhite.png" width="60" height="33" class="d-inline-block align-top" alt="codingcatlogo"> 
                            CODING<strong>CAT</strong>
                        </a>
                </div>
            <div class="container">
                
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ml-0">
                  <li class="nav-item active">
                    <a class="nav-link" href="dashboard.php">Practice </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Compete</a>
                  </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Jobs</a>
                  </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Leaderboard</a>
                  </li>
                </ul>
                <ul class="form-inline my-2 my-lg-0">
                    <li class="nav-item dropdown mr-sm-2">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php echo $user; ?></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="profile.php">profile</a>
                      <a class="dropdown-item" href="#">settings</a>
                      <a class="dropdown-item" href="#">submissions</a>
                      <a class="dropdown-item" href="#">administrations</a>
                      <a class="dropdown-item" href="meetus.php">contact support</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                  </li>
                </ul>
              </div>
                <button class="navbar-toggler" id="toggler-custom" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            </button>
            </div>
</nav>