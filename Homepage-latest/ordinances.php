
<html>
    <head>
        <!-- ! todo navbar, content (Tables)-->
        <!-- ? Tignan ko kung okay -->
<!-- ! SCRIPTS -->
    <!--  Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Online Sources -->
    <script src = "myscripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- MDB -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<!-- ! SCRIPTS -->
    <!-- My CSS -->
    <link rel="stylesheet" href="styles.css">
    <title>Official Homepage</title>
</head>
    <body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
        <img src="brgy-logo.svg.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <b><a class="navbar-brand" href="#">Barangay 64 Zone 6 District 1</a></b>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Records
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="specificrecords.php">Specific Records</a>
               <!-- <a class="dropdown-item" href="#">All Records</a> -->
              </div> 
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Analytics
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="violator-analytics.php">Violators</a>
                <a class="dropdown-item" href="violation-analytics.php">Violations</a>
                <a class="dropdown-item" href="emergency-analytics.php">Emergencies</a>
              </div>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="ordinances.php">Ordinances<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Account Settings</a>
                <a class="dropdown-item" href="#">Sign Out</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

        <!-- ! Search Box -->
    <div class = "container mx-auto">
    <br><h3>View and Edit Ordinances</h3>
    </div>
    <br>
  <div class = "container ml-auto">
  <!-- Dropdown -->
  <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Sort By:
    <span class="caret"></span>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#" data-value="Surname">Surname</a></li>
    <li><a href="#" data-value="First Name">First Name</a></li>
    <li><a href="#" data-value="Age">Age</a></li>
    <li><a href="#" data-value="Gender">Gender</a></li>
  </div>
  <button type="button" class="btn btn-secondary btn-sm" name = "sortbtn">Sort</button>
</div>
</div>

<?php 
$con = mysqli_connect("localhost","root","","ogalesco");

if(isset($_GET['fname']))
?>

    <div class = "container">
    <div class = "table-responsive">
    <table class = "table table-hover table-bordered" id = "tableSort" mdbTable class="z-depth-1">
       <br>
        <thead>
          <tr>
            <th scope="col">Ordinance #</th>
            <th scope="col">Ordinance Description</th>
            <th scope="col">Source</th>
            <th scope="col">Edit</th>
          </tr>
        </thead>
        <tbody>
 
 
        </tbody>
      </table>
      </div>
    </div>
    </body>
    
</html>