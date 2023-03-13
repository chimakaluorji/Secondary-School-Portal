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
                                    <h4>Edit Student's Result</h4>
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
                            <h5>Edit Student's Result</h5>
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

                                <div class="col-md-6">
                                    <input type="button" id="submit" value="Get Student's Result" class="btn btn-grd-primary btn-round" />
                                </div>

                                <br><br>
                                <div class="col-md-12" id="failed1" style="display:none;">
                                    <div class="alert alert-danger icons-alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="icofont icofont-close-line-circled"></i>
                                        </button>
                                        <p><strong>Danger!</strong> <span id="msgFailed1"></span> </p>
                                    </div>
                                </div>
                                <div class="col-md-12" id="success" style="display:none;">
                                    <div class="alert alert-success icons-alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="icofont icofont-close-line-circled"></i>
                                        </button>
                                        <p>
                                            <span id="msgSuccess"></span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-12" id="tableShow" style="display: none;">

                                    <table id="example" class="display nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Reg. No.</th>
                                                <th>Surname</th>
                                                <th>First Name</th>
                                                <th>Middle Name</th>
                                                <th>CA One</th>
                                                <th>CA Two</th>
                                                <th>CA Three</th>
                                                <th>Exam</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>

                                    </table>

                                    <br><br>
                                    <div class="col-md-6">
                                        <input type="button" id="process" value="Process Edited Result" class="btn btn-grd-primary btn-round" />
                                    </div>
                                    <div class="col-md-12">
                                        <div style="color: #E9BA64; font-size: 15px; display: none; text-align: left;" id="spinner0">
                                            <img src="assets/images/loader1.gif" />
                                            <strong>..Please wait..</strong>
                                            <img src="assets/images/loader2.gif" />
                                        </div>
                                    </div>
                                    <div class="col-md-12" id="success0" style="display:none;">
                                        <div class="alert alert-success icons-alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <i class="icofont icofont-close-line-circled"></i>
                                            </button>
                                            <p>
                                                <!-- <strong>Success! </strong> --> <span id="msgSuccess0"></span>
                                            </p>
                                        </div>
                                        <input type="button" id="refresh" value="Refresh" class="btn btn-grd-primary btn-round" />
                                    </div>
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

        }); //End ClassDemarcation


        //Declaring table variable
        var dtexample = 'undefined';
        dtexample = $("#example").DataTable();

        $("#submit").click(function() {
            //Loading the table  
            loadTable();
        }); //End of Search Button

        var read = ""

        function loadTable() {
            var sessionID = $("#session").children("option:selected").val();
            var termID = $("#term").children("option:selected").val();
            var classID = $("#class").children("option:selected").val();
            var classdemarcationID = $("#ClassDemarcation").children("option:selected").val();
            var subjectID = $("#Subject").children("option:selected").val();


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

            if (classdemarcationID == "0") {
                alert('Please select Class Demarcation to continue');
                return false;
            }

            if (subjectID == "0") {
                alert('Please select Subject to continue');
                return false;
            }


            $.ajax({
                type: "POST",
                url: "functions/getStudentForResultEdit.php",
                data: {
                    sessionID: sessionID,
                    classID: classID,
                    classdemarcationID: classdemarcationID,
                    termID: termID,
                    subjectID: subjectID
                },
                success: function(data) {

                    data = $.parseJSON(data);

                    var returnfailed = data[0].id;

                    //Showing successfully saved and some data already exist.
                    if (returnfailed == "DoesNotExist") {
                        $('#failed').show();
                        $('#msgFailed').show().html("The result for the selected session, term, class, class demarcation and subject has not been uploaded.");
                        return false;
                    }

                    if (returnfailed != "failed") { //Checking if data is returned from the database

                        $('#tableShow').show();
                        $("#example tbody").empty();
                        $('#failed').hide();

                        //Clearing the table
                        dtexample.clear();

                        if (dtexample != 'undefined') {

                            for (var i = 0; i < data.length; i++) {

                                var retVal = data[i].id

                                if (retVal == "alreayExist") { //Checking if data is returned from the database
                                    $('#failed1').show();
                                    $('#failed').hide();
                                    $('#success0').hide();
                                    $('#success').hide();
                                    $('#msgFailed1').show().html('All or some of the students already have scores on the selected session, term, class, classdermacation and subject and will not show up for scoring, please go to edit result to edit their result. Thank you.');
                                } else {
                                    dtexample.row.add([
                                        data[i].regnumber,
                                        data[i].surname,
                                        data[i].firstname,
                                        data[i].middlename,
                                        '<input type="text" class="form-control txtOne" value="' + data[i].caone + '">',
                                        '<input type="text" class="form-control txtTwo" value="' + data[i].catwo + '">',
                                        '<input type="text" class="form-control txtThree" value="' + data[i].cathree + '">',
                                        '<input type="text" class="form-control txtExam" value="' + data[i].exam + '">',
                                        '<input type="button" id="Edit" value="Edit" class="btn btn-primary btn-round btn-save">',
                                    ]).draw();
                                }
                            }
                        }
                    } else {
                        $('#tableShow').hide();
                        $("#example tbody").empty();

                        //Clearing the table
                        dtexample.clear();

                        $('#failed').show();
                        $('#msgFailed').show().html("Student's profile has not been uploaded for the selected Session, Class and Class Dermacation");
                    }

                    $('#example tbody').on('click', '.btn-save', function() {
                        // Get row data
                        var regNumber = $(this).closest('tr').find('td:eq(0)').text();
                        var CAOne = $(this).closest('tr').find(".txtOne").val();
                        var CATwo = $(this).closest('tr').find(".txtTwo").val();
                        var CAThree = $(this).closest('tr').find(".txtThree").val();
                        var Exam = $(this).closest('tr').find(".txtExam").val();


                        //Checking for non numerical values
                        if (CAOne != "") {
                            if (!$.isNumeric(CAOne)) {
                                alert("The score must be numeric");
                                return false;
                            }
                        }

                        if (CATwo != "") {
                            if (!$.isNumeric(CATwo)) {
                                alert("The score must be numeric");
                                return false;
                            }
                        }

                        if (CAThree != "") {
                            if (!$.isNumeric(CAThree)) {
                                alert("The score must be numeric");
                                return false;
                            }
                        }

                        if (Exam != "") {
                            if (!$.isNumeric(Exam)) {
                                alert("The score must be numeric");
                                return false;
                            }
                        }


                        var total = parseFloat(CAOne) + parseFloat(CATwo) + parseFloat(CAThree) + parseFloat(Exam)

                        //Showing error is case if the data was not successfully saved.
                        if (total > 100) {
                            alert("The total score is more than 100");
                            return false
                        }

                        //Saving the result into the database
                        editResult(regNumber, CAOne, CATwo, CAThree, Exam, subjectID, sessionID, termID, classID, classdemarcationID, total);

                        //Remove the row
                        //$(this).closest('tr').remove().draw(false);

                    });


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

        //Saving Result Score
        function editResult(regnumber, caone, catwo, cathree, exam, subjectid, sessionid, termid, classid, classdemarcationid, total) {

            $.ajax({
                type: "POST",
                url: 'functions/editResult.php',
                data: {
                    regnumber: regnumber,
                    caone: caone,
                    catwo: catwo,
                    cathree: cathree,
                    exam: exam,
                    subjectid: subjectid,
                    sessionid: sessionid,
                    termid: termid,
                    classid: classid,
                    classdemarcationid: classdemarcationid,
                    total: total
                },
                success: function(data) {

                    //Showing successfully saved.
                    if (data == "success") {
                        $('#success').show();
                        $('#msgSuccess').show().html("Result was successfully edited.");
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

        //Clicking upload result button
        $("#process").click(function() {


            var sessionID = $("#session").children("option:selected").val();
            var termID = $("#term").children("option:selected").val();
            var classID = $("#class").children("option:selected").val();
            var classdemarcationID = $("#ClassDemarcation").children("option:selected").val();
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
                    classdemarcationID: classdemarcationID,
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

                    }

                    if (returnfailed == "failed") {
                        alert('Error Occurred, Cannot fetch data from database, please Contact Admin.');
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
                    alert('Error Occurred, while getting position of the students, please Contact Admin.');
                }
            }); // End Ajax

        }); //End of Search Button


        //Clicking refresh page
        $("#refresh").click(function() {
            location.reload();
        }); //End of Search Button


        //Function inserting the result subject position
        function resultSubjectPosition(regnumber, subjectid, sessionid, termid, classid, classDemarcationID, total, grade, remark, position) {

            var theSamePosition = 0;

            //Loading Result Position
            $.ajax({
                type: "POST",
                async: false,
                url: 'functions/editSubjectPosition.php',
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

                    alert(data)

                    //Returning value of the same position
                    if (data == "theSamePosition") {
                        theSamePosition = 1
                    }

                    //Showing successfully saved.
                    if (data == "success") {
                        $('#success0').show();
                        $('#msgSuccess0').show().html("Result was uploaded successfully.");
                    }

                    //Showing successfully saved and some data already exist.
                    if (returnfailed == "DoesNotExist") {
                        $('#failed').show();
                        $('#msgFailed').show().html("The result for the selected session, term, class, class demarcation and subject has not been uploaded.");
                        return false;
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

            return theSamePosition

        } // Function ends here

    }); //Document Ready Ends
</script>
</body>

</html>