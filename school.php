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
                $sch_id=$_GET['id'];
               
                
                    include 'database_connect.php';
                    $conn = OpenCon();
                    $sql = "SELECT * FROM school where sch_id = '$sch_id'";
                    $res = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($res))
                    {
                        $name = $row['sch_name'];
                        $id = $row['sch_id'];
                        $add = $row['address'];
                        $no = $row['contact_no'];
                        $mid = $row['medium'];
                        $loc = $row['locality'];
                        $des = $row['description'];
                        ?>
                        <div class="small-box bg-blue">
                        <div class="label">
                            <h3>
                                
                                <?php
                                 echo $name;
                                ?>
                            </h3>
                        </div>
                        <div class="small-box bg-red" font='5px'>
                        <div class="label ">
                            <h4>
                            <div>
                               Medium :
                                <?php
                                echo $mid;
                                ?>
                                </div>
                                &nbsp;
                                <div>
                               Address:
                                <?php
                                echo $add;
                                ?>
                                </div>
                                &nbsp;
                                <div>
                                Contact Number:
                                <?php
                                echo $no;
                                ?>
                                </div>
                            </h4>
                        </div>
                        <section class="content">
            <div class="row container">
                
                <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                    <div class="small-box bg-black">
                        <div class="inner">
                            <h4>
                            <?php
                                echo $des;
                            ?>
                            </h4>
                        </div>
                        
                    </div>
                </div><!-- ./col -->
                
                <div class="col-lg-9 col-xs-6">
                            <!-- small box -->
                
                <div class="col">
                    <div class="small-box bg-blue">
                        <div class="label">
                            <h3>
                                Faculty
                            </h3>
                        </div>
                        <a href="faculty.php?id=<?php echo $id;?>"   class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div><!-- ./col -->
                
                <div class="col">
                            <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="label">
                            <h3>
                                Facility
                            </h3>
                        </div>
                        <a href="facility.php?id=<?php echo $id;?>"   class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div><!-- ./col -->
                <div class="col">
                            <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="label">
                            <h3>
                                Fee Structure
                            </h3>
                        </div>
                        <a href="fee.php?id=<?php echo $id;?>"   class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div><!-- ./col -->
                </div>
              
            </div>


            
        </section>
                        
                    </div>
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