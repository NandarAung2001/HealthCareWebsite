<!-- HTML5 document declaration -->
<!DOCTYPE html>
<html>
    <head>
        <!-- Metadata for character set, compatibility, and viewport -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <!-- Title and external stylesheet references -->
        <title>Tennis Club</title>
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
                <a href="AdminEdit.php">Edit Registered Entries</a>
                <a href="AdminDelete.php" class="active">Delete Registered Entries</a>
            </nav>
        </header>

        <body>
            <!-- Section for PHP script handling deletion of registered entries -->
            <section class="view">
                <?php
                // Database connection parameters
                $host = "localhost";
                $user = "root";
                $passwd = "";
                $database = "jade108";
                $table_name = "regevent";

                // Establishing a connection to the database
                $connect = mysqli_connect($host,$user,$passwd,$database) or
                die("could not connect to database");
                mysqli_select_db($connect,$database);

                // Retrieving entry ID from the submitted form
                $id = $_POST["id"];

                // Query to select the entry with the given ID
                $query = "SELECT * FROM $table_name WHERE id='".$id."'";
                // SQL statement to delete the entry with the given ID
                $sql = "DELETE FROM $table_name WHERE id='".$id."'";
                mysqli_select_db($connect,$database);

                // Executing the select query
                $result = mysqli_query($connect,$query);
                $myrow = mysqli_fetch_array($result,MYSQLI_ASSOC);

                // Checking if the record exists
                if (!$myrow) {
                    print "<p>No such record</p>";
                } else {
                    // Executing the delete query
                    mysqli_query($connect,$sql);
                    print "Entry ID '$id' has been deleted from the Database";
                }

                // Closing the database connection
                mysqli_close($connect);
                ?>
            </section>
        </body>
    </body>
</html>
