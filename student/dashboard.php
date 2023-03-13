<?php
include('header.php');
?>

<link href="DropzoneJs_scripts/dropzone.css" rel="stylesheet" />

<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline">
                                    <h4>Student Profile</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="dashboard.php"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Student Profile</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Student Profile</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="page-body">
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

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cover-profile">
                                <div class="profile-bg-img">
                                    <img class="profile-bg-img img-fluid" src="assets/images/user-profile/bg-img1.jpg" alt="bg-img">
                                    <div class="card-block user-info">
                                        <div class="col-md-12">
                                            <div class="media-left">
                                                <a href="#" class="profile-image">
                                                    <img id="studentpix" class="user-img img-radius" src="" alt="user-img" data-toggle="modal" data-target="#_default-Modal">
                                                </a>
                                            </div>
                                            <div class="media-body row">
                                                <div class="col-lg-12">
                                                    <div class="user-title">
                                                        <h2><span id="fullname2"></h2>
                                                        <span class="text-white"><span id="regnumber2"></span></span>
                                                    </div>
                                                </div>
                                                <div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">

                            <div class="tab-content">

                                <div class="tab-pane active" id="personal" role="tabpanel">

                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-header-text">About Me</h5>
                                            <button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right" data-toggle="modal" data-target="#default-Modal">
                                                <i class="icofont icofont-edit"></i>
                                            </button>
                                        </div>
                                        <div class="card-block">
                                            <div class="view-info">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="general-info">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-xl-6">
                                                                    <div class="table-responsive">
                                                                        <table class="table m-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th scope="row">Full Name</th>
                                                                                    <td><span id="fullname"></span></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Reg. Number</th>
                                                                                    <td><span id="regnumber"></span></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Birth Date</th>
                                                                                    <td><span id="dob"></span></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-12 col-xl-6">
                                                                    <div class="table-responsive">
                                                                        <table class="table">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th scope="row">Sex</th>
                                                                                    <td><span id="sex"></span></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Parent's/Guardian's Phone Number</th>
                                                                                    <td><span id="phonenumber"></span></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Edit Profile Modal -->
                <div class="modal fade" id="default-Modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Profile</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5>Edit Profile</h5>

                                <div class="col-md-12" id="failed2" style="display:none;">
                                    <div class="alert alert-danger icons-alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="icofont icofont-close-line-circled"></i>
                                        </button>
                                        <p><strong>Danger!</strong> <span id="msgFailed2"></span> </p>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div style="color: #E9BA64; font-size: 15px; display: none; text-align: center;" id="spinner1">
                                        <img src="assets/images/loader1.gif" />
                                        <strong>...Please wait ....</strong>
                                        <img src="assets/images/loader2.gif" />
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xl-10 m-b-10">
                                    <b>Birth of Birth: </b><input type="text" id="txtdob" class="form-control form-control-primary" placeholder="Date of Birth">
                                </div>
                                <div class="col-sm-6 col-xl-10 m-b-10">
                                    <b>Sex: </b><select id="sex" class="form-control form-control-primary">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-xl-10 m-b-10">
                                    <b>Parent's Phone Number: </b><input type="text" id="txtphonenumber" class="form-control form-control-primary" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                                <input type="button" id="editprofile" value="Edit Profile" class="btn btn-primary waves-effect waves-light" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Change Password Modal -->
                <div id="mPassword" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Change Password</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12" id="failed1" style="display:none;">
                                    <div class="alert alert-danger icons-alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="icofont icofont-close-line-circled"></i>
                                        </button>
                                        <p><strong>Danger!</strong> <span id="msgFailed1"></span> </p>
                                    </div>
                                </div>

                                <h5>Change Password</h5>
                                <b>New Password: </b><input type="password" id="newpassword" class="form-control" placeholder="New Password">
                                <br>
                                <b>Confirmed Password: </b><input type="password" id="cpassword" class="form-control" placeholder="Confirmed Password">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                                <input type="button" id="savepassword" value="Save Changes" class="btn btn-primary waves-effect waves-light" />
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Change Picture Modal -->
                <div class="modal fade" id="_default-Modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Change Picture</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="col-md-12" id="failed3" style="display:none;">
                                    <div class="alert alert-danger icons-alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="icofont icofont-close-line-circled"></i>
                                        </button>
                                        <p><strong>Danger!</strong> <span id="msgFailed3"></span> </p>
                                    </div>
                                </div>

                                <h5>Change Picture</h5>
                                <div id="dZUploadPicture" class="dropzone">
                                    <div class="dz-default dz-message">
                                        Browse or Drop an excel file here.
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                                <input type="button" id="savepicture" value="Save Changes" class="btn btn-primary waves-effect waves-light" />
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

                <script src="DropzoneJs_scripts/dropzone.js"></script>

                <script src="assets/js/pcoded.min.js" type="26db538759965537bf7cfdb8-text/javascript"></script>
                <script src="assets/js/vartical-layout.min.js" type="26db538759965537bf7cfdb8-text/javascript"></script>
                <script src="assets/js/jquery.mCustomScrollbar.concat.min.js" type="26db538759965537bf7cfdb8-text/javascript"></script>
                <!-- <script type="26db538759965537bf7cfdb8-text/javascript" src="assets/pages/dashboard/crm-dashboard.min.js"></script> -->
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

                <!-- <script type="text/javascript" src="DataTables/datatables.min.js"></script> -->
                <script type="text/javascript" src="DataTables/datatables.min.js"></script>


                </body>

                <script type="text/javascript">
                    var fileName = '';

                    console.log("Hello");
                    Dropzone.autoDiscover = false;

                    //Uploading Student Picture
                    $("#dZUploadPicture").dropzone({
                        url: "uploadfiles.php",
                        maxFiles: 5,
                        addRemoveLinks: true,
                        success: function(file, response) {
                            fileName = response;

                            file.previewElement.classList.add("dz-success");
                            console.log("Successfully uploaded :" + fileName);
                        },
                        error: function(file, response) {
                            file.previewElement.classList.add("dz-error");
                        }
                    });

                    $(document).ready(function() {

                        //Getting Url value
                        var queryDict = {};
                        location.search.substr(1).split("&").forEach(function(item) {
                            queryDict[item.split("=")[0]] = item.split("=")[1]
                        })
                        var regnumber = queryDict['e'];


                        //Hiding error messages on page load
                        $('#success').hide();
                        $('#msgSuccess').hide()

                        $('#failed').hide();
                        $('#msgFailed').hide()

                        //Calling Load Student function
                        loadStudent();

                        //Loading Student function
                        function loadStudent() {

                            //Loading Result Position
                            $.ajax({
                                type: "POST",
                                url: 'functions/getPassword.php',
                                data: {
                                    regnumber: regnumber
                                },
                                success: function(data) {

                                    data = $.parseJSON(data);

                                    var ret_result = data[0].password;
                                    var failed = data[0].id

                                    $("#fullname").text(data[0].surname + ", " + data[0].firstname + " " + data[0].middlename);
                                    $("#regnumber").text(data[0].regnumber);
                                    $("#dob").text(data[0].dob);
                                    $("#sex").text(data[0].sex);
                                    $("#phonenumber").text(data[0].phonenumber);

                                    $("#fullname2").text(data[0].surname + ", " + data[0].firstname + " " + data[0].middlename);
                                    $("#regnumber2").text(data[0].regnumber);

                                    $('#studentpix').attr('src', data[0].photourl);

                                    if (ret_result == "password") {
                                        //Inserting subject position if the total score does not exist in the table

                                        //$('#mPassword').modal('show');
                                        $('#success').show();
                                        $('#msgSuccess').show().html("Please, remember to change your password from default password");

                                    }

                                    if (failed == "failed") {
                                        $('#failed').show();
                                        $('#msgFailed').show().html("Could not fetch password");
                                        return false
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


                        //Editing Student Profile
                        $('#editprofile').click(function() {

                            //Getting new password
                            var dob = $("#txtdob").val();
                            var sex = $("#sex").children("option:selected").val();
                            var phonenumber = $("#txtphonenumber").val();

                            if (dob == "") {
                                $('#failed2').show();
                                $('#msgFailed2').show().html("Please fill the date of birth to continue");
                                return false
                            }

                            if (sex == "") {
                                $('#failed2').show();
                                $('#msgFailed2').show().html("Please select sex to continue");
                                return false
                            }

                            if (phonenumber == "") {
                                $('#failed2').show();
                                $('#msgFailed2').show().html("Please fill the phone number to continue");
                                return false
                            }


                            $.ajax({
                                type: "POST",
                                url: 'functions/updateStudentProfile.php',
                                data: {
                                    regnumber: regnumber,
                                    dob: dob,
                                    sex: sex,
                                    phonenumber: phonenumber
                                },
                                success: function(data) {

                                    //Showing successfully saved.
                                    if (data == "success") {
                                        $('#default-Modal').modal('hide');
                                        loadStudent();
                                        $('#success').show();
                                        $('#msgSuccess').show().html("The student profile was edited successfully.");
                                    }

                                    //Showing error is case if the data was not successfully saved.
                                    if (data == "failed") {
                                        $('#failed2').show();
                                        $('#msgFailed2').show().html("The student profile was NOT edited successfully.");
                                        return false
                                    }

                                },
                                beforeSend: function() {
                                    // Code to display spinner
                                    $('#spinner1').show();
                                },
                                complete: function() {
                                    // Code to hide spinner.
                                    $('#spinner1').hide();
                                },
                                error: function(result) {
                                    alert('Error Occurred, Please Contact Admin.');
                                }
                            }); // End Ajax

                        });

                        //Clicking of Button
                        $('#savepassword').click(function() {
                            //Getting new password
                            var newpassword = $("#newpassword").val();
                            var cpassword = $("#cpassword").val();

                            if (newpassword == "") {
                                $('#failed1').show();
                                $('#msgFailed1').show().html("Please fill the new password to continue");
                                return false
                            }

                            if (cpassword == "") {
                                $('#failed1').show();
                                $('#msgFailed1').show().html("Please fill the confirmed password to continue");
                                return false
                            }

                            if (newpassword != cpassword) {
                                $('#failed1').show();
                                $('#msgFailed1').show().html("The password does not matched !!!");
                                return false
                            }

                            //Calling updatePassword function
                            updatePassword(regnumber, newpassword);
                        })

                        $("#newpassword").keypress(function(e) {
                            if (e.which == 13 || e.which == 1) {
                                //Calling updatePassword function
                                updatePassword(regnumber, newpassword);
                            }
                        })


                        //Clicking of Button
                        $('#savepicture').click(function() {

                            $.ajax({
                                type: "POST",
                                url: 'functions/updatePicture.php',
                                data: {
                                    regnumber: regnumber,
                                    fileName: fileName
                                },
                                success: function(data) {

                                    //Showing successfully saved.
                                    if (data == "success") {
                                        $('#_default-Modal').modal('hide');
                                        loadStudent();
                                        $('#success').show();
                                        $('#msgSuccess').show().html("The picture was saved successfully.");
                                    }

                                    //Showing error is case if the data was not successfully saved.
                                    if (data == "failed") {
                                        $('#failed3').show();
                                        $('#msgFailed3').show().html("The password was NOT saved successfully");
                                        return false
                                    }

                                },
                                beforeSend: function() {
                                    // Code to display spinner
                                    $('#spinner1').show();
                                },
                                complete: function() {
                                    // Code to hide spinner.
                                    $('#spinner1').hide();
                                },
                                error: function(result, e) {
                                    alert(result.responseText + ' Error Occurred, Please Contact Admin.');
                                }
                            }); // End Ajax

                        }); // Button for saving picture



                        //Saving Result Score
                        function updatePassword(regnumber, password) {

                            $.ajax({
                                type: "POST",
                                url: 'functions/updatePassword.php',
                                data: {
                                    regnumber: regnumber,
                                    password: password
                                },
                                success: function(data) {

                                    //Showing successfully saved.
                                    if (data == "success") {
                                        $('#default-Modal_').modal('hide');
                                        $('#success').show();
                                        $('#msgSuccess').show().html("The password was saved successfully.");
                                    }

                                    //Showing error is case if the data was not successfully saved.
                                    if (data == "failed") {
                                        $('#failed').show();
                                        $('#msgFailed').show().html("The password was NOT saved successfully");
                                        return false
                                    }

                                },
                                beforeSend: function() {
                                    // Code to display spinner
                                    $('#spinner1').show();
                                },
                                complete: function() {
                                    // Code to hide spinner.
                                    $('#spinner1').hide();
                                },
                                error: function(result) {
                                    alert('Error Occurred, Please Contact Admin.');
                                }
                            }); // End Ajax

                        }


                    }); //Document Ready Ends
                </script>

                </body>

                </html>