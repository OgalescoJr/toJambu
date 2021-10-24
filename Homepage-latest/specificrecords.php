<html>
    <head>
        <!-- todo navbar, content (Tables)-->
        <!-- ? Tignan ko kung okay -->
      <!-- ! SCRIPTS -->
    <!--  Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Online Sources -->
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
     <!-- Navigation Bar-->
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
             <li class="nav-item dropdown active">
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
            <li class="nav-item">
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

<br>
<div class = "container">
<h3>Search Violation Records </h3>
</div>
    <div class = "container mx-auto">
        <!--Search Box -->
      <form method="post">
      <div class="input-group rounded">
        <input type="search" name="search_info" class="form-control rounded" placeholder="Search" aria-label="Search"
        aria-describedby="search-addon" />
        <input name="search_btn" type="submit" class = "btn btn-dark">
        </span>
      </div>
      </form>

      <!--end of Search Box-->
</div>




    <div class = "container">
    <div class = "table-responsive">
    <table class = "table table-hover table-bordered">
       <br>
       <thead>
          <tr>
            <th scope="col">Violation Ticket</i>
            <th scope="col">Surname</th>
            <th scope="col">First Name</th>
            <th scope="col">Middle Name</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
            <th scope="col">Violation</th>
            <th scope="col">Location</th>
            <th scope="col">Timestamp</th>
          </tr>
        </thead>
        <tbody>

          <?php

$con = mysqli_connect("localhost","root","","ogalesco");
            
            if(isset($_POST['search_btn'])){
              $stringinfo = $_POST["search_info"];
              $get_info = "SELECT * FROM violatorsinfo WHERE violator_surname   like '$stringinfo'";           
             
            $run_vioinfo = mysqli_query($con, $get_info);

            while($row_vioinfo = mysqli_fetch_array($run_vioinfo)){
              $VI_id = $row_vioinfo['violator_id'];
	          	$VI_surname = $row_vioinfo['violator_surname'];
	          	$VI_firstname = $row_vioinfo['violator_firstname'];
		          $VI_middlename = $row_vioinfo['violator_middlename'];
	          	$VI_age = $row_vioinfo['violator_age'];
	          	$VI_gender = $row_vioinfo['violator_gender'];
	          	$VI_violation = $row_vioinfo['violator_violation'];
	          	$VI_location = $row_vioinfo['violator_location'];
	          	$VI_date = $row_vioinfo['violator_date'];
              ?>
              
            <tr>
              <th scope='row'><?php echo $VI_id; ?></th>
              <td><?php echo $VI_surname; ?></td>
              <td><?php echo $VI_firstname; ?></td>
              <td><?php echo $VI_middlename; ?></td>
              <td><?php echo $VI_age; ?></td>
              <td><?php echo $VI_gender; ?></td>
              <td><?php echo $VI_violation; ?></td>
              <td><?php echo $VI_location; ?></td>
              <td><?php echo $VI_date; ?></td>
            </tr>
                            
       <?php }} ?>

       <?php

$con = mysqli_connect("localhost","root","","ogalesco");
            
            if(isset($_POST['search_btn'])){
              $stringinfo = $_POST["search_info"];
              $get_info = "SELECT * FROM violatorsinfo WHERE violator_firstname   like '$stringinfo'";
             
            $run_vioinfo = mysqli_query($con, $get_info);

            while($row_vioinfo = mysqli_fetch_array($run_vioinfo)){
              $VI_id = $row_vioinfo['violator_id'];
	          	$VI_surname = $row_vioinfo['violator_surname'];
	          	$VI_firstname = $row_vioinfo['violator_firstname'];
		          $VI_middlename = $row_vioinfo['violator_middlename'];
	          	$VI_age = $row_vioinfo['violator_age'];
	          	$VI_gender = $row_vioinfo['violator_gender'];
	          	$VI_violation = $row_vioinfo['violator_violation'];
	          	$VI_location = $row_vioinfo['violator_location'];
	          	$VI_date = $row_vioinfo['violator_date'];
              ?>
              
            <tr>
              <th scope='row'><?php echo $VI_id; ?></th>
              <td><?php echo $VI_surname; ?></td>
              <td><?php echo $VI_firstname; ?></td>
              <td><?php echo $VI_middlename; ?></td>
              <td><?php echo $VI_age; ?></td>
              <td><?php echo $VI_gender; ?></td>
              <td><?php echo $VI_violation; ?></td>
              <td><?php echo $VI_location; ?></td>
              <td><?php echo $VI_date; ?></td>
            </tr>
                           
       <?php }} ?>

       <?php

