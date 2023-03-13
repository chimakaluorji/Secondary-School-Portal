<?php
include('header.php');
include('functions/functions.php');
?>

<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline col-md-12">
                                    <h4>Run Student's Class Position</h4>
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
                            <h5>Run Student's Class Position</h5>
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
                                <input type="button" id="submit" value="Run Student's Class Position" class="btn btn-grd-primary btn-round" />
                            </div>
                            <br><br>
                            <div class="col-md-6">
                                <input type="button" id="refresh" value="Refresh" class="btn btn-grd-primary btn-round" />
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
                    response = $.parseJSON(response)
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
                    alert('Error Occurred while loading class dermaction, Please Contact Admin.');
                }
            });

        }); //End ClassDermacation


        //Declaring table variable
        $("#submit").click(function() {
            //Loading the table  
            runClassPosition();
        }); //End of Search Button


        var read = ""


        function runClassPosition() {
            var sessionID = $("#session").children("option:selected").val();
            var termID = $("#term").children("option:selected").val();
            var classID = $("#class").children("option:selected").val();
            var classdemarcationID = $("#ClassDemarcation").children("option:selected").val();


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

            //Loading Subject and Subject Position
            $.ajax({
                type: "POST",
                url: 'functions/getResultForPositioning.php',
                data: {
                    sessionID: sessionID,
                    termID: termID,
                    classID: classID,
                    classdemarcationID: classdemarcationID
                },
                success: function(data) {

                    //Showing error is case if the data was not successfully saved.
                    data = $.parseJSON(data);

                    var returnfailed = data[0].sTotal;

                    if (returnfailed != "failed") {

                        var position = 1;

                        for (var i = 0; i < data.length; i++) {

                            //Calling the function to check if the total score is the same in order to assign the same positon to the same students
                            var theSamePosition = resultPosition(data[i].regnumber, sessionID, termID, classID, classdemarcationID, data[i].sTotal, data[i].grade, data[i].remark, position, data[i].average);

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
                    $('#spinner0').show();
                },
                complete: function() {
                    // Code to hide spinner.
                    $('#spinner0').hide();
                },
                error: function(result) {
                    alert('Error Occurred, while getting position of the students, please Contact Admin.');
                }
            }); // End Ajax


        }

        //Clicking refresh page
        $("#refresh").click(function() {
            location.reload();
        }); //End of Search Button


        //Function inserting the result subject position
        function resultPosition(regnumber, sessionid, termid, classid, classdemarcationid, total, grade, remark, position, average) {

            var theSamePosition = 0;

            //Loading Result Position
            $.ajax({
                type: "POST",
                async: false,
                url: 'functions/savePosition.php',
                data: {
                    regnumber: regnumber,
                    sessionid: sessionid,
                    termid: termid,
                    classid: classid,
                    classdemarcationid: classdemarcationid,
                    total: total,
                    grade: grade,
                    remark: remark,
                    position: position,
                    average: average
                },
                success: function(data) {

                    //Returning value of the same position
                    if (data == "theSamePosition") {
                        theSamePosition = 1
                    }

                    //Showing successfully saved.
                    if (data == "success") {
                        $('#success').show();
                        $('#msgSuccess').show().html("Result was finalized successfully.");
                    }

                    //Showing error is case if the data was not successfully saved.
                    if (data == "failed") {
                        $('#success').show();
                        $('#msgSuccess').show().html("Result have been finalized before now.");
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


        //Function checking if the score has the same total
        function checkIfTotalIsTheSame(regnumber, sessionid, termid, classid, classdemarcationid, total, grade, remark, position, average) {

            //Loading Result Position
            $.ajax({
                type: "POST",
                url: 'functions/checkIfTotalIsTheSameForResult.php',
                data: {
                    total: total,
                    sessionid: sessionid,
                    termid: termid,
                    classid: classid,
                    classdemarcationid: classdemarcationid
                },
                success: function(data) {

                    data = $.parseJSON(data);

                    var ret_result = data[0].position

                    if (ret_result == "failed") {
                        //Inserting subject position if the total score does not exist in the table
                        resultPosition(regnumber, sessionid, termid, classid, classdemarcationid, total, grade, remark, position, average);
                    }

                    if (ret_result != "failed") {
                        //Inserting subject position if the total score already exist in the table
                        resultPosition(regnumber, sessionid, termid, classid, classdemarcationid, total, grade, remark, data[0].position, average);
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

        }; // Function ends here

    }); //Document Ready Ends
</script>

</body>

</html>