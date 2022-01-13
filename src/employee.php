<?php
require_once('./library/employeeManager.php');
session_start();
isset($_SESSION["email"]) ? "" : header("Location: ./src/library/loginManager.php");
$userName = $_SESSION["email"];
?>

<!doctype html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
  <script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
  <script defer type="text/javascript" src="./assets/js/index.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <title>PHP - Employee - Management v1</title>
  <link rel="stylesheet" href="../assets/css/main.css">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sticky-footer-navbar/">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    <?php include('../assets/html/h.html') ?>
  </style>
  <!-- Custom styles for this template -->
  <link href="sticky-footer-navbar.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">

  <!-- HEADER WITH PHP -->
  <?php include('../assets/html/h.html') ?>

  <!-- Begin page content -->
  <section id="dashboard">

    <!-- insert employee content -->
    <div class=" d-flex flex-column h-100">
      <!-- Bootstrap core CSS -->

<form>
<div class="wrapper rounded bg-white form-control form-group">
    <div class="h3">User Details</div>
    <div class="form">
      <div class="row">
        <div class="col-md-6 mt-md-0 mt-3"> <label>First Name</label> <input type="text" class="form-control" required> </div>
        <div class="col-md-6 mt-md-0 mt-3"> <label>Last Name</label> <input type="text" class="form-control" required> </div>
      </div>
      <div class="row">
        <div class="col-md-6 mt-md-0 mt-3"> <label>Email</label> <input type="email" class="form-control" required> </div>
        <div class="col-md-6 mt-md-0 mt-3"> <label>Gender</label>
          <div class="d-flex align-items-center mt-2"> <label class="option"> <input type="radio" name="radio">Male <span class="checkmark"></span> </label> <label class="option ms-4"> <input type="radio" name="radio">Female <span class="checkmark"></span> </label> </div>
        </div>
        <div class="col-md-6 mt-md-0 mt-3"> <label>City</label> <input type="text" class="form-control" required> </div>
        <div class="col-md-6 mt-md-0 mt-3"> <label>Street Address</label> <input type="text" class="form-control" required> </div>
      </div>
      <div class="row">
      <div class="col-md-6 mt-md-0 mt-3"> <label>State</label> <input type="text" class="form-control" required> </div>
      <div class="col-md-6 mt-md-0 mt-3"> <label>Age</label> <input type="text" class="form-control" required> </div>
      <div class="col-md-6 mt-md-0 mt-3"> <label>Postal Code</label> <input type="text" class="form-control" required> </div>
        <div class="col-md-6 mt-md-0 mt-3"> <label>Phone Number</label> <input type="tel" class="form-control" required> </div>
      </div>
      <div class="btn btn-primary mt-3">Submit</div>
    </div>
  </div>
</form>
  </div>
  </section>
</body>


<!-- INSERT FOOTER -->
<?php include('../assets/html/footer.html') ?>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>



<<<<<<< HEAD
    
    </body>
</html>
=======
</html>
>>>>>>> 5396b529e8b6638c05217498d006985bd1e4d96e
