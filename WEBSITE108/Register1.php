<!DOCTYPE html>
<html>
<head>
    <!-- Metadata for character set, viewport, and compatibility -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title of the page -->
    <title>Work Life Balance</title>
    <!-- Link to external stylesheet and icons -->
    <link rel="stylesheet" type="text/css" href="Style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- Home Section -->
    <section class="home">
        <!-- Container for home content -->
        <div class="home-content">
            <!-- PHP code to handle form submission -->
            <?php
            // Check if the form has been submitted using POST method
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Retrieve form data
                $event = isset($_POST['eventt']) ? $_POST['eventt'] : '';
                $name = isset($_POST['name']) ? $_POST['name'] : '';
                $email = isset($_POST['email']) ? $_POST['email'] : '';
                $age = isset($_POST['age']) ? $_POST['age'] : '';
                $address = isset($_POST['address']) ? $_POST['address'] : '';
                $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
                $gender = isset($_POST['gender']) ? $_POST['gender'] : '';

                // Database connection details
                $host = 'localhost';
                $user = 'root';
                $passwd = '';
                $database = 'jade108';

                // Create a connection to the database
                $conn = mysqli_connect($host, $user, $passwd, $database);

                // Check if the connection is successful
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // SQL query to insert data into the database
                $sql = "INSERT INTO regevent (uname, age, gender, email, address, phone, event) VALUES ('$name','$age','$gender','$email','$address','$phone','$event')";

                // Execute the SQL query
                if (mysqli_query($conn, $sql)) {
                    // Display success message and redirect to the home page
                    echo "<h1>Registration successful!<h1><br><br>";
                    echo "<p>Redirecting you back to Home page...<p>";
                    echo "<script>
                        setTimeout(function () {
                            window.location.href = 'home.html'; 
                        }, 3000); // 3000 milliseconds = 3 seconds
                    </script>";
                } else {
                    // Display error message if the query fails
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }

                // Close the database connection
                mysqli_close($conn);
            }
            ?>
        </div>
    </section>
</body>
</html>
