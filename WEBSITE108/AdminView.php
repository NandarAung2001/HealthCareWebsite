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
                <a href="AdminView.php" class="active">View Registered Entries</a>
                <a href="AdminEdit.php">Edit Registered Entries</a>
                <a href="AdminDelete.php">Delete Registered Entries</a>
            </nav>
        </header>

        <!-- Main content section for displaying registered entries -->
        <body>
            <section class="view">
                <div class="view-content">
                    <!-- Heading for the registered entries section -->
                    <h1>Registered Entries</h1>
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

                    // SQL query to select all entries from the table
                    $query = "SELECT * FROM $table_name";
                    mysqli_select_db($connect,$database);
                    $result = mysqli_query($connect,$query);

                    // Checking if the query was successful
                    if ($result) {
                        // Displaying the entries in a table
                        print "<table align=center border=1>";
                        print "<th>ID<th>Name<th>Age<th>Email<th>Address<th>Phone<th>Gender<th>Event";
                        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                        {
                            $id=$row['id'];
                            $uname=$row['uname'];
                            $age=$row['age'];
                            $email=$row['email'];
                            $address=$row['address'];
                            $phone=$row['phone'];
                            $gender=$row['gender'];
                            $event=$row['event'];

                            print "<tr>";      
                            print "<td>".$id."</td>";
                            print "<td>".$uname."</td>";
                            print "<td>".$age."</td>";
                            print "<td>".$email."</td>";
                            print "<td>".$address."</td>";
                            print "<td>".$phone."</td>";
                            print "<td>".$gender."</td>";
                            print "<td>".$event."</td>";                        
                            print "</tr>";
                        }
                        print "</table>";
                    }
                    else { 
                        // Displaying an error message if the query fails
                        die ("Query=$query failed!"); 
                    }
                    echo "</div>" ;

                    // Closing the database connection
                    mysqli_close($connect);
                    ?>
                </div>
            </section>
        </body>
    </body>
</html>
