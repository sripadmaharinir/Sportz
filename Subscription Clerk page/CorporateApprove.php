<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Corporate Approve</title>
    <link rel="stylesheet" type="text/css" href="styleSubscriptionClerk.css" />
    <style>
        select {
            width:150px;
        }
    </style>
    <script type="text/javascript">
        function HideOrShowStuff(controlToHide)
        {
            if (document.getElementById)
            {
                // Hide all regions
                document.getElementById('txtShow1').style.display = 'none';
                document.getElementById('txtShow2').style.display = 'none';
                document.getElementById('txtShow3').style.display = 'none';
                document.getElementById('txtShow4').style.display = 'none';
                document.getElementById('txtShow5').style.display = 'none';
                document.getElementById('txtShow6').style.display = 'none';
                document.getElementById('txtShow7').style.display = 'none';
                document.getElementById('txtShow8').style.display = 'none';
                document.getElementById('txtShow9').style.display = 'none';
                document.getElementById('txtShow11').style.display = 'none';
                document.getElementById('txtShow13').style.display = 'none';
                document.getElementById('txtShow15').style.display = 'none';
                document.getElementById('txtShow17').style.display = 'none';
                document.getElementById('txtShow12').style.display = 'none';
                document.getElementById('txtShow14').style.display = 'none';
                document.getElementById('txtShow16').style.display = 'none';
                document.getElementById('txtShow18').style.display = 'none';
                
                
                document.getElementById('txtShow1').disabled = 'disabled';
                document.getElementById('txtShow2').disabled = 'disabled';
                document.getElementById('txtShow3').disabled = 'disabled';
                document.getElementById('txtShow4').disabled = 'disabled';
                document.getElementById('txtShow5').disabled = 'disabled';
                document.getElementById('txtShow6').disabled = 'disabled';
                document.getElementById('txtShow7').disabled = 'disabled';
                document.getElementById('txtShow8').disabled = 'disabled';
                document.getElementById('txtShow9').disabled = 'disabled';
                
                document.getElementById('txtShow11').disabled = 'disabled';
                document.getElementById('txtShow13').disabled = 'disabled';
                document.getElementById('txtShow15').disabled = 'disabled';
                document.getElementById('txtShow17').disabled = 'disabled';
                document.getElementById('txtShow12').disabled = 'disabled';
                document.getElementById('txtShow14').disabled = 'disabled';
                document.getElementById('txtShow16').disabled = 'disabled';
                document.getElementById('txtShow18').disabled = 'disabled';
                
                // Display the requested region
                if(controlToHide == 1){
                    
                    document.getElementById
                    ('txtShow11').style.display = 'block';
                    document.getElementById
                    ('txtShow11').disabled = '';
                    document.getElementById
                    ('txtShow13').style.display = 'block';
                    document.getElementById
                    ('txtShow13').disabled = '';
                    document.getElementById
                    ('txtShow15').style.display = 'block';
                    document.getElementById
                    ('txtShow15').disabled = '';
                    document.getElementById
                    ('txtShow17').style.display = 'block';
                    document.getElementById
                    ('txtShow17').disabled = '';
                    
                    document.getElementById
                    ('txtShow1').style.display = 'block';
                    document.getElementById
                    ('txtShow1').disabled = '';
                    document.getElementById
                    ('txtShow3').style.display = 'block';
                    document.getElementById
                    ('txtShow3').disabled = '';
                    document.getElementById
                    ('txtShow5').style.display = 'block';
                    document.getElementById
                    ('txtShow5').disabled = '';
                    document.getElementById
                    ('txtShow7').style.display = 'block';
                    document.getElementById
                    ('txtShow7').disabled = '';
                    document.getElementById
                    ('txtShow9').style.display = 'block';
                    document.getElementById
                    ('txtShow9').disabled = '';
                }
                else{
                    document.getElementById
                    ('txtShow2').style.display = 'block';
                    document.getElementById
                    ('txtShow2').disabled = '';
                    document.getElementById
                    ('txtShow4').style.display = 'block';
                    document.getElementById
                    ('txtShow4').disabled = '';
                    document.getElementById
                    ('txtShow6').style.display = 'block';
                    document.getElementById
                    ('txtShow6').disabled = '';
                    document.getElementById
                    ('txtShow8').style.display = 'block';
                    document.getElementById
                    ('txtShow8').disabled = '';
                    
                    document.getElementById
                    ('txtShow12').style.display = 'block';
                    document.getElementById
                    ('txtShow12').disabled = '';
                    document.getElementById
                    ('txtShow14').style.display = 'block';
                    document.getElementById
                    ('txtShow14').disabled = '';
                    document.getElementById
                    ('txtShow16').style.display = 'block';
                    document.getElementById
                    ('txtShow16').disabled = '';
                    document.getElementById
                    ('txtShow18').style.display = 'block';
                    document.getElementById
                    ('txtShow18').disabled = '';
                    
                }
            }
            else
            {
                alert('Sorry, your browser doesn\'t support this');
            }
        }
    
        </script>
    <!--java Script end-->
    
