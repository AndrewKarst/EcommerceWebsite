<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <title><?php echo SITE_TITLE ?></title>
  </head>
  <body>
    <div class="jumbotron">
    <div class="container text-center">
      <h1><?php echo SITE_TITLE ?></h1>      
    </div>
    </div>

<nav class="navbar navbar-dark bg-dark navbar-expand-lg" id="navbar">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addproduct.php">Add New Product</a>
      </li>
    </ul>
  </div>
</nav>
<?php displayMessage(); ?>