$con = mysqli_connect("localhost","root","","ogalesco");
            
            if(isset($_POST['search_btn'])){
              $stringinfo = $_POST["search_info"];
              $get_info = "SELECT * FROM violatorsinfo WHERE violator_middlename   like '$stringinfo'";
             
            $run_vioinfo = mysqli_query($con, $get_info);

            while($row_vioinfo = mysqli_fetch_array($run_vioinfo)){
              $VI_id = $row_vioinfo['violator_id'];
	          	$VI_surname = $row_vioinfo['violator_surname'];
	          	$VI_firstname = $row_vioinfo['violator_firstname'];
		          $VI_middlename = $row_vioinfo['violator_middlename'];
	          	$VI_age = $row_vioinfo['violator_age'];
	          	$VI_gender = $row_vioinfo['violator_gender'];
	          	$VI_violation = $row_vioinfo['violator_violation'];
	          	$VI_location = $row_vioinfo['violator_location'];
	          	$VI_date = $row_vioinfo['violator_date'];
              ?>
              
            <tr>
              <th scope='row'><?php echo $VI_id; ?></th>
              <td><?php echo $VI_surname; ?></td>
              <td><?php echo $VI_firstname; ?></td>
              <td><?php echo $VI_middlename; ?></td>
              <td><?php echo $VI_age; ?></td>
              <td><?php echo $VI_gender; ?></td>
              <td><?php echo $VI_violation; ?></td>
              <td><?php echo $VI_location; ?></td>
              <td><?php echo $VI_date; ?></td>
            </tr>
              
              
              
       <?php }} ?>

       <?php

$con = mysqli_connect("localhost","root","","ogalesco");
            
            if(isset($_POST['search_btn'])){
              $stringinfo = $_POST["search_info"];
              $get_info = "SELECT * FROM violatorsinfo WHERE violator_age   like '$stringinfo'";
             
            $run_vioinfo = mysqli_query($con, $get_info);

            while($row_vioinfo = mysqli_fetch_array($run_vioinfo)){
              $VI_id = $row_vioinfo['violator_id'];
	          	$VI_surname = $row_vioinfo['violator_surname'];
	          	$VI_firstname = $row_vioinfo['violator_firstname'];
		          $VI_middlename = $row_vioinfo['violator_middlename'];
	          	$VI_age = $row_vioinfo['violator_age'];
	          	$VI_gender = $row_vioinfo['violator_gender'];
	          	$VI_violation = $row_vioinfo['violator_violation'];
	          	$VI_location = $row_vioinfo['violator_location'];
	          	$VI_date = $row_vioinfo['violator_date'];
              ?>
              
            <tr>
              <th scope='row'><?php echo $VI_id; ?></th>
              <td><?php echo $VI_surname; ?></td>
              <td><?php echo $VI_firstname; ?></td>
              <td><?php echo $VI_middlename; ?></td>
              <td><?php echo $VI_age; ?></td>
              <td><?php echo $VI_gender; ?></td>
              <td><?php echo $VI_violation; ?></td>
              <td><?php echo $VI_location; ?></td>
              <td><?php echo $VI_date; ?></td>
            </tr>
              
              
              
       <?php }} ?>

       <?php

$con = mysqli_connect("localhost","root","","ogalesco");
            
            if(isset($_POST['search_btn'])){
              $stringinfo = $_POST["search_info"];
              $get_info = "SELECT * FROM violatorsinfo WHERE violator_gender   like '$stringinfo'";
             
            $run_vioinfo = mysqli_query($con, $get_info);

            while($row_vioinfo = mysqli_fetch_array($run_vioinfo)){
              $VI_id = $row_vioinfo['violator_id'];
	          	$VI_surname = $row_vioinfo['violator_surname'];
	          	$VI_firstname = $row_vioinfo['violator_firstname'];
		          $VI_middlename = $row_vioinfo['violator_middlename'];
	          	$VI_age = $row_vioinfo['violator_age'];
	          	$VI_gender = $row_vioinfo['violator_gender'];
	          	$VI_violation = $row_vioinfo['violator_violation'];
	          	$VI_location = $row_vioinfo['violator_location'];
	          	$VI_date = $row_vioinfo['violator_date'];
              ?>
              
            <tr>
              <th scope='row'><?php echo $VI_id; ?></th>
              <td><?php echo $VI_surname; ?></td>
              <td><?php echo $VI_firstname; ?></td>
              <td><?php echo $VI_middlename; ?></td>
              <td><?php echo $VI_age; ?></td>
              <td><?php echo $VI_gender; ?></td>
              <td><?php echo $VI_violation; ?></td>
              <td><?php echo $VI_location; ?></td>
              <td><?php echo $VI_date; ?></td>
            </tr>
              
              
              
       <?php }} ?>

       <?php

