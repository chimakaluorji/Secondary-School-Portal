<!DOCTYPE html>
<html lang="en">

<head>
    <title>GMA | Portal </title>


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

    <link rel="icon" href="../lib/assets/images/logo10.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../lib/bower_components/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../lib/assets/icon/themify-icons/themify-icons.css">

    <link rel="stylesheet" type="text/css" href="../lib/assets/icon/icofont/css/icofont.css">

    <link rel="stylesheet" type="text/css" href="../lib/assets/css/style.css">
</head>

<body class="fix-menu">

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

    <section class="login-block">

        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <form class="md-float-material form-material">
                        <div class="text-center">
                            <img src="../lib/assets/images/logo10.png" alt="logo.png">

                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center">Sign In</h3>
                                    </div>
                                    <div class="col-md-12">
                                        <div style="color: #E9BA64; font-size: 15px; display: none; text-align: center;" id="spinner">
                                            <img src="../lib/assets/images/loader1.gif" />
                                            <strong>...Please wait ....</strong>
                                            <img src="../lib/assets/images/loader2.gif" />
                                        </div>
                                    </div>
                                    <div class="col-md-12" id="success" style="display:none;">
                                        <div class="alert alert-success icons-alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <i class="icofont icofont-close-line-circled"></i>
                                            </button>
                                            <p><strong>Success! </strong> <span id="msgSuccess"></span> </p>
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
                                </div>
                                <div class="form-group form-primary">
                                    <input type="email" id="email" class="form-control" required="" placeholder="Email">
                                    <span class="form-bar"></span>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" id="password" class="form-control" required="" placeholder="Password">
                                    <span class="form-bar"></span>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="checkbox-fade fade-in-primary d-">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Remember me</span>
                                            </label>
                                        </div>
                                        <div class="forgot-phone text-right f-right">
                                            <a href="#" class="text-right f-w-600"> Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <input type="button" id="submit" value="Sign In" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20" />
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">Thank you.</p>
                                        <p class="text-inverse text-left"><a href="#"><b class="f-w-600">Back to website</b></a></p>
                                    </div>
                                    <!-- <div class="col-md-2">
<img src="assets/images/logo0.png" alt="small-logo.png">
</div> -->
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section>

    <script src="../lib/bower_components/jquery-latest/jquery-latest.min.js" type="text/javascript"></script>
    <!-- <script type="26db538759965537bf7cfdb8-text/javascript" src="../lib/bower_components/jquery/js/jquery.min.js"></script> -->
    <script type="26db538759965537bf7cfdb8-text/javascript" src="../lib/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="26db538759965537bf7cfdb8-text/javascript" src="../lib/bower_components/popper.js/js/popper.min.js"></script>
    <script type="26db538759965537bf7cfdb8-text/javascript" src="../lib/bower_components/bootstrap/js/bootstrap.min.js"></script>

    <script type="26db538759965537bf7cfdb8-text/javascript" src="../lib/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

    <script type="26db538759965537bf7cfdb8-text/javascript" src="../lib/bower_components/modernizr/js/modernizr.js"></script>
    <script type="26db538759965537bf7cfdb8-text/javascript" src="../lib/bower_components/modernizr/js/css-scrollbars.js"></script>

    <script src="../lib/DropzoneJs_scripts/dropzone.js"></script>

    <script src="../lib/assets/js/pcoded.min.js" type="26db538759965537bf7cfdb8-text/javascript"></script>
    <script src="../lib/assets/js/vartical-layout.min.js" type="26db538759965537bf7cfdb8-text/javascript"></script>
    <script src="../lib/assets/js/jquery.mCustomScrollbar.concat.min.js" type="26db538759965537bf7cfdb8-text/javascript"></script>
    <!-- <script type="26db538759965537bf7cfdb8-text/javascript" src="../lib/assets/pages/dashboard/crm-dashboard.min.js"></script> -->
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

    <!-- <script type="text/javascript" src="../lib/DataTables/datatables.min.js"></script> -->
    <script type="text/javascript" src="../lib/DataTables/datatables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>

    <script>
        //Login jquery function
        $(function() {

            //Clicking of Button
            $('#submit').click(function() {
                //Calling login function
                login();
            })

            $("#password").keypress(function(e) {
                if (e.which == 13 || e.which == 1) {
                    //Calling login function
                    login();
                }
            })

            //Login Function
            function login() {

                //Fetching the values in text boxes
                var email = $("#email").val();
                var password = $("#password").val();

                //Validating the regnumber and password
                if (email == '') {
                    $('#failed').show();
                    $('#success').hide();
                    $('#msgFailed').show().html('Please fill your email address');
                    return false;
                }

                if (password == '') {
                    $('#failed').show();
                    $('#success').hide();
                    $('#msgFailed').show().html('Please fill the password to continue');
                    return false;
                }

                email = email.trim();
                password = password.trim();

                $.ajax({
                    type: "GET",
                    url: 'functions/login.php',
                    data: {
                        email: email,
                        password: password
                    },
                    success: function(response) {
                        response = JSON.parse(response);
                        if (response.status == 'success') {

                            const mySessionStorage = window.sessionStorage;
                            mySessionStorage.setItem('token', response.jwt);
                            window.location.replace(`dashboard.php?token=${response.jwt}`);
                            // if (data == 'success') {
                            //     window.location.replace('dashboard.php?e=' + regnumber);
                            //     //window.location.replace('Home.aspx?e=' + retUrl + '&t=' + t + '&PUID=' + PUID)
                            // } else if (data == 'failed') {
                            //     $('#failed').show();
                            //     $('#success').hide();
                            //     $('#msgFailed').show().html('Please enusre the Reg. Number and Password are correct !!!');
                            // } else {
                            //     $('#failed').show();
                            //     $('#success').hide();
                            //     $('#msgFailed').show().html(data);
                            // }
                        } else if (response.status = 'fail') {
                            $('#spinner').hide();
                            $('#success').hide();
                            $('#failed').show();
                            $('#msgFailed').show().html(response.message);
                            return false;
                        }
                    },
                    beforeSend: function() {
                        // Code to display spinner
                        $('#spinner').show();
                    },
                    complete: function() {
                        // Code to hide spinner.
                        $('#spinner').hide();
                    },
                    error: function(result) {
                        alert('Error Occurred, Please Contact Admin.');
                    }
                }); // End Ajax

            }

        }) // End Function
    </script>

</body>

<!-- Mirrored from colorlib.com//polygon/adminty/default/auth-normal-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 10:00:02 GMT -->

</html>