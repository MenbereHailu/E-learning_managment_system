<!DOCTYPE html>
<?php 
//include("lng.php"); ?>

<html>
<head>
<title>e-learning</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

       <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css" media="screen">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
   <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
 <?php include('connect.php'); ?>
<?php include('session.php'); ?>
<body id="top">
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
    <nav>
      <ul>
        <li><a href="#">Login</a></li>
        <li><a href="?lan=am">Amharic</a></li>
        <li><a href="?lan=en">English</a></li>
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
      <h1><a href="index.html">UOG E-LEARNING MANAGMENT SYSTEM</a></h1>
   
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
        <li><a class="drop" href="teacher.php">Instructor</a>

			</li>
        <li><a class="drop" href="student.php">Student</a>
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
        <li><a class="drop" href="#">entry</a>
         <ul>
            
            <li><a href="department.php">Department</a></li>
			<li><a href="course.php">course</a></li>
            <li><a href="subject.php">subject</a></li>
            <!--<li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
            <li><a href="pages/sidebar-left-2.html">Sidebar Left 2</a></li>
            <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
            <li><a href="pages/sidebar-right-2.html">Sidebar Right 2</a></li>
            <li><a href="pages/basic-grid.html">Basic Grid</a></li>-->
          </ul>
        </li>
        <li><a  href="login.html" role="button"  data-toggle="modal"><i class="icon-signout icon-large"></i>&nbsp;Logout</a></li>
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
      <figure id="slide-5"><img src="../images/demo/banner_r1_c1.jpg" alt="">
       
      </figure>
      <!-- ################################################################################################ -->
     
      <!-- ################################################################################################ --> 
    </div>
  </div>
</div>
 <div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <div class="group btmspace-30"> 

             <div class="container">

                <div class="row-fluid">
                   
						<div class="span10">
                        <div class="hero-unit-3">
                            <a  href="add_department.php"class="btn btn-success"><i class="icon-plus-sign-alt icon-large"></i>&nbsp;Add Department</a>
							<br><br>

                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Department Table</strong>
                                </div>
                                <thead>
                                    <tr>

                                        <th>Department</th>
                                        <th>Person In charge</th>
                                        <th>Title</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysql_query("select * from department") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $dep_id = $row['dep_id'];
                                        ?>
                                        <tr class="odd gradeX">

                                            <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                        
                                            $('#e<?php echo $dep_id; ?>').tooltip('show')
                                            $('#e<?php echo $dep_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->
                                    <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                        
                                            $('#d<?php echo $dep_id; ?>').tooltip('show')
                                            $('#d<?php echo $dep_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->
                                    <td><?php echo $row['department']; ?></td> 
                                    <td><?php echo $row['incharge']; ?></td> 
                                    <td><?php echo $row['title']; ?></td> 
                                    <td width="120">
                                        <a rel="tooltip"  title="Delete Department" id="d<?php echo $dep_id; ?>" href="#dep_id<?php echo $dep_id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <a rel="tooltip"  title="Edit Department" id="e<?php echo $dep_id; ?>" href="#" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                    </td>
                                    <!-- user delete modal -->
                                    <div id="dep_id<?php echo $dep_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-header">
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger">Are you Sure you Want to <strong>Delete</strong>&nbsp; this Department?</div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
                                            <a href="delete_dep.php<?php echo '?id=' . $dep_id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
                                        </div>
                                    </div>
                                    <!-- end delete modal -->

                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <?php// include('footer.php'); ?>
            </div>
    
	 </div>
        <!-- / Left Column --> 
		 <!-- Right Column -->
        
      <!-- ################################################################################################ --> 
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>