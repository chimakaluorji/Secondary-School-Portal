<?php
include('header.php');
//include('functions/functions.php');
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
                                    <h4>Check Student Result</h4>
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
                            <h5>Check Student Result</h5>
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

                            <div class="col-md-6">
                                <input type="button" id="getResult" value="Get Result" class="btn btn-grd-primary btn-round" />
                            </div>
                            <!-- <div id="dZUploadProfile" class="dropzone">
<div class="dz-default dz-message">
    Browse or Drop an excel file here. 
</div>
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
                            <div class="col-sm-12" id="tableShow" style="display: none;">

                                <table id="example" class="display nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Subject</th>
                                            <th>CA One</th>
                                            <th>CA Two</th>
                                            <th>CA Three</th>
                                            <th>Exam</th>
                                            <th>Total</th>
                                            <th>Grade</th>
                                            <th>Remark</th>
                                        </tr>
                                    </thead>
                                    <!-- <tbody id="table">
        </tbody> -->
                                </table>
                                <br><br>
                                <div class="col-sm-12 col-md-12 col-xl-12">
                                    <div class="alert alert-primary">
                                        <strong>Total: </strong> <span id="total"></span> <br>
                                        <strong>Position: </strong> <span id="position"></span> <br>
                                        <strong>Average: </strong> <span id="average"></span> <br>
                                        <strong>Grade: </strong> <span id="grade"></span> <br>
                                        <strong>Remark: </strong> <span id="remark"></span>
                                    </div>
                                </div>
                                <br><br>
                                <div class="col-md-6">
                                    <input type="button" id="print" value="Print Result" class="btn btn-grd-primary btn-round" />
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

<!-- Seems like dead code - might be removed in the future -->
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
                url: 'functions/getClassDemarcation.php',
                data: {
                    _classID: _classID
                },
                success: function(data) {

                    data = $.parseJSON(data);

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

        //Getting reg. number
        var queryDict = {};
        location.search.substr(1).split("&").forEach(function(item) {
            queryDict[item.split("=")[0]] = item.split("=")[1]
        })
        var regnumber = queryDict['e'];

        //Declaring table variable
        var dtexample = 'undefined';
        dtexample = $("#example").DataTable({
            "scrollX": true, //Horizontal Scrollable
            "bPaginate": false, //hide pagination
            "bFilter": false, //hide Search bar
            "bInfo": false, // hide showing entries
        });

        $("#getResult").click(function() {
            //Loading the table  
            loadTable(regnumber);
        }); //End of Search Button



        var read = ""

        function loadTable(regnumber) {

            //Retriving values from session, term, class, classdemarcation and subject dropdown lists
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
                url: "functions/getStudentResult.php",
                data: {
                    sessionID: sessionID,
                    classID: classID,
                    classdemarcationID: classdemarcationID,
                    termID: termID,
                    regnumber: regnumber
                },
                success: function(data) {

                    data = $.parseJSON(data);

                    var returnfailed = data[0].id;

                    if (returnfailed != "failed") { //Checking if data is returned from the database

                        $('#tableShow').show();
                        $('#failed').hide();

                        //Clearing the table
                        dtexample.clear();

                        if (dtexample != 'undefined') {

                            for (var i = 0; i < data.length; i++) {
                                dtexample.row.add([
                                    data[i].subject,
                                    data[i].caone,
                                    data[i].catwo,
                                    data[i].cathree,
                                    data[i].exam,
                                    data[i].total,
                                    data[i].grade,
                                    data[i].remark,
                                ]).draw();
                            }
                        }


                        //Loading student position
                        getStudentPosition(regnumber, sessionID, termID, classID, classdemarcationID);

                    } else {
                        $('#tableShow').hide();

                        //Clearing the table
                        dtexample.clear();

                        $('#failed').show();
                        $('#msgFailed').show().html("The student do not have any result for the selected session, term, class and classdemarcation");
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


        //Getting Student's Position
        function getStudentPosition(regnumber, sessionid, termid, classid, classdemarcationid) {

            $.ajax({
                type: "POST",
                url: 'functions/getStudentPosition.php',
                data: {
                    regnumber: regnumber,
                    sessionid: sessionid,
                    termid: termid,
                    classid: classid,
                    classdemarcationid: classdemarcationid
                },
                success: function(data) {

                    data = $.parseJSON(data);

                    //Showing error is case if the data was not successfully saved.
                    var returnfailed = data[0].total;

                    if (returnfailed != "failed") {

                        for (var i = 0; i < data.length; i++) {
                            $('#total').show().html(data[i].total);
                            $('#position').show().html(data[i].position);
                            $('#grade').show().html(data[i].grade);
                            $('#remark').show().html(data[i].remark);
                            $('#average').show().html(data[i].average);
                        }
                    } else {
                        $('#failed').show();
                        $('#msgFailed').show().html("Error Occurred while fetching student's position");
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
                error: function(xhr, status, error) {
                    alert('Error Occurred, Please Contact Admin.' + xhr.responseText);
                }
            }); // End Ajax

        } // End Function

        //Clicking upload result button
        $("#print").click(function() {
            //Retriving values from session, term, class, classdemarcation and subject dropdown lists
            var sessionID = $("#session").children("option:selected").val();
            var termID = $("#term").children("option:selected").val();
            var classID = $("#class").children("option:selected").val();
            var classdemarcationID = $("#ClassDemarcation").children("option:selected").val();

            //Opening Print Result Dialog box
            window.open('PrintResult.php?e=' + regnumber + '&sessionid=' + sessionID + '&termid=' + termID + '&classid=' + classID + '&classdemarcationid=' + classdemarcationID, '_blank', 'width=1100,height=700');

            return false;
        }); //End of Search Button

    }); //Document Ready Ends
</script>

</body>

</html>