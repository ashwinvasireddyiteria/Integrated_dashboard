<?php
ob_start();
// Initialize the session
include("header_login.php");
include('config.php'); 
include("fontstyle.php");
session_start();

 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
	echo "logged in";
  header("Location: index.php");
  exit;
}
 
// Include config file
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["user_name"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["user_name"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT user_id, user_name, password FROM Integrated_dashboard_users WHERE status = 'Active' and user_name = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
			
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
                    mysqli_stmt_bind_result($stmt, $user_id ,$user_name, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
						 
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
							
                            session_start();
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
							$_SESSION["user_id"]  = $user_id;
                            $_SESSION["user_name"]= $username;
                            

                                header('Location: index.php');
                                exit();

                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";

                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
?>
<style>
 <!-- body{ font: 14px sans-serif; } -->
 .wrapper{ 
  width: 350px; 		
  padding: 20px; 
  left: 43%;
  position: absolute; 
}		
</style>
<!DOCTYPE html>
<body>

<div style="alignment: center">
    <div class="wrapper">
        <h2 class="font">Login</h2>
        <p class="font">Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="font form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="user_name" class="font form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="font form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-lg font-weight-bold" style="" value="Login">
            </div>
            <p><a href="enter_email.php">Forgot password?</a></p>
        </form>
    </div>  
</div>	
</body>

