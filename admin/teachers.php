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
                                    <h4>Teachers</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="dashboard.php"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="managestudentprofile.php">Teachers</a>
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
                            <button id="create_teacher_modal_btn" class="btn btn-outline-info btn-sm"><i class="icofont icofont-ui-add"></i>New Teacher</i></button>
                            <div class="btn-group">
                                <button id="create_teacher_modal_btn" class="btn btn-outline-info btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont icofont-cubes"></i>Actions</button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#assign_class_modal">Assign Subject</a>
                                    <a class="dropdown-item" href="#">Assign Class</a>
                                </div>
                            </div>
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

                                <hr>

                                <div class="col-sm-12">

                                    <table id="teachers_table" class="display nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Firstname</th>
                                                <th>Middlename</th>
                                                <th>Surname</th>
                                                <th>Sex</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody id="teachers_table_body">

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

    <!-- Add Teacher modal -->
    <div class="modal fade" id="create_teacher_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="col-md-12 d-none msg_box" id="create_teacher_modal_msg_box">
                        <div class="alert icons-alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="icofont icofont-close-line-circled"></i>
                            </button>
                            <p><strong id="status"></strong> <span id="msg"></span> </p>
                        </div>
                    </div>

                    <div class="col-md-12 d-none" id="create_teacher_modal_spinner">
                        <div style="color: #E9BA64; font-size: 15px; text-align: center;">
                            <img src="assets/images/loader1.gif" />
                            <strong>...Please wait ....</strong>
                            <img src="assets/images/loader2.gif" />
                        </div>
                    </div>

                    <form id="create_teacher_form" action="">
                        <div class="col-sm-12 m-b-10">
                            <div class="form-group">
                                <input type="hidden" class="form-control form-control-primary" id="is_edit_teacher" value="0">

                            </div>

                            <div class="form-group">
                                <input type="hidden" class="form-control form-control-primary" id="teacher_id" value="0">
                            </div>

                            <div class="form-group">
                                <label for="txt_email" class="form-label font-weight-bold">Email</label>
                                <input type="email" class="form-control form-control-primary" id="txt_email" placeholder="Email">
                            </div>

                            <div class="form-group">
                                <label for="password" class="form-label font-weight-bold">Password</label>
                                <input type="password" class="form-control form-control-primary" id="password" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label for="txt_firstname" class="form-label font-weight-bold">Firstname</label>
                                <input type="text" class="form-control form-control-primary" id="txt_firstname" placeholder="Firstname">
                            </div>

                            <div class="form-group">
                                <label for="txt_surname" class="form-label font-weight-bold">Surname</label>
                                <input type="text" class="form-control form-control-primary" id="txt_surname" placeholder="Surname">
                            </div>

                            <div class="form-group">
                                <label for="txt_middlename" class="form-label font-weight-bold">Middlename</label>
                                <input type="text" class="form-control form-control-primary" id="txt_middlename" placeholder="Middlename">
                            </div>

                            <div class="form-group">
                                <label for="dob" class="form-label font-weight-bold">Date of Birth</label>
                                <input type="date" class="form-control form-control-primary" id="dob" placeholder="Date of Birth">
                            </div>

                            <div class="form-group">
                                <h6 class="font-weight-bold">Choose your gender</h6>
                                <div class="row">
                                    <div class="col-sm-4 offset-sm-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="sex" id="male" value="male" checked>
                                            <label class="form-check-label" for="male">Male</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="sex" id="female" value="female">
                                            <label class="form-check-label" for="female">Female</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="phone" class="form-label font-weight-bold">Phone</label>
                                <input type="phone" class="form-control form-control-primary" id="phone" placeholder="Phone">
                            </div>

                            <div class="form-group">
                                <label for="teacher_photo" class="form-label">Photo</label>
                                <input class="form-control" type="file" id="teacher_photo" accept="image/png, image/jpeg, image/jpg">
                            </div>

                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                    <input type="button" id="create_teacher_btn" value="Add" class="btn btn-primary waves-effect waves-light" />
                </div>
            </div>
        </div>
    </div>

    <!-- Assign class modal -->
    <div class="modal fade" id="assign_class_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Assign Class</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="col-md-12 d-none msg_box" id="assign_class_modal_msg_box">
                        <div class="alert icons-alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="icofont icofont-close-line-circled"></i>
                            </button>
                            <p><strong id="status"></strong> <span id="msg"></span> </p>
                        </div>
                    </div>

                    <div class="col-md-12 d-none" id="assign_class_modal_spinner">
                        <div style="color: #E9BA64; font-size: 15px; text-align: center;">
                            <img src="assets/images/loader1.gif" />
                            <strong>...Please wait ....</strong>
                            <img src="assets/images/loader2.gif" />
                        </div>
                    </div>

                    <form id="assign_class_form" action="">
                        <div class="col-sm-12 m-b-10">
                            <h5 class="name"></h5>
                            <p class="phone"></p>
                            <p class="email"></p>

                            <div class="form-group">
                                <input type="hidden" class="form-control form-control-primary teacher_id" id="" value="0">
                            </div>

                            <div class="form-group">
                                <label for="classes" class="form-label font-weight-bold">Class</label>
                                <select id="classes" placeholder="Assign a class...">

                                </select>
                            </div>

                            <!-- <div class="form-group">
                                <label for="demarcations_assign_class_modal" class="form-label font-weight-bold">Demarcation</label>
                                <select id="sel_demarcations_assign_class_modal" class="form-control form-control-primary" placeholder="Assign a class demarcation...">

                                </select>
                            </div> -->

                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                    <input type="button" id="assign_class_btn" value="Add" class="btn btn-primary waves-effect waves-light" />
                </div>
            </div>
        </div>
    </div>

    <!-- Assign subject modal -->
    <div class="modal fade" id="assign_subject_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Assign Subject</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="col-md-12 d-none msg_box" id="assign_subject_modal_msg_box">
                        <div class="alert icons-alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="icofont icofont-close-line-circled"></i>
                            </button>
                            <p><strong id="status"></strong> <span id="msg"></span> </p>
                        </div>
                    </div>

                    <div class="col-md-12 d-none" id="assign_subject_modal_spinner">
                        <div style="color: #E9BA64; font-size: 15px; text-align: center;">
                            <img src="assets/images/loader1.gif" />
                            <strong>...Please wait ....</strong>
                            <img src="assets/images/loader2.gif" />
                        </div>
                    </div>

                    <form id="assign_class_form" action="">
                        <div class="col-sm-12 m-b-10">
                            <h5 class="name"></h5>
                            <p class="phone"></p>
                            <p class="email"></p>

                            <div class="form-group">
                                <input type="hidden" class="form-control form-control-primary teacher_id" id="" value="0">
                            </div>

                            <div class="form-group">
                                <label for="subjects" class="form-label font-weight-bold">Subject</label>
                                <select id="subjects" placeholder="Assign a subject...">

                                </select>
                            </div>


                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                    <input type="button" id="assign_subject_btn" value="Add" class="btn btn-primary waves-effect waves-light" />
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

