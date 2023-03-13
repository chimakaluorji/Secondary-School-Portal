<?php
include('header.php');
//include('functions/functions.php');

?>

<!-- styles -->
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<link href="assets/css/style_new.css" rel="stylesheet">
<link href="assets/css/Pagination.css" rel="stylesheet" />

<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline col-md-12">
                                    <h4>Digital Library</h4>
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
                            <h5>e-Library</h5>
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
                            <!--Content starts-->
                            <div id="maincontainer">

                                <div class="container">
                                    <asp:Label ID="lblError" runat="server" Text="" Font-Size="15px" Font-Bold="true"></asp:Label>
                                    <div class="row">
                                        <div class="span10">
                                            <section id="latest">
                                                <div class="row">
                                                    <div class="span10">
                                                        <div class="sorting well">
                                                            <div class="form-inline pull-left">
                                                                Sort By Subject:
                                                                <div class="col-sm-4 col-xl-4 m-b-10">
                                                                    <select id="subject" class="form-control form-control-primary">
                                                                        <option value="0">--Please Select Subject--</option>
                                                                        <?php
                                                                        $retSubject = $project->geteLibrarySubjects();
                                                                        foreach ($retSubject as $key => $value) {
                                                                        ?>
                                                                            <option value="<?php echo $value['id']; ?>"><?php echo $value["subject"]; ?></option>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>

                                                                <div class="col-sm-4 col-xl-3 m-b-10">
                                                                    <input type="text" id="bTitle" class="form-control form-control-danger" placeholder="Book Title">
                                                                </div>
                                                                <div class="col-sm-4 col-xl-3 m-b-10">
                                                                    <input type="button" id="btnSearch" value="Search For Books" class="btn btn-success" />

                                                                </div>
                                                            </div>

                                                        </div>
                                                        <section id="thumbnails">
                                                            <div style="color: #F25926; font-size: 15px; display: none; text-align: center;" id="spinner">
                                                                <img src="assets/images/loader1.gif" />
                                                                ...Please wait, <strong>the System is Working</strong> ...
                                                                <img src="assets/images/loader2.gif" />
                                                            </div>
                                                            <asp:Panel ID="PnlGrid" runat="server" Width="100%">
                                                                <ul class="thumbnails grid" style="display: block;">
                                                                    <div id="Request"></div>
                                                                    <div id="Pagination"></div>

                                                                </ul>

                                                            </asp:Panel>
                                                        </section>
                                                    </div>
                                                </div>

                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Content ends-->
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
    $(function() {

        //Declaring Variable
        var maxNum = 12;
        var minNum = 1;
        var Value = 0;

        //Calling the loadPage function
        loadPage(maxNum, minNum);

        //Pagination
        var Pagination = '<ul class="pagination">';
        Pagination += '<li class="inline"><a class="linka active" href="#1">1</a></li>';
        Pagination += '<li class="inline"><a class="linka" href="#2">2</a></li>';
        Pagination += '<li class="inline"><a class="linka" href="#3">3</a></li>';
        Pagination += '<li class="inline"><a class="linka" href="#4">4</a></li>';
        Pagination += '<li class="inline"><a class="linka" href="#5">5</a></li>';
        Pagination += '<li class="inline"><a class="linka" href="#6">6</a></li>';
        Pagination += '<li class="inline"><a class="linka" href="#7">7</a></li>';
        Pagination += '<li class="inline"><a class="linka" href="#8">8</a></li>';
        Pagination += '<li class="inline"><a class="linka" href="#9">9</a></li>';
        Pagination += '<li class="inline"><a class="linka" href="#10">10</a></li>';
        Pagination += '<li class="inline"><a class="linka" href="#11">11</a></li>';
        Pagination += '<li class="inline"><a class="linka" href="#12">12</a></li>';
        Pagination += '<li class="inline"><a class="linka" href="#13">13</a></li>';
        Pagination += '<li class="inline"><a class="linka" href="#14">14</a></li>';
        Pagination += '<li class="inline"><a class="linka" href="#15">15</a></li>';
        Pagination += '</ul>';

        $('#Pagination').append(Pagination);

        //Click Paging Link
        $(".linka").click(function() {
            //Declaring Variables for pagination
            var strValue = $(this).attr("href");
            var splitValue = strValue.split("#")

            Value = splitValue[1]

            var xmaxNum = 0
            var xminNum = 0

            var xmaxSubNum = 0

            xmaxSubNum = 12 * Value
            xmaxNum = xmaxSubNum - 1
            xminNum = xmaxSubNum - 12

            if (xminNum == 0) {
                xmaxNum = 12
            }


            //Calling the loadPage function
            loadPage(xmaxNum, xminNum);

            //Automatically showning active class
            $(".linka").removeClass("active");
            $(this).addClass("linka active");

        });

        //Click Paging Link
        $(".linkNext").click(function() {
            $(".linkNext").removeClass("active");
            $(this).addClass("linka active");
        });


        //Finding eBooks via subject
        $("#subject").change(function() {
            //Clearing Request
            $('#Request').html("");
            $('#Pagination').html("");

            var subjectID = $(this).children("option:selected").val();
            var eBookMax = 12
            var eBookMin = 1

            if (subjectID == 0) {
                loadPage(eBookMax, eBookMin);
            } else {
                loadPageBySubject(eBookMax, eBookMin, subjectID)
            }

        }); //End ClassDermacation


        //Click Paging Link
        $("#btnSearch").click(function() {
            //Clearing Request
            $('#Request').html("");
            $('#Pagination').html("");

            var search = $("#bTitle").val();
            var smaxNum = 12;
            var sminNum = 1;

            if (search == "") {
                loadPage(smaxNum, sminNum);
            } else {
                loadSearchPage(smaxNum, sminNum, search)
            }
        });


        //Loading the page
        function loadPage(eBookMax, eBookMin) {
            //Clearing Request
            $('#Request').html("");

            //Find All Request to Donate
            $.ajax({
                type: "POST",
                url: "functions/findAlleBookDetails.php",
                data: {
                    eBookMax: eBookMax,
                    eBookMin: eBookMin
                },
                success: function(data) {

                    data = $.parseJSON(data);

                    var checkValue = data[0].id

                    if (checkValue != "failed") {

                        for (var i = 0; i < data.length; i++) {
                            //Request

                            var Request = '<li class="span3">';
                            Request += '<div class="prdocutname" style="font-size:15px; font-weight:500">' + data[i].BookTitle + '</div>';
                            Request += '<div class="thumbnail">';
                            Request += '<a href="bookreader.php?e=' + data[i].eBookUrl + '" target="_blank"><span><span>';
                            Request += '<img class="mydiv" src="' + data[i].CoverPageUrl + '" /> </a></span></span>';
                            Request += '<div class="caption">';
                            Request += '<div class="price pull-left">';
                            Request += '<span class="newprice">' + data[i].BookAuthor + '</span>';
                            Request += '</div>';
                            Request += '<a href="bookreader.php?e=' + data[i].eBookUrl + '" class="btn pull-right" target="_blank">Read Book</a>';
                            Request += '<div class="clearfix"></div>';
                            Request += '</div>';
                            Request += '</div>';
                            Request += '</li>';

                            $('#Request').append(Request);

                        } //End For
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
                    alert('Cannot load eBook at the moment.');
                }
            }); //Ajax Ends
        }



        //Loading the page via Subject
        function loadPageBySubject(eBookMax, eBookMin, subjectID) {

            //Clearing Request
            $('#Request').html("");

            //Find All Request to Donate
            $.ajax({
                type: "POST",
                url: "functions/findAlleBookDetailsBySubjectID.php",
                data: {
                    eBookMax: eBookMax,
                    eBookMin: eBookMin,
                    subjectID: subjectID
                },
                success: function(data) {

                    data = $.parseJSON(data);

                    var checkValue = data[0].id

                    if (checkValue != "failed") {

                        for (var i = 0; i < data.length; i++) {
                            //Request

                            var Request = '<li class="span3">';
                            Request += '<div class="prdocutname" style="font-size:15px; font-weight:500">' + data[i].BookTitle + '</div>';
                            Request += '<div class="thumbnail">';
                            Request += '<a href="bookreader.php?e=' + data[i].eBookUrl + '" target="_blank"><span><span>';
                            Request += '<img class="mydiv" src="' + data[i].CoverPageUrl + '" /> </a></span></span>';
                            Request += '<div class="caption">';
                            Request += '<div class="price pull-left">';
                            Request += '<span class="newprice">' + data[i].BookAuthor + '</span>';
                            Request += '</div>';
                            Request += '<a href="bookreader.php?e=' + data[i].eBookUrl + '" class="btn pull-right" target="_blank">Read Book</a>';
                            Request += '<div class="clearfix"></div>';
                            Request += '</div>';
                            Request += '</div>';
                            Request += '</li>';

                            $('#Request').append(Request);

                        } //End For
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
                    alert('Cannot load eBook at the moment.');
                }
            }); //Ajax Ends
        }



        //Loading the page via search
        function loadSearchPage(eBookMax, eBookMin, searchValue) {
            //Clearing Request
            $('#Request').html("");

            //Find All Request to Donate
            $.ajax({
                type: "POST",
                url: "functions/findAlleBookDetailsBySearch.php",
                data: {
                    eBookMax: eBookMax,
                    eBookMin: eBookMin,
                    searchValue: searchValue
                },
                success: function(data) {

                    data = $.parseJSON(data);

                    var checkValue = data[0].id

                    if (checkValue != "failed") {

                        for (var i = 0; i < data.length; i++) {
                            //Request

                            var Request = '<li class="span3">';
                            Request += '<div class="prdocutname" style="font-size:15px; font-weight:500">' + data[i].BookTitle + '</div>';
                            Request += '<div class="thumbnail">';
                            Request += '<a href="bookreader.php?e=' + data[i].eBookUrl + '" target="_blank"><span><span>';
                            Request += '<img class="mydiv" src="' + data[i].CoverPageUrl + '" /> </a></span></span>';
                            Request += '<div class="caption">';
                            Request += '<div class="price pull-left">';
                            Request += '<span class="newprice">' + data[i].BookAuthor + '</span>';
                            Request += '</div>';
                            Request += '<a href="bookreader.php?e=' + data[i].eBookUrl + '" class="btn pull-right" target="_blank">Read Book</a>';
                            Request += '<div class="clearfix"></div>';
                            Request += '</div>';
                            Request += '</div>';
                            Request += '</li>';

                            $('#Request').append(Request);

                        } //End For
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
                    alert('Cannot load eBook at the moment.');
                }
            }); //Ajax Ends
        }

    });
</script>

</body>

</html>