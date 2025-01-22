<?php
    include('includes/header.php');
    include("includes/database.php");
  
  session_start();
  
  // create hashing algo
  function hashme($plainPass){
    $salt1 = 'lkasdjlkasjflkjasd2893749283##$#$#';
    $encryptedPass = md5($salt1.$plainPass);
    $salt2 = 'lksd28937492$#';
    $encryptedPass = md5($salt2.$encryptedPass);
    $encryptedPass = md5($salt1.$salt2.$encryptedPass);
    return $encryptedPass;
  }

  // if the form has been submitted, only then process the form data
  if (!empty($_POST)) { // check if the user landed on this page directly  

    
    // fetch data
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    echo "'$username' <br> '$password'";
    // sanitize input
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);
    echo "'$username' <br> '$password'";


    // use your custom hash function in place of md5
    $password = hashme($password); // convert plain password to md5 encryption
    echo "'$username' <br> '$password'";

      
      $sqlQuery = "SELECT * FROM `users` WHERE `username` LIKE '$username' AND `password` LIKE '$password' ";
      echo $sqlQuery;
      $userResult = $conn->query($sqlQuery);
      print_r($userResult);

      if ($userResult->num_rows == 1) {
          $_SESSION['username'] = $username; // Set session variable
          $_SESSION['logged_in'] = true;   // Set login status

        //Redirecting user to new page if user is valid
          header("Location: adminindex.php");
      } 
      else {
          echo "<br/>Please try again.";
      }
    }

  
?>

<link rel="stylesheet" href="css/style.css">

<main style="display: flex; justify-content: center; align-items: center; padding-top:20px;">

  <div class='rightpanel'>
    <h2><u> Login </u></h2>

    <form name="loginForm" method="Post" action="">
      <!-- Username Input -->
      <div class="divinput">
        <label>Username</label>
        <input id="username" type="text" name="username" placeholder="Enter your username"><br />
      </div>

      <!-- Password Input-->
      <div class="divinput">
        <label>Password</label>
        <input id="password" type="password" name="password" placeholder="Enter your password"><br />
      </div>

      <!-- Submit Button -->
      <div class="divbutton">
        <input type="submit" value="Login" class="btn">

      </div>

      <p id="errors"></p>
    </form>
  </div>
</main>

<?php
    include('includes/footer.php');
?>