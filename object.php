<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
        <title>Home Page</title>
    </head>
    <body id="home-page">
      <header class="sticky-top">
        <nav id="top-nav" class="navbar navbar-dark">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark bg-dark" tabindex="-1" id="offcanvasDarkNavbar">
            <div class="offcanvas-header">
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="user" id="hamburger-nav-user">
                <?php
                echo '<img class="user-photo" src="' . $_SESSION["user_img"] . '" alt="user">';
                echo '<span id="user-name">' . $_SESSION["user_name"] . '</span>';
                ?>
                </div> 
              <ul class="navbar-nav flex-column me-auto">
                <li class="nav-item">
                  <a class="nav-link top-nav-link active" href="#">Home Page</a>
                </li>
                <?php 
                if($_SESSION["user_type"] == "carer"){
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link top-nav-link" href="list.php">Patients</a>';
                    echo '</li>';
                }
                if($_SESSION["user_type"] == "patient"){
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link top-nav-link" href="list.php">Medicines</a>';
                    echo '</li>';
                }
                ?>
                <li class="nav-item">
                  <a class="nav-link top-nav-link" href="#">Settings</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <div id="header-container">
          <a href="#" id="logo"></a>
          <div class="user" id="main-nav-user">
            <?php
            echo '<span id="user-name">' . $_SESSION["user_name"] . '</span>';
            echo '<img class="user-photo" src="' . $_SESSION["user_img"] . '" alt="user">';
            ?>
          </div>  
        </div>
        <div id="sm-h1"><span></span></div>
      </header>
      <main>
        <nav id="main-nav">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">Home Page</a>
            </li>
            <?php 
            if($_SESSION["user_type"] == "carer"){
                echo '<li class="nav-item">';
                echo '<a class="nav-link" aria-current="page" href="list.php">Patients</a>';
                echo '</li>';
            }
            if($_SESSION["user_type"] == "patient"){
                echo '<li class="nav-item">';
                echo '<a class="nav-link" aria-current="page" href="list.php">Medicines</a>';
                echo '</li>';
            }
            ?>
            <li class="nav-item">
              <a class="nav-link" href="#">Settings</a>
            </li>
          </ul>
        </nav>
        <div id="content" class="centerd">
                <div id="BC-H1"> 
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                      <ol class="breadcrumb BC-style">
                        <li class="breadcrumb-item breadcrumb-add"><a href="#">Patients</a></li>
                        <li class="breadcrumb-item breadcrumb-add"><a href="#">Guy Levy</a></li>
                      </ol>
                    </nav>
                    <div class="options-h1-container">
                      <h1 class="title-h1">Guy Levy</h1>
                      <div class="paitent-options patient-info-options">
                        <div class="icon-with-text"><a href="#"><img src="./images/add.png" alt="add" class="sm-icon"></a><span>Add Med</span></div>
                        <div class="icon-with-text"><a href="#"><img src="./images/edit.png" alt="edit" class="sm-icon"></a><span>Edit</span></div>
                        <div class="icon-with-text"><a href="#"><img src="./images/delete.png" alt="delete" class="sm-icon"></a><span>Delete</span></div>
                      </div>
                    </div>
                </div>
                <div class="patient-info-container">
                  <div class="card">
                    <div class="card-body">
                      <span class="title">Patient's Personal Details</span><hr>
                      <div class="grid text-start">
                        <div class="row">
                          <div class="col-6">ID Number
                            <div class="data">318673376</div>
                          </div>
                          <div class="col-6">Gender
                            <div class="data">Male</div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-6">HMO
                            <div class="data">Maccabi</div>
                          </div>
                          <div class="col-6">
                            Phone Number
                            <div class="data">0508934756</div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12">Sensitivities
                            <div class="data">No sensitivity</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <span class="title">Patient's Location</span><hr>
                      <div class="grid text-start">
                        <div class="row">
                          <div class="col-12">Department
                            <div class="data">Rehabilitation</div>
                        </div>
                        </div>
                        <div class="row">
                          <div class="col-6">Room Number
                            <div class="data">1</div>
                          </div>
                          <div class="col-6">Bed Number
                            <div class="data">3</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <span class="title">Patient's Medications </span><hr>
                      <div class="grid text-start">
                        <div class="row">
                          <div class="col-12">Indapamide
                            <div class="data">
                              <div class="col-4">500 mg</div>
                              <div class="col-4">evey day</div>
                              <div class="col-4">twice a day</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
      </main>
    </body>
</html>