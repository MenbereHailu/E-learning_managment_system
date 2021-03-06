<!DOCTYPE html>
<?php 
//include("lng.php"); ?>
<html>
<head>
<title>e-learning</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!--<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">-->
     <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
    
	<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" href="assets/plugins/magic/magic.css" />
</head>
<?php
include('admin/connect.php');


session_start();

unset($_SESSION['id']);
?>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
  
    <nav>
      <ul>
        <li><a href="Alogin.php">Admin Login</a></li>
		<li><a href="Ilogin.php">Instructor Login</a></li>
		<li><a href="login.php">Student Login</a></li>
        <!--<li><a href="?lan=am">Amharic</a></li>
        <li><a href="?lan=en">English</a></li>-->
      </ul>
    </nav>	                                           		  
        </div>
      </div>
    </div>
    </div>
</div>
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <div id="logo" class="fl_left">
      <h1><a href="index.html">UOG E-LEARNING MANAGMENT SYSTEM</a></h1>
   </div>   
    </header>
</div>
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      <ul class="clear">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About us</a>  
        </li>
        <li><a href="contactus.php">contact us</a>    
      </li>
        <li><a href="tips.php">e-learning tips</a></li> 
      </ul>
      </nav>
  </div>
</div>
<div class="wrapper">
  <div id="slider">
    <div id="slide-wrapper" class="rounded clear"> 
      <figure id="slide-5"><img src="images/demo/banner_r1_c1.jpg" alt=""> 
      </figure>
          </div>
  </div>
</div>
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
       <div class="group btmspace-30"> 
        <!-- Left Column -->
         <div class="tab-content">
        <div >
            <form action="" method="post" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    Enter your username and password
                </p>
                <input type="text" placeholder="Username"  name="Username" class="form-control" />
                <input type="password" placeholder="Password" name="Password" class="form-control" />
                <button class="btn text-muted text-center btn-danger" name="login" type="submit">Sign in</button>
				  <?php
                    if (isset($_POST['login'])) {

                        function clean($str) {
                            $str = @trim($str);
                            if (get_magic_quotes_gpc()) {
                                $str = stripslashes($str);
                            }
                            return mysql_real_escape_string($str);
                        }

                        $username = clean($_POST['Username']);
                        $password =  clean(base64_encode($_POST['Password']));

                        $query = mysql_query("select * from student where username='$username' and password='$password'") or die(mysql_error());
                        $count = mysql_num_rows($query);
                        $row = mysql_fetch_array($query);
                        if ($count > 0) {
                            session_start();
                            session_regenerate_id();
                            $_SESSION['id'] = $row['student_id'];
                            header('location:student/home.php');
                            session_write_close();
                            exit();
                        } else {
                            session_write_close();
                            ?>
							<div class="pull-right">   
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <div class="alert alert-danger"><i class="icon-remove-sign"></i>&nbsp;Incorect password and email</div>
                            </div>
                            <?php
							//echo "Incorect password and email";
                            exit();
                        }
                    }
                    ?>
            </form>
       </div>    
	<div class="text-center">
        <ul class="list-inline">
            <li><a  href="login.php" >Login</a></li>
            <li><a  href="forgot.php">Forgot Password</a></li>            
        </ul>
    </div>
        <!-- / Middle Column --> 
      </div>
           </div>
      </div>
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>

<div class="wrapper row4">
  <div class="rounded">
    <footer id="footer" class="clear"> 
      <div class="one_third first">
        <figure class="center"><img class="btmspace-15" src="images/demo/worldmap.png" alt="">
          <figcaption><a href="#">Find Us With Google Maps &raquo;</a></figcaption>
        </figure>
      </div>
      <div class="one_third">
        <address>
        University Of Gondar<br>
		Department Of Information systems
        Gondar<br>
        Postcode<br>
        <br>
        <i class="fa fa-phone pright-10"></i> 0581141237<br>
        <i class="fa fa-envelope-o pright-10"></i> <a href="#">196</a>
        </address>
      </div>
      <div class="one_third">
        <p class="nospace btmspace-10">Stay Up to Date With What's Happening</p>
        <ul class="faico clear">
          <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a class="faicon-flickr" href="#"><i class="fa fa-flickr"></i></a></li>
          <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
        </ul>
        <form class="clear" method="post" action="#">
          <fieldset>
            <legend>Subscribe To Our Newsletter:</legend>
            <input type="text" value="" placeholder="Enter Email Here&hellip;">
            <button class="fa fa-sign-in" type="submit" title="Sign Up"><em>Sign Up</em></button>
          </fieldset>
        </form>
      </div>
      </footer>
  </div>
</div>
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - </p>
    
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>


    <script src="js/index.js"></script>
	<script src="assets/plugins/jquery-2.0.3.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>
   <script src="assets/js/login.js"></script>
</body>
</html>