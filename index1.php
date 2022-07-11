<!DOCTYPE html>
<?php 
include("lng.php"); ?>
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
        <!--<li><a href="#"><?php echo $_session['login']; ?></a></li>-->
        <li><a href="?lan=am"><?php echo $_session['Amharic']; ?></a></li>
        <li><a href="?lan=en"><?php echo $_session['English']; ?></a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ --> 
  </div>
</div><br><br>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.html"><?php echo $_session['UOG']; ?> </a></h1>
   
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
        <li class="active"><a href="index.php"><?php echo $_session['home']; ?></a></li>
        <li><a class="drop" href="aboutus.php"><?php echo $_session['aboutus']; ?></a>
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
        <li><a class="drop" href="contactus.php"><?php echo $_session['contact us']; ?></a>
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
        <li><a href="#"><?php echo $_session['e-learning tips']; ?></a></li>
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
      <figure id="slide-1"><a class="view" href="#"><img src="images/demo/slider/Maraki-Library-2.png" alt=""></a>
        <figcaption>
          <h2>About university of gondar
          <p>University of Gondar is one of the thirty-three Ethiopian universities; it was initially established in 1954 as a Public Health College and Training Center (PHC & TC). The basic reason for its initial establishment was the then prevailing hea.</p>
          <p class="right"><a href="#">Continue Reading &raquo;</a></p>
        </figcaption>
      </figure>
      <figure id="slide-2" height="100" width="200"><a class="view" href="#"><img src="images/demo/slider/Maraki-Library-2.png" alt="" height="100" width="200" ></a>
        <figcaption>
          <h2>E-Learning</h2>
          <p>E-Learning is a term that means something different to almost everyone who uses it. Some use the term to refer to packaged content pieces and others to technical infrastructures. Some think only of web-based self-study while others realize eLearning can encompass real-time learning and.</p>
          <p class="right"><a href="#">Continue Reading &raquo;</a></p>
        </figcaption>
      </figure>
      <figure id="slide-3"><a class="view" href="#"><img src="images/demo/slider/Maraki-Library-2.png" alt=""></a>
        <figcaption>
          <h2>Inovation</h2>
          <p>School of Law, UoG, has launched its first ever scientific journal of 
law. This comes after relentless effort of the School, its leadership 
and the editorial boar<p class="right"><a href="#">Continue Reading &raquo;</a></p>
        </figcaption>
      </figure>
      <figure id="slide-4"><a class="view" href="#"><img src="images/demo/slider/Maraki-Library-2.png" alt=""height="1000%" width="1000%"></a>
        <figcaption>
          <h2>Community service </h2>
          <p>Community service forms the core of our 
work at the University of Gondar. Initially established to address the 
health needs of local&nbsp;people, we have maintained 
and&nbsp;strengthened our connection and&nbsp;commitment&nbsp;to serving
 our community. As we look into the future we seek to spread this 
commitment and become the country’s leading societal problem solving 
university</p>
          <p class="right"><a href="#">Continue Reading &raquo;</a></p>
        </figcaption>
      </figure>
      <figure id="slide-5"><a class="view" href="#"><img src="images/demo/slider/Maraki-Library-2.png" alt=""></a>
        <figcaption>
          <h2>Celebration</h2>
          <p>University is one of the largest and most distinguished higher 
educational institutions in Ethiopia, with a long and proud history of 
educational achievement and service. .</p>
          <p class="right"><a href="#">Continue Reading &raquo;</a></p>
        </figcaption>
      </figure>
      <!-- ################################################################################################ -->
      <ul id="slide-tabs">
        <li><a href="#slide-1">All About The University</a></li>
        <li><a href="#slide-2">Why You Should Study With Us</a></li>
        <li><a href="#slide-3">Education And Student Experience</a></li>
        <li><a href="#slide-4">comunity service</a></li>
        <li><a href="#slide-5">Latest University News &amp; Events</a></li>
      </ul>
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
            <li class="btmspace-15"><em class="heading"><?php echo $_session['a']; ?></em><?php echo $_session['b']; ?></li>
            <li class="btmspace-15"><em class="heading"></em><?php echo $_session['c']; ?>  
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
		<?php   $sql="select * from newsfeed ";
	
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
            <li class="clear">
              <div class="imgl borderedbox"><img src="images/demo/120x120.gif" alt=""></div>
              <p class="nospace btmspace-15"><a href="#">Innovation.</a></p>
              <p>School of Law, UoG, has launched its first ever scientific journal of 
law. This comes after relentless effort of the School, its leadership 
and the editorial board as well as the contributors.</p>
            </li>
            <li class="clear">
              <div class="imgl borderedbox"><img src="images/demo/120x120.gif" alt=""></div>
              <p class="nospace btmspace-15"><a href="#">Community service.</a></p>
              <p>Community service forms the core of our 
work at the University of Gondar. Initially established to address the 
health needs of local&nbsp;people, we have maintained 
and&nbsp;strengthened our connection</p>
            </li>
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