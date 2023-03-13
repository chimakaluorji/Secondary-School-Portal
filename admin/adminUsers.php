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
                                    <h4>Admin Users</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="dashboard.php"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="managestudentprofile.php">Admin Users</a>
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
                            <h5><button id="create_admin_user_modal_btn" class="btn btn-outline-info btn-sm"><i class="icofont icofont-ui-add"></i>New Admin User</button></h5>
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

                                    <table id="admin_users_table" class="display nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Firstname</th>
                                                <th>Middlename</th>
                                                <th>Surname</th>
                                                <th>Username</th>
                                                <th>Phone</th>
                                                <th>Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody id="admin_users_table_body">

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

    <!-- Add Admin User modal -->
    <div class="modal fade" id="create_admin_user_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="col-md-12 d-none msg_box" id="create_admin_user_modal_msg_box" >
                        <div class="alert icons-alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="icofont icofont-close-line-circled"></i>
                            </button>
                            <p><strong id="status"></strong> <span id="msg"></span> </p>
                        </div>
                    </div>

                    <div class="col-md-12 d-none" id="create_admin_user_modal_spinner">
                        <div style="color: #E9BA64; font-size: 15px; text-align: center;">
                            <img src="assets/images/loader1.gif" />
                            <strong>...Please wait ....</strong>
                            <img src="assets/images/loader2.gif" />
                        </div>
                    </div>

                    <form id="create_admin_user_form" action="">
                        <div class="col-sm-12 m-b-10">
                            <div class="form-group">
                                <input type="hidden" class="form-control form-control-primary" id="is_edit_admin_user" value="0">
                            
                            </div>

                            <div class="form-group">
                                <input type="hidden" class="form-control form-control-primary" id="admin_user_id" value="0">
                            </div>

                            <div class="form-group">
                                <label for="txt_username" class="form-label font-weight-bold">Username</label>
                                <input type="text" class="form-control form-control-primary" id="txt_username" placeholder="Username">
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
                                <label for="phone" class="form-label font-weight-bold">Phone</label>
                                <input type="phone" class="form-control form-control-primary" id="phone" placeholder="Phone">
                            </div>

                            <div class="form-group">
                                <label for="admin_user_photo" class="form-label">Photo</label>
                                <input class="form-control" type="file" id="admin_user_photo" accept="image/png, image/jpeg, image/jpg">
                            </div>

                        </div>                    
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                    <input type="button" id="create_admin_user_btn" value="Add" class="btn btn-primary waves-effect waves-light" />
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

</body>


<script>
    $(document).ready(function() {


        $.ajax({
                type: "POST",
                url: 'functions/getAdminusers.php',

                success: function(response) {
                    response = $.parseJSON(response);
                    const data = response.data;

                    $('#admin_users_table').DataTable( {
                        scrollX: true,
                        data: data,
                        columns: [
                            { data: 'sn' },
                            { data: 'firstname' },
                            { data: 'middlename' },
                            { data: 'surname' },
                            { data: 'username' },
                            { data: 'phonenumber' },
                            { data: function(data, type, full) {
                                return `<td><button type="button" class="btn btn-success btn-outline-success edit_admin_user" data-id="${data.id}" data-row_index="${data.sn - 1}"><i class="icofont icofont-check-circled">Manage</button></td>`;}
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


        $('#create_admin_user_modal_btn').click(function() {
            const modal = document.querySelector('#create_admin_user_modal');
            modal.querySelector('.modal-title').textContent = 'New Admin User';

            $('#is_edit_admin_user').val('0');
            $('#admin_user_id').val("0");

            $('#create_admin_user_modal').modal('show');
        });

        //Clicking the create_class_btn Button
        $('#create_admin_user_btn').click(function() {
            const modal = document.querySelector('#create_admin_user_modal');
            const spinner = modal.querySelector('#create_admin_user_modal_spinner');

            //collect the filled in data
            isEdit = parseInt($('#is_edit_admin_user').val());

            let formData = new FormData();
            let photo = $('#admin_user_photo')[0].files[0];

            formData.append('admin_user_id', $('#admin_user_id').val());
            formData.append('username', $('#txt_username').val());
            formData.append('password', $('#password').val());
            formData.append('firstname', $('#txt_firstname').val());
            formData.append('surname', $('#txt_surname').val());
            formData.append('middlename', $('#txt_middlename').val());
            formData.append('phone', $('#phone').val());
            formData.append('photo', photo);
         
            $.ajax({
                type: "POST",
                url: isEdit ? 'functions/updateAdminUser.php' : 'functions/createAdminUser.php',
                data: formData,
                cache: false,
                processData:false,
                contentType: false,
                success: function(response) {
                    response = $.parseJSON(response);
                    if(response.status == 'success') {
                        const data = response.data;
                        $('#admin_users_table').DataTable().clear().rows.add(data).draw();

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
                    $('#create_admin_user_modal_spinner').show();
                },
                complete: function() {
                    // Code to hide spinner.
                    $('#create_admin_user_modal_spinner').hide();
                },
                error: function(result) {
                    alert('Error Occurred, Please Contact Admin.');
                }
            }); // End Ajax

        });

        $('#create_admin_user_modal').on('show.bs.modal', function(e) {

        });

        $('#create_admin_user_modal').on('hidden.bs.modal', function (e) {
            $('#create_admin_user_form').trigger('reset');
            const messageBox = document.querySelector('#create_admin_user_modal_msg_box');

            $('#txt_username').removeAttr('disabled');
            utils.clearModal(messageBox);
        });

        function registerEventHandlers() {
            $('.edit_admin_user').click(function(e) {
                const grade = $('#admin_users_table').DataTable().row(e.currentTarget.dataset.row_index).data();
                const modal = document.querySelector('#create_admin_user_modal');
                modal.querySelector('.modal-title').textContent = `Modify User`;

                $("#is_edit_admin_user").val('1');
                $("#admin_user_id").val(grade.id);

                $('#txt_username').val(grade.username);
                $('#txt_username').attr('disabled', 'disabled');
                $('#password').val(grade.password);
                $('#txt_firstname').val(grade.firstname);
                $('#txt_surname').val(grade.surname);
                $('#txt_middlename').val(grade.middlename);
                $('#phone').val(grade.phonenumber);

                $('#create_admin_user_modal').modal('show');
            });
        }

    }); //Document Ready Ends
</script>