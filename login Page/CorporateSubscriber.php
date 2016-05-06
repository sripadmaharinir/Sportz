<!DOCTYPE html>
<head>
    <title>Corporate Application Form</title>
    <link rel="stylesheet" type="text/css" href="../login Page/style_IndiApplication.css" />
    <style>
        select {
            width:150px;
        }
    </style>
    
    <!--java Script-->
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
function validateForm(form)
{
    re = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    if(!re.test(form.cphone.value)) {
        alert("Please enter a valid company Phone Number !");
        form.cphone.focus();
        return false;
    }
	 if(!re.test(form.phone.value)) {
        alert("Please enter a valid Phone Number !");
        form.phone.focus();
        return false;
    }
    re = /^[0-9]+$/;
    if(!re.test(form.zip.value)) {
        alert("Please enter a valid zipcode !");
        form.zip.focus();
        return false;
    }

    re = /^[0-9]+$/;
    if(!re.test(form.numcopies.value)) {
        alert("Please enter a valid number of copies!");
        form.numcopies.focus();
        return false;
    }

    re = /^[A-Za-z]+$/;
    if(!re.test(form.fname1.value)) {
        alert("Please enter a valid first name!");
        form.fname1.focus();
        return false;
    }
	 re = /^[A-Za-z]+$/;
    if(!re.test(form.lname1.value)) {
        alert("Please enter a valid last name!");
        form.lname1.focus();
        return false;
    }
        re = /^[A-Za-z]+$/;
    if(!re.test(form.cname1.value)) {
alert("Please enter a valid company name!");
        form.cname1.focus();
        return false;
    }
	re = /^[A-Za-z]+$/;
    if(!re.test(form.city.value)) {
alert("Please enter a valid city!");
        form.city.focus();
        return false;
    }
    if(form.cmpemail1.value !== form.cmpemail2.value) {
        alert("Check your email and confirm email address");
        form.cmpemail1.focus();
        return false;
    }


}
        


	</script>
    <!--java Script end-->
    
</head>

<?php include "conn.php"?>
<?php

