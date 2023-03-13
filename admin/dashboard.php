<?php

//require('../bootstrap.php');

//use \Firebase\JWT\JWT;

/*if(!isset($_GET['token'])) {
  header("Location: index.php");
  exit;
}

try {
  $publicKey = file_get_contents('../lib/auth/mykey.pub');
  $decoded = JWT::decode($_GET['token'], $publicKey, ['RS256']);
  
} catch(Exception $e) {
  header("Location: index.php");
  exit;
}*/

include('header.php');

?>
<div class="pcoded-content">
  <div class="pcoded-inner-content">
    <div class="main-body">
      <div class="page-wrapper">
        <div class="page-body">
          <div class="row">

            <div class="col-xl-3 col-md-6">
              <div class="card bg-c-yellow text-white">
                <div class="card-block">
                  <div class="row align-items-center">
                    <div class="col">
                      <p class="m-b-5">New Customer</p>
                      <h4 class="m-b-0">852</h4>
                    </div>
                    <div class="col col-auto text-right">
                      <i class="feather icon-user f-50 text-c-yellow"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card bg-c-green text-white">
                <div class="card-block">
                  <div class="row align-items-center">
                    <div class="col">
                      <p class="m-b-5">Income</p>
                      <h4 class="m-b-0">$5,852</h4>
                    </div>
                    <div class="col col-auto text-right">
                      <i class="feather icon-credit-card f-50 text-c-green"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card bg-c-pink text-white">
                <div class="card-block">
                  <div class="row align-items-center">
                    <div class="col">
                      <p class="m-b-5">Ticket</p>
                      <h4 class="m-b-0">42</h4>
                    </div>
                    <div class="col col-auto text-right">
                      <i class="feather icon-book f-50 text-c-pink"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card bg-c-blue text-white">
                <div class="card-block">
                  <div class="row align-items-center">
                    <div class="col">
                      <p class="m-b-5">Orders</p>
                      <h4 class="m-b-0">$5,242</h4>
                    </div>
                    <div class="col col-auto text-right">
                      <i class="feather icon-shopping-cart f-50 text-c-blue"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-xl-8 col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-header-left ">
                    <h5>Monthly View</h5>
                    <span class="text-muted">For more details about usage, please refer <a href="https://www.amcharts.com/online-store/" target="_blank">amCharts</a> licences.</span>
                  </div>
                </div>
                <div class="card-block-big">
                  <div id="monthly-graph" style="height:250px"></div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-12">
              <div class="card feed-card">
                <div class="card-header">
                  <h5>Feeds</h5>
                </div>
                <div class="card-block">
                  <div class="row m-b-30">
                    <div class="col-auto p-r-0">
                      <i class="feather icon-bell bg-simple-c-blue feed-icon"></i>
                    </div>
                    <div class="col">
                      <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted f-right f-13">Just Now</span></h6>
                    </div>
                  </div>
                  <div class="row m-b-30">
                    <div class="col-auto p-r-0">
                      <i class="feather icon-shopping-cart bg-simple-c-pink feed-icon"></i>
                    </div>
                    <div class="col">
                      <h6 class="m-b-5">New order received <span class="text-muted f-right f-13">Just Now</span></h6>
                    </div>
                  </div>
                  <div class="row m-b-30">
                    <div class="col-auto p-r-0">
                      <i class="feather icon-file-text bg-simple-c-green feed-icon"></i>
                    </div>
                    <div class="col">
                      <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted f-right f-13">Just Now</span></h6>
                    </div>
                  </div>
                  <div class="row m-b-30">
                    <div class="col-auto p-r-0">
                      <i class="feather icon-shopping-cart bg-simple-c-pink feed-icon"></i>
                    </div>
                    <div class="col">
                      <h6 class="m-b-5">New order received <span class="text-muted f-right f-13">Just Now</span></h6>
                    </div>
                  </div>
                  <div class="row m-b-30">
                    <div class="col-auto p-r-0">
                      <i class="feather icon-file-text bg-simple-c-green feed-icon"></i>
                    </div>
                    <div class="col">
                      <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted f-right f-13">Just Now</span></h6>
                    </div>
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
</div>

<!-- Seems like dead code. Might be removed soon -->
</div>
</div>
</div>
</div>


<script src="bower_components/jquery-latest/jquery-latest.min.js" type="text/javascript"></script>
<script type="26db538759965537bf7cfdb8-text/javascript" src="bower_components/jquery/js/jquery.min.js"></script>
<script type="26db538759965537bf7cfdb8-text/javascript" src="bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="26db538759965537bf7cfdb8-text/javascript" src="bower_components/popper.js/js/popper.min.js"></script>
<script type="26db538759965537bf7cfdb8-text/javascript" src="bower_components/bootstrap/js/bootstrap.min.js"></script>

<script type="26db538759965537bf7cfdb8-text/javascript" src="bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="26db538759965537bf7cfdb8-text/javascript" src="bower_components/modernizr/js/modernizr.js"></script>
<script type="26db538759965537bf7cfdb8-text/javascript" src="bower_components/modernizr/js/css-scrollbars.js"></script>

<script type="26db538759965537bf7cfdb8-text/javascript" src="bower_components/chart.js/js/Chart.js"></script>

<script src="assets/js/markerclusterer.js" type="26db538759965537bf7cfdb8-text/javascript"></script>
<script type="26db538759965537bf7cfdb8-text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
<script type="26db538759965537bf7cfdb8-text/javascript" src="assets/pages/google-maps/gmaps.js"></script>

<script src="assets/pages/widget/gauge/gauge.min.js" type="26db538759965537bf7cfdb8-text/javascript"></script>
<script src="assets/pages/widget/amchart/amcharts.js" type="26db538759965537bf7cfdb8-text/javascript"></script>
<script src="assets/pages/widget/amchart/serial.js" type="26db538759965537bf7cfdb8-text/javascript"></script>
<script src="assets/pages/widget/amchart/gauge.js" type="26db538759965537bf7cfdb8-text/javascript"></script>
<script src="assets/pages/widget/amchart/pie.js" type="26db538759965537bf7cfdb8-text/javascript"></script>
<script src="assets/pages/widget/amchart/light.js" type="26db538759965537bf7cfdb8-text/javascript"></script>

<script src="assets/js/pcoded.min.js" type="26db538759965537bf7cfdb8-text/javascript"></script>
<script src="assets/js/vartical-layout.min.js" type="26db538759965537bf7cfdb8-text/javascript"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js" type="26db538759965537bf7cfdb8-text/javascript"></script>
<script type="26db538759965537bf7cfdb8-text/javascript" src="assets/pages/dashboard/crm-dashboard.min.js"></script>
<script type="26db538759965537bf7cfdb8-text/javascript" src="assets/js/script.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="26db538759965537bf7cfdb8-text/javascript"></script>
<script type="26db538759965537bf7cfdb8-text/javascript">
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="assets/js/rocket-loader.min.js" data-cf-settings="26db538759965537bf7cfdb8-|49" defer=""></script>

<!-- </body> -->

<!-- Mirrored from colorlib.com//polygon/adminty/default/dashboard-crm.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 10:00:05 GMT -->

<!-- </html> -->