<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> cc Portal | CC Awareness</title>

         <link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="https://raw.githubusercontent.com/l-lin/font-awesome-animation/master/dist/font-awesome-animation.min.css" rel="stylesheet" />
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

        <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->


    <link href="css/footystyles.css" rel="stylesheet">
<!-- <link href="css/aboutstyles.css" rel="stylesheet"> -->
<style>
/*! * Start Bootstrap - Simple Sidebar (http://startbootstrap.com/) * Copyright 2013-2016 Start Bootstrap * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap/blob/gh-pages/LICENSE) */
 body {
     overflow-x: hidden;
     /* background-color: #100909; */
}

.icon-font-size
{
    font-size: 22px;
}
/* Toggle Styles */
 #wrapper {
     padding-left: 0;
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
}
 #wrapper.toggled {
     padding-left: 50px;
}
 #sidebar-wrapper {
     z-index: 1000;
     position: fixed;
     left: 50px;
     width: 0;
     height: 100%;
     margin-left: -250px;
     overflow-y: auto;
     background: #0488ae;
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
     transition: all 0.5s ease;
}
 #wrapper.toggled #sidebar-wrapper {
     width: 50px;
}
 #page-content-wrapper {
     width: 100%;
     position: absolute;
     padding: 15px;
}
 #wrapper.toggled #page-content-wrapper {
     position: absolute;
     margin-right: -250px;
}
/* Sidebar Styles */
 .sidebar-nav {
     position: absolute;
     top: 0;
     width: 50px;
     margin: 0;
     padding: 0;
     list-style: none;
}
 .sidebar-nav li {
     text-indent: 20px;
     line-height: 40px;
}
 .sidebar-nav li a {
     display: block;
     text-decoration: none;
     color: #ffffff;
}
 .sidebar-nav li a:hover {
     text-decoration: none;
     color: #fff;
     background: rgba(255,255,255,0.2);
}
 .sidebar-nav li a:active, .sidebar-nav li a:focus {
     text-decoration: none;
}
 .sidebar-nav > .sidebar-brand {
     height: 65px;
     font-size: 18px;
     line-height: 60px;
}
 .sidebar-nav > .sidebar-brand a {
     color: #ffffff;
     background-color: black
}
 .sidebar-nav > .sidebar-brand a:hover {
     color: #fff;
     background: none;
}



 @media(min-width:768px) {
     #wrapper {
         padding-left: 0;
    }
     #wrapper.toggled {
         padding-left: 250px;
    }
     #sidebar-wrapper {
         width: 0;
    }
     #wrapper.toggled #sidebar-wrapper {
         width: 50px;
    }
     #page-content-wrapper {
         padding: 20px;
         position: relative;
    }
     #wrapper.toggled #page-content-wrapper {
         position: relative;
         margin-right: 0;
    }
}
 .navbar-default {
   background-color: #f5f5f5;
   border-bottom: 2px solid #3c763d;
}
 .navbar {
     min-height: 50px;
}
 @media (min-width: 768px) {
     .navbar-nav > li > a {
         padding-top: 10px;
         padding-bottom: 10px;
    }
}
 .navbar {
     margin-bottom: 2px;
}



.navbar-default .navbar-nav>li>a {
    color: #3c763d;
}

.navbar-default .navbar-brand {
    color: #3c763d;
}