</head>
<body>
     <?php include "conn.php"?>
<?php
$applicantNum=$_POST["applicantNum"];
$query = "select applicantNum,companyName,companyPhone,companyEmail,fName,lName,emailId,phoneNum,deptName,roleInDept,addLine1,addLine2,city,state,zip,numOfCopiesPerMonth,paymentMethod,nameOnCard,creditCardNumber,expirationMonth,expirationYear,CVV,nameOnCheck,routingNumber,accountNumber,typeOfAccount,subDuration from corporateApplicant where applicantNum=".$applicantNum.";";

$result = mysqli_query($conn, $query);

 $row = mysqli_fetch_assoc($result)
?>
    <header class="mainHeader" >
        <p>
</div>
<a class="back" href=""><b><?php $userName = $_SESSION["userName"]; echo $userName; $_SESSION["userName"]=$userName;?></b></a>
</div>
            <div >
            <nav id="navmenu" class="body"><ul>
                <div>
                    <img src="img/logo.png">
                        </div>
                <li><a href="SubscriptionClerk.html"><font size="3">Our Magazine</a></li>
                <li><a href="#">Investors&nbsp;&nbsp;&#9660;</a></style>
                    <ul class="sub1">
                        <li><a href="">Stock Info</a></li>
                        <li><a href="">Financial Report</a></li>
                        <li><a href="">New Releases</a></li>
                        <li><a href="">Events</a></li>
                        <li><a href="">Presentations</a></li>

                    </ul>
                </li>
                <li><a href="#">Media Center&nbsp;&#9660;</a></style>
                    <ul class="sub1">
                        <li><a href="#">Press Kit</a></li>
                        <li><a href="">Settings</a></li>
                    </ul>
                </li>
                <li><a href="#">Careers&nbsp;&nbsp;&#9660;</a></style>
                    <ul class="sub1">
                        <li><a href="">Career Deport</a></li>
                        <li><a href="">Corporate Opportunities</a></li>
                    </ul>
                </li>
                <li style="float:right; margin-right"><a href="../login Page/index_login.html">Sign Out</a></li>
               
            </ul></div></nav></p></font>
            </header>
    <div id='cssmenu'>
        <ul>
            <li class='has-sub'><a href=''><span>My Account</span></a>
            <ul>
                <li><a href='Application List.php'><span>Edit Account</span></a></li>
                <li class='last'><a href='Application List.php'><span>Personel Preferences</span></a></li>
            </ul>
            </li>
            <li><a href='Report Generation.php'><span>Mail Box</span></a></li>
            <li class='active has-sub'><a href='' style="background:#FFCC33;"><span>Approve Applicants</span></a>
                        <ul>
                            <li><a href='Individual Applicant list.php'><span>Individual</span></a></li>
                            <li class='last'><a href='Corporate Applicant list.php' style="background:#FFCC33;"><span>Corpotare</span></a></li>
                        </ul>
                    </li>
            <li class='active has-sub'><a href=''><span>Qualify Contributors</span></a>
                <ul>
                    <li><a href=''><span>Contributor List</span></a></li>
                </ul>
            </li>
            
            <li><a href='SalesReport.php'><span>Generate Report</span></a></li>
            <li class='last'><a href=''><span>Employee Services</span></a></li>
        </ul>
    </div>
    <div class="mainContent">
        <div class="wrapper">
            <div class="content">
                <div id="form_wrapper" class="form_wrapper">
                    <div class="register_width">
                        <form class="register active" method="POST" action="Corporate Applicant list.php">
                            <h3>Application Form - Corporate Subscription</h3>
                            
                            <!-- Personal Information -->
                            <fieldset>
                                <legend>Company information:</legend>
                                <div class="column">
                                    <div>
                                        <label>Company Name:</label>
                                        <input type="text" disabled="disabled" value="<?php echo $row["companyName"] ?>"/>
                                        <span class="error">This is an error</span>
                                    </div>
                                    <div>
                                        <label>Email Address:</label>
                                        <input type="text" disabled="disabled"  value="<?php echo $row["companyEmail"] ?>"/>
                                        <span class="error">This is an error</span>
                                    </div>
                                </div>
                                <div class="column1">
                                    <div>
                                        <label>Phone Number:</label>
                                        <input type="text" disabled="disabled" style="width:60%;" placeholder="( -  -  - )    -  -  -    -  -  -  -"  value="<?php echo $row["companyPhone"] ?>"/>
                                        <span class="error">This is an error</span>
                                    </div>
                                </div>
                            </fieldset>
                            
                            <!--Contact Person Information -->
                            <fieldset>
                                <legend><br>Contact Person Information:</legend>
                                <div class="column">
                                    <div>
                                        <label>First Name:</label>
                                        <input type="text" disabled="disabled" value="<?php echo $row["fName"] ?>"/>
                                        <span class="error">This is an error</span>
                                    </div>
                                    <div>
                                        <label>Email Address:</label>
                                        <input type="text"  disabled="disabled" value="<?php echo $row["emailId"] ?>"/>
                                        <span class="error">This is an error</span>
                                    </div>
                                    
                                    <div>
                                        <label>Department Name:</label>
                                        <input type="text"  disabled="disabled" value="<?php echo $row["deptName"] ?>"/>
                                        <span class="error">This is an error</span>
                                    </div>
                                    
                                </div>
                                <div class="column1">
                                    <div>
                                        <label>Last Name:</label>
                                        <input type="text"  disabled="disabled" value="<?php echo $row["companyName"] ?>"/>
                                        <span class="error">This is an error</span>
                                    </div>
                                    <div>
                                        <label>Phone Number:</label>
                                        <input type="text" disabled="disabled"  style="width:60%;" placeholder="( -  -  - )    -  -  -    -  -  -  -"  value="<?php echo $row["phoneNum"] ?>"/>
                                        <span class="error">This is an error</span>
                                    </div>
                                    <div>
                                        <label>Role in the Company:</label>
                                        <input type="text"  disabled="disabled" value="<?php echo $row["roleInDept"] ?>"/>
                                        <span class="error">This is an error</span>
                                    </div>
                                </div>
                            </fieldset>
                            
                            <!-- Address -->
                                <fieldset>
                                    <legend><br>Address:</legend>
                                    <div class="column">
                                        <div>
                                            <label>Address Line 1:</label>
                                            <input type="text" disabled="disabled" value="<?php echo $row["addLine1"] ?>"/>
                                            <span class="error">This is an error</span>
                                        </div>
                                        <div>
                                            <label>City:</label>
                                            <input type="text" style="width:50%;" disabled="disabled" value="<?php echo $row["city"] ?>"/>
                                            <span class="error">This is an error</span>
                                        </div>
                                        <div>
                                            <label>Zip Code:</label>
                                            <input type="text" style="width:40%;" disabled="disabled" value="<?php echo $row["zip"] ?>"/>
                                            <span class="error">This is an error</span>
                                        </div>
                                    </div>
                                    <div class="column1">
                                        <div>
                                            <label>Address Line 2:</label>
                                            <input type="text" disabled="disabled" value="<?php echo $row["addLine2"] ?>"/>
                                            <span class="error">This is an error</span>
                                        </div>
                                        <div>
                                            <label>State:</label>
                                            <input type="text" disabled="disabled" value="<?php echo $row["state"] ?>"/>
                                            <span class="error">This is an error</span>
                                        </div>
                                    </div>
                                </fieldset>
                                
                                <fieldset>
                                    <legend><br>Subscription Details:</legend>
                                    <div class="column">
                                        <div>
                                            <label>Number Of Copies per Month:</label>
                                            <input type="text"style="width:30%;" disabled="disabled" value="<?php echo $row["numOfCopiesPerMonth"] ?>"/>
                                            <span class="error">This is an error</span>
                                        </div>
                                    </div>
                                    <div class="column1">
                                        <div>
                                            <label style="margin: 15px 35px 20px 35px;">Subscription Duration:
                                                <input type="text" disabled="disabled" value="<?php echo $row["subDuration"]?>"/>
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                
                                <!-- Payment Information -->
                                <fieldset>
                                    <legend><br>Payment:</legend>
                                    
                                    
                                    <label><i>Payment method:</i></label>
                                    <?php if(!empty($row["creditCardNumber"]))
                                    {
                                        echo "<label><i>Credit Card:</i></label>";
                                        echo "<label name='txtShow11'>Name on card:</label>";
                                        echo "<input type='text' disabled='disabled' name='txtShow1' style='width:40%;' value='".$row["nameOnCard"]."'/>";
                                        echo '<label float="left" name="txtShow13" >Credit Card Number:</label>';
                                        echo '<input type="text" disabled="disabled" name="txtShow3" style=" width:30%; "placeholder="- - - -   - - - -   - - - -    - - - - " value="XXXX XXXX XXXX '.substr($row["creditCardNumber"],-4).'"/>';
                                    echo '<label name="txtShow15" style="">Expiration Date:</label>';
                                    echo '<input type="text" disabled="disabled" name="txtShow1" style="width:20%" value="'.$row["expirationMonth"].'/'.$row["expirationYear"].'"/>';
                                    echo '<label float:"left" id="txtShow17" name="txtShow17" style="margin: 7px 1px 1px 1px;">CVV:</label>';
                                    echo '<input type="text" disabled="disabled" id="txtShow7" name="txtShow7" style="width:5%;" placeholder="- - -" value="XXX"/>';
                                    }  
                                    else{
                                    echo "<label><i>Check:</i></label>";
                                    echo '<label name="txtShow12" style="">Name on check:</label>';
                                    echo '<input type="text" disabled="disabled" name="txtShow1" style="width:40%; float:left;" value="'.$row["nameOnCheck"].'"/>'; 
                                    echo '<br><br><label name="txtShow14">Routing Number:</label>';
                                    echo '<input type="text" disabled="disabled" name="txtShow4" style="width:30%;"  value="'.$row["routingNumber"].'"/>';
                                    echo '<label  name="txtShow16" style="">Account Number:</label>';
                                   echo '<input type="text" disabled="disabled" name="txtShow6" style="width:30%; float:left"  value="'.$row["accountNumber"].'"/>';
                                   echo '<br><br><label name="txtShow18" style="">Type of Account:</label>';
                                    echo '<input type="text" disabled="disabled" name="txtShow1" style="width:40%; float:left"  value="'.$row["typeOfAccount"].'"/>';
                                    }
                                    ?>
                                    <br>
                                </fieldset>
                            
                            <div class="bottom">
                                <input type="submit" name="approveDeny" value="Deny"  style = "float:left; margin-left:20px;"/>
                                <input type="hidden" name="applicantNum" value="<?php echo $applicantNum ?>">
                                <input type="submit" name="approveDeny" value="Approve" />
                                <div class="clear"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="clear"></div>
            </div>

</body>
</html>
