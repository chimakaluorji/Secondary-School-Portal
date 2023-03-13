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
                                    <h4>Class Demarcations</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="dashboard.php"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="managestudentprofile.php">Class Demarcations</a>
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
                            <h5><button id="create_class_demarcation_modal_btn" class="btn btn-outline-info btn-sm"><i class="icofont icofont-ui-add"></i>New Class Demarcation</button></h5>
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

                                <!-- Force next columns to break to new line -->
                                <div class="w-100"></div>

                                <div class="col-sm-4 col-xl-6 m-b-10">
                                    <label for="sel_classes" class="form-label font-weight-bold">Select Class</label>
                                    <select id="sel_classes" class="form-control form-control-primary">

                                    </select>
                                </div>

                                <hr>

                                <div class="col-sm-12">

                                    <table id="class_demarcation_table" class="display nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Demarcations</th>
                                                <th>Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody id="class_demarcation_table_body">
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

    <!-- Add class demarcation modal -->
    <div class="modal fade" id="create_class_demarcation_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="col-md-12 d-none msg_box" id="create_class_demarcation_modal_msg_box">
                        <div class="alert icons-alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="icofont icofont-close-line-circled"></i>
                            </button>
                            <p><strong id="status"></strong> <span id="msg"></span> </p>
                        </div>
                    </div>

                    <div class="col-md-12 d-none" id="create_class_demarcation_modal_spinner">
                        <div style="color: #E9BA64; font-size: 15px; text-align: center;">
                            <img src="assets/images/loader1.gif" />
                            <strong>...Please wait ....</strong>
                            <img src="assets/images/loader2.gif" />
                        </div>
                    </div>

                    <form id="create_class_demarcation_form" action="">
                        <div class="col-sm-12 m-b-10">
                            <div class="form-group">
                                <input type="hidden" class="form-control form-control-primary" id="is_edit_class_demarcation" value="0">

                            </div>

                            <div class="form-group">
                                <input type="hidden" class="form-control form-control-primary" id="class_demarcation_id" value="0">
                            </div>

                            <div class="form-group">
                                <label for="sel_classes_modal" class="form-label font-weight-bold">Select Class</label>
                                <select id="sel_classes_modal" class="form-control form-control-primary">
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="txt_class_demarcation" class="form-label font-weight-bold">Demarcation</label>
                                <input type="text" class="form-control form-control-primary" id="txt_class_demarcation" placeholder="class demarcation">

                            </div>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                    <input type="button" id="create_class_demarcation_btn" value="Add" class="btn btn-primary waves-effect waves-light" />
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
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<script type="text/javascript" src="../lib/js_functions/utils.js"></script>

</body>


