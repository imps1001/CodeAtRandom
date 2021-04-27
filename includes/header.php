<nav class="navbar navbar-dark navbar-expand-sm fixed-top" id="navbarcr">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="images/LOGO.png" height="50" width="50"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ml-5" id="Navbar">
      <ul class="navbar-nav ml-auto">
      <?php
      if (isset($_SESSION['email'])) {
      ?>
      <li class="nav-item ml-3"><a class="nav-link" href = "#"><span style="color: black" class="fa fa-user fa-lg"> <?php echo $_SESSION['first_name']; ?></span></a></li>
      <li class="nav-item ml-3"><a class="nav-link" href = "logout.php"><span style="color: black"  class="fa fa-sign-in fa-lg"> Logout</span></a></li>
      <?php
      } 
      else 
      {?>
      <li class="nav-item ml-3 " id="loginButton"><span style="color:black" class="fa fa-sign-in fa-lg"> Login</span></li>
      <li class="nav-item ml-3" id="RegisterButton"><span style="color:black" class="fa fa-user fa-lg"> Sign-Up </span></li>
      <?php
       }?>
      </ul>
      </div>
    </div>
</nav>