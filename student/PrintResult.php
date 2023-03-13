<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head id="Head1" runat="server">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>GMA - Portal Result</title>
    <meta name="keywords" content="" />
    <meta name="Premium Series" content="" />
    <link href="assets/css/default.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />

    <style type="text/css">
        .style1 {
            height: 23px;
        }

        .headerstyle {
            -webkit-transform: rotate(270deg);
            height: 80px;
            width: 20px;

        }
    </style>
    <style type="text/css">
        .rotate {
            --moz-transform: rotate(-90deg);
            -moz-transform-origin: top left;
            -webkit-transform: rotate(-90deg);
            -webkit-transform-origin: top left;
            -o-transform: rotate(-90deg);
            -o-transform-origin: top left;
            position: relative;
            top: 30px;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <!-- start page -->
        <div id="page" style="background:url(assets/images/bg0.png) repeat">
            <div>
                <table width="100%" cellpadding="2" cellspacing="2" border="0" class="Border">
                    <tr>
                        <td width="100%" valign="top">
                            <table width="100%" cellpadding="2" cellspacing="2" border="0" class="Border">
                                <tr>
                                    <td>
                                        <div style="color: #E9BA64; font-size: 15px; display: none; text-align: center;" id="spinner">
                                            <img src="assets/images/loader1.gif" />
                                            <strong>..Please wait..</strong>
                                            <img src="assets/images/loader2.gif" />
                                        </div>

                                        <div class="col-md-12" id="failed" style="display:none;">
                                            <div class="alert alert-danger icons-alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <i class="icofont icofont-close-line-circled"></i>
                                                </button>
                                                <p><strong>Danger!</strong> <span id="msgFailed"></span> </p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%" valign="top">
                                        <table cellpadding="4" cellspacing="0" width="100%">
                                            <tr>
                                                <td align="center" colspan="2">
                                                    NAME OF STUDENT:
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" class="Border" colspan="2">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <b><span id="surname"></span></b>, &nbsp;
                                                                <b><span id="firstname"></span></b>&nbsp;
                                                                <b><span id="middlename"></span></b>
                                                            </td>
                                                        </tr>
                                                        <!-- 
                                                        <tr>
                                                            <td colspan="2">

                                                            </td>
                                                        </tr> -->
                                                    </table>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td align="center" colspan="2">
                                                    ADMISSION NUMBER:
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" class="Border" colspan="2">
                                                    <b><span id="refNo"></span></b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" colspan="2">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" class="Border" colspan="2">
                                                    <img id="studentpix" src="" width="120px" height="120px">
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td valign="top">
                                        <table>
                                            <tr>
                                                <td width="20%" valign="top">
                                                    <table cellpadding="4" cellspacing="0" width="100%">
                                                        <tr>
                                                            <td align="center">
                                                                <img src="assets/images/logo10.png" height="180px" width="180px" />
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td width="30%" valign="top">
                                                    <table cellpadding="4" cellspacing="0" width="100%">
                                                        <tr>
                                                            <td style="font-style:italic;font-weight:bold;" align="center">
                                                                Ebonyi State School System
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center">
                                                                <img src="assets/images/SchoolName.png" height="50px" width="300px" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-weight:bold; font-size:20px;" align="center">
                                                                SENIOR SECONDARY
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-weight:bolder;" align="center">
                                                                TERMLY REPORT
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="30%" valign="top" colspan="2" align="center">
                                                    <table cellpadding="4" cellspacing="4">
                                                        <tr>
                                                            <td align="left" class="Border">
                                                                <b>Total Mark:</b>
                                                                <b><span id="total"></span></b>
                                                            </td>
                                                            <td align="left">

                                                            </td>
                                                            <td align="left" class="Border">
                                                                <b>Average:</b>
                                                                <b><span id="average"></span></b>
                                                            </td>
                                                            <td align="left">

                                                            </td>
                                                            <td align="left" class="Border">
                                                                <b>Position:</b>
                                                                <b><span id="position"></span></b>
                                                            </td>
                                                            <td align="left">

                                                            </td>
                                                            <td align="left" class="Border">
                                                                <b>Remark:</b>
                                                                <b><span id="remark"></span></b>
                                                            </td>
                                                            <td align="left">

                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="3%" valign="top">
                                        <table cellpadding="4" cellspacing="0" width="100%">
                                            <tr>
                                                <td align="left">
                                                    <b>Total Mark:</b>
                                                </td>
                                                <td align="left">
                                                    <b><span id="total2"></span></b> &nbsp;
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign="top">
                                                    <b>Average:</b>
                                                </td>
                                                <td align="left" class="style1">
                                                    <span id="average2"></span> &nbsp;
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign="top">
                                                    <b>Position:</b>
                                                </td>
                                                <td align="left">
                                                    <span id="position2"></span> &nbsp;&nbsp;
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left">
                                                    <b>House:</b>
                                                </td>
                                                <td align="left">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign="top">
                                                    <b>Class:</b>
                                                </td>
                                                <td align="left">
                                                    <span id="class2"></span> &nbsp;
                                                </td>
                                            </tr>
                                            <!-- <tr>
                                                    <td height="5px"></td>
                                                </tr> -->
                                            <tr>
                                                <td valign="top">
                                                    <b>Class Demarcation:</b>
                                                </td>
                                                <td align="left">
                                                    <span id="classdermcation2"></span>
                                                </td>
                                            </tr>
                                            <!-- <tr>
                                                    <td height="5px"></td>
                                                </tr> -->
                                            <tr>
                                                <td valign="top">
                                                    <b>No. in Class:</b>
                                                </td>
                                                <td align="left">
                                                    <span id="classNo"></span> &nbsp;&nbsp;
                                                </td>
                                            </tr>
                                            <!-- <tr>
                                                    <td height="5px"></td>
                                                </tr> -->
                                            <tr>
                                                <td valign="top">
                                                    <b>Term:</b>
                                                </td>
                                                <td align="left">
                                                    <span id="term"></span>
                                                </td>
                                            </tr>
                                            <!-- <tr>
                                                    <td height="5px"></td>
                                                </tr> -->
                                            <tr>
                                                <td valign="top">
                                                    <b>Session:</b>
                                                </td>
                                                <td align="left">
                                                    <span id="session"></span>
                                                </td>
                                            </tr>
                                            <!-- <tr>
                                                    <td height="5px"></td>
                                                </tr> -->
                                            <tr>
                                                <td valign="top">
                                                    <b>Next Term Begins:</b>
                                                </td>
                                                <td align="left">
                                                    <span id="nextTermBegins"></span>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table width="100%" cellpadding="2" cellspacing="2" border="0" class="Border">
                                <tr>
                                    <td>
                                        <table cellpadding="4" cellspacing="0" width="100%">
                                            <tr>
                                                <td width="60%" valign="top">
                                                    <table cellpadding="4" cellspacing="0" width="100%">
                                                        <tr>
                                                            <td colspan="2">
                                                                <fieldset class="BorderLine">
                                                                    <legend> CORE SUBJECTS (COMPULSORY) </legend>
                                                                    <table border="0" class="BorderLine" cellpadding="4" cellspacing="4" width="100%">
                                                                        <tr>
                                                                            <td>
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
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </fieldset>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td align="left" width="70%">
                                                                <table width="40%">
                                                                    <tr>
                                                                        <td align="left">
                                                                            <b>TOTAL</b>
                                                                        </td>
                                                                        <td align="left">
                                                                            <span id="total1"></span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign="top">
                                                                            <b>AVERAGE</b>
                                                                        </td>
                                                                        <td align="left">
                                                                            <span id="average1"></span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign="top">
                                                                            <b>POSITION</b>
                                                                        </td>
                                                                        <td align="left">
                                                                            <span id="position1"></span> Out of <span id="classNo1"></span>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="3%">

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="15%" class="Border">
                                                                <table cellpadding="2" cellspacing="4" width="100%">
                                                                    <tr>
                                                                        <td class="Border">
                                                                            <b>FORM MASTER'S COMMENT ON ACADEMICS AND CHARACTER</b><br />
                                                                            <asp:Label ID="lblFormMasterComment" runat="server" Text=""></asp:Label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="Border">
                                                                            <b>GUIDANCE COUNSELLOR'S COMMENT ON PROBLEMS AND REMEDIES</b><br />
                                                                            <asp:Label ID="lblCounsellor" runat="server" Text="" Font-Size="15px"></asp:Label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="Border">
                                                                            <b>PRINCIPAL'S COMMENTS</b><br />
                                                                            <asp:Label ID="lblPrincipal" runat="server" Text="" Font-Size="15px"></asp:Label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign="top" align="left" class="Border">
                                                                            <b>SIGNATURE FOR MANAGEMENT:</b>
                                                                            <img src="assets/images/Umahi-Signature.png" height="40px" width="180px" />
                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                            <b>DATE:</b>
                                                                            <asp:Label ID="lblSignDate" runat="server" Text=""></asp:Label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign="top" class="Border">
                                                                            <b>NAME:</b>
                                                                            ...............................................
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>



                                                        </tr>
                                                    </table>
                                                </td>
                                                <td width="20%" valign="top" class="Border">
                                                    <table cellpadding="4" cellspacing="0" width="100%">
                                                        <tr>
                                                            <td>
                                                                <table>
                                                                    <tr>
                                                                        <td valign="top" style="font-style:italic;" class="Border" width="32%" align="center">
                                                                            <b>KEY TO GRADES</b> <br />
                                                                            A. (Dist.) 70%-100% <br />
                                                                            C.(Credit) 55%-69% <br />
                                                                            P. (Pass) 40%-54% <br />
                                                                            F. (Fail) 0% - 39%<br />
                                                                        </td>

                                                                        <td valign="top" width="5%" style="font-style:italic;" class="Border" align="center" rowspan="2">
                                                                            <b>R<br />A<br />T<br />&nbsp;I<br />N<br />G<br />S</b>
                                                                        </td>
                                                                        <td valign="top" width="5%" style="font-style:italic; font-size:9px" class="Border" align="center" rowspan="2">
                                                                            <b> E<br />N<br />T<br />E<br />R<br />E<br />D
                                                                                <br /> <br />B<br />Y<br /> <br />
                                                                            </b>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign="top" style="font-style:italic;" class="Border" width="32%" align="center">
                                                                            <b>KEY TO RATINGS</b> <br />
                                                                            5 - EXCELLENT <br />
                                                                            4 - GOOD <br />
                                                                            3 - FAIR <br />
                                                                            2 - POOR <br />
                                                                            1 - VERY POOR <br />
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <table>
                                                                    <tr>
                                                                        <td valign="top" width="20%" class="Border">
                                                                            <b>SOCIAL BEHAVIOUR</b><br />
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border" rowspan="16">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign="top" width="20%" class="Border">
                                                                            1. Punctuality
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                            <asp:Label ID="lblPunctuality" runat="server" Text=""></asp:Label>
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign="top" width="20%" class="Border">
                                                                            2. Attendance at Class
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                            <asp:Label ID="lblAttendance" runat="server" Text=""></asp:Label>
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign="top" width="20%" class="Border">
                                                                            3. Attentiveness
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                            <asp:Label ID="lblAttentiveness" runat="server" Text=""></asp:Label>
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign="top" width="20%" class="Border">
                                                                            4. Initiative
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                            <asp:Label ID="lblInitiative" runat="server" Text=""></asp:Label>
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign="top" width="20%" class="Border">
                                                                            5.Perseverance
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                            <asp:Label ID="lblPerseverance" runat="server" Text=""></asp:Label>
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign="top" width="20%" class="Border">
                                                                            6. Carrying out of Assignment
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                            <asp:Label ID="lblAssignment" runat="server" Text=""></asp:Label>
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign="top" width="20%" class="Border">
                                                                            7. Organizational Ability
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                            <asp:Label ID="lblOrganizational" runat="server" Text=""></asp:Label>
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign="top" width="20%" class="Border">
                                                                            8. Neatness
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                            <asp:Label ID="lblNeatness" runat="server" Text=""></asp:Label>
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign="top" width="20%" class="Border">
                                                                            9. Politeness
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                            <asp:Label ID="lblPoliteness" runat="server" Text=""></asp:Label>
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign="top" width="20%" class="Border">
                                                                            10. Honesty
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                            <asp:Label ID="lblHonesty" runat="server" Text=""></asp:Label>
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign="top" width="20%" class="Border">
                                                                            11.Obedience
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                            <asp:Label ID="lblObedience" runat="server" Text=""></asp:Label>
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign="top" width="20%" class="Border">
                                                                            12. Self Control
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                            <asp:Label ID="lblSelfControl" runat="server" Text=""></asp:Label>
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign="top" width="20%" class="Border">
                                                                            13. Spirit of Co-operation
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                            <asp:Label ID="lblSpirit" runat="server" Text=""></asp:Label>
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign="top" width="20%" class="Border">
                                                                            11.Sense of Responsibility
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                            <asp:Label ID="lblSense" runat="server" Text=""></asp:Label>
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign="top" width="20%" class="Border">
                                                                            12. Public Speaking
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                            <asp:Label ID="lblPublic" runat="server" Text=""></asp:Label>
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>

                                                            <td width="60%" valign="top" align="center" class="Border">
                                                                <table>
                                                                    <tr>
                                                                        <td valign="top" width="20%" class="Border" align="center">
                                                                            <b>Fees</b><br />
                                                                        </td>
                                                                        <td valign="top" width="10%" class="Border" align="center">
                                                                            <b>₦</b>
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border" align="center">
                                                                            <b>K</b>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign="top" width="20%" style="font-style:italic" class="Border" align="center">
                                                                            <b>Tuition</b>
                                                                        </td>
                                                                        <td valign="top" width="10%" class="Border" align="center">
                                                                            <asp:Label ID="lblTuition" runat="server" Text=""></asp:Label>
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border" align="center">
                                                                            00
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign="top" width="20%" style="font-style:italic" class="Border" align="center">
                                                                            <b>Boarding</b>
                                                                        </td>
                                                                        <td valign="top" width="10%" class="Border" align="center">

                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border" align="center">

                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign="top" width="20%" style="font-style:italic" class="Border" align="center">
                                                                            <b>Books</b>
                                                                        </td>
                                                                        <td valign="top" width="10%" class="Border" align="center">
                                                                            <asp:Label ID="lblBooks" runat="server" Text=""></asp:Label>
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border" align="center">

                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign="top" width="20%" style="font-style:italic" class="Border" align="center">
                                                                            <b>Uniform</b>
                                                                        </td>
                                                                        <td valign="top" width="10%" class="Border" align="center">
                                                                            <asp:Label ID="lblUniform" runat="server" Text=""></asp:Label>
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border" align="center">

                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign="top" width="20%" style="font-style:italic" class="Border" align="center">
                                                                            <b>Other Fees</b>
                                                                        </td>
                                                                        <td valign="top" width="10%" class="Border" align="center">
                                                                            <asp:Label ID="lblSelf" runat="server" Text=""></asp:Label>
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border" align="center">
                                                                            00
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td valign="top" width="20%" style="font-style:italic" class="Border" align="center">
                                                                            <b>Fees owing</b>
                                                                        </td>
                                                                        <td valign="top" width="10%" class="Border" align="center">
                                                                            <asp:Label ID="lblFees" runat="server" Text=""></asp:Label>
                                                                        </td>
                                                                        <td valign="top" width="5%" class="Border" align="center">

                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>



                                            </tr>

                                        </table>
                                <tr>
                                    <td>
                                        <table cellpadding="4" cellspacing="0" width="100%">
                                            <tr>
                                                <td>
                                                    <fieldset class="BorderLine">
                                                        <legend>Print</legend>
                                                        <table cellpadding="2" cellspacing="3" align="center" width="95%">
                                                            <tr>
                                                                <td align="right" style="width: 40%">
                                                                </td>
                                                                <td style="text-align: left">
                                                                    <input type="button" value="Print Result" onclick="window.print(); return false" class="cpButton" />
                                                                    <input type="button" value="Close" onclick="window.close(); return false" class="cpButton" />
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </fieldset>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                        </td>

                    </tr>
                </table>
                </td>
                </tr>
                </table>
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

        // Retriving variables from the URL
        //Getting reg. number
        var queryDict = {};
        location.search.substr(1).split("&").forEach(function(item) {
            queryDict[item.split("=")[0]] = item.split("=")[1]
        })
        var regnumber = queryDict['e'];
        var sessionid = queryDict['sessionid'];
        var termid = queryDict['termid'];
        var classid = queryDict['classid'];
        var classdemarcationid = queryDict['classdemarcationid'];



        //Showing the reg number
        $('#refNo').show().html(regnumber);

        //Calling getStudentName function
        getStudentName(regnumber);

        //Calling getStudentPosition function
        getStudentPosition(regnumber, sessionid, termid, classid, classdemarcationid)

        //Calling getNumberOfStudentsInClass function
        getNumberOfStudentsInClass(sessionid, termid, classid, classdemarcationid)

        //Calling getResultSessionTermClassClassDem function
        getResultSessionTermClassClassDem(regnumber, sessionid, termid, classid, classdemarcationid)

        //Calling loadTable function
        //Declaring table variable
        var dtexample = 'undefined';
        dtexample = $("#example").DataTable({
            "scrollX": true, //Horizontal Scrollable
            "bPaginate": false, //hide pagination
            "bFilter": false, //hide Search bar
            "bInfo": false, // hide showing entries
        });


        loadTable(regnumber, sessionid, termid, classid, classdemarcationid)


        //Getting Student's Position
        function getStudentName(regnumber) {

            $.ajax({
                type: "POST",
                url: 'functions/getStudentName.php',
                data: {
                    regnumber: regnumber
                },
                success: function(data) {

                    data = $.parseJSON(data);

                    //Showing error is case if the data was not successfully saved.
                    var returnfailed = data[0].surname;

                    if (returnfailed != "failed") {

                        for (var i = 0; i < data.length; i++) {
                            $('#surname').show().html(data[i].surname);
                            $('#firstname').show().html(data[i].firstname);
                            $('#middlename').show().html(data[i].middlename);
                            $('#studentpix').attr('src', data[i].photourl);
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

                            $('#total1').show().html(data[i].total);
                            $('#position1').show().html(data[i].position);
                            $('#grade1').show().html(data[i].grade);
                            $('#remark1').show().html(data[i].remark);
                            $('#average1').show().html(data[i].average);

                            $('#total2').show().html(data[i].total);
                            $('#position2').show().html(data[i].position);
                            $('#grade2').show().html(data[i].grade);
                            $('#remark2').show().html(data[i].remark);
                            $('#average2').show().html(data[i].average);
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


        //Getting Student's Position
        function getResultSessionTermClassClassDem(regnumber, sessionid, termid, classid, classdemarcationid) {

            $.ajax({
                type: "POST",
                url: 'functions/getResultSessionTermClassClassDem.php',
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
                    var returnfailed = data[0].session;

                    if (returnfailed != "failed") {

                        for (var i = 0; i < data.length; i++) {
                            $('#session').show().html(data[i].session);
                            $('#term').show().html(data[i].term);
                            $('#class2').show().html(data[i].class);
                            $('#classdermcation2').show().html(data[i].classdemarcation);
                        }
                    } else {
                        $('#failed').show();
                        $('#msgFailed').show().html("Error Occurred while fetching Session, Term, Class and Class Demarcation");
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

        //Getting Number of students in class
        function getNumberOfStudentsInClass(sessionid, termid, classid, classdemarcationid) {

            $.ajax({
                type: "POST",
                url: 'functions/getNumberOfStudentsInClass.php',
                data: {
                    sessionid: sessionid,
                    termid: termid,
                    classid: classid,
                    classdemarcationid: classdemarcationid
                },
                success: function(data) {

                    data = $.parseJSON(data);

                    //Showing error is case if the data was not successfully saved.
                    var returnfailed = data[0].number;

                    if (returnfailed != "failed") {

                        for (var i = 0; i < data.length; i++) {
                            $('#classNo').show().html(data[i].number);
                            $('#classNo1').show().html(data[i].number);
                        }
                    } else {
                        $('#failed').show();
                        $('#msgFailed').show().html("Error Occurred while fetching number of students in class");
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


        function loadTable(regnumber, sessionID, termID, classID, classdemarcationID) {

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

    }); //Document Ready Ends
</script>

</html>