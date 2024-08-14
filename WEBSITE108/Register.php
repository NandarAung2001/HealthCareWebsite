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
    <!-- Registration Section -->
    <section class="regg">
        <!-- Container for registration form -->
        <div class="reg-container">
            <!-- Title for the registration form -->
            <div class="title">Registration</div>
            
            <!-- Registration Form -->
            <form action="Register1.php" method="POST" id="reg-form">
                <!-- User Details Section -->
                <div class="user-details">
                    <!-- Event Information -->
                    <div class="input-box">
                        <span class="details">Event:</span>
                        <!-- Display selected event name -->
                        <legend id="event-name">
                            <?php
                            // Display the selected event name if available
                            if(isset($_POST['reg'])){
                                echo $_POST['reg'];
                            }
                            ?>
                        </legend>
                        <!-- Hidden input field to pass event name to the next page -->
                        <input type="hidden" name="eventt" value="<?php echo isset($_POST['reg']) ? $_POST['reg'] : '';?>">
                    </div>
                    
                    <!-- Input fields for user details -->
                    <div class="input-box">
                        <span class="details">Name:</span>
                        <input type="text" name="name" id="name" placeholder="Enter your name" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Age:</span>
                        <input type="text" name="age" id="age" placeholder="Enter your age" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Email:</span>
                        <input type="text" name="email" id="email" placeholder="Enter your email" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Address:</span>
                        <input type="text" name="address" id="address" placeholder="Enter your address" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Phone:</span>
                        <input type="text" name="phone" id="phone" placeholder="Enter your phone:" required>
                    </div>

                    <!-- Gender Selection -->
                    <div class="gender-details">
                        <span class="gender-title">Gender:</span>
                        <div class="category">
                            <input type="radio" name="gender" id="male" value="Male" required>
                            <label for="gender">Male</label>
                            <input type="radio" name="gender" id="female" value="Female">
                            <label for="gender">Female</label>
                        </div>
                    </div>

                    <!-- Registration Button -->
                    <div class="reg-btn">
                        <input type="submit" name="submit" value="Enroll">
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
