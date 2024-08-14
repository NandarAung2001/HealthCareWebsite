<!-- HTML5 document declaration -->
<!DOCTYPE html>
<html>
    <head>
        <!-- Metadata for character set, compatibility, and viewport -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <!-- Title and external stylesheet references -->
        <title>Work Life Balance</title>
        <link rel="stylesheet" type="text/css" href="Style.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <!-- Header section containing the club logo and navigation links for the admin -->
        <header class="header">
            <a href="#" class="logo">Work Life Balance</a>
            
            <!-- Navigation bar for admin with links to different admin functionalities -->
            <nav class="navbar">
                <a href="AdminWelcome.php">Welcome</a>
                <a href="AdminView.php">View Registered Entries</a>
                <a href="AdminEdit.php" class="active">Edit Registered Entries</a>
                <a href="AdminDelete.php">Delete Registered Entries</a>
            </nav>
        </header>

        <!-- Main content section for processing and displaying the result of editing entry records -->
        <body>
            <section class="view">
                <?php
                // Database connection parameters
                $host = "localhost";
                $user = "root";
                $passwd = "";
                $database = "jade108";
                $table_name = "regevent";

                // Establishing a connection to the database
                $connect = mysqli_connect($host,$user,$passwd,$database) 
                           or die("could not connect to database");

                // Selecting the database
                mysqli_select_db($connect,$database);

                // Retrieving values from the submitted form
                $id=$_POST['id'];
                $uname=$_POST['uname'];
                $age=$_POST['age'];
                $email=$_POST['email'];
                $address=$_POST['address'];
                $phone=$_POST['phone'];
                $gender=$_POST['gender'];
                $event=$_POST['event'];

                // SQL statement for updating the database record
                $sql="UPDATE $table_name SET uname='$uname',age='$age',email='$email',address='$address',phone='$phone',gender='$gender',event='$event' WHERE id='".$id."'";
                  
                // Executing the update query
                if(!mysqli_query($connect,$sql)) {
                    die('Error: ' . mysqli_error($connect));
                }

                // Displaying a success message
                echo "<div class=entries>";
                echo "<h3 align=center>Edit Database Record</h3>";
                print "<center>";
                print "<p>Your information has been updated in the database</p>";
                mysqli_close($connect);
                print "</center>";
                echo "</div>";  
                ?>
            </section>
        </body>
    </body>
</html>