$con = mysqli_connect("localhost","root","","ogalesco");
            
            if(isset($_POST['search_btn'])){
              $stringinfo = $_POST["search_info"];
              $get_info = "SELECT * FROM violatorsinfo WHERE violator_violation   like '$stringinfo'";
             
            $run_vioinfo = mysqli_query($con, $get_info);

            while($row_vioinfo = mysqli_fetch_array($run_vioinfo)){
              $VI_id = $row_vioinfo['violator_id'];
	          	$VI_surname = $row_vioinfo['violator_surname'];
	          	$VI_firstname = $row_vioinfo['violator_firstname'];
		          $VI_middlename = $row_vioinfo['violator_middlename'];
	          	$VI_age = $row_vioinfo['violator_age'];
	          	$VI_gender = $row_vioinfo['violator_gender'];
	          	$VI_violation = $row_vioinfo['violator_violation'];
	          	$VI_location = $row_vioinfo['violator_location'];
	          	$VI_date = $row_vioinfo['violator_date'];
              ?>
              
            <tr>
              <th scope='row'><?php echo $VI_id; ?></th>
              <td><?php echo $VI_surname; ?></td>
              <td><?php echo $VI_firstname; ?></td>
              <td><?php echo $VI_middlename; ?></td>
              <td><?php echo $VI_age; ?></td>
              <td><?php echo $VI_gender; ?></td>
              <td><?php echo $VI_violation; ?></td>
              <td><?php echo $VI_location; ?></td>
              <td><?php echo $VI_date; ?></td>
            </tr>
              
              
              
       <?php }} ?>

       <?php

$con = mysqli_connect("localhost","root","","ogalesco");
            
            if(isset($_POST['search_btn'])){
              $stringinfo = $_POST["search_info"];
              $get_info = "SELECT * FROM violatorsinfo WHERE violator_location   like '$stringinfo'";
             
            $run_vioinfo = mysqli_query($con, $get_info);

            while($row_vioinfo = mysqli_fetch_array($run_vioinfo)){
              $VI_id = $row_vioinfo['violator_id'];
	          	$VI_surname = $row_vioinfo['violator_surname'];
	          	$VI_firstname = $row_vioinfo['violator_firstname'];
		          $VI_middlename = $row_vioinfo['violator_middlename'];
	          	$VI_age = $row_vioinfo['violator_age'];
	          	$VI_gender = $row_vioinfo['violator_gender'];
	          	$VI_violation = $row_vioinfo['violator_violation'];
	          	$VI_location = $row_vioinfo['violator_location'];
	          	$VI_date = $row_vioinfo['violator_date'];
              ?>
              
            <tr>
              <th scope='row'><?php echo $VI_id; ?></th>
              <td><?php echo $VI_surname; ?></td>
              <td><?php echo $VI_firstname; ?></td>
              <td><?php echo $VI_middlename; ?></td>
              <td><?php echo $VI_age; ?></td>
              <td><?php echo $VI_gender; ?></td>
              <td><?php echo $VI_violation; ?></td>
              <td><?php echo $VI_location; ?></td>
              <td><?php echo $VI_date; ?></td>
            </tr>
              
              
              
       <?php }} ?>

       <?php

$con = mysqli_connect("localhost","root","","ogalesco");
            
            if(isset($_POST['search_btn'])){
              $stringinfo = $_POST["search_info"];
              $get_info = "SELECT * FROM violatorsinfo WHERE violator_date   like '$stringinfo'";
             
            $run_vioinfo = mysqli_query($con, $get_info);

            while($row_vioinfo = mysqli_fetch_array($run_vioinfo)){
              $VI_id = $row_vioinfo['violator_id'];
	          	$VI_surname = $row_vioinfo['violator_surname'];
	          	$VI_firstname = $row_vioinfo['violator_firstname'];
		          $VI_middlename = $row_vioinfo['violator_middlename'];
	          	$VI_age = $row_vioinfo['violator_age'];
	          	$VI_gender = $row_vioinfo['violator_gender'];
	          	$VI_violation = $row_vioinfo['violator_violation'];
	          	$VI_location = $row_vioinfo['violator_location'];
	          	$VI_date = $row_vioinfo['violator_date'];
              ?>
              
            <tr>
              <th scope='row'><?php echo $VI_id; ?></th>
              <td><?php echo $VI_surname; ?></td>
              <td><?php echo $VI_firstname; ?></td>
              <td><?php echo $VI_middlename; ?></td>
              <td><?php echo $VI_age; ?></td>
              <td><?php echo $VI_gender; ?></td>
              <td><?php echo $VI_violation; ?></td>
              <td><?php echo $VI_location; ?></td>
              <td><?php echo $VI_date; ?></td>
            </tr>
              
              
              
       <?php }} ?>



        </tbody>
      </table>
      </div>
    </div>
    </body>
    
</html>