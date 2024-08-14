<!DOCTYPE html>
<html>
<head>
    <!-- Metadata for character set, compatibility, and viewport -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Lifer Balance</title>

    <!-- External stylesheet and boxicons library references -->
    <link rel="stylesheet" type="text/css" href="Style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- JavaScript function for form validation -->
    <script>
        function validateForm() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            if (username === "" || password === "") {
                alert("All fields are required!");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
<!-- Header section containing the club logo, navigation links, and social media icons -->
<header class="header">
    <!-- Club logo with a link to the home page -->
    <a href="#" class="logo">Work Life Balance</a>

    <!-- Navigation bar with links to different sections -->
    <nav class="navbar">
        <a href="Home.html">Home</a>
        <a href="About.html">About</a>
        <a href="healthinfo.html">Health Care Information</a>
        <a href="Register_events.php">Events</a>
        <a href="Login.php" class="active">Login</a>
    </nav>

    <!-- Social media icons with links -->
    <div class="social-media">
        <a href="#"><i class='bx bxl-twitter'></i></a>
        <a href="#"><i class='bx bxl-facebook'></i></a>
        <a href="#"><i class='bx bxl-instagram'></i></a>
    </div>
</header>

<!-- Login section with a form for username and password input -->
<section class="login">
    <div class="form_container">
        <div class="box form_box">
            <?php
            // Starting a session for user authentication
            session_start();

            // Processing form submission
            if (isset($_POST["submit"])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                // Checking for empty fields
                if (empty($username) || empty($password)) {
                    echo "All fields are required!";
                } else {
                    // Connecting to the database
                    $con = mysqli_connect('localhost', 'root', '', 'jade108') or die(mysqli_error($con));

                    // Querying the database for user authentication
                    $query = mysqli_query($con, "SELECT * FROM user WHERE username='$username' AND password='$password'");
                    if (!$query) {
                        die("Query failed: " . mysqli_error($con));
                    }

                    // Checking the number of rows returned
                    $numrows = mysqli_num_rows($query);

                    // Validating user credentials and redirecting to the welcome page if successful
                    if ($numrows != 0) {
                        $_SESSION['sess_user'] = $username;
                        header("Location: AdminWelcome.php");
                    } else {
                        echo "Invalid username or password!";
                    }
                }
            }
            ?>

            <!-- Login form with input fields for username and password -->
            <h2>LOGIN</h2>
            <form action="" method="post" onsubmit="return validateForm();" novalidate>
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="field">
                    <input type="submit" class="button" name="submit" value="Login">
                </div>
            </form>
        </div>
    </div>
</section>
</body>
</html>
