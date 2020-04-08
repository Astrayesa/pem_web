
<html>
<head>
    <title>Add Note</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Note</td>
                <td><input type="text" name="post"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $post = $_POST['post'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($connection, "INSERT INTO notepost(post) VALUES('$post')");

        // Show message when user added
        
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>