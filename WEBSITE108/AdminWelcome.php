<?php
// Starting a session to manage user login state
session_start();

// Checking if the user is not logged in, redirecting to the login page
if(!isset($_SESSION["sess_user"])){
    header("location:Login.php");
} 
else {
?>
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
        <!-- Header section containing the  logo and navigation links for the admin -->
        <header class="header">
            <a href="#" class="logo">Work Life Balance</a>
            
            <!-- Navigation bar for admin with links to different admin functionalities -->
            <nav class="navbar">
                <a href="AdminWelcome.php" class="active">Welcome</a>

                <a href="AdminView.php">View Registered Entries</a>
                <a href="AdminEdit.php">Edit Registered Entries</a>
                <a href="AdminDelete.php">Delete Registered Entries</a>
            </nav>
        </header>

        <!-- Main content section for the welcome page -->
        <body>
            <section class="home">
                <div class="home-content">
                    <!-- Greeting message for the admin -->
                    <h1>Welcome, Admin!</h1>
                    <!-- Link to logout with a title attribute -->
                    Click here to <a href="Logout.php" title="Logout">Logout</a>
                </div>
                <!-- Image section with a rhombus-shaped image and decorative rhombus elements -->
                <div class="home-img">
                    <div class="rhombus">
                        <!--  club logo image -->
                        <img src="healthlogo.png" alt="">
                    </div>
                    <div class="rhombus2"></div>
                </div>
            </section>
        </body>
    </body>
</html>
<?php
// Closing the else block for the user login check
}
?>