<!-- <script type="text/javascript" src="DataTables/datatables.min.js"></script> -->
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<script type="text/javascript" src="../lib/js_functions/utils.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />

</body>


<script>
    $(document).ready(function() {


        $.ajax({
            type: "POST",
            url: 'functions/getTeachers.php',

            success: function(response) {
                response = $.parseJSON(response);
                const data = response.data;

                $('#teachers_table').DataTable({
                    scrollX: true,
                    data: data,
                    columns: [{
                            data: 'sn'
                        },
                        {
                            data: 'firstname'
                        },
                        {
                            data: 'middlename'
                        },
                        {
                            data: 'surname'
                        },
                        {
                            data: 'sex'
                        },
                        {
                            data: 'email'
                        },
                        {
                            data: 'phone'
                        },
                        {
                            data: function(data, type, full) {
                                return `<td>
                                  <div class="btn-group">
                                    <button id="create_teacher_modal_btn" class="btn btn-outline-info btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icofont icofont-cubes"> Manage </i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item btn btn-outline-info assign_class_modal" data-id="${data.id}" data-row_index="${data.sn - 1}"><i class="icofont icofont-plus-circle"> Assign Class</i></a>

                                        <a class="dropdown-item btn btn-outline-info assign_subject_modal" data-id="${data.id}" data-row_index="${data.sn - 1}"><i class="icofont icofont-plus-circle"> Assign Subject</i></a>

                                        <div class="dropdown-divider"></div>
                                        
                                        <a class="dropdown-item btn btn-outline-info edit_teacher" data-id="${data.id}" data-row_index="${data.sn - 1}"><i class="icofont icofont-edit-alt"> Edit </i></a>
                                    </div>
                                  </div>
                                </td>`;
                            }
                        }
                    ],

                });

                registerEventHandlers();

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


        $('#create_teacher_modal_btn').click(function() {
            const modal = document.querySelector('#create_teacher_modal');
            modal.querySelector('.modal-title').textContent = 'New Admin User';

            $('#is_edit_teacher').val('0');
            $('#teacher_id').val("0");

            $('#create_teacher_modal').modal('show');
        });

        //Clicking the create_class_btn Button
        $('#create_teacher_btn').click(function() {
            const modal = document.querySelector('#create_teacher_modal');
            const spinner = modal.querySelector('#create_teacher_modal_spinner');

            //collect the filled in data
            isEdit = parseInt($('#is_edit_teacher').val());

            let formData = new FormData();
            let photo = $('#teacher_photo')[0].files[0];

            formData.append('teacher_id', $('#teacher_id').val());
            formData.append('email', $('#txt_email').val());
            formData.append('password', $('#password').val());
            formData.append('firstname', $('#txt_firstname').val());
            formData.append('surname', $('#txt_surname').val());
            formData.append('middlename', $('#txt_middlename').val());
            formData.append('sex', $('[name="sex"]:checked').val())
            formData.append('phone', $('#phone').val());
            formData.append('dob', $('#dob').val());
            formData.append('photo', photo);


            $.ajax({
                type: "POST",
                url: isEdit ? 'functions/updateTeacher.php' : 'functions/createTeacher.php',
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                success: function(response) {
                    response = $.parseJSON(response);
                    if (response.status == 'success') {
                        const data = response.data;
                        $('#teachers_table').DataTable().clear().rows.add(data).draw();

                        modal.scrollTo({
                            top: 0,
                            left: 0,
                            behavior: 'smooth'
                        });

                        utils.updateMessageBox(modal, response.status, isEdit);

                        registerEventHandlers();
                    }
                },
                beforeSend: function() {
                    // Code to display spinner
                    $('#create_teacher_modal_spinner').show();
                },
                complete: function() {
                    // Code to hide spinner.
                    $('#create_teacher_modal_spinner').hide();
                },
                error: function(result) {
                    alert('Error Occurred, Please Contact Admin.');
                }
            }); // End Ajax

        });

        $('#create_teacher_modal').on('show.bs.modal', function(e) {

        });

        $('#create_teacher_modal').on('hidden.bs.modal', function(e) {
            $('#create_teacher_form').trigger('reset');
            const messageBox = document.querySelector('#create_teacher_modal_msg_box');

            $('#txt_username').removeAttr('disabled');
            $('#male').removeAttr('disabled');
            $('#female').removeAttr('disabled');

            utils.clearModal(messageBox);
        });

        $('#assign_class_btn').click(function() {
            const modal = document.querySelector('#assign_class_modal');
            const spinner = modal.querySelector('#assign_class_modal_spinner');

            let formData = new FormData();
            formData.append('teacher_id', modal.querySelector('.teacher_id').value);
            formData.append('class_id', modal.querySelector('#classes').value);
            // formData.append('demarcation_id', modal.querySelector('#sel_demarcations_assign_class_modal').value);

            $.ajax({
                type: "POST",
                url: 'functions/assignClassToTeacher.php',
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                success: function(response) {
                    response = $.parseJSON(response);
                    if (response.status == 'success') {
                        const data = response.data;

                        utils.updateMessageBox(modal, response.status, false);

                    }
                },
                beforeSend: function() {
                    // Code to display spinner
                    $('#create_teacher_modal_spinner').show();
                },
                complete: function() {
                    // Code to hide spinner.
                    $('#create_teacher_modal_spinner').hide();
                },
                error: function(result) {
                    alert('Error Occurred, Please Contact Admin.');
                }
            }); // End Ajax

        });

        $('#assign_class_modal').on('hidden.bs.modal', function(e) {
            $('#assign_class_form').trigger('reset');
            const messageBox = document.querySelector('#assign_class_modal_msg_box');
            utils.clearModal(messageBox);
        });

        $('#assign_subject_modal').on('hidden.bs.modal', function(e) {
            $('#assign_subject_form').trigger('reset');
            const messageBox = document.querySelector('#assign_subject_modal_msg_box');
            utils.clearModal(messageBox);
        });

        // $('#classes').change(function(e) {
        //     let classID = $(this).children("option:selected").val();
        //     getClassDemarcations(classID);

        // });

        $('#assign_subject_btn').click(function(e) {
            const modal = document.querySelector('#assign_subject_modal');
            const spinner = modal.querySelector('#assign_subject_modal_spinner');

            let formData = new FormData();
            formData.append('teacher_id', modal.querySelector('.teacher_id').value);
            formData.append('subject_id', modal.querySelector('#subjects').value);

            $.ajax({
                type: "POST",
                url: 'functions/assignSubjectToTeacher.php',
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                success: function(response) {
                    response = $.parseJSON(response);
                    if (response.status == 'success') {
                        const data = response.data;

                        utils.updateMessageBox(modal, response.status, false);

                    }
                },
                beforeSend: function() {
                    // Code to display spinner
                    $('#create_teacher_modal_spinner').show();
                },
                complete: function() {
                    // Code to hide spinner.
                    $('#create_teacher_modal_spinner').hide();
                },
                error: function(result) {
                    alert('Error Occurred, Please Contact Admin.');
                }
            }); // End Ajax

        });


        function registerEventHandlers() {
            $('.edit_teacher').click(function(e) {
                const teacher = $('#teachers_table').DataTable().row(e.currentTarget.dataset.row_index).data();
                const modal = document.querySelector('#create_teacher_modal');
                modal.querySelector('.modal-title').textContent = `Modify User`;

                $("#is_edit_teacher").val('1');
                $("#teacher_id").val(teacher.id);

                $('#txt_username').val(teacher.username);
                $('#txt_username').attr('disabled', 'disabled');
                $('#password').val(teacher.password);
                $('#txt_firstname').val(teacher.firstname);
                $('#txt_surname').val(teacher.surname);
                $('#txt_middlename').val(teacher.middlename);
                $('#phone').val(teacher.phone);

                $(`#${teacher.sex}`).attr('checked', 'checked').trigger('click');
                $('#male').attr('disabled', 'disabled');
                $('#female').attr('disabled', 'disabled');

                $('#create_teacher_modal').modal('show');
            });

            $('.assign_class_modal').click(function(e) {
                const teacher = $('#teachers_table').DataTable().row(e.currentTarget.dataset.row_index).data();
                const modal = document.querySelector('#assign_class_modal');
                modal.querySelector('.name').innerHTML = `<span class="font-weight-bold">${teacher.firstname} ${teacher.surname}</span>`;
                const sel = modal.querySelector('#classes');
                modal.querySelector('.teacher_id').value = teacher.id;

                $.ajax({
                    type: "GET",
                    url: 'functions/getClasses.php',

                    success: function(response) {
                        response = $.parseJSON(response);
                        const data = response.data;
                        let option = document.createElement('option');
                        $(sel).append(option);

                        utils.createSelElement(sel, data, 'class');

                        $('#classes').selectize({
                            sortField: 'text'
                        });

                        
                        let classID = $('#classes').children("option:selected").val();
                        getClassDemarcations(classID);
                        
                        $('#assign_class_modal').modal('show');
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

            });

            $('.assign_subject_modal').click(function(e) {
                const teacher = $('#teachers_table').DataTable().row(e.currentTarget.dataset.row_index).data();
                const modal = document.querySelector('#assign_subject_modal');
                modal.querySelector('.name').innerHTML = `<span class="font-weight-bold">${teacher.firstname} ${teacher.surname}</span>`;
                const sel = modal.querySelector('#subjects');
                modal.querySelector('.teacher_id').value = teacher.id;

                $.ajax({
                    type: "GET",
                    url: 'functions/getAllSubjects.php',

                    success: function(response) {
                        response = $.parseJSON(response);
                        const data = response.data;
                        let option = document.createElement('option');
                        $(sel).append(option);

                        utils.createSelElement(sel, data, 'subject');

                        $('#subjects').selectize({
                            sortField: 'text'
                        });

                        $('#assign_subject_modal').modal('show');
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
        }


        function getClassDemarcations(classID, reloadTable) {
            $.ajax({
                type: 'post',
                url: 'functions/getClassDemarcations.php',
                data: {
                    classID: classID
                },
                
                success: function(response) {
                    response = $.parseJSON(response);
                    const selClassDemarcations = document.querySelector('#sel_demarcations_assign_class_modal');
                    utils.createSelElement(selClassDemarcations, response.data, 'classdemarcation');

                    // $('#sel_demarcations_assign_class_modal').selectize({
                    //     sortField: 'text'
                    // });

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
        }


    }); //Document Ready Ends
</script>