<nav class="navbar navbar-dark navbar-expand-sm fixed-top" id="navbarcr">
    <div class="container">
        <a class="navbar-brand" href="../index.php"><img src="../images/LOGO.png" height="50" width="50"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ml-5" id="Navbar">
      <ul class="navbar-nav ml-auto">
      <?php
      if (isset($_SESSION['email'])) {
      ?>
      <li class="nav-item "><a class="nav-link " style="color: white;" href ="#" ><span style="color: white" class="fa fa-user fa-lg"> <?php echo "Hello ". $_SESSION['first_name'];
      ?></span></a>
     <!--<div class="dropdown-menu" style="background-color: #CCCD6A;">-->
        <li class="nav-item"><a class="nav-link" href="#" style="color: white;"><span class="fa fa-user fa-lg" > My Profile</span></a></li>
        <li class="nav-item"><a class="nav-link" href="../index.php#courses" style="color: white;"><span class="fa fa-book fa-lg" > My Courses</span></a></li>
        <li class="nav-item"><a class="nav-link" href="contactus.php" style="color: white;"><span class="fa fa-envelope fa-lg" > Contact Us</span></a></li>
        <li class="nav-item"><a class="nav-link" href="../logout.php" style="color: white;"><span class="fa fa-sign-out fa-lg">Sign Out</span></a></li>

      </div> 
    </li>
      <?php
      } 
      else 
      {?>
        <li class="nav-item loginButton" id="loginButton"><a class="nav-link" href="#" style="color: white;"><span class="fa fa-sign-in fa-lg "> Login</span></a></li>
        <li class="nav-item" id="RegisterButton"><a class="nav-link" href="#" style="color: white;"><span class="fa fa-user fa-lg " > Register </span></a></li>
        <li class="nav-item"><a class="nav-link" href="../index.php#courses" style="color: white;"><span class="fa fa-book fa-lg" > All Courses</span></a></li>
        <li class="nav-item"><a class="nav-link" href="contactus.php" style="color: white;"><span class="fa fa-envelope fa-lg" > Contact Us</span></a></li>
        <?php
       }?>
      </ul>
      </div>
    </div>
</nav>