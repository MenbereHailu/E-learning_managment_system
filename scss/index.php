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
<body id="top">
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
    <nav>
      <ul>
        <li><a href="#"><?php echo $_session['login']; ?></a></li>
        <li><a href="?lan=am"><?php echo $_session['Amharic']; ?></a></li>
        <li><a href="?lan=en"><?php echo $_session['English']; ?></a></li>
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
        <li class="active"><a href="index.html"><?php echo $_session['home']; ?></a></li>
        <li><a class="drop" href="aboutus.html"><?php echo $_session['aboutus']; ?></a>
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
        <li><a class="drop" href="contactus.html"><?php echo $_session['contact us']; ?></a>
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
      <figure id="slide-1"><a class="view" href="#"><img src="images/demo/slider/1.png" alt=""></a>
        <figcaption>
          <h2>Nullamlacus dui ipsum</h2>
          <p>Attincidunt vel nam a maurisus lacinia consectetus magnisl sed ac morbi. Inmaurisus habitur pretium eu et ac vest penatibus id lacus parturpis.</p>
          <p class="right"><a href="#">Continue Reading &raquo;</a></p>
        </figcaption>
      </figure>
      <figure id="slide-2"><a class="view" href="#"><img src="images/demo/slider/2.png" alt=""></a>
        <figcaption>
          <h2>Aliquatjusto quisque nam</h2>
          <p>Attincidunt vel nam a maurisus lacinia consectetus magnisl sed ac morbi. Inmaurisus habitur pretium eu et ac vest penatibus id lacus parturpis.</p>
          <p class="right"><a href="#">Continue Reading &raquo;</a></p>
        </figcaption>
      </figure>
      <figure id="slide-3"><a class="view" href="#"><img src="images/demo/slider/3.png" alt=""></a>
        <figcaption>
          <h2>Aliquatjusto quisque nam</h2>
          <p>Attincidunt vel nam a maurisus lacinia consectetus magnisl sed ac morbi. Inmaurisus habitur pretium eu et ac vest penatibus id lacus parturpis.</p>
          <p class="right"><a href="#">Continue Reading &raquo;</a></p>
        </figcaption>
      </figure>
      <figure id="slide-4"><a class="view" href="#"><img src="images/demo/slider/4.png" alt=""></a>
        <figcaption>
          <h2>Aliquatjusto quisque nam</h2>
          <p>Attincidunt vel nam a maurisus lacinia consectetus magnisl sed ac morbi. Inmaurisus habitur pretium eu et ac vest penatibus id lacus parturpis.</p>
          <p class="right"><a href="#">Continue Reading &raquo;</a></p>
        </figcaption>
      </figure>
      <figure id="slide-5"><a class="view" href="#"><img src="images/demo/slider/5.png" alt=""></a>
        <figcaption>
          <h2>Dapiensociis temper donec</h2>
          <p>Attincidunt vel nam a maurisus lacinia consectetus magnisl sed ac morbi. Inmaurisus habitur pretium eu et ac vest penatibus id lacus parturpis.</p>
          <p class="right"><a href="#">Continue Reading &raquo;</a></p>
        </figcaption>
      </figure>
      <!-- ################################################################################################ -->
      <ul id="slide-tabs">
        <li><a href="#slide-1">All About The University</a></li>
        <li><a href="#slide-2">Why You Should Study With Us</a></li>
        <li><a href="#slide-3">Education And Student Experience</a></li>
        <li><a href="#slide-4">Alumni And Its Donors</a></li>
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
            <li class="clear">
              <div class="imgl borderedbox"><img src="images/demo/120x120.gif" alt=""></div>
              <p class="nospace btmspace-15"><a href="#">Sentumquisque morbi dui congue.</a></p>
              <p>This is a W3C compliant free website template from <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>. This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a></p>
            </li>
            <li class="clear">
              <div class="imgl borderedbox"><img src="images/demo/120x120.gif" alt=""></div>
              <p class="nospace btmspace-15"><a href="#">Sentumquisque morbi dui congue.</a></p>
              <p>You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files.</p>
            </li>
            <li class="clear">
              <div class="imgl borderedbox"><img src="images/demo/120x120.gif" alt=""></div>
              <p class="nospace btmspace-15"><a href="#">Sentumquisque morbi dui congue.</a></p>
              <p>For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>. Attincidunt vel nam a maurisus lacinia consectetus magnisl sed ac morbi. Inmaurisus habitur pretium eu et ac vest penatibus id lacus parturpis.</p>
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
        Long Educational Facility Name<br>
        Address Line 2<br>
        Town/City<br>
        Postcode/Zip<br>
        <br>
        <i class="fa fa-phone pright-10"></i> xxxx xxxx xxxxxx<br>
        <i class="fa fa-envelope-o pright-10"></i> <a href="#">contact@domain.com</a>
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