$cname =  mysqli_real_escape_string($conn,$_POST['cname1']);
$cphone =  mysqli_real_escape_string($conn,$_POST['cphone']);
$cemail =  mysqli_real_escape_string($conn,$_POST['cmpemail1']);
$fname = mysqli_real_escape_string($conn,$_POST['fname1']);
$lname = mysqli_real_escape_string($conn,$_POST['lname1']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$phone =  mysqli_real_escape_string($conn,$_POST['phone']);
$dname =  mysqli_real_escape_string($conn,$_POST['dname']);
$role =  mysqli_real_escape_string($conn,$_POST['role']);
$addline1 =  mysqli_real_escape_string($conn,$_POST['addline1']);
$addline2  =  mysqli_real_escape_string($conn,$_POST['addline2']);
$city =  mysqli_real_escape_string($conn,$_POST['city']);
$state =  mysqli_real_escape_string($conn,$_POST['state']);
$zip =  mysqli_real_escape_string($conn,$_POST['zip']);
$numcopies =  mysqli_real_escape_string($conn,$_POST['numcopies']);
$paymethod =  mysqli_real_escape_string($conn,$_POST['radio1']);
$nameoncard =  mysqli_real_escape_string($conn,$_POST['txtShow1']);
$cardno =  mysqli_real_escape_string($conn,$_POST['txtShow3']);
$expiry =  mysqli_real_escape_string($conn,$_POST['txtShow5']);
$cvv =  mysqli_real_escape_string($conn,$_POST['txtShow7']);
$nameoncheck = mysqli_real_escape_string($conn,$_POST['txtShow2']);
$routingnumber = mysqli_real_escape_string($conn,$_POST['txtShow4']);
$accountnumber = mysqli_real_escape_string($conn,$_POST['txtShow6']);
$typeofaccount = mysqli_real_escape_string($conn,$_POST['txtShow8']);
$subduration = mysqli_real_escape_string($conn,$_POST['subduration']);
if(!empty($fname)) {

$query = "insert into corporateApplicant ( companyName,companyPhone,companyEmail,fName,lName,emailId,phoneNum,deptName,roleInDept,addLine1,addLine2,city,state,zip,numOfCopiesPerMonth,paymentMethod,nameOnCard,creditCardNumber,expirationMonth,expirationYear,cvv,nameOnCheck,routingNumber,accountNumber,typeOfAccount,subDuration) values ('$cname','$cphone','$cemail','$fname','$lname','$email','$phone','$dname','$role','$addline1','$addline2','$city','$state','$zip','$numcopies','$paymethod','$nameoncard','$cardno','$expiry','$expiry','$cvv','$nameoncheck','$routingnumber','$accountnumber','$typeofaccount','$subduration')";

if(mysqli_query($conn,$query)) {
echo "<script type='text/javascript'>alert('Your Application has been submitted successfully');</script>";
echo "<script>window.location = '../Main Page/Main.html'</script>";
}
}
mysqli_close($conn);
?>

<body class="body">
    <header class="mainHeader" >
        <img src="img/logo.png"><img class="title" src="img/Sportzmagazine.png">
            <nav id="navmenu"><ul>
                <li><a href="../Main Page/Main.html">Home</a></li>
                <li><a href="#" style="background:#FFCC33;">Subscribe&nbsp;&nbsp;&#9660;</a></style>
                    <ul class="sub1">
                        <li><a href="../login Page/InividualSubscriber.php">Individual</a></li>
                        <li  class="active"><a href="../login Page/CorporateSubscriber.php">Corporate</a></li>
                    </ul>
                </li>
                <li><a href="#">Contribute</a></li>
                <li><a href="#">Contact</a></li>
                <li id='search'style="margin-left:150px">
                    <form action="" method="get">
                        <input type="text" name="search_text" id="search_text" placeholder="Search"/>
                        <input type="button" name="search_button" id="search_button"></a>
                            </form>
                </li>
                <li style="float:right; margin-right"><a href="../login Page/index_login.html">Login</a></li>
            </ul></nav>
            </header>
    <div class="wrapper">
        <div class="content">
            <div id="form_wrapper" class="form_wrapper">
                <div class="register_width"> 
                    <form class="register active" onsubmit= "return validateForm(this);" method="POST" action="CorporateSubscriber.php">
                        <h3>Application Form - Corporate Subscription</h3>
                        
                        <!-- Personal Information -->
                        <fieldset>
                            <legend>Company information:</legend>
                            <div class="column">
                                <div>
                                    <label>Company Name:</label>
                                    <input type="text" name = "cname1" required/>
                                    <span class="error">This is an error</span>
                                </div>
                                <div>
                                    <label>Email Address:</label>
                                    <input type="text" name = "cmpemail1" onchange="form.cmpemail2.pattern = this.value;" required/>
                                    <span class="error">This is an error</span>
                                </div>
                            </div>
                            <div class="column1">
                                <div>
                                    <label>Phone Number:</label>
                                    <input type="text" name = "cphone" required style="width:60%;" placeholder="( -  -  - )    -  -  -    -  -  -  -" />
                                    <span class="error">This is an error</span>
                                </div>
                                <div>
                                    <label>Confirm Email Address:</label>
                                    <input type="text" name = "cmpemail2" required/>
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
                                    <input type="text" name = "fname1" required/>
                                    <span class="error">This is an error</span>
                                </div>
                                <div>
                                    <label>Email Address:</label>
                                    <input type="text" name = "email" required/>
                                    <span class="error">This is an error</span>
                                </div>
                                
                                <div>
                                    <label>Department Name:</label>
                                    <input type="text" name = "dname" required/>
                                    <span class="error">This is an error</span>
                                </div>
                                
                            </div>
                            <div class="column1">
                                <div>
                                    <label>Last Name:</label>
                                    <input type="text" name = "lname1" required/>
                                    <span class="error">This is an error</span>
                                </div>
                                <div>
                                    <label>Phone Number:</label>
                                    <input type="text" name = "phone" required style="width:60%;" placeholder="( -  -  - )    -  -  -    -  -  -  -" />
                                    <span class="error">This is an error</span>
                                </div>
                                <div>
                                    <label>Role in the Company:</label>
                                    <input type="text" name = "role" required/>
                                    <span class="error">This is an error</span>
                                </div>
                            </div>
                        </fieldset>
                        
                        <!-- Address -->
                        <fieldset>
                            <legend><br>Delivery Address:</legend>
                            <div class="column">
                                <div>
                                    <label>Address line 1:</label>
                                    <input type="text" name = "addline1" required/>
                                    <span class="error">This is an error</span>
                                </div>
                                <div>
                                    <label>City:</label>
                                    <input type="text" name = "addline2" required style="width:50%;"/>
                                    <span class="error">This is an error</span>
                                </div>
                                <div>
                                    <label>Zip Code:</label>
                                    <input type="text" style="width:40%;" required name = "zip"/>
                                    <span class="error">This is an error</span>
                                </div>
                            </div>
                            <div class="column1">
                                <div>
                                    <label>Address line 2:</label>
                                    <input type="text" name = "addline2"/>
                                    <span class="error">This is an error</span>
                                </div>
                                <div>
                                    <label>State:</label>
                                    <select name = "state" required style="float:left;margin: 5px 25px 10px 25px;width:60%;line-height:3px;height:35px;border: solid 1px #E5E5E5;background:
                                        -webkit-gradient(
                                        linear,
                                        left top,
                                        left 25,
                                        from(#FFFFFF),
                                        color-stop(4%, #EEEEEE),
                                        to(#FFFFFF)
                                        );font-size:16px;">
                                        <option value="0"></option>
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="CA">California</option>
                                        <option value="CO">Colorado</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="DC">District Of Columbia</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="ID">Idaho</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IN">Indiana</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NV">Nevada</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="OH">Ohio</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="OR">Oregon</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="TX">Texas</option>
                                        <option value="UT">Utah</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WA">Washington</option>
                                        <option value="WV">West Virginia</option>
                                        <option value="WI">Wisconsin</option>
                                        <option value="WY">Wyoming</option>
                                    </select>
                                    <span class="error">This is an error</span>
                                </div>
                            </div>
                        </fieldset>
                        
                        <fieldset>
                            <legend><br>Subscription Details:</legend>
                            <div class="column">
                                <div>
                                    <label>Number Of Copies per Month:</label>
                                    <input type="text" required name = "numcopies" style="width:30%;"/>
                                    <span class="error">This is an error</span>
                                </div>
                                </div>
                                <div class="column1">
                                <div>
                                    <label style="margin: 15px 35px 20px 35px;">Subscription Duration:
                                        <select required style="float:left;width:70%;line-height:3px;height:35px;border: solid 1px #E5E5E5;background:
                                            -webkit-gradient(
                                            linear,
                                            left top,
                                            left 25,
                                            from(#FFFFFF),
                                            color-stop(4%, #EEEEEE),
                                            to(#FFFFFF)
                                            );font-size:16px;">
                                        <option value="1year">1 Year</option>
                                        <option value="2Years">2 Years</option>
                                        <option value="3Years">3 Years</option>
                                    </select>
                                    </label>
                                </div>
                                </div>
                        </fieldset>
                        
                        <!-- Payment Information -->
                        <fieldset>
                            <legend><br>Payment:</legend>
                            
                            
                            <label><i>Choose a payment method:</i></label><br>
                            
                            <input name="radio1" type="radio"
                            value="" onclick="HideOrShowStuff(1)" />&nbsp;&nbsp;&nbsp;&nbsp;Credit Card
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input name="radio1" type="radio"
                            value="" onclick="HideOrShowStuff(2)" />&nbsp;&nbsp;&nbsp;&nbsp;Check<br/>
                            
                            <label id="txtShow11" name="txtShow11" style="display:none;">Name on card:</label>
                            <input type="text" value="" id="txtShow1"
                            name="txtShow1" style="display:none; width:40%; float:left"/>
                            <label float:"left" id="txtShow13" name="txtShow13" style="display:none;"><br><br>Credit Card Number:</label>
                            <input type="text" value="" id="txtShow3"
                            name="txtShow3" style="display:none; width:30%; "placeholder="- - - -   - - - -   - - - -    - - - - "/>
                            <label id="txtShow15" name="txtShow15" style="display:none;">Expiration Date:</label>
                            <select id="txtShow5" name="txtShow5" style="display:none;margin:7px 3px 10px 30px;float:left;width:7%;line-height:3px;height:35px;border: solid 1px #E5E5E5;background:
                                -webkit-gradient(
                                linear,
                                left top,
                                left 25,
                                from(#FFFFFF),
                                color-stop(4%, #EEEEEE),
                                to(#FFFFFF)
                                );font-size:16px;">
                                <option value="0"></option>
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                                <option value="5">05</option>
                                <option value="6">06</option>
                                <option value="7">07</option>
                                <option value="8">08</option>
                                <option value="9">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            
                            <select id="txtShow9" name="txtShow9" style="display:none;margin:7px 25px 10px 1px;float:left;width:10%;line-height:3px;height:35px;border: solid 1px #E5E5E5;background:
                                -webkit-gradient(
                                linear,
                                left top,
                                left 25,
                                from(#FFFFFF),
                                color-stop(4%, #EEEEEE),
                                to(#FFFFFF)
                                );font-size:16px;">
                                <option value="0"></option>
                                <option value="1">2014</option>
                                <option value="2">2015</option>
                                <option value="3">2016</option>
                                <option value="4">2017</option>
                                <option value="5">2018</option>
                                <option value="6">2019</option>
                                <option value="7">2020</option>
                            </select>
                            
                            <label float:"left" id="txtShow17" name="txtShow17" style="display:none;"><br><br>CVV:</label>
                            <input type="text" value="" id="txtShow7"
                            name="txtShow7" style="display:none; width:5%;" placeholder="- - -" />
                            
                            <label id="txtShow12" name="txtShow12" style="display:none;">Name on check:</label>
                            <input type="text" value="" id="txtShow2"
                            name="txtShow1" style="display:none; width:40%; float:left" />
                            
                            <label id="txtShow14" name="txtShow14" style="display:none;"><br><br>Routing Number:</label>
                            <input type="text" value="" id="txtShow4"
                            name="txtShow4" style="display:none; width:30%;" />
                            <label id="txtShow16" name="txtShow16" style="display:none;">Account Number:</label>
                            <input type="text" value="" id="txtShow6"
                            name="txtShow6" style="display:none; width:30%; float:left" />
                            <label id="txtShow18" name="txtShow18" style="display:none;"><br><br>Type of Account:</label>
                            <select id="txtShow8" name="txtShow8" style="display:none;margin:4px 1px 1px 30px;float:left;width:20%;line-height:3px;height:35px;border: solid 1px #E5E5E5;background:
                                -webkit-gradient(
                                linear,
                                left top,
                                left 25,
                                from(#FFFFFF),
                                color-stop(4%, #EEEEEE),
                                to(#FFFFFF)
                                );font-size:16px;">
                                <option value="0"></option>
                                <option value="Checking">Checking</option>
                                <option value="Savings">Savings</option>
                            </select>
                            <br>
                        </fieldset>
                        
                        <div class="bottom">
                            <input onclick="location.href='../Main Page/Main.html'"type="reset" value="Cancel"/>
                            <input type="submit" value="Submit" />
                            <a href="index_login.html" rel="login" class="linkform"><font size="3">Have a Subscription already? Log in here</font></a>
                            <div class="clear"></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</body>
</html>
