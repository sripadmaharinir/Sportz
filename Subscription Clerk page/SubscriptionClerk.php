<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Subscription Clerk Home</title>
    <link rel="stylesheet" type="text/css" href="styleSubscriptionClerk.css" />
    <style>
        select {
            width:150px;
        }
    </style>
    
</head>
<body>
    <header class="mainHeader" >
        <p>
</div>
<a class="back" href=""><b><?php $userName = $_POST[userName]; echo "Hello, ".$userName; $_SESSION["userName"]=$userName;?></b></a>
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
                <li class='last'><a href='Application List.php'><span>Personal Preferences</span></a></li>
            </ul>
            </li>
            <li><a href='SalesReport.php'><span>Mail Box</span></a></li>
            <li class='active has-sub'><a href=''><span>Approve Applicants</span></a>
                        <ul>
                            <li><a href='Individual Applicant list.php'><span>Individual</span></a></li>
                            <li class='last'><a href='Corporate Applicant list.php'><span>Corporate</span></a></li>
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
        <div class="content">
            <article class="topcontent">
            <content>
               <font size="4"> <p><b><i>Sportz Maganine believes that our associates are our greatest competitive advantage. As a company, we strive to attract, motivate and retain a high-performing, diverse workforce.</i></b></font><br><br>
                <font size="3"><b><u><i>Notofications:</i></u></b></font>
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;<b>*</b> You have  unread emails. <a href="#"><font size="2">Click here to read</font></a>.
                    
                    <br><br>
                    <font size="3"><b><u><i>Quick Links:</i></u></b></font>
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<b>*</b> <a href="#"><font size="2"> Click here</font></a> to view your  Benefits, and payroll information and update your open enrollment options.
                        
                    <br>
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<b>*</b> To enter Employee Self Service<a href="#"><font size="2"> Click here</font></a>.

                    <br>
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<b>*</b> To enter EBursar Payment Services Login :<a href="#"><font size="2">Click here</font></a><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Make a payment on your bursar account.

                    <br>
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>*</b> Log volunteer hours here:  <a href="#"><font size="2">CAMPUSLINK</font></a>
                    <br>
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>*</b> Receive an employee discount on a 1 year subcription: <a href="#"><font size="2">Discount Code</font></a><br>
                    </p>
              </content>
             </article>
        </div>

</body>
</html>