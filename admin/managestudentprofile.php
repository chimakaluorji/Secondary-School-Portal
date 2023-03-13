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
                                <div class="d-inline">
                                    <h4>Student's Profile</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="dashboard.php"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="managestudentprofile.php">Student's Profile</a>
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
                        <div class="col-sm-4 col-xl-6 m-b-10">
                            <select id="session" class="form-control form-control-primary">
                                <!-- <option value="0">--Please Select Session--</option> -->
                                <?php
                                $project = new project();
                                $retSession = $project->getSession();
                                foreach ($retSession as $key => $value) {
                                ?>
                                    <option value="<?php echo $value['id']; ?>"><?php echo $value["session"]; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-sm-12">

                            <table id="example" class="display nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Reg. No.</th>
                                        <th>Surname</th>
                                        <th>First Name</th>
                                        <th>Mid Name</th>
                                        <th>Class</th>
                                        <th>Class D</th>
                                        <th>Photo</th>
                                        <th>Manage</th>
                                        <th>Print</th>
                                    </tr>
                                </thead>
                                <tbody id="table">
                                </tbody>
                            </table>

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

</body>


<script>
    $(document).ready(function() {


        var sessionID = $("#session").children("option:selected").val();
        loadTable(sessionID);

        //Populationg Class Demarcation
        $("#session").change(function() {
            var _sessionID = $("#session").children("option:selected").val();
            $('#table').empty();
            loadTable(_sessionID);
            $('#spinner').hide();
        });

        /*$(document).ready( function () {
            $('#myTable').DataTable();
        } );*/


        function loadTable(sessionID) {
            $.ajax({
                type: "POST",
                url: 'functions/getStudentBySessionID.php',
                data: {
                    sessionID: sessionID
                },
                success: function(data) {

                    data = $.parseJSON(data);

                    $('#table').empty();

                    for (var i = 0; i < data.length; i++) {
                        var table = '<tr>';
                        table += '<td>' + data[i].regnumber + '</td>';
                        table += '<td>' + data[i].surname + '</td>';
                        table += '<td>' + data[i].firstname + '</td>';
                        table += '<td>' + data[i].middlename + '</td>';
                        table += '<td>' + data[i].class + '</td>';
                        table += '<td>' + data[i].classdemarcation + '</td>';
                        table += '<td><img class="img-fluid" src="' + data[i].photourl + '" alt="Student" width="60px" height="60px" /></td>';
                        table += '<td><button type="button" class="btn btn-success btn-outline-success" data-toggle="modal" data-target="#modal-default" data-id="' + data[i].id + '"><i class="icofont icofont-check-circled">Manage</button></td>';
                        table += '<td><button type="button" class="btn btn-primary btn-outline-primary" data-toggle="modal" data-target="#modal-default" data-id="' + data[i].id + '"><i class="icofont icofont-user-alt-3">Print</button></td>';
                        table += '</tr>';

                        $('#table').append(table);
                    }

                    //Init table
                    $('#example').DataTable({
                        "scrollX": true
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


    }); //Document Ready Ends
</script>