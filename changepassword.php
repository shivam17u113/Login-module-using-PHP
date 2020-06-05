<?php 
    session_start();
    $id = session_id(); 
    if($_SESSION['id'] != $id)
    {
      session_destroy();
      header("location: login.php");
      exit();
    }

    Include('config/connect.php');
    $user_id = $_SESSION['user_id'];
    $query = "UPDATE users SET loggedin = NOW() WHERE id ='$user_id'";
    $result = $mysqli->query($query) or die($query."<br>".$mysqli->error);


    $query = "SELECT * FROM users WHERE id = $user_id";
    $update = $mysqli->query($query);
    $update = $update->fetch_assoc();

?>

<!DOCTYPE html>
    <html lang="en" class="app">

      <!-- Mirrored from flatfull.com/themes/scale/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Mar 2015 04:12:21 GMT -->
<head>

    <meta charset="utf-8" /> 
    <title>Scale | Web Application</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" /> <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
    <link rel="stylesheet" href="css/app.v1.css" type="text/css" /> 
      <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="ccs/bootstrap.min.css" />
    <link rel="stylesheet" href="js/calendar/bootstrap_calendar.css" type="text/css" /> 
    <link rel="stylesheet" href="guide/js/calendar/bootstrap_calendar.css" type="text/css" />

    <!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
    -->
  <style type="text/css">
  body
  {
      color: #ECF3AA;
      background: url("images/1.jpg");
  }
  
  .dropdown-menu-title {
    background: #222;
    color: #fff;
    padding: 8px 0px;
    position: relative;
}
.dropdown-menu-title span {
    margin-left: 15px;
}
 </style> 

 
<!--<link rel="stylesheet" href="style.css" type="text/css" />-->

 <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js">
 </script> <script src="js/ie/excanvas.js"></script> <![endif]--></head>
 <body class=""  >
  <section class="vbox"> <header class="bg-white header header-md navbar navbar-fixed-top-xs box-sdashadow"> 
    <div class="navbar-header aside-md dk">
      <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
        <i class="fa fa-bars"></i> </a> 
          <a href="home.php" class="navbar-brand"> <img src="images/logo.png" class="m-r-sm" alt="scale">
          <span class="hidden-nav-xs">ASP</span></a> 
          <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user"> <i class="fa fa-cog"></i> </a> </div> 

             <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
             <li class="dropdown"> 
             <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
             <span class="thumb-sm avatar pull-left"> <img src="images/profile/<?php echo $_SESSION['profile']?>" alt="..."> 
             </span><?php echo $_SESSION['username']?>
              <b class="caret"></b> </a>
              <ul class="dropdown-menu animated fadeInRight">
              <li class="dropdown-menu-title"><span>Account Setting</span></li> 
                 <li> <a href="changepassword.php">Change Password </a> </li>
                 <li> <a href="change_pin.php">Change Pin </a> </li>
                 <li> <a href=""><?php echo $update['email'] ?></a> </li> 
                 <li> <a href="logout.php">Logout</a></li> 
                 </li>
                
                  </ul> 
                  </li>
                  </ul>
                  </header> 
                  <section> 
                  <section class="hbox stretch"> 
                  <!-- .aside --> <aside class="bg-black aside-md hidden-print hidden-xs" id="nav"> 
                  <section class="vbox">
                   <section class="w-f scrollable"> 
                   <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2"> <div class="clearfix wrapper dk nav-user hidden-xs"> 
                   <div class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                   <span class="thumb avatar pull-left m-r"> <img src="images/profile/<?php echo $_SESSION['profile']?>" class="dker" alt="...">
                    <i class="on md b-black"></i> </span> <span class="hidden-nav-xs clear"> <span class="block m-t-xs"> 
                    <strong class="font-bold text-lt"><?php echo $_SESSION['username']?></strong> <b class="caret"></b> </span>
                    
                      </span> </a>
                       <ul class="dropdown-menu animated fadeInRight m-t-xs"> 
                        <li class="divider"></li> 
                          <li> <a href="logout.php">Logout</a> 
                          </li> </ul> </div> </div>

                           <!-- nav --> <nav class="nav-primary hidden-xs"> 
                          <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Start</div> 
                          <ul class="nav nav-main" data-ride="collapse"> 
                          <li><a href="home.php" class="auto" id="viewgrp"> <i class="i i-statistics icon"> </i> <span class="font-bold">Upload file</span> </a> 
                          </li>
                          <li class="active"><a href="insert_image.php" class="auto"> <i class="i i-statistics icon"> </i> <span class="font-bold">Upload image</span> </a> 
                          </li>
                          
                          <li><a href="video.php" class="auto"> <i class="i i-statistics icon"> </i> <span class="font-bold">Upload Video</span> </a> 
                          </li>
                         
                          </ul> 
                         

                            <div class="line dk hidden-nav-xs"></div>  </nav> <!-- / nav --> </div> </section> 
                            <footer class="footer hidden-xs no-padder text-center-nav-xs"> 
                            <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs"> <i class="i i-circleleft text"></i> <i class="i i-circleright text-active"></i> </a> </footer>
                             </section> </aside> <!-- /.aside --> 
                             <section id="content"> 
                             <section class="hbox stretch"> <section> <section class="vbox"> <section class="scrollable padder"><section class="row m-b-md"> <div class="col-sm-6"> <h3 class="m-b-xs text-black">Dashboard</h3> <small>Welcome back, <?php echo $_SESSION['username']?>, <?php
                                if($_SESSION['login_time']!=0){?>
                                <p>Last logged in: <?php echo $_SESSION['login_time']?></p>
                                <?php }?></small> 
                             </div>
                             </section>
