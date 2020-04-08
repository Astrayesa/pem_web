<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($connection, "SELECT * FROM notepost ORDER BY id DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="add.php">Add note</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>No.</th> <th>Note</th> <th>Option</th>
    </tr>
    <?php
    $cnt = 1;
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$cnt."</td>";
        echo "<td>".$user_data[post]."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
        $cnt++;
    }
    ?>
    </table>
</body>
</html>