/* card */
 .card {
     display: inline-block;
     position: relative;
     width: 100%;
     margin: 25px 0;
     box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
     border-radius: 3px;
     color: rgba(0,0,0, 0.87);
     background: #fff;
}
 .card .card-height-indicator {
     margin-top: 100%;
}
 .card .title {
     margin-top: 0;
     margin-bottom: 5px;
}
 .card .card-image {
     height: 60%;
     position: relative;
     overflow: hidden;
     margin-left: 15px;
     margin-right: 15px;
     margin-top: -30px;
     border-radius: 6px;
}
 .card .card-image img {
     width: 100%;
     height: 100%;
     border-radius: 6px;
     pointer-events: none;
}
 .card .card-image .card-title {
     position: absolute;
     bottom: 15px;
     left: 15px;
     color: #fff;
     font-size: 1.3em;
     text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5);
}
 .card .category:not([class*="text-"]) {
     color: #999999;
}
 .card .card-content {
     padding: 15px 20px;
}
 .card .card-content .category {
     margin-bottom: 0;
}
 .card .card-header {
     box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
     margin: -20px 15px 0;
     border-radius: 3px;
     padding: 15px;
     background-color: #1e5769;
}
 .card .card-header .title {
     color: #dcd23f;
}
 .card .card-header .category {
     margin-bottom: 0;
     color: rgba(255, 255, 255, 0.62);
}
 .card .card-header.card-chart {
     padding: 0;
     min-height: 160px;
}
 .card .card-header.card-chart + .content h4 {
     margin-top: 0;
}
 .card .card-header .ct-label {
     color: rgba(255, 255, 255, 0.7);
}
 .card .card-header .ct-grid {
     stroke: rgba(255, 255, 255, 0.2);
}
 .card .card-header .ct-series-a .ct-point, .card .card-header .ct-series-a .ct-line, .card .card-header .ct-series-a .ct-bar, .card .card-header .ct-series-a .ct-slice-donut {
     stroke: rgba(255, 255, 255, 0.8);
}
 .card .card-header .ct-series-a .ct-slice-pie, .card .card-header .ct-series-a .ct-area {
     fill: rgba(255, 255, 255, 0.4);
}
 .card .chart-title {
     position: absolute;
     top: 25px;
     width: 100%;
     text-align: center;
}
 .card .chart-title h3 {
     margin: 0;
     color: #FFFFFF;
}
 .card .chart-title h6 {
     margin: 0;
     color: rgba(255, 255, 255, 0.4);
}
 .card .card-footer {
     margin: 0 20px 10px;
     padding-top: 10px;
     border-top: 1px solid #eeeeee;
}
 .card .card-footer .content {
     display: block;
}
 .card .card-footer div {
     display: inline-block;
}
 .card .card-footer .author {
     color: #999999;
}
 .card .card-footer .stats {
     line-height: 22px;
     color: #999999;
     font-size: 12px;
}
 .card .card-footer .stats .material-icons {
     position: relative;
     top: 4px;
     font-size: 16px;
}
 .card .card-footer h6 {
     color: #999999;
}
 .card img {
     width: 100%;
     height: auto;
}
 .card .category .material-icons {
     position: relative;
     top: 6px;
     line-height: 0;
}
 .card .category-social .fa {
     font-size: 24px;
     position: relative;
     margin-top: -4px;
     top: 2px;
     margin-right: 5px;
}
 .card .author .avatar {
     width: 30px;
     height: 30px;
     overflow: hidden;
     border-radius: 50%;
     margin-right: 5px;
}
 .card .author a {
     color: #3C4858;
     text-decoration: none;
}
 .card .author a .ripple-container {
     display: none;
}
 .card .table {
     margin-bottom: 0;
}
 .card .table tr:first-child td {
     border-top: none;
}
 .card [data-background-color="orange"] {
     background: linear-gradient(60deg, #161819, #2b3538);
    /*box-shadow: 0 12px 20px -5px #bfeaf6, 0 4px 20px 0px #bfeaf6, 0 7px 8px -5px #bfeaf6;
    */
}
 .card [data-background-color] {
     color: #FFFFFF;
}
 .card [data-background-color] a {
     color: #FFFFFF;
}
 .card-stats .title {
     margin: 0;
}
 .card-stats .card-header {
     float: left;
     text-align: center;
}
 .card-stats .card-header i {
     font-size: 36px;
     line-height: 56px;
     width: 56px;
     height: 56px;
}
 .card-stats .card-content {
     text-align: right;
     padding-top: 10px;
}
 .card-nav-tabs .header-raised {
     margin-top: -30px;
}
 .card-nav-tabs .nav-tabs {
     background: transparent;
     padding: 0;
}
 .card-nav-tabs .nav-tabs-title {
     float: left;
     padding: 10px 10px 10px 0;
     line-height: 24px;
}
 .card-plain {
     background: transparent;
     box-shadow: none;
}
 .card-plain .card-header {
     margin-left: 0;
     margin-right: 0;
}
 .card-plain .content {
     padding-left: 5px;
     padding-right: 5px;
}
 .card-plain .card-image {
     margin: 0;
     border-radius: 3px;
}
 .card-plain .card-image img {
     border-radius: 3px;
}
 .navbar-default .dropdown-menu.notify-drop {
     min-width: 330px;
     background-color: #fff;
     min-height: 360px;
     max-height: 360px;
}
 .navbar-default .dropdown-menu.notify-drop .notify-drop-title {
     border-bottom: 1px solid #e2e2e2;
     padding: 5px 15px 10px 15px;
}
 .navbar-default .dropdown-menu.notify-drop .drop-content {
     min-height: 280px;
     max-height: 280px;
     overflow-y: scroll;
}
 .navbar-default .dropdown-menu.notify-drop .drop-content::-webkit-scrollbar-track {
     background-color: #F5F5F5;
}
 .navbar-default .dropdown-menu.notify-drop .drop-content::-webkit-scrollbar {
     width: 8px;
     background-color: #F5F5F5;
}
 .navbar-default .dropdown-menu.notify-drop .drop-content::-webkit-scrollbar-thumb {
     background-color: #ccc;
}
 .navbar-default .dropdown-menu.notify-drop .drop-content > li {
     border-bottom: 1px solid #e2e2e2;
     padding: 10px 0px 5px 0px;
}
 .navbar-default .dropdown-menu.notify-drop .drop-content > li:nth-child(2n+0) {
     background-color: #fafafa;
}
 .navbar-default .dropdown-menu.notify-drop .drop-content > li:after {
     content: "";
     clear: both;
     display: block;
}
 .navbar-default .dropdown-menu.notify-drop .drop-content > li:hover {
     background-color: #fcfcfc;
}
 .navbar-default .dropdown-menu.notify-drop .drop-content > li:last-child {
     border-bottom: none;
}
 .navbar-default .dropdown-menu.notify-drop .drop-content > li .notify-img {
     float: left;
     display: inline-block;
     width: 45px;
     height: 45px;
     margin: 0px 0px 8px 0px;
}
 .navbar-default .dropdown-menu.notify-drop .allRead {
     margin-right: 7px;
}
 .navbar-default .dropdown-menu.notify-drop .rIcon {
     float: right;
     color: #999;
}
 .navbar-default .dropdown-menu.notify-drop .rIcon:hover {
     color: #333;
}
 .navbar-default .dropdown-menu.notify-drop .drop-content > li a {
     font-size: 12px;
     font-weight: normal;
}
 .navbar-default .dropdown-menu.notify-drop .drop-content > li {
     font-weight: bold;
     font-size: 11px;
}
 .navbar-default .dropdown-menu.notify-drop .drop-content > li hr {
     margin: 5px 0;
     width: 70%;
     border-color: #e2e2e2;
}
 .navbar-default .dropdown-menu.notify-drop .drop-content .pd-l0 {
     padding-left: 0;
}
 .navbar-default .dropdown-menu.notify-drop .drop-content > li p {
     font-size: 11px;
     color: #666;
     font-weight: normal;
     margin: 3px 0;
}
 .navbar-default .dropdown-menu.notify-drop .drop-content > li p.time {
     font-size: 10px;
     font-weight: 600;
     top: -6px;
     margin: 8px 0px 0px 0px;
     padding: 0px 3px;
     border: 1px solid #e2e2e2;
     position: relative;
     background-image: linear-gradient(#fff,#f2f2f2);
     display: inline-block;
     border-radius: 2px;
     color: #B97745;
}
 .navbar-default .dropdown-menu.notify-drop .drop-content > li p.time:hover {
     background-image: linear-gradient(#fff,#fff);
}
 .navbar-default .dropdown-menu.notify-drop .notify-drop-footer {
     border-top: 1px solid #e2e2e2;
     bottom: 0;
     position: relative;
     padding: 8px 15px;
}
 .navbar-default .dropdown-menu.notify-drop .notify-drop-footer a {
     color: #777;
     text-decoration: none;
}
 .navbar-default .dropdown-menu.notify-drop .notify-drop-footer a:hover {
     color: #333;
}
 ul #idUserprofileDetails {
     min-height: inherit;
     max-height: inherit;
}
 ul #idUserprofileDetails .drop-contents {
     min-height: inherit;
     max-height: inherit;
}
/*User Profile*/
 .sidenav {
     height: 100%;
     width: 0;
     position: fixed;
     z-index: 10000000000000;
     top: 0;
     right: 0;
     background-color: #111;
     overflow-x: hidden;
     transition: 0.5s;
     padding-top: 60px;
}
 .sidenav a {
     padding: 8px 8px 8px 32px;
     text-decoration: none;
     font-size: 25px;
     color: #818181;
     display: block;
     transition: 0.3s;
}
 .sidenav a:hover {
     color: #f1f1f1;
}
 .sidenav .closebtn {
     position: absolute;
     top: 0;
     right: 25px;
     font-size: 36px;
     margin-left: 50px;
}
 @media screen and (max-height: 450px) {
     .sidenav {
         padding-top: 15px;
    }
     .sidenav a {
         font-size: 18px;
    }
}
 a {
     color: #0488ae;
     text-decoration: none;
}
 .user-details {
     position: relative;
     padding: 0;
}
 .user-details .user-image {
     position: relative;
     z-index: 1;
     width: 100%;
     text-align: center;
}
 .user-image img {
     clear: both;
     margin: auto;
     position: relative;
}
 .user-details .user-info-block {
     width: 100%;
     position: absolute;
     top: 72%;
    /*background: rgb(255, 255, 255);
    */
     z-index: 0;
     padding-top: 35px;
     color: white;
}
 .user-info-block .user-heading {
     width: 100%;
     text-align: center;
     margin: 10px 0 0;
}
 .user-info-block .navigation {
     float: left;
     width: 100%;
     margin: 0;
     padding: 0;
     list-style: none;
     border-bottom: 1px solid #428BCA;
     border-top: 1px solid #428BCA;
}
 .navigation li {
     float: left;
     margin: 0;
     padding: 0;
}
 .navigation li a {
     padding: 20px 30px;
     float: left;
}
 .navigation li.active a {
     background: #428BCA;
     color: #fff;
}
 .user-info-block .user-body {
     float: left;
     padding: 5%;
     width: 90%;
}
 .user-body .tab-content > div {
     float: left;
     width: 100%;
}
 .user-body .tab-content h4 {
     width: 100%;
     margin: 10px 0;
     color: #333;
}

</style>
</head>
<body>
    <!-- <div> -->



        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                        </button>

                        <!-- <a href="#menu-toggle"  id="menu-toggle">
                            <i class="fa fa-bars fa-3x" aria-hidden="true"></i>
                        </a> -->
                        <a class="navbar-brand" href="/">CC Portal</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="home.php">Home</a></li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="login.php"><strong class="icon-font-size">  Login </strong></a>
                          </li>
                          <li><a href="login.php"><strong class="icon-font-size">  register </strong></a>
                          </li>
                          <li><a href="index.php"><strong class="icon-font-size">  Live data </strong></a>
                          </li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>

          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <!-- wrapper -->
                <!-- <div id="wrapper" class="toggled"> -->
                <!-- Sidebar -->
              <!--  <div id="sidebar-wrapper">
                     <ul class="sidebar-nav">
                        <li class="sidebar-brand"><a>Manufacturer's Navigation</a>  </li>
                        <li><a href="#">Update </a></li>
                        <li><a href="#">Add</a></li>
                        <li><a href="#">View</a></li>
                        <li><a href="#">Add</a></li>
                        <li><a href="#">View</a></li>
                        <li><a href="#">Statistics </a></li>

                    </ul>
                </div> -->
                <!-- /#sidebar-wrapper -->
                <!-- Page Content -->
            <div id="page-content-wrapper">
