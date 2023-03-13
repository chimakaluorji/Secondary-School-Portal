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
                                    <h4>School Sessions</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="dashboard.php"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="managestudentprofile.php">School Sessions</a>
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
                            <h5><button id="create_session_modal_btn" class="btn btn-outline-info btn-sm"><i class="icofont icofont-ui-add"></i>New Session</button></h5>
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

                                <div class="col-md-12 d-none msg_box">
                                    <div class="alert icons-alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="icofont icofont-close-line-circled"></i>
                                        </button>
                                        <p><strong id="status"></strong> <span id="msg"></span> </p>
                                    </div>
                                </div>

                                <div class="col-md-12 d-none" id="create_session_modal_spinner">
                                    <div style="color: #E9BA64; font-size: 15px; text-align: center;">
                                        <img src="assets/images/loader1.gif" />
                                        <strong>...Please wait ....</strong>
                                        <img src="assets/images/loader2.gif" />
                                    </div>
                                </div>

                                <!-- Force next columns to break to new line -->
                                <div class="w-100"></div>


                                <div class="col-sm-12">

                                    <table id="sessions_table" class="display nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Session</th>
                                                <th>Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody id="sessions_table_body">
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

    <!-- Add/Edit session modal -->
    <div class="modal fade" id="create_session_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="col-md-12 d-none msg_box" id="create_session_modal_msg_box">
                        <div class="alert icons-alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="icofont icofont-close-line-circled"></i>
                            </button>
                            <p><strong id="status"></strong> <span id="msg"></span> </p>
                        </div>
                    </div>

                    <div class="col-md-12 d-none" id="create_session_modal_spinner">
                        <div style="color: #E9BA64; font-size: 15px; text-align: center;">
                            <img src="assets/images/loader1.gif" />
                            <strong>...Please wait ....</strong>
                            <img src="assets/images/loader2.gif" />
                        </div>
                    </div>

                    <form id="create_session_form" action="">
                        <div class="col-sm-12 m-b-10">
                            <div class="form-group">
                                <input type="hidden" class="form-control form-control-primary" id="is_edit_session" value="0">

                            </div>

                            <div class="form-group">
                                <input type="hidden" class="form-control form-control-primary" id="session_id" value="0">
                            </div>

                            <div class="form-group">
                                <label for="session_name" class="form-label font-weight-bold">Session</label>
                                <input type="text" class="form-control form-control-primary" id="session_name" placeholder="session">

                            </div>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                    <input type="button" id="create_session_btn" value="Add" class="btn btn-primary waves-effect waves-light" />
                </div>
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
<!-- <script type="26db538759965537bf7cfdb8-text/javascript" src="bower_components/jquery/js/jquery.min.js"></script> -->
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

<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<script type="text/javascript" src="../lib/js_functions/utils.js"></script>



</body>
<script>
    $(document).ready(function() {
        $.ajax({
            type: "POST",
            url: 'functions/getSessions.php',
            success: function(response) {

                response = $.parseJSON(response);

                if (response.status == 'success') {
                    data = response.data;

                    $('#sessions_table').DataTable({
                        scrollX: true,
                        data: data,
                        columns: [{
                                data: 'sn'
                            },
                            {
                                data: 'session'
                            },
                            {
                                data: function(data, type, full) {
                                    return `<td><button type="button" class="btn btn-success btn-outline-success edit_session" data-id="${data.id}" data-row_index="${data.sn - 1}"><i class="icofont icofont-check-circled">Manage</button></td>`;
                                }
                            }
                        ],

                    });

                    registerEventHandlers();

                }

                if (response.status == 'failed') {
                    console.log(response);
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
            error: function(request, status, error) {
                alert('Error Occurred One, Please Contact Admin. ERROR CODE: GET SESSION ' + request.responseText);
            }
        }); // End Ajax



        //Clicking the create_session_btn Button
        $('#create_session_btn').click(function() {
            const modal = document.querySelector('#create_session_modal');
            const spinner = modal.querySelector('#create_session_modal_spinner');

            //collect the filled in data
            const isEdit = parseInt($("#is_edit_session").val());
            const sessionName = $("#session_name").val();
            const sessionID = $('#session_id').val();

            $.ajax({
                type: "POST",
                url: isEdit ? 'functions/updateSession.php' : 'functions/createSession.php',
                data: {
                    sessionName: sessionName,
                    sessionID: sessionID
                },
                success: function(response) {
                    response = $.parseJSON(response);

                    if (response.status == 'success') {
                        const data = response.data;

                        $('#sessions_table').DataTable().clear().rows.add(data).draw();


                        utils.updateMessageBox(modal, response.status, isEdit);

                        registerEventHandlers();
                    }

                    if (response.status == 'fail') {
                        utils.updateMessageBox(modal, response.status, isEdit);

                    }
                },
                beforeSend: function() {
                    // Code to display spinner
                    spinner.classList.remove('d-none');
                },
                complete: function() {
                    // Code to hide spinner.
                    spinner.classList.add('d-none');
                },
                error: function(result) {
                    alert('Error Occurred, Please Contact Admin. ERROR CODE: 2');
                }
            }); // End Ajax

        });

        $('#create_session_modal_btn').click(function() {
            const modal = document.querySelector('#create_session_modal');
            modal.querySelector('.modal-title').textContent = 'New Session';

            $("#is_edit_session").val('0');
            $('#session_id').val("0");

            $('#create_session_modal').modal('show')
        });

        $('#create_session_modal').on('hidden.bs.modal', function(e) {
            $('#create_session_form').trigger('reset');
            const messageBox = document.querySelector('#create_session_modal_msg_box');
            utils.clearModal(messageBox);
        });

        function registerEventHandlers() {
            $('.edit_session').click(function(e) {
                const session = $('#sessions_table').DataTable().row(e.currentTarget.dataset.row_index).data();
                const modal = document.querySelector('#create_session_modal');
                modal.querySelector('.modal-title').textContent = 'Modifiy Session';

                $("#is_edit_session").val('1');
                $('#session_id').val(session.id);

                $('#session_name').val(session.session);

                $('#create_session_modal').modal('show');
            });
        }

    }); //Document Ready Ends
</script>