<script>
    $(document).ready(function() {

        $.ajax({
            type: "POST",
            url: 'functions/getClasses.php',

            success: function(response) {
                response = $.parseJSON(response);
                const selClass = document.querySelector('#sel_classes');
                const selClassModal = document.querySelector('#sel_classes_modal');
                utils.createSelElement(selClass, response.data, 'class');
                utils.createSelElement(selClassModal, response.data, 'class');

            },
            beforeSend: function() {
                // Code to display spinner
                $('#spinner').show();
            },
            complete: function() {
                // Code to hide spinner.
                $('#spinner').hide();

                const classID = document.querySelector('#sel_classes').value;
                getClassDemarcations(classID, false);

            },
            error: function(result) {
                alert('Error Occurred, Please Contact Admin.');
            }
        }); // End Ajax

        $('#sel_classes').change(function() {
            let classID = $(this).children("option:selected").val();

            getClassDemarcations(classID);

        });

        //Clicking the create_class_demarcation_btn Button
        $('#create_class_demarcation_btn').click(function() {
            const modal = document.querySelector('#create_class_demarcation_modal');
            const spinner = modal.querySelector('#create_class_demarcation_modal_spinner');

            //collect the filled in data
            const isEdit = parseInt($('#is_edit_class_demarcation').val());
            const classID = document.querySelector('#sel_classes_modal').value;
            const classDemarcationID = $('#class_demarcation_id').val();
            const classDemarcation = $("#txt_class_demarcation").val();


            $.ajax({
                type: "POST",
                url: 'functions/createClassDemarcation.php',
                url: isEdit ? 'functions/updateClassDemarcation.php' : 'functions/createClassDemarcation.php',
                data: {
                    classID: classID,
                    classDemarcationID: classDemarcationID,
                    classDemarcation: classDemarcation
                },
                success: function(response) {
                    getClassDemarcations(classID);
                    utils.updateMessageBox(modal, $.parseJSON(response).status, isEdit);

                },
                beforeSend: function() {
                    // Code to display spinner
                    $('#create_class_modal_spinner').show();
                },
                complete: function() {
                    // Code to hide spinner.
                    $('#create_class_modal_spinner').hide();
                },
                error: function(result) {
                    alert('Error Occurred, Please Contact Admin.');
                }
            }); // End Ajax

        });

        $('#create_class_modal_btn').click(function() {
            $('#create_class_modal').modal('show')
        });

        $('#create_class_demarcation_modal_btn').click(function(e) {
            const modal = document.querySelector('#create_class_demarcation_modal');
            modal.querySelector('.modal-title').textContent = 'New Class Demarcation';

            $("#is_edit_class_demarcation").val('0');
            $('#class_demarcation_id').val('0');

            $('#create_class_demarcation_modal').modal('show')

        });

        $('#create_class_demarcation_modal').on('show.bs.modal', function(e) {
            const classID = document.querySelector('#sel_classes').value;
            const isEdit = parseInt(document.querySelector('#is_edit_class_demarcation').value);
            const sel = document.querySelector('#sel_classes_modal');
            const count = sel.childElementCount;
            for (let i = 0; i < count; i++) {
                if (sel.children[i].value == classID) {
                    sel.children[i].selected = true;
                }
            }
        });

        $('#create_class_demarcation_modal').on('hidden.bs.modal', function(e) {
            $('#create_class_demarcation_form').trigger('reset');
            const messageBox = document.querySelector('#create_class_demarcation_modal_msg_box');
            utils.clearModal(messageBox);
        });

        function registerEventHandlers() {
            $('.edit_classdemarcation').click(function(e) {
                const demarcation = $('#class_demarcation_table').DataTable().row(e.currentTarget.dataset.row_index).data();
                const modal = document.querySelector('#create_class_demarcation_modal');
                modal.querySelector('.modal-title').textContent = 'Modify Class Demarcation';

                $("#is_edit_class_demarcation").val('1');
                $('#class_demarcation_id').val(demarcation.id);

                $('#txt_class_demarcation').val(demarcation.classdemarcation);

                $('#create_class_demarcation_modal').modal('show');
            });
        }

        function getClassDemarcations(classID, reloadTable = true) {
            $.ajax({
                type: "POST",
                url: 'functions/getClassDemarcations.php',
                data: {
                    classID: classID
                },
                success: function(response) {
                    response = $.parseJSON(response);

                    if (response.status == 'success') {
                        const data = response.data;

                        if (!reloadTable) {
                            $('#class_demarcation_table').DataTable({
                                scrollX: true,
                                data: data,
                                columns: [{
                                        data: 'sn'
                                    },
                                    {
                                        data: 'classdemarcation'
                                    },
                                    {
                                        data: function(data, type, full) {
                                            return `<td><button type="button" class="btn btn-success btn-outline-success edit_classdemarcation" data-id="${data.id}" data-row_index="${data.sn - 1}"><i class="icofont icofont-check-circled">Manage</button></td>`;
                                        }
                                    }
                                ],

                            });
                        } else {
                            $('#class_demarcation_table').DataTable().clear().rows.add(data).draw();
                        }

                        registerEventHandlers();

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
                    alert('Error Occurred while loading class dermaction, Please Contact Admin.');
                }
            });

        }



    }); //Document Ready Ends
</script>