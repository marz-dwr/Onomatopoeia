<?php
    //This page is for Cebu Apple - User Profile
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../assets/img/icon.png">
    <title>Cebu Apple - User Panel</title>
    <link href="../assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/lib/jquery.nanoscroller/css/nanoscroller.css">
    <link rel="stylesheet" type="text/css" href="../assets/lib/bootstrap.slider/css/bootstrap-slider.css">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/media.css" rel="stylesheet">

    <style type="text/css">
        .search{
            font-size: 15px !important;
        }
    </style>
</head>

<body onload="loadHome()">
    <div id="head-nav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle"><span class="fa fa-gear"></span>
                </button><a href="#" class="navbar-brand"><span>&nbsp;&nbsp;Cebu Apple</span></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right user-nav">
                    <li class="dropdown profile_menu">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                            <img alt="Avatar" src="../assets/img/avatar2.jpg"><span>Lorenz Calang</span><b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#" onclick="getProfile(this)">Profile</a>
                            </li>
                            <li><a href="#">Messages</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">Sign Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right not-nav">
                    <li class="button dropdown"><a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-globe"></i><span class="bubble">2</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="nano nscroller">
                                    <div class="content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-cloud-upload info"></i><b>Daniel</b> is now following you <span class="date">2 minutes ago.</span></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-male success"></i><b>Michael</b> is now following you <span class="date">15 minutes ago.</span></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-bug warning"></i><b>Mia</b> commented on post <span class="date">30 minutes ago.</span></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-credit-card danger"></i><b>Andrew</b> killed someone <span class="date">1 hour ago.</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class="foot">
                                    <li><a href="#">View all activity </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="cl-wrapper" class="fixed-menu sb-collapsed">
        <!--Sidebar item function-->
        <!--Sidebar sub-item function-->
        <div data-position="right" data-step="1" class="cl-sidebar">
            <div class="cl-toggle"><i class="fa fa-bars"></i>
            </div>
            <div class="cl-navblock">
                <div class="menu-space">
                    <div class="content">
                        <ul class="cl-vnavigation">
                            <li>
                                <div class="search-field collapse-button">
                                    <input type="text" placeholder="Search for Jobs..." class="form-control search">
                                    <button id="sidebar-collapse" class="btn btn-default"><i class="fa fa-angle-left"></i>
                                    </button>
                                </div>
                            </li>
                            <li><a href="#" onclick="loadHome(this)"><i class="fa fa-home"></i><span>Job Feeds</span></a>
                            </li>
                            <li><a href="#"><i class="fa fa-file-text"></i><span>Job Application</span></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Sent Applications</a>
                                    </li>
                                    <li><a href="#">Invitations</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#" onclick="loadSavedJobs(this)"><i class="fa fa-floppy-o"></i><span>Saved Jobs</span></a>
                            </li>
                            <li><a href="#"><i class="fa fa-table"></i><span>Categories</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="wrapper">
            
        </div> 
    </div>
    <script type="text/javascript" src="../assets/lib/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/lib/jquery.nanoscroller/javascripts/jquery.nanoscroller.js"></script>
    <script type="text/javascript" src="../assets/js/cleanzone.js"></script>
    
    <script src="../assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- <script src="../assets/lib/jquery.gritter/js/jquery.gritter.js" type="text/javascript"></script> -->
    <!-- <script src="../assets/lib/skycons/skycons.js" type="text/javascript"></script> -->
    <!-- <script type="text/javascript" src="../assets/lib/jquery.sparkline/jquery.sparkline.min.js"></script> -->
    <!-- <script src="../assets/lib/jquery.easypiechart/jquery.easypiechart.js" type="text/javascript"></script> -->
    <script type="text/javascript" src="../assets/lib/intro.js/intro.js"></script>
    <script type="text/javascript" src="../assets/lib/jquery.flot/jquery.flot.js"></script>
    <script type="text/javascript" src="../assets/lib/jquery.flot/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="../assets/lib/jquery.flot/jquery.flot.resize.js"></script>
    <script type="text/javascript" src="../assets/lib/jquery-ui/jquery-ui.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            //initialize the javascript
            App.init();
            //App.dashboard();
        });

        function getProfile(e){
            $.post("../helper.php",
                {
                    request:"viewprofile"
                },
                function(data){
                    $('#wrapper').html(data);
                });
        }
        function loadHome(){
            $.post("../helper.php",
                {
                    request:"viewhome"
                },
                function(data){
                    $('#wrapper').html(data);
                });
        }
        function loadSavedJobs(){
            $.post("../helper.php", {
                request: "viewsaved"
            },
            function(data){
                $('#wrapper').html(data);
            });
        }
        function loadjobcategory(){
            $.post("../helper.php", {
                request: "viewjobcategory"
            },
            function(data){
                $('#wrapper').html(data);
            });
        }
    </script>

</body>
</html>