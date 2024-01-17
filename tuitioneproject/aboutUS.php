<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TuitionE - About Us</title>
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Andika'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./custom-css/custom.css">
    
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <div class="logo-image">
                    <img src="Logo.png" class="img-fluid">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutUS.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactUS.php">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login_selection.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="about-us">
        <div class="container">
            <h1>About Us</h1>
            <p>
                TuitionE is a platform that aims to bridge the gap between students and university tutors in Bangladesh.
                Our
                mission is to provide accessible and affordable tutoring services to school students in various
                subjects.
            </p>
            <p>
                We understand the challenges faced by students in their academic journey, and our platform offers a
                seamless
                way for students to connect with qualified and experienced tutors from renowned universities across the
                country.
            </p>
            <p>
                Our vision is to create a supportive learning community where students can receive personalized
                attention and
                guidance, helping them excel in their studies and achieve their academic goals.
            </p>
            <p>
                At TuitionE, we are committed to ensuring the highest quality of education and maintaining a safe and
                secure
                environment for both students and tutors. We take pride in our efforts to make learning enjoyable and
                effective, fostering a positive learning experience for all.
            </p>
            <p>
                Thank you for choosing TuitionE. Together, let's embark on an exciting learning journey.
            </p>
        </div>
    </main>

    <footer class="footer-section">
        <div class="container">
            <p> &copy; copyright @ <?= date('Y'); ?> by <span>TuitionE</span> | all rights reserved!</p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>

</html>