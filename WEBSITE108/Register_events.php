<!DOCTYPE html>
<html>
<head>
    <!-- Metadata for character set, viewport, and compatibility -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title of the page -->
    <title>Tennis Club</title>
    <!-- Link to external stylesheet and icons -->
    <link rel="stylesheet" type="text/css" href="Style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<!-- Header Section -->
<header class="header">
    <!-- Club logo and name -->
    <a href="#" class="logo">Work Life Balance</a>
    
    <!-- Navigation Bar -->
    <nav class="navbar">
        <a href="Home.html">Home</a>
        <a href="About.html">About</a>
        <a href="healthinfo.html">Health Care Information</a>
        <a href="Register_events.php" class="active">UpComing Events</a>
        <a href="Login.php">Login</a>
    </nav>

    <!-- Social Media Icons -->
    <div class="social-media">
               <a href="https://github.com/example" style="margin-left: 1%;"><i class='bx bxl-github'></i></a>
                <a href="https://www.linkedin.com/in/nandar-aung-795036295/"><i class='bx bxl-linkedin'></i></a>
                <!-- <a href="#" style="--i:1"><i class='bx bxl-twitter'></i></a> -->
                <a href="https://www.facebook.com/profile.php?id=100029010813269" style="--i:2"><i class='bx bxl-facebook' ></i></a>
                <a href="https://www.instagram.com/na2613707/" style="--i:3"><i class='bx bxl-instagram' ></i></a>
        
    </div>
</header>



<!-- Event Registration Section -->
<section class="Register">
    <!-- Heading for the upcoming events -->
    <div class="heading">
        <span>Upcoming events </span>
        <h5>Register to participate!</h5>
    </div>
    
    <!-- Event Container with individual event boxes -->
    <div class="event-container">
        <!-- Event Box 1: Yoga Class -->
        <div class="event-box">
            <!-- Event Image -->
            <div class="event-img">
                <img src="https://i.pinimg.com/564x/cf/1b/66/cf1b660c472c0000057e87f12e4aae0f.jpg" alt="">
            </div>
            <!-- Event Details and Registration Form -->
            <div class="event-text">
                <span>11 December 2024 12:00 PM</span>
                <a href="#" class="event-title">Yoga Class</a>
                <p>The aim of a yoga class can vary depending on the specific goals and intentions of the instructor and the participants.</p>
                <form action="Register.php" method="post">
                    <input type="hidden" name="reg" value="Yoga Class">
                    <input class="register-button" type="submit" name="submit" value="Enroll Now">
                </form>
            </div>
        </div>

        <!-- Event Box 2: Wellness Workshops-->
        <div class="event-box">
            <div class="event-img">
                <img src="https://i.pinimg.com/564x/5b/36/0d/5b360de639125cba5e9b27020513c7f1.jpg" alt="">
            </div>
            <div class="event-text">
                <span>22 December 2024 1:00 PM</span>
                <a href="#" class="event-title">Wellness Workshops</a>
                <p>Rotating workshops covering various aspects of health and wellness, including topics like sleep hygiene, ergonomics, mental health awareness, and resilience-building techniques.</p>
                <form action="Register.php" method="post">
                    <input type="hidden" name="reg" value="Wellness Workshops">
                    <input class="register-button" type="submit" name="submit" value="Enroll Now">
                </form>
            </div>
        </div>

        <!-- Event Box 3: Wellness Checker Event-->
        <div class="event-box">
            <div class="event-img">
                <img src="https://www.makatimed.net.ph/wp-content/uploads/2021/06/6-BENEFITS.jpg" alt="">
            </div>
            <div class="event-text">
                <span>24 January 2024 2:00 PM</span>
                <a href="#" class="event-title">Wellness Checker Event</a>
                <p>The aim of a Wellness Checker event is to provide individuals with the opportunity to assess and evaluate their current state of wellness across various dimensions of health</p>
                <form action="Register.php" method="post">
                    <input type="hidden" name="reg" value="Wellness Checker Event">
                    <input class="register-button" type="submit" name="submit" value="Enroll Now">
                </form>
            </div>
        </div>
    </div>

 
</section>


<!-- Event Registration Section -->
<section class="Register">
    <!-- Heading for the upcoming events -->
    <div class="heading">
        <!-- <span>Upcoming events </span> -->
        <h5>Enjoy With Us!</h5>
    </div>
    
    <!-- Event Container with individual event boxes -->
    <div class="event-container">
        <!-- Event Box 1: Girls Donation Event -->
        <div class="event-box">
            <!-- Event Image -->
            <div class="event-img">
                <img src="https://i.pinimg.com/736x/99/60/68/9960681df11d36bac0f356d887751f52.jpg" alt="">
            </div>
            <!-- Event Details and Registration Form -->
            <div class="event-text">
                <span>12 April 2024 12:00 PM</span>
                <a href="#" class="event-title">Donation Event</a>
                <p>This event is for people who love donation and want to share each other. Join us for a day of exciting matches and fun!</p>
                <form action="Register.php" method="post">
                    <input type="hidden" name="reg" value="Donation Event">
                    <input class="register-button" type="submit" name="submit" value="Enroll Now">
                </form>
            </div>
        </div>

          <!-- Event Box 2: >Tapestry Weaving -->
          <div class="event-box">
            <!-- Event Image -->
            <div class="event-img">
                <img src="https://i.pinimg.com/564x/80/9f/9f/809f9f37be5f182387a10787fa25a545.jpg" alt="">
            </div>
            <!-- Event Details and Registration Form -->
            <div class="event-text">
                <span>12 April 2024 12:00 PM</span>
                <a href="#" class="event-title">Tapestry Weaving</a>
                <p>The aim of the Tapestry Weaving Workshop is to provide participants with hands-on experience and knowledge in the art of tapestry weaving</p>
                <form action="Register.php" method="post">
                    <input type="hidden" name="reg" value="Tapestry Weaving">
                    <input class="register-button" type="submit" name="submit" value="Enroll Now">
                </form>
            </div>
        </div>


        <!-- Event Box 3: running event -->
        <div class="event-box">
            <div class="event-img">
            <img src="https://i.pinimg.com/564x/8c/87/cf/8c87cf18cd1878c22be4e651435e29ca.jpg" alt="">

            </div>
            <div class="event-text">
                <span>22 January 2024 5:00 PM</span>
                <a href="#" class="event-title">Running Event</a>
                <p>The aim of the running event is to promote health and fitness within the community while fostering a sense of camaraderie and achievement among participants. </p>
                <form action="Register.php" method="post">
                    <input type="hidden" name="reg" value="Running Event">
                    <input class="register-button" type="submit" name="submit" value="Enroll Now">
                </form>
            </div>
        </div>
    </div>




    

 
</section>
</body>
</html>
