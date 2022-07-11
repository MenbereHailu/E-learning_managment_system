<!DOCTYPE html>
<?php 
//include("lng.php"); ?>
<html>
<head>
<title>e-learning</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
 <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
    
	<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" href="assets/plugins/magic/magic.css" />
</head>
<?php include('connect.php'); ?>
<?php //include('session.php'); ?>
<body id="top">
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
  
    <!-- ################################################################################################ -->
    <nav>
      <ul>
        <li><a href="Alogin.php">Admin Login</a></li>
		<li><a href="Ilogin.php">Instructor Login</a></li>
		<li><a href="login.php">Student Login</a></li>
        
      </ul>
    </nav>
	 
                                            
		  <!-- <fieldset>
             <label name="email">Email</label>
             <input type="email" value="example@example.com" />
             <label name="password">Password</label>
             <input type="password" />
             <input type="submit" value="Login" />
 
           </fieldset>-->
        </div>
      </div>
    </div>
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.html">UOG E-LEARNING MANAGMENT SYSTEM</a></h1>
   </div>
    
    <!-- ################################################################################################ --> 
  </header>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a  href="aboutus.php">About us</a>
         <!-- <ul>
            <li><a href="pages/gallery.html">Gallery</a></li>
            <li><a href="pages/portfolio.html">Portfolio</a></li>
            <li><a href="pages/full-width.html">Full Width</a></li>
            <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
            <li><a href="pages/sidebar-left-2.html">Sidebar Left 2</a></li>
            <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
            <li><a href="pages/sidebar-right-2.html">Sidebar Right 2</a></li>
            <li><a href="pages/basic-grid.html">Basic Grid</a></li>
          </ul>-->
        </li>
        <li><a href="contactus.php">contact us</a>
          <!--<ul>
            <li><a href="#">Level 2</a></li>
            <li><a class="drop" href="#">Level 2 + Drop</a>
              <ul>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
              </ul>
            </li>
          </ul>-->
        </li>
        <li><a href="tips.php">e-learning tips</a></li>
		       
       <!-- <li><a href="#">Another Link Text</a></li>
        <li><a href="#">This a very long link</a></li>
        <li><a href="#">This is the last</a></li>-->
      </ul>
      <!-- ################################################################################################ --> 
    </nav>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper">
  <div id="slider">
    <div id="slide-wrapper" class="rounded clear"> 
      <!-- ################################################################################################ -->
      <figure id="slide-1"><a class="view" href="#"><img src="images/demo/banner_r1_c1.jpg" alt=""></a>
       
      
      
          
      <!-- ################################################################################################ --> 
    </div>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->

    
          <!-- ################################################################################################ --> 
    <div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <div class="group btmspace-30"> 
        <!-- Left Column -->
		<h1>Welcome to E-LEARNING Management system comment page:</h1>
        
          <!-- ################################################################################################ -->
          <body class="body">
    
        
	 <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form action="" method="POST" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                Please give us your comment
                </p>
				</br>
				<table cellspacing="3" cellpadding="6" class="loginVerticalPanel">

   <tr>
      <td align="right">Name:</td>
      <td> <input type="text" name="name"  title="Please Enter Letter Only Above 3 characters "   value="" size='20%' id="txt_lname" placeholder='Name' pattern="[a-zA-Z]{3,80}" required x-moz-errormessage="Please Enter Letter Only Above 3 characters " title="Please Enter Letter Only Above 2 characters"></td></tr>   	  
 <tr><td align="right">Email:</td>
      <td> <input type="email" name="email" placeholder='Email'  title="Please Enter valid email address" required></td></tr> 
	 <tr>
	  <td align="right">Comment:</td>
      <td> <textarea name="comment" rows="5" cols="40"  id="sem" value='' placeholder='Comment' pattern="[a-zA-Z]{3,80}" required x-moz-errormessage="Please Enter Letter Only Above 3 characters " title="Please Enter Letter Only Above 2 characters"></textarea></td></tr> 	  	 
   <!-- pick up date-->	  	 	  
   <!-- pick up date-->
   <tr><td colspan="2"> </td></tr>
  </label></td>
 <tr><td  align="right"colspan="">  <button class="btn text-muted text-center btn-success" type="submit" name="submit">Send</button>
 <td align="left"> <button class="btn text-muted text-center btn-danger" type="clear">Clear</button></td></tr></td>
  </table>
                
            </form>
			<?php
                            if (isset($_POST['submit'])) {
                                $comment = $_POST['comment'];
                                $email = $_POST['email'];
                                $name = $_POST['name'];
                                

                                mysql_query("insert into comment (name,email,comment)
values ('$name','$email','$comment')                                    
") or die(mysql_error());
                               // header('location:student.php');
                            }
                            ?>

        </div>
	</div> 
		  <!-- ################################################################################################ --> 
        </div>
        <!-- / Left Column --> 
		 <!-- Right Column -->
        
      <!-- ################################################################################################ --> 
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>
      <!-- ################################################################################################ --> 
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <div class="rounded">
    <footer id="footer" class="clear"> 
      <!-- ################################################################################################ -->
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
      <!-- ################################################################################################ --> 
    </footer>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
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
</body>
</html>