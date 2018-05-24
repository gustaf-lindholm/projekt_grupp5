<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="<?php echo URLrewrite::BaseURL().'css/bootstrap.css';?>" type="text/css"/>
    <link rel="stylesheet" href="<?php echo URLrewrite::BaseURL().'css/account.css';?>" type="text/css"/>
    <link rel="stylesheet" href="<?php echo URLrewrite::BaseURL().'css/product.css';?>" type="text/css"/>
    <link rel="stylesheet" href="<?php echo URLrewrite::BaseURL().'css/products.css';?>" type="text/css"/>
    <link rel="stylesheet" href="<?php echo URLrewrite::BaseURL().'css/grid_table.css';?>" type="text/css"/>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="<?php echo URLrewrite::BaseURL().'javascript/ajax.js';?>"></script>
    
</head>

<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Mobile website</span>
        <span class="icon-bar active">Model</span>
      </button>
      <a class="navbar-brand" href="<?php echo URLrewrite::BaseURL()?>">MOBILE</a>
    </div>

  
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo URLrewrite::BaseURL().'products'?>">Products<span class="sr-only">(current)</span></a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Contact Us</a></li>
          </ul>
        </li>
      </ul>
    


      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" id="search" autocomplete="off" class="form-control" placeholder="Search" onkeyup="searchMobile();">
          <div class="display"></div>
        </div>
      </form>
   

      <form class= "navbar-form navbar-right">
          <ul class="nav navbar-nav">
              <li class="dropdown">
              <a href="<?php echo URLrewrite::BaseURL().'login'?>"class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><button class="btn btn-success" type="btn">Login</button></a>
          
          <ul class="dropdown-menu">
            <?php
              if (isset($_SESSION['loggedIn']['username'])) { ?>
              <li><a href="<?php echo URLrewrite::BaseURL().'login/logout'?>">Logout</a></li>
            <?php }?>

              <li><a href="<?php echo URLrewrite::BaseURL().'login'?>" >Account</a></li>
              <li><a href="<?php echo URLrewrite::BaseURL().'signup'?>" >Sign Up</a></li>
              <li><a href="<?php echo URLrewrite::BaseURL().'companysignup'?>" >Company</a></li>
          </ul>
              </li>
          </ul>
      </form>

          </div><!-- End for .navbar-collapse -->
</div><!-- End for -navbar-header-->
</div><!-- End for .container-fluid -->
</nav>