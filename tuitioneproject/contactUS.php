<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TuitionE - Contact Us</title>
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


    <section id="contact-us" class="contact-us-section ">
        <div class="container">
            <h2>Contact Us</h2>
            <p>If you have any questions or feedback, feel free to reach out to us. We are here to assist you!</p>
            <div class="row">
                <div class="col-lg-6 ">
                    <form class="contact-border">
                        <div class="contacts-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Your Message" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 contact-image">
                    <img src="contact.png" alt="Contact Us" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-section">
        <div class="container">
            <p> &copy; copyright @ <?= date('Y'); ?> by <span>TuitionE</span> | all rights reserved!</p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>

</html>