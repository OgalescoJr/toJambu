<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
//if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  //  header("location: welcome.php");
   // exit;
//}
 
// Include config file
require_once "dbcon.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
	
	
		
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
		
		$positionResult = $_POST['position'];
		
	if($positionResult == "enforcer"){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM enforcers WHERE username = ?";
		
		if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: ../EnforcerPortalV2/EncodeViolator.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
		
	}
	}else if($positionResult == "official"){
		 $sql = "SELECT id, username, password FROM officials WHERE username = ?";
		 
		 if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: ../Homepage-latest/index.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
		}
        
        
        else{
			echo "Choose Barangay Position to continue";
		}
    
    }
    
    
}
// Close connection
mysqli_close($link);
}

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
     <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title>Login Portal</title>
	 <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
	<div class="imgBx">
    <img src="man.jpg">
	</div>
	  <div class="contentBx">
	  <div class="formBX">
		  <h2>Barangay Login</h2>
		  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		 
			  <div class="inputBx">
				  <label>Username</label>
				  <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
				  <span class="invalid-feedback"><?php echo $username_err; ?></span>
				</div>
			  <div class="inputBx">
				  <label>Password</label>
				  <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
				  <span class="invalid-feedback"><?php echo $password_err; ?></span>
			  </div>
			  
              <div class="BP">Barangay Position</div>
			<div class="positionRB">
				<input type="radio" id="enforcer" name="position" value="enforcer"> 
				<label for="enforcer">Enforcer</label>
				<input type="radio" id="official" name="position" value="official"> 
				<label for="official">Official</label></br></br></br>
			</div>
			   <div class="inputBx">
				  <input type="submit" class="btn btn-primary" value="Login">
			  </div>
			  <div class="inputBx">
				<p>Don't have an account? <a href="registration.php">Sign up</a></p>
			  </div>
		  </form>
		  
	  </div>
	</div>
	</section>

</body>
</html>