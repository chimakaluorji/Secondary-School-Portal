<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
      <title>GMA - Portal </title>


      <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="#">
      <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
      <meta name="author" content="#">

      <link rel="icon" href="assets/images/logo10.png" type="image/x-icon">

      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

      <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/css/bootstrap.min.css">


      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">

      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">


      <link rel="stylesheet" href="assets/pages/chart/radial/css/radial.css" type="text/css" media="all">

      <link rel="stylesheet" type="text/css" href="assets/icon/feather/css/feather.css">

      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">

      <link rel="stylesheet" type="text/css" href="bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" type="text/css" href="assets/pages/data-table/css/buttons.dataTables.min.css">
      <link rel="stylesheet" type="text/css" href="bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">

      <!-- <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/> -->

      <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />

</head>

<body>

      <div class="theme-loader">
            <div class="ball-scale">
                  <div class='contain'>
                        <div class="ring">
                              <div class="frame"></div>
                        </div>
                        <div class="ring">
                              <div class="frame"></div>
                        </div>
                        <div class="ring">
                              <div class="frame"></div>
                        </div>
                        <div class="ring">
                              <div class="frame"></div>
                        </div>
                        <div class="ring">
                              <div class="frame"></div>
                        </div>
                        <div class="ring">
                              <div class="frame"></div>
                        </div>
                        <div class="ring">
                              <div class="frame"></div>
                        </div>
                        <div class="ring">
                              <div class="frame"></div>
                        </div>
                        <div class="ring">
                              <div class="frame"></div>
                        </div>
                        <div class="ring">
                              <div class="frame"></div>
                        </div>
                  </div>
            </div>
      </div>

      <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
                  <nav class="navbar header-navbar pcoded-header">
                        <div class="navbar-wrapper">
                              <div class="navbar-logo">
                                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                                          <i class="feather icon-menu"></i>
                                    </a>
                                    <a href="index.html">
                                          <img class="img-fluid" src="assets/images/logo12.png" alt="Theme-Logo" />
                                    </a>
                                    <a class="mobile-options">
                                          <i class="feather icon-more-horizontal"></i>
                                    </a>
                              </div>
                              <div class="navbar-container container-fluid">
                                    <ul class="nav-left">
                                          <li>
                                                <a href="#!" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()" data-cf-modified-26db538759965537bf7cfdb8-="">
                                                      <i class="feather icon-maximize full-screen"></i>
                                                </a>
                                          </li>
                                    </ul>
                                    <ul class="nav-right">
                                          <li class="user-profile header-notification">
                                                <div class="dropdown-primary dropdown">
                                                      <div class="dropdown-toggle" data-toggle="dropdown">
                                                            <img src="assets/images/CHIMA_KALUORJI.jpg" class="img-radius" alt="User-Profile-Image">
                                                            <span>CHIMA KALUORJI</span>
                                                            <i class="feather icon-chevron-down"></i>
                                                      </div>
                                                      <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                            <li>
                                                                  <a href="sessions.php">
                                                                        <i class="feather icon-settings"></i> Settings
                                                                  </a>
                                                            </li>
                                                            <li>
                                                                  <a href="index.php">
                                                                        <i class="feather icon-log-out"></i> Logout
                                                                  </a>
                                                            </li>
                                                      </ul>
                                                </div>
                                          </li>
                                    </ul>
                              </div>
                        </div>
                  </nav>

                  <div class="pcoded-main-container">
                        <div class="pcoded-wrapper">
                              <nav class="pcoded-navbar">
                                    <div class="pcoded-inner-navbar main-menu">
                                          <div class="pcoded-navigatio-lavel">Navigation</div>
                                          <ul class="pcoded-item pcoded-left-item">
                                                <li class="pcoded-hasmenu active pcoded-trigger">
                                                      <a href="javascript:void(0)">
                                                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                                            <span class="pcoded-mtext">Dashboard</span>
                                                      </a>
                                                      <ul class="pcoded-submenu">
                                                            <li class="active">
                                                                  <a href="dashboard.php">
                                                                        <span class="pcoded-mtext">CRM</span>
                                                                  </a>
                                                            </li>
                                                      </ul>
                                                </li>

                                                <li class="pcoded-hasmenu">
                                                      <a href="javascript:void(0)">
                                                            <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                                                            <span class="pcoded-mtext">Student Profile</span>
                                                            <span class="pcoded-badge label label-warning">MAIN</span>
                                                      </a>
                                                      <ul class="pcoded-submenu">
                                                            <li class=" ">
                                                                  <a href="uploadstudents.php">
                                                                        <span class="pcoded-mtext">Upload Profile</span>
                                                                  </a>
                                                            </li>
                                                      </ul>
                                                      <ul class="pcoded-submenu">
                                                            <li class=" ">
                                                                  <a href="managestudentprofile.php">
                                                                        <span class="pcoded-mtext">Manage Profile</span>
                                                                  </a>
                                                            </li>
                                                      </ul>
                                                </li>

                                                <li class="pcoded-hasmenu">
                                                      <a href="javascript:void(0)">
                                                            <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                                            <span class="pcoded-mtext">Student Result</span>
                                                            <span class="pcoded-badge label label-danger">MAIN</span>
                                                      </a>
                                                      <ul class="pcoded-submenu">
                                                            <li class="pcoded-hasmenu">
                                                                  <a href="javascript:void(0)">
                                                                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                                                        <span class="pcoded-mtext">Result</span>
                                                                        <span class="pcoded-badge label label-danger">UPLOAD</span>
                                                                  </a>
                                                                  <ul class="pcoded-submenu">
                                                                        <li class=" ">
                                                                              <a href="uploadExcelResult.php">
                                                                                    <span class="pcoded-mtext">Excel Upload</span>
                                                                              </a>
                                                                        </li>
                                                                        <li class=" ">
                                                                              <a href="manualresult.php">
                                                                                    <span class="pcoded-mtext">Manual Upload</span>
                                                                              </a>
                                                                        </li>
                                                                  </ul>
                                                            </li>
                                                            <li class="">
                                                                  <a href="finalizeresult.php">
                                                                        <span class="pcoded-mtext">Class Position</span>
                                                                  </a>
                                                            </li>
                                                            <li class="">
                                                                  <a href="editResult.php">
                                                                        <span class="pcoded-mtext">Edit Result</span>
                                                                  </a>
                                                            </li>
                                                            <li class="">
                                                                  <a href="#">
                                                                        <span class="pcoded-mtext">Manage Annual Result</span>
                                                                  </a>
                                                            </li>
                                                            <li class="">
                                                                  <a href="#">
                                                                        <span class="pcoded-mtext">Result Comment</span>
                                                                  </a>
                                                            </li>
                                                            <li class="">
                                                                  <a href="#">
                                                                        <span class="pcoded-mtext">Annual Result Comment</span>
                                                                  </a>
                                                            </li>
                                                      </ul>
                                                </li>

                                                <li class="pcoded-hasmenu">
                                                      <a href="javascript:void(0)">
                                                            <span class="pcoded-micon"><i class="feather icon-credit-card"></i></span>
                                                            <span class="pcoded-mtext">Fees</span>
                                                            <span class="pcoded-badge label label-warning">MAIN</span>
                                                      </a>
                                                      <ul class="pcoded-submenu">
                                                            <li class=" ">
                                                                  <a href="schoolfeespayment.php">
                                                                        <span class="pcoded-mtext">School Fees Payment</span>
                                                                  </a>
                                                            </li>
                                                      </ul>
                                                      <ul class="pcoded-submenu">
                                                            <li class=" ">
                                                                  <a href="fees.php">
                                                                        <span class="pcoded-mtext">Print Receipt</span>
                                                                  </a>
                                                            </li>
                                                      </ul>
                                                </li>

                                                <div class="pcoded-navigatio-lavel">Settings</div>
                                                <ul class="pcoded-item pcoded-left-item">
                                                      <li class="pcoded-hasmenu">
                                                            <a href="javascript:void(0)">
                                                                  <span class="pcoded-micon"><i class="feather icon-settings"></i></span>
                                                                  <span class="pcoded-mtext">Set Up</span>
                                                            </a>
                                                            <ul class="pcoded-submenu">
                                                                  <li class=" ">
                                                                        <a href="./sessions.php">
                                                                              <span class="pcoded-mtext">Session</span>
                                                                        </a>
                                                                  </li>
                                                                  <li class=" ">
                                                                        <a href="./classes.php">
                                                                              <span class="pcoded-mtext">Class</span>
                                                                        </a>
                                                                  </li>
                                                                  <li class=" ">
                                                                        <a href="./classDemarcations.php">
                                                                              <span class="pcoded-mtext">Class Demarcation</span>
                                                                        </a>
                                                                  </li>
                                                                  <li class=" ">
                                                                        <a href="./subjects.php">
                                                                              <span class="pcoded-mtext">Subject</span>
                                                                        </a>
                                                                  </li>
                                                                  <li class=" ">
                                                                        <a href="#">
                                                                              <span class="pcoded-mtext">Fees</span>
                                                                        </a>
                                                                  </li>
                                                                  <li class=" ">
                                                                        <a href="#">
                                                                              <span class="pcoded-mtext">Closing Date</span>
                                                                        </a>
                                                                  </li>
                                                                  <li class=" ">
                                                                        <a href="#">
                                                                              <span class="pcoded-mtext">Opening Date</span>
                                                                        </a>
                                                                  </li>
                                                                  <li class=" ">
                                                                        <a href="./grades.php">
                                                                              <span class="pcoded-mtext">Grade</span>
                                                                        </a>
                                                                  </li>
                                                            </ul>
                                                      </li>
                                                      <li class="pcoded-hasmenu">
                                                            <a href="javascript:void(0)">
                                                                  <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                                                                  <span class="pcoded-mtext">Users</span>
                                                            </a>
                                                            <ul class="pcoded-submenu">
                                                                  <li class=" ">
                                                                        <a href="./adminUsers.php">
                                                                              <span class="pcoded-mtext">Admin User</span>
                                                                        </a>
                                                                  </li>
                                                                  <li class=" ">
                                                                        <a href="teachers.php">
                                                                              <span class="pcoded-mtext">Teachers</span>
                                                                        </a>
                                                                  </li>
                                                                  <li class=" ">
                                                                        <a href="#">
                                                                              <span class="pcoded-mtext">Change Admin Password</span>
                                                                        </a>
                                                                  </li>
                                                            </ul>
                                                      </li>
                                                </ul>
                                    </div>
                              </nav>