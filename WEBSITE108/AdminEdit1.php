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

        <!-- Main content section for editing entry records -->
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

                // Retrieving entry ID from the submitted form
                $id = $_POST["id"];
                $query = "SELECT * FROM $table_name WHERE id='".$id."'";
                mysqli_select_db($connect,$database);
                $result = mysqli_query($connect,$query);
                $myrow = mysqli_fetch_array($result,MYSQLI_ASSOC);

                // Checking if the record exists
                if (!$myrow) {
                    print "<center><p>No such record</p></center>";
                } else {
                    // Retrieving values for display and editing
                    $id=$myrow['id'];
                    $uname=$myrow['uname'];
                    $age=$myrow['age'];
                    $email=$myrow['email'];
                    $address=$myrow['address'];
                    $phone=$myrow['phone'];
                    $gender=$myrow['gender'];
                    $event=$myrow['event'];

                    // Displaying the form with current values for editing
                    echo "<div class=entries>";
                    echo "<h3 align=center>Edit Database Record</h3>";
                    print "<center>";
                    print "<form name='AdminEdit1' action='AdminEdit2.php' method='post' enctype='multipart/form-data'>
                    <table>
                    <tr><td>ID</td><td>$id<input type='hidden' name='id' value='$id'></td></tr>
                    <tr><td>Name</td><td><input type='text' name='uname' value='$uname'></td></tr>
                    <tr><td>Age</td><td><input type='text' name='age' value='$age'></td></tr>
                    <tr><td>Email</td><td><input type='text' name='email' value='$email'></td></tr>
                    <tr><td>Address</td><td><input type='text' name='address' value='$address'></td></tr>
                    <tr><td>Phone</td><td><input type='text' name='phone' value='$phone'></td></tr>
                    <tr><td>Gender</td><td><input type='text' name='gender' value='$gender'></td></tr>
                    <tr><td>Event</td><td><input type='text' name='event' value='$event'></td></tr>
                    <tr><td><input class='btn' type='submit' value='submit'></td></tr>
                    <tr><td><input class='btn' type='reset' value='Reset Form'></td></tr>
                    </table>
                    </form>";
                    print "</center>";

                    // Closing the database connection
                    mysqli_close($connect);
                }
                echo "</div>";
                ?>
            </section>
        </body>
    </body>
</html>
