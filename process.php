<?php 
    session_start();
    include('includes/header.php'); 
    include('includes/database.php');
?>

<?php
    // if((empty($_SESSION['username']) && $_SESSION['logged_in'] == false)){
    //     // user is not logged in, send them to login page
    //     header('Location: login.php');
    // }

    if(empty($_POST)){ // Check if user landed on this page directly
        header('Location: index.php'); // Then redirect them to home page
    }
    else{

    $output='';

    //Fetch Data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $collegename = trim($_POST['collegename']);
    $city = trim($_POST['city']);
    $address = trim($_POST['address']);
    $province = trim($_POST['province']);
    $projecttitle = trim($_POST['projecttitle']);
    
    //Regular Expression for Email
    $emailRegex = '/^[a-zA-Z0-9_]+@[a-zA-z]+\.[a-zA-Z]{2,}$/'; 
    
    //Validate Data
    $errors = '';
    $noError = true; 
    
    //Checking Name Validation
    if($name == '')
    {
        $errors .= "* Please enter name <br>";
    }

    //Checking College Name Validation
    if($collegename == '')
    {
        $errors .= "* Please enter College name <br>";
    }
        //Checking College City Validation
        if($city == '')
        {
            $errors .= "* Please enter College city <br>";
        }
    
    //Checking Address Validation
    if($address == ''){
        $errors .= "* Please enter Address <br>";
    }
    
    //Checking Province Validation
    if($province == ''){
        $errors .= "* Please Select Province <br>";
    }
    //Checking Project Title Validation
    if($projecttitle == ''){
        $errors .= "* Please enter project title <br>";
    }
    


    //If there ain't any error then this block will store output in a variable
    if ($errors == '') {
        //Process Data    
        
        //Displaying Output
        $output = " 
            <div style='width:500px; border: 5px solid rgb(239, 95, 157); height:auto; margin:30px; margin:auto; text-align: center;'>   
            <h2> Registration Successful </h2>
                <hr>
                <table style='margin-left:auto;margin-right:auto;'>
                    <tr><td><b>Student Name: &nbsp;</b></td> <td>$name</td></tr>
                    <tr><td><b>Email: &nbsp;</b></td> <td>$email</td></tr>
                    <tr><td><b>College Name: &nbsp;</b></td> <td>$collegename</td></tr>
                    <tr><td><b>Address: &nbsp;</b></td> <td>$address</td></tr>
                    <tr><td><b>City: &nbsp;</b></td> <td>$city</td></tr>
                    <tr><td><b>Province: &nbsp;</b></td> <td>$province</td></tr>
                    <tr><td><b>Project Title: &nbsp;</b></td> <td>$projecttitle</td></tr>
                </table>
                <hr/>
                <h4><b style='color:white;'>Thank you for Registration</h4>
            </div>
            ";
        
        
             $insertquery="
             INSERT INTO `student` (`id`, `studentname`, `studentemail`, `password`, `collegename`, `address`, `collegecity`, `province`, `projecttitle`) VALUES (NULL, '$name', '$email', '$password', '$collegename', '$address', '$city', '$province', '$projecttitle')
             ";
             $conn->query($insertquery);           
        }  

    //If any error occurs this block will display errors
    else{
        print_r("<div class='error'><h3><u> Errors </u></h3>".$errors."</div>");
    }  
}   
?>

<!-- Displaying RECEIPT on the screen   -->
<main style='margin:auto;'>
    <?php 
        print_r($output); 
    ?>
</main>
    
<?php 
    include('includes/footer.php'); 
?>
