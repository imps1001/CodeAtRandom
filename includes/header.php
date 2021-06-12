<style>
@media only screen and (max-width: 600px) {
  [class*="col-"] {
  width: 100%;
}
  
  .navbar-brand{
    justify-content: center;
    align-items: center;
  }

}

@media only screen and (max-width: 768px) {
  [class*="col-"] {
  width: 100%;
}
  
  .navbar-brand{
    justify-content: center;
  }

}


</style>

<nav class="navbar navbar-dark navbar-expand-lg fixed-top" id="navbarcr">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="images/LOGO.png" height="50" width="50"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ml-5" id="Navbar">
      <ul class="navbar-nav ml-auto">
      <?php
      if (isset($_SESSION['email'])) {
      ?>
      <li class="nav-item "><a class="nav-link " style="color: white;" href ="#" ><i class="fas fa-user fa-lg"></i> <?php echo "Hello ". $_SESSION['first_name'];?></a>
     <!--<div class="dropdown-menu" style="background-color: #CCCD6A;">-->
        <li class="nav-item"><a class="nav-link" href="#" style="color: white;"><i class="fas fa-user fa-lg"></i> My Profile</a></li>
        <li class="nav-item"><a class="nav-link" href="dashboard.php#mycourses" style="color: white;"><i class="fas fa-book-reader fa-lg" ></i> My Courses</a></li>
        <li class="nav-item"><a class="nav-link" href="contactus.php" style="color: white;"><i class="fa fa-id-card fa-lg" ></i> Contact Us</a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php" style="color: white;"><i class="fas fa-sign-out-alt fa-lg"></i>Sign Out</a></li>

      </div> 
    </li>
      <?php
      } 
      else 
      {?>
        <li class="nav-item" id="loginButton"><a class="nav-link" href="#" style="color: white;"><i class="fas fa-sign-in-alt fa-lg"></i> Log In</a></li>
        <li class="nav-item" id="RegisterButton"><a class="nav-link" href="#" style="color: white;"><i class="fas fa-user fa-lg"></i> Register </a></li>
        <li class="nav-item"><a class="nav-link" href="index.php#courses" style="color: white;"><i class="fas fa-book-reader fa-lg"></i>  All Courses</a></li>
        <li class="nav-item"><a class="nav-link" href="contactus.php" style="color: white;"><i class="fas fa-id-card fa-lg"></i> Contact Us</a></li>
        <?php
       }?>
      </ul>
      </div>
    </div>
</nav>