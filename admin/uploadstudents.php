<?php
include('functions/functions.php');
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
                                <div class="d-inline col-md-12">
                                    <h4>Upload Student's Profile</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Widget</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="page-body">

                    <div class="card">
                        <div class="card-header">
                            <h5>Profile Upload</h5>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li><i class="feather icon-maximize full-card"></i></li>
                                    <li><i class="feather icon-minus minimize-card"></i></li>
                                    <li><i class="feather icon-trash-2 close-card"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-block">
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

                            <?php
                            $project = new project();
                            ?>

                            <div class="col-sm-4 col-xl-6 m-b-10">
                                <select id="session" class="form-control form-control-primary">
                                    <option value="0">--Please Select Session--</option>
                                    <?php
                                    $retSession = $project->getSession();
                                    foreach ($retSession as $key => $value) {
                                    ?>
                                        <option value="<?php echo $value['id']; ?>"><?php echo $value["session"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="col-sm-4 col-xl-6 m-b-10">
                                <select id="class" class="form-control form-control-primary">
                                    <option value="0">--Please Select Class--</option>
                                    <?php
                                    $retTerm = $project->getClass();
                                    foreach ($retTerm as $key => $value) {
                                    ?>
                                        <option value="<?php echo $value['id']; ?>"><?php echo $value["class"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="col-sm-4 col-xl-6 m-b-10" id="selectClassDemarcation">
                            </div>

                            <div id="dZUploadProfile" class="dropzone">
                                <div class="dz-default dz-message">
                                    Browse or Drop an excel file here.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input type="button" id="submit" value="Upload Student's Profile" class="btn btn-grd-primary btn-round" />
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


<script>
    //Login jquery function
    $(function() {

        var selected;
        var classID;

        //Populationg Class Demarcation
        $("#class").change(function() {

            var _classID = $(this).children("option:selected").val();

            $.ajax({
                type: "POST",
                url: 'functions/getClassDemarcations.php',
                data: {
                    classID: _classID
                },
                success: function(response) {
                    response = $.parseJSON(response);
                    data = response.data;

                    $('#selectClassDemarcation').empty();

                    var table = '<select id="ClassDemarcation" class="form-control form-control-primary">';
                    table += '<option value="0">--Please Select Class Demarcation--</option>';

                    for (var i = 0; i < data.length; i++) {
                        table += '<option value="' + data[i].id + '">' + data[i].classdemarcation + '</option>';
                    }

                    table += '</select>';
                    $('#selectClassDemarcation').append(table);

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
            });

        }); //End ClassDermacation


        var fileName = '';

        console.log("Hello");
        Dropzone.autoDiscover = false;


        //Uploading Student Profile
        $("#dZUploadProfile").dropzone({
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

        //Clicking of Button
        $('#submit').click(function() {
            //Checking if excel file was selected for upload
            if (fileName == '') {
                alert('Please select an excel file to continue');
                return false;
            }

            //Session
            var sessionID = $("#session").children("option:selected").val();
            var classID = $("#class").children("option:selected").val();
            var classdemarcationID = $("#ClassDemarcation").children("option:selected").val();

            //Checking if session is empty
            if (sessionID == "0") {
                alert('Please select Session to continue');
                return false;
            }

            if (classID == "0") {
                alert('Please select Class to continue');
                return false;
            }

            if (classdemarcationID == "0") {
                alert('Please select Class Demarcation to continue');
                return false;
            }


            //alert(fileName + ", " + sessionID + ", " + classID + ", " + classdemarcationID);

            $.ajax({
                type: "POST",
                url: 'functions/uploadStudentproFileFromExcel.php',
                data: {
                    fileName: fileName,
                    sessionID: sessionID,
                    classID: classID,
                    classdemarcationID: classdemarcationID
                },
                success: function(data) {

                    if (data != '') {
                        $('#success').show();
                        $('#failed').hide();
                        $('#msgSuccess').show().html(data);
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

        })

    }) // End Function
</script>

</body>

</html>