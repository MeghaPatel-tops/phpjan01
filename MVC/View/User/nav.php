<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
         
          <?php
                if(isset($_SESSION['user'])){
                  ?>
                  <li style="color:white;margin-top:15px;margin-right:50px"><span>Welocme:<?php echo $_SESSION['user']->username ?? "";?></span></li>
                  <li><a class="btn btn-link" href="<?php echo $GLOBALS['baseUrl']?>/logout">Logout</a></li>
                  <?php
                }
                else{
                  ?>
                  <li><button type="button" class="btn btn-link" id="myBtn">Login</button></li>
                  <?php include('login.php');?>
                  
                  <?php
                }

          ?>
        
      </ul>
    </div>
  </div>
</nav>