<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TuitionE - Find Your Perfect Tutor</title>
  <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Andika'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="./custom-css/custom.css">

  <style>
    *:not(i){
  font-family:'Andika';
  }
  </style>
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
          <li class="nav-item">
            <a class="nav-link" href="reg_selector.php">Register</a>
          </li>
        </ul>
      </div>
     </div>
  </nav>

  <main>

    <section id="home" class="hero-section">
      <div class="container">
        <div class="hero-content">
          <h1>Welcome to TuitionE</h1>
          <p>Your gateway to connect with qualified tutors from top universities</p>
          <a href="reg_selector.php" class="btn btn-primary btn-lg">Get Started</a>
        </div>
      </div>
    </section>

    <section id="about-us" class="about-us-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>About Us</h2>
            <p>TuitionE is a platform that connects students from schools and colleges across Bangladesh with dedicated
              tutors studying in various universities. Our mission is to make quality education accessible and affordable
              to every student, while also providing university students with an opportunity to share their knowledge
              and earn some extra income.</p>
            <p>With TuitionE, finding the perfect tutor for your academic needs has never been easier. Whether you need
              help with Mathematics, Science, English, or any other subject, our platform offers a wide range of tutors
              who are ready to assist you. TuitionE is a platform that aims to bridge the gap between students and university tutors in Bangladesh. Our mission is to provide accessible and affordable tutoring services to school students in various subjects. We understand the challenges faced by students in their academic journey, and our platform offers a seamless way for students to connect with qualified and experienced tutors from renowned universities across the country.</p>
            <p>Our vision is to create a supportive learning community where students can receive personalized attention and guidance, helping them excel in their studies and achieve their academic goals. At TuitionE, we are committed to ensuring the highest quality of education and maintaining a safe and secure environment for both students and tutors. We take pride in our efforts to make learning enjoyable and  effective, fostering a positive learning experience for all. Thank you for choosing TuitionE. Together, let's embark on an exciting learning journey. </p>
          </div>
          <div class="col-lg-6">
            <img src="AboutUs.jpg" alt="About Us Image" class="img-fluid">
          </div>
        </div>
      </div>
    </section>


    <section class="benefits-section ">
      <div class="container">
        <h2>Benefits of TuitionE</h2>
        <div class="row">
          <div class="col-md-4 ">
            <div class="benefits-card card-h">
              <img src="benefit1.png" alt="Benefit 1" class="img-fluid">
              <h3>Personalized Learning</h3>
              <p>Get one-on-one attention and personalized learning plans tailored to your individual needs.</p>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="benefits-card card-h">
              <img src="benefit2.jpg" alt="Benefit 2" class="img-fluid">
              <h3>Top University Tutors</h3>
              <p>Connect with talented and knowledgeable tutors from reputable universities across Bangladesh.</p>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="benefits-card card-h">
              <img src="benefit3.jpg" alt="Benefit 3" class="img-fluid">
              <h3>Flexible Scheduling</h3>
              <p>Choose your preferred time and schedule classes that fit your academic and extracurricular activities.</p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="tuition-types-section enefits-section" id="tuition-types">
      <div class="container">
        <h2 class="text-center mb-4">Tuition Types</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="card ">
              <div class="card-body card-height bgColor">
                <h5 class="card-title">School Level Tutoring</h5>
                <p class="card-text">Looking for school level classes?</p>
                <p class="card-text">Register Yourself & then Enroll to a course, by choosing the Course & then the Teacher! It's that simple! So don't waste your time and register now today!</p>
                <a href="register.php" class="btn btn-primary">Register Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-height">
              <div class="card-body">
                <h5 class="card-title">College Level Tutoring</h5>
                <p class="card-text">Finding Hard to understand college studies? Don't worry our skilled tutors are here!</p>
                <p class="card-text">Yes, our tutors are available 24/7, you just have to selecet your available time schedule!</p>
                <a href="register.php" class="btn btn-primary">Register Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-height">
              <div class="card-body">
                <h5 class="card-title">Independent Subjects Tutoring</h5>
                <p class="card-text">Do you want to learn any specific subject?</p>
                <p class="card-text"> Don't worry! Our tutors can teach their subject they are very expert in! You just have to search for the course and enroll!</p>
                <a href="register.php" class="btn btn-primary">Explore Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



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

  </main>


  <footer class="footer-section">
    <div class="container">
      <p> &copy; copyright @ <?= date('Y'); ?> by <span>TuitionE</span> | all rights reserved!</p>
    </div>
  </footer>

  <script src="script.js"></script>
</body>

</html>