<section id="content" class="m-t-lg wrapper-md animated fadeInUp">
  <div class="container aside-xl">
    <section class="m-b-lg">
      <header class="navbar-brand block"> <strong>update password</strong> </header>
        <form action="update_pass.php" method="POST">
           <div class="list-group">
             <div class="list-group-item"> 
                <input type="password" placeholder="Old_password" class="form-control no-border" name="old_password" required>
             </div> 
              <div class="list-group-item"> 
                <input type="password" placeholder="New Password" class="form-control no-border" name="new_pass" required>
              </div>
              <div class="list-group-item"> 
                <input type="password" placeholder="Confirm Password" class="form-control no-border" name="confirm_pass" required>
              </div> 
                <input type="hidden" class="form-control no-border" name="user_id" value="<?php echo $_SESSION['user_id'] ?> ">
           </div> 
            <button type="submit" class="btn btn-lg btn-primary btn-block">Save Change</button> 
        </form>
    </section>
  </div> 
</section>                             


                             </section>
                             </section>
                             </section>
                             </section>
                             </section>
                             </section>
                             </section>
                             </section>
                             

                               <!-- Bootstrap -->               
                               <script src="js/app.v1.js"></script> 
                               <script src="js/calendar/demo.js"></script> 
                               <script src="js/sortable/jquery.sortable.js">
                                 
                               <script src="js/charts/easypiechart/jquery.easy-pie-chart.js"></script> 
                               <script src="js/charts/sparkline/jquery.sparkline.min.js"></script> 
                                <script src="js/insert_image.js"></script>
                               <script src="js/charts/flot/jquery.flot.min.js"></script> 
                               <script src="js/charts/flot/jquery.flot.tooltip.min.js"></script> 
                               <script src="js/charts/flot/jquery.flot.spline.js"></script> 
                               <script src="js/charts/flot/jquery.flot.pie.min.js"></script> 
                               <script src="js/charts/flot/jquery.flot.resize.js"></script> 
                               <script src="js/charts/flot/jquery.flot.grow.js">
                               </script> 
                               <script src="js/charts/flot/demo.js"></script> 
                               <script src="js/calendar/bootstrap_calendar.js"></script> 
                               </script> <script src="js/app.plugin.js"></script>
                               <script src="js/student.js"></script>
                              
<!-- Mirrored from flatfull.com/themes/scale/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Mar 2015 04:12:49 GMT -->
</html>  