<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <script src="javascript/bootstrap.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
</head>

<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Mobile website</span>
        <span class="icon-bar">Model</span>
      </button>
      <a class="navbar-brand" href="#">MOBILE</a>
    </div>

  
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Apple <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Samsung</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Latest<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Accessories</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </li>
      </ul>

      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <?php 

        // if ($_SESSION['level']) == 1 or $_SESSION['level']) == 2)
        // {
        //       if($_SESSION['level'] == 2 ) 
        //                                 {
        //                                  }
        // };

      // switch ($level){
      //   case ($_SESSION['level']) == 1:
      //       header("Location:views/level_user_header/admin.header.php");
      //       break;
      //   case ($_SESSION['level']) == 2:
      //       header("Location:views/level_user_header/powerUser.header.php");
      //       break;
      //   case "text3":
      //       header("Location:views/level_user_header/customer.header.php");
      //       break;
      //   default:
      //       header("Location:header.php");
      //   }
       ?> 
    </div><!-- End for .navbar-collapse -->
</div><!-- End for -navbar-header-->
</div><!-- End for .container-fluid -->
</nav>

