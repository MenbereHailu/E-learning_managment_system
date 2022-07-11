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

//include('header.php');
 //Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>
<body id="top">
<!--<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>-->

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
        <li><a  href="contactus.php">contact us</a>
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
      <figure id="slide-5"><img src="images/demo/banner_r1_c1.jpg" alt="">
       
      </figure>
      <!-- ################################################################################################ -->
     
      <!-- ################################################################################################ --> 
    </div>
  </div>
</div>
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
         <div class="tab-content">
           <div>
            <form action=""  method="POST"class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">what is your fevourite food?</p>
                <input type="text"  required="required" placeholder="please give your answer" class="form-control" name="food" />
				<p class="text-muted text-center btn-block btn btn-primary btn-rect">what is your best friend name ?</p>
                <input type="text"  required="required" placeholder="please give your answer" class="form-control" name="friend" />
				<p class="text-muted text-center btn-block btn btn-primary btn-rect">name that you like?</p>
                <input type="text"  required="required" placeholder="please give your answer" class="form-control" name=" name" />
                <br />
                <button class="btn text-muted text-center btn-success" type="submit" name="submitlogin">Recover Password</button>
					 <?php
 if(isset($_POST['submitlogin']))
  {
   $food=$_POST['food'];
   $friend=$_POST['friend'];
    $name=$_POST['name'];
   $sql="SELECT * FROM user,teacher_information where teacher_information.question1='$food' AND teacher_information.question2='$friend' AND teacher_information.question3='$name' AND teacher_information.user_id=user.user_id ;"; 
   $result_set=mysql_query($sql);
   if(!$result_set)
   {
   die("Query faill".mysql_error());
   }
if(mysql_num_rows($result_set)>0)
{

//$num=mysql_num_rows($result_set);
while($row=mysql_fetch_array($result_set))
{
$fname=$row['username'];
$password= base64_decode($row['password']);
?>
							<!--<div class="pull-right">   
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <div class="alert alert-success"><i class="icon-right-sign"></i>&nbsp;<p>Hi&nbsp;&nbsp;<?php echo $fname?>&nbsp; &nbsp;your password is:<?php echo $password?> <p></div>
                            </div>-->
                            <?php
echo"<p class='success'>"."<a href='#'>"."Hi"."&nbsp; &nbsp;".$fname."&nbsp; &nbsp;"."your password is:".$password."</a>"."</p>";
echo'<meta content="10;Alogin.php" http-equiv="refresh" />';

}}
else
{
	?>
							<div class="pull-right">   
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <div class="alert alert-danger"><i class="icon-right-remove"></i>&nbsp;Incorrect Input</div>
                            </div>
                            <?php
//echo"<p>&nbsp;&nbsp;Incorrect Input</p>";
echo'<meta content="10;Aforgot.php" http-equiv="refresh" />';
}
}
//mysql_close($conn);
?>
           
        </div>
    </div>
	<div class="text-center">
        <ul class="list-inline">
            <li><a  href="Alogin.php" >Login</a></li>
            <li><a  href="Aforgot.php" >Forgot Password</a></li>
            
        </ul>
    </div>

        <!-- / Middle Column --> 
       
      </div>
     
          <!-- ################################################################################################ --> 
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


    <script src="js/index.js"></script>
	<script src="assets/plugins/jquery-2.0.3.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>
   <script src="assets/js/login.js"></script>
</body>
</html>