<?php
     session_start();
     include('includes/header.php'); 
     include('includes/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Registration</title>
    <link rel="stylesheet" href="css/adminpagescss.css">
</head>
<body>
<hr/>
<h1 style="">All Registration</h1>

<?php
     
    if ($_SESSION['logged_in'] == true) { 
        // Query to get all Registration
        $query = "SELECT * FROM `student` ";
         
        $result = $conn->query($query);

        // Check for errors in query
        if (!$result) {
            echo "Error retrieving Details : " . $mysqli->error;
            exit;
        }

        // Check if there are rows returned
        if ($result->num_rows == 0) {
            echo "No Registration Found.";
            exit;
        }
     }  
     else{
        header("Location: login.php");
        exit;
     } 
?>     


<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Student Name</th>
            <th>Student Email</th>
            <th>College Name</th>
            <th>College City</th>
            <th>College Province </th>
            <th>Project Title</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['studentname']; ?></td>
                <td><?php echo $row['studentemail']; ?></td>
                <td><?php echo $row['collegename']; ?></td>
                <td><?php echo $row['collegecity']; ?></td>
                <td><?php echo $row['province']; ?></td>
                <td><?php echo $row['projecttitle']; ?></td>

            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php
    include('includes/footer.php');
?>

</body>
</html>

