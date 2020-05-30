<!DOCTYPE html>
<html>
    <head>
        <?php
            session_start();
        ?>
        <meta charset="UTF-8">
        <title>AdminLTE | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                AdminLTE
            </a>
            <!-- Header Navbar: style can be found in header.less -->
           
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <?php include('side.php')?>


            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                
                <?php

                    include 'database_connect.php';
                    $conn = OpenCon();
                @$abc=$_GET['lan'];
                @$fac_sciencelab=$_GET['fac_sciencelab'];
                @$fac_computerlab=$_GET['fac_computerlab'];
                @$fac_projector=$_GET['fac_projector'];
                @$fac_playground=$_GET['fac_playground'];
                @$fac_library=$_GET['fac_library'];

                
                    if(!empty(@$abc))
                    {
                        $select_facility = $abc;
                        //echo $select_medium;69++9/686+-*-9*+-+-
                        
                    }
                    if(!empty(@$fac_sciencelab))
                    {
                        $select_facility = $fac_sciencelab;
                        $sql = "SELECT sch_id FROM facility where fac_sciencelab = 'yes'";
                        //echo $select_medium;
                        
                    }
                    if(!empty(@$fac_computerlab))
                    {
                        $select_facility = $fac_computerlab;
                        $sql = "SELECT sch_id FROM facility where fac_computerlab = 'yes'";
                        //echo $select_medium;
                        
                    }
                    if(!empty(@$fac_projector))
                    {
                        $select_facility =$fac_projector;
                        $sql = "SELECT sch_id FROM facility where fac_projector = 'yes'";
                        //echo $select_medium;
                        
                    }
                    if(!empty(@$fac_playground))
                    {
                        $select_facility = $fac_playground;
                        $sql = "SELECT sch_id FROM facility where fac_playground = 'yes'";
                        //echo $select_medium;
                        
                    }
                    if(!empty(@$fac_library))
                    {
                        $select_facility = $fac_library;
                        $sql = "SELECT sch_id FROM facility where fac_library = 'yes'";
                        //echo $select_medium;
                        
                    }
                    
                    
                    //$sql = "SELECT sch_id, sch_name, locality FROM facility where locality = '$select_locality'";
                    $res = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($res))
                    {
                       // $name = $row['sch_name'];
                        $id = $row['sch_id'];
                        $sql1 = "SELECT sch_id, sch_name FROM school where sch_id = '$id'";
                        $res1 = mysqli_query($conn,$sql1);
                        while($row1 = mysqli_fetch_assoc($res1))
                        {
                            $name = $row1['sch_name'];
                    ?>
                        <div class="small-box bg-blue">
                        <div class="inner">
                            <h3>
                                <?php
                                 echo $name;
                                ?>
                            </h3>
                        </div>
                        <a href="school.php?id=<?php echo $id;?>"   class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                         </div>
                    <?php
                        }
                        ?>
                        
                    <?php
                   

                    }
                   // session_destroy();
                    ?>


            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="js/AdminLTE/dashboard.js" type="text/javascript"></script>        

    
</body>
</html>