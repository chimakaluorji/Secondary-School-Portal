<?php
include('header.php');
include('functions/functions.php');
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
                                    <h4>Excel Student's Result Upload</h4>
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
                            <h5>Excel Student's Result Upload</h5>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li><i class="feather icon-maximize full-card"></i></li>
                                    <li><i class="feather icon-minus minimize-card"></i></li>
                                    <li><i class="feather icon-trash-2 close-card"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-block">

                            <?php
                            $project = new project();
                            ?>

                            <div id="uploadResult">
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
                                    <select id="term" class="form-control form-control-primary">
                                        <option value="0">--Please Select Term--</option>
                                        <?php
                                        $retSession = $project->getTerm();
                                        foreach ($retSession as $key => $value) {
                                        ?>
                                            <option value="<?php echo $value['id']; ?>"><?php echo $value["term"]; ?></option>
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

                                <div class="col-sm-4 col-xl-6 m-b-10" id="selectSubject">
                                </div>

                                <!-- <div class="col-md-6">
                                    <input type="button" id="submit" value="Get Students" class="btn btn-grd-primary btn-round" />
                                </div> -->

                                <br><br>
                                <div class="col-md-12" id="failed1" style="display:none;">
                                    <div class="alert alert-danger icons-alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="icofont icofont-close-line-circled"></i>
                                        </button>
                                        <p><strong>Danger!</strong> <span id="msgFailed1"></span> </p>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div style="color: #E9BA64; font-size: 15px; display: none; text-align: center;" id="spinner">
                                        <img src="assets/images/loader1.gif" />
                                        <strong>..Please wait..</strong>
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

                                <div id="dZUploadResult" class="dropzone mb-4">
                                    <div class="dz-default dz-message">
                                        Browse or Drop an excel file here.
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <input type="button" id="submitExcelResult" value="Upload Excel Result" class="btn btn-grd-primary btn-round" />
                                </div>

                            </div>
                            <div id="processResult" style="display:none;">
                                <div style="color: #E9BA64; font-size: 15px; display: none; text-align: center;" id="spinnerProcess">
                                    <img src="assets/images/loader1.gif" />
                                    <strong>..Please wait..</strong>
                                    <img src="assets/images/loader2.gif" />
                                </div>
                                <div class="col-md-12">
                                    <input type="button" id="processResult" value="Process Result" class="btn btn-grd-primary btn-round" />
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

<!-- <script type="text/javascript" src="DataTables/datatables.min.js"></script> -->
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>

</body>

<script type="text/javascript">
    $(document).ready(function() {

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
                    const data = response.data;

                    $('#selectClassDemarcation').empty();

                    var table = '<select id="ClassDemarcation" class="form-control form-control-primary">';
                    table += '<option value="0">--Please Select Class Demarcation--</option>';

                    for (var i = 0; i < data.length; i++) {
                        table += '<option value="' + data[i].id + '">' + data[i].classdemarcation + '</option>';
                    }

                    table += '</select>';
                    $('#selectClassDemarcation').append(table);


                    //Populationg Subject
                    $("#ClassDemarcation").change(function() {
                        var __classID = $("#class").children("option:selected").val();
                        var __classDemarcationID = $("#ClassDemarcation").children("option:selected").val();

                        $.ajax({
                            type: "POST",
                            url: 'functions/getSubjects.php',
                            data: {
                                classID: __classID,
                                classDemarcationID: __classDemarcationID
                            },
                            success: function(response) {
                                response = $.parseJSON(response);
                                const data = response.data;

                                $('#selectSubject').empty();

                                var table = '<select id="Subject" class="form-control form-control-primary">';
                                table += '<option value="0">--Please Select Subject--</option>';

                                for (var i = 0; i < data.length; i++) {
                                    table += '<option value="' + data[i].id + '">' + data[i].subject + '</option>';
                                }

                                table += '</select>';
                                $('#selectSubject').append(table);

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
                                alert('Error Occurred while loading subject, Please Contact Admin.');
                            }
                        }); // Ajax Ends here

                    }); //End Subject


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
                    alert('Error Occurred while loading class dermaction, Please Contact Admin.');
                }
            });

        }); //End ClassDermacation


        Dropzone.autoDiscover = false;

        let fileName = '';
        //Uploading Student Profile
        $("#dZUploadResult").dropzone({
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
        $('#submitExcelResult').click(function() {
            //Checking if excel file was selected for upload
            if (fileName == '') {
                alert('Please select an excel file to continue');
                return false;
            }

            //Session
            var sessionID = $("#session").children("option:selected").val();
            var termID = $("#term").children("option:selected").val();
            var classID = $("#class").children("option:selected").val();
            var classDemarcationID = $("#ClassDemarcation").children("option:selected").val();
            var subjectID = $("#Subject").children("option:selected").val();

            //Checking if session is empty
            if (sessionID == "0") {
                alert('Please select Session to continue');
                return false;
            }

            if (termID == "0") {
                alert('Please select Term to continue');
                return false;
            }

            if (classID == "0") {
                alert('Please select Class to continue');
                return false;
            }

            if (classDemarcationID == "0") {
                alert('Please select Class Demarcation to continue');
                return false;
            }

            if (subjectID == "0") {
                alert('Please select subject to continue');
                return false;
            }

            $.ajax({
                type: "POST",
                url: 'functions/uploadResultFromExcel.php',
                data: {
                    fileName: fileName,
                    sessionID: sessionID,
                    termID: termID,
                    classID: classID,
                    classDemarcationID: classDemarcationID,
                    subjectID: subjectID
                },
                success: function(data) {
                    console.log(data);

                    if (data == 'Result upload is successful') {
                        $('#success').show();
                        $('#failed').hide();
                        $('#msgSuccess').show().html(data);

                        $('#uploadResult').hide();
                        $('#processResult').show();
                    }

                    if (data == 'exist') {
                        $('#failed').show();
                        $('#msgFailed').show().html("Result with the selected session, term, class, class demarcation and subject exist in the database. Go to Edit result menu to edit it. ");
                        return false
                    }

                    if (data != '') {
                        $('#failed').show();
                        $('#msgFailed').show().html(data);
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

        })

        //Process Result 
        $('#processResult').click(function() {
            //Declaring variables
            var sessionID = $("#session").children("option:selected").val();
            var termID = $("#term").children("option:selected").val();
            var classID = $("#class").children("option:selected").val();
            var classDemarcationID = $("#ClassDemarcation").children("option:selected").val();
            var subjectID = $("#Subject").children("option:selected").val();

            //Loading Subject and Subject Position
            $.ajax({
                async: false,
                type: "POST",
                url: 'functions/getResultforsubjectpositioning.php',
                data: {
                    sessionID: sessionID,
                    termID: termID,
                    classID: classID,
                    classdemarcationID: classDemarcationID,
                    subjectID: subjectID
                },
                success: function(data) {

                    //Showing error is case if the data was not successfully saved.
                    data = $.parseJSON(data);

                    var returnfailed = data[0].id;

                    if (returnfailed != "failed") {

                        var position = 1;

                        for (var i = 0; i < data.length; i++) {

                            //Calling the function to check if the total score is the same in order to assign the same positon to the same students
                            var theSamePosition = resultSubjectPosition(data[i].regnumber, data[i].subjectid, data[i].sessionid, data[i].termid, data[i].classid, data[i].classdemarcationid, data[i].total, data[i].grade, data[i].remark, position);

                            //Minus value of theSamePosition from the position
                            position = position - theSamePosition

                            //increasing the position if the total score is not the same
                            position++;

                        }

                        //Refreshing the page
                        location.reload();

                    }

                    if (returnfailed == "failed") {
                        alert('Error Occurred, Cannot fetch data from database, please Contact Admin.');
                    }

                },
                beforeSend: function() {
                    // Code to display spinner
                    $('#spinnerProcess').show();
                },
                complete: function() {
                    // Code to hide spinner.
                    $('#spinnerProcess').hide();
                },
                error: function(result) {
                    alert('Error Occurred, while getting position of the students, please Contact Admin.');
                }
            }); // End Ajax

        })


        //Function inserting the result subject position
        function resultSubjectPosition(regnumber, subjectid, sessionid, termid, classid, classDemarcationID, total, grade, remark, position) {

            var theSamePosition = 0;

            //Loading Result Position
            $.ajax({
                type: "POST",
                async: false,
                url: 'functions/saveSubjectPosition.php',
                data: {
                    regnumber: regnumber,
                    subjectid: subjectid,
                    sessionid: sessionid,
                    termid: termid,
                    classid: classid,
                    classdemarcationid: classDemarcationID,
                    total: total,
                    grade: grade,
                    remark: remark,
                    position: position
                },
                success: function(data) {

                    //Returning value of the same position
                    if (data == "theSamePosition") {
                        theSamePosition = 1
                    }

                    //Showing successfully saved.
                    if (data == "success") {
                        $('#success').show();
                        $('#msgSuccess').show().html("Result was uploaded successfully.");
                    }

                    //Showing successfully saved and some data already exist.
                    if (data == "exist") {
                        $('#failed').show();
                        $('#msgFailed').show().html("A result with the same session, term, class, class demarcation and subject has been process already");
                    }

                    //Showing error is case if the data was not successfully saved.
                    if (data == "failed") {
                        $('#failed').show();
                        $('#msgFailed').show().html("Result was not processed successfully");
                        return false
                    }

                },
                beforeSend: function() {
                    // Code to display spinner
                    $('#spinnerProcess').show();
                },
                complete: function() {
                    // Code to hide spinner.
                    $('#spinnerProcess').hide();
                },
                error: function(result) {
                    alert('Error Occurred, Please Contact Admin.');
                }
            }); // End Ajax

            return theSamePosition

        } // Function ends here


    }); //Document Ready Ends
</script>
</body>

</html>