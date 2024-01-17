<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TuitionE - Registration Selection</title>
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
        </ul>
      </div>
    </div>
  </nav>

  <main class="registration-selection">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1>Welcome to TuitionE</h1>
          <p class="lead">Join us and embark on your journey of learning or teaching.</p>
        </div>
      </div>
      <div class="row selection-options">
        <div class="col-md-6">
          <a href="register.php" class="btn btn-primary btn-block">Register as Student</a>
        </div>
        <div class="col-md-6">
          <a href="admin/register.php" class="btn btn-primary btn-block">Register as Tutor</a>
        </div>
      </div>
    </div>
  </main>

  <footer class="footer-section">
    <div class="container">
      <p> &copy; copyright @ <?= date('Y'); ?> by <span>TuitionE</span> | all rights reserved!</p>
    </div>
  </footer>
</body>

</html>
