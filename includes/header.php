<?php
    //session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Exam</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header style="border: 0px solid black;">
          <!-- Navigation-->  
        <section class="box3">
        
            
            <!-- Display Website Name -->
            <div class="logoname">
                <h1>Talent Hunt</h1>
            </div>
            
            <!-- Navigation Bar -->
            <div>
               <nav>
                    <ul>
                        <li><a href='index.php'>Home</a></li>
                     
                        <?php
                            if(!empty($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
                                echo "<li><a href='adminindex.php'>View Registration</a></li>";   
                                echo "<li><a href='logout.php'>Logout</a></li>";
                            }
                            else{
                                echo "<li><a href='registration.php'>Student Team Registration</a></li>";
                                echo "<li><a href='login.php'>Admin Login</a></li>";
                            }
                            
                        ?>

                    </ul>
                </nav>
            </div>
        </section>

        <section class="logininfo">
            <?php
                if(!empty($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
                      echo "Welcome, " . $_SESSION['username'];
                  } else {
                      echo "Welcome, Guest! ";
                  }
            ?>
        </section>
    </header>
    