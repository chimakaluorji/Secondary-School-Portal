<?php
// require('../bootstrap.php');

// use \Firebase\JWT\JWT;

// if(!isset($_GET['token'])) {
//   header("Location: index.php");
//   exit;
// }

// try {
//   $publicKey = file_get_contents('../lib/auth/mykey.pub');
//   $decoded = JWT::decode($_GET['token'], $publicKey, ['RS256']);
  
// } catch(Exception $e) {
//   header("Location: index.php");
//   exit;
// }

include('header.php');

?>

<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline">
                                    <h4>Assigned Classes</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="dashboard.php"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="managestudentprofile.php">Assigned Classes</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="page-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div style="color: #E9BA64; font-size: 15px; display: none; text-align: center;" id="spinner">
                                <img src="assets/images/loader1.gif" />
                                <strong>...Please wait ....</strong>
                                <img src="assets/images/loader2.gif" />
                            </div>
                        </div>
                    </div>




                    <div class="card">
                        <div class="card-header">
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li><i class="feather icon-maximize full-card"></i></li>
                                    <li><i class="feather icon-minus minimize-card"></i></li>
                                    <li><i class="feather icon-trash-2 close-card"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="row">
                            
                                <div class="col-md-12">
                                    <div style="color: #E9BA64; font-size: 15px; display: none; text-align: center;" id="spinner">
                                        <img src="assets/images/loader1.gif" />
                                        <strong>...Please wait ....</strong>
                                        <img src="assets/images/loader2.gif" />
                                    </div>
                                </div>
                                <div class="col-md-12" id="success" style="display:none;">
                                    <div class="alert alert-success icons-alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="icofont icofont-close-line-circled"></i>
                                        </button>
                                        <p>
                                            <!-- <strong>Success! </strong> --> <span id="msgSuccess"></span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-12" id="failed" style="display:none;">
                                    <div class="alert alert-danger icons-alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="icofont icofont-close-line-circled"></i>
                                        </button>
                                        <p><strong>Danger!</strong> <span id="msgFailed"></span> </p>
                                    </div>
                                </div>


                                <hr>

                                <div class="col-sm-12">

                                    <table id="grades_table" class="display nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>sn</th>
                                                <th>Class / Demarcation</th>
                                                <th>Details</th>
                                            </tr>
                                        </thead>
                                        <tbody id="gradess_table_body">
                                        </tbody>
                                    </table>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div id="styleSelector">
        </div>
    </div>


    
</div>

<!-- Seems like dead code. Might be removed soon -->
</div>
</div>
</div>
</div>


<script src="../lib/bower_components/jquery-latest/jquery-latest.min.js" type="text/javascript"></script>
<script type="26db538759965537bf7cfdb8-text/javascript" src="../lib/bower_components/jquery/js/jquery.min.js"></script>
<script type="26db538759965537bf7cfdb8-text/javascript" src="../lib/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="26db538759965537bf7cfdb8-text/javascript" src="../lib/bower_components/popper.js/js/popper.min.js"></script>
<script type="26db538759965537bf7cfdb8-text/javascript" src="../lib/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script type="26db538759965537bf7cfdb8-text/javascript" src="../lib/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="26db538759965537bf7cfdb8-text/javascript" src="../lib/bower_components/modernizr/js/modernizr.js"></script>
<script type="26db538759965537bf7cfdb8-text/javascript" src="../lib/bower_components/modernizr/js/css-scrollbars.js"></script>

<script type="26db538759965537bf7cfdb8-text/javascript" src="../lib/bower_components/chart.js/js/Chart.js"></script>

<script src="../lib/assets/js/markerclusterer.js" type="26db538759965537bf7cfdb8-text/javascript"></script>
<script type="26db538759965537bf7cfdb8-text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
<script type="26db538759965537bf7cfdb8-text/javascript" src="../lib/assets/pages/google-maps/gmaps.js"></script>

<script src="../lib/assets/pages/widget/gauge/gauge.min.js" type="26db538759965537bf7cfdb8-text/javascript"></script>
<script src="../lib/assets/pages/widget/amchart/amcharts.js" type="26db538759965537bf7cfdb8-text/javascript"></script>
<script src="../lib/assets/pages/widget/amchart/serial.js" type="26db538759965537bf7cfdb8-text/javascript"></script>
<script src="../lib/assets/pages/widget/amchart/gauge.js" type="26db538759965537bf7cfdb8-text/javascript"></script>
<script src="../lib/assets/pages/widget/amchart/pie.js" type="26db538759965537bf7cfdb8-text/javascript"></script>
<script src="../lib/assets/pages/widget/amchart/light.js" type="26db538759965537bf7cfdb8-text/javascript"></script>

<script src="../lib/assets/js/pcoded.min.js" type="26db538759965537bf7cfdb8-text/javascript"></script>
<script src="../lib/assets/js/vartical-layout.min.js" type="26db538759965537bf7cfdb8-text/javascript"></script>
<script src="../lib/assets/js/jquery.mCustomScrollbar.concat.min.js" type="26db538759965537bf7cfdb8-text/javascript"></script>
<script type="26db538759965537bf7cfdb8-text/javascript" src="../lib/assets/pages/dashboard/crm-dashboard.min.js"></script>
<script type="26db538759965537bf7cfdb8-text/javascript" src="../lib/assets/js/script.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="26db538759965537bf7cfdb8-text/javascript"></script>
<script type="26db538759965537bf7cfdb8-text/javascript">
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="../lib/assets/js/rocket-loader.min.js" data-cf-settings="26db538759965537bf7cfdb8-|49" defer=""></script>

<!-- </body> -->

<!-- Mirrored from colorlib.com//polygon/adminty/default/dashboard-crm.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 10:00:05 GMT -->

<!-- </html> -->