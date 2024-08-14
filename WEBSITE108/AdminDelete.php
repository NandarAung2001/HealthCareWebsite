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
                <a href="AdminEdit.php">Edit Registered Entries</a>
                <a href="AdminDelete.php" class="active">Delete Registered Entries</a>
            </nav>
        </header>

        <!-- Main content section for deleting entry records -->
        <body>
            <section class="view">
                <div class="view-content">
                    <!-- Heading for the delete entry record section -->
                    <h2 align=center>Delete Entry Record</h2>
                    <center>
                        <!-- Instructions for the user to enter the entry ID for deletion -->
                        <p>Please enter the entry ID you want to delete.</p>
                        <!-- Form for user input with action pointing to the deletion processing script -->
                        <form name="AdminDelete" action="AdminDelete1.php" method="post">
                            <table>
                                <tr>
                                    <td>Entry ID:</td>
                                    <!-- Input field for entry ID -->
                                    <td><input type="text" name="id" size="10"></td>
                                </tr>
                                <tr>
                                    <!-- Form submission and reset buttons -->
                                    <td colspan="2"><input class="btn" type="submit" value="Submit"/>
                                    <input class="btn" type="reset" value="Reset Form"/></td>
                                </tr>
                            </table>
                        </form>
                    </center>
                </div>
            </section>
        </body>
    </body>
</html>
