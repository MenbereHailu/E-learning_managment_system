<!DOCTYPE html>

<html>
<head>
<title>e-learning</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<?php
include('connect.php');
?>
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
        <!--<li><a href="#">login']; ?></a></li>-->
         <!--<li><a href="?lan=am">Amharic</a></li>
        <li><a href="?lan=en">English</a></li>-->
      </ul>
    </nav>
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
      <h1><a href="index.html">UOG E-LEARNING MANAGMENT SYSTEM </a></h1>
   
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
        <li class="active"><a href="index.php">home</a></li>
        <li><a class="drop" href="aboutus.php">aboutus</a>
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
        <li><a class="drop" href="contactus.php">contact us</a>
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
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <div class="group btmspace-30"> 
        <!-- Left Column -->
        <div class="one_quarter first"> 
          <!-- ################################################################################################ -->
          <ul class="nospace">
            <li class="btmspace-15"><em class="heading">E-LEARNING MANAGMENT SYSTEM</em>E-Learning is a term that means something different to almost everyone who uses it. Some use the term to refer to packaged content pieces and others to technical infrastructures. Some think only of web-based self-study while others realize eLearning can encompass real-time learning and collaboration. Almost all agree that eLearning is of strategic importance. Almost all also agree that eLearning is an effective method that should be blended into a corporation’s current learning mix</li>
            <li class="btmspace-15"><em class="heading"></em>E-learning management system provides an instructor with a way to create and deliver content, monitor student participation, and assess student performance. University of Gondar uses manual learning management system. In this system the instructors give any learning materials manually. This kind of system has its own negative impact on the students and the instructors as a whole.
           
          </li>
		  <!-- ################################################################################################ --> 
        </div>
        <!-- / Left Column --> 
		 <!-- Right Column -->
        <div class="one_quarter sidebar"> 
          <!-- ################################################################################################ -->
         
          <div class="sdb_holder">
            <h6>Quick Information</h6>
            <ul class="nospace quickinfo">
              <li class="clear"><a href="#"><img src="images/demo/COURSE.jpg" alt=""><b>COURSE INFORMATION</b></a></li>
			   <p>Quick Information</p>
              <li class="clear"><a href="#"><img src="images/demo/quiz.jpg" alt=""> <B>TAKE/UPLOAD QUIZ</B></a></li>
			  <p>Quick Information</p>
			  <li class="clear"><a href="#"><img src="images/demo/Discussion-Forum.jpg" alt=""><B>DISCUS IN FORUM</B></a></li>
			  <p>Quick Information</p>
			  
    <li class="clear"><a href="#"><img src="images/demo/assignment.jpg" alt=""><B>UPLOAD/DOWNLOAD ASSIGNMENT</b></a></li>
           <p>Quick Information</p>
		   </ul>
          </div>
          <!-- ################################################################################################ --> 
        </div>
        <!-- / Right Column --> 
        <!-- Middle Column -->
        <div class="one_half"> 
		
          <!-- ################################################################################################ -->
          <h2>Latest News &amp; Events</h2>
		  
          <ul class="nospace listing">
		<?php   $sql="select * from newsfeed ORDER BY news_id DESC LIMIT 4";
	
	$result=mysql_query($sql);
		
	while($row = mysql_fetch_array($result))
	{
       ?>     <li class="clear">
              <div class="imgl borderedbox"><img src="images/demo/120x120.gif" alt=""></div>
              <p class="nospace btmspace-15"><a href="#"><?php echo $row['head'];?></a></p>
              <p><?php echo $row['information'];?> </p>
			  <p><a href="#"><?php echo $row['date'];?> </a></p>
            </li>
			<?php
	}
			?>
            
           
          </ul>
          <p class="right"><a href="#">Click here to view all of the latest news and events &raquo;</a></p>
          <!-- ################################################################################################ --> 
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
</body>
</html>