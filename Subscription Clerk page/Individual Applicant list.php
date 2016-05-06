<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Individual Applicant list</title>
    <link rel="stylesheet" type="text/css" href="styleSubscriptionClerk.css" />
    <style>
        select {
            width:150px;
        }
    </style>
    
</head>
<body>
    <header class="mainHeader" >
<p></div>
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
                    <li class='last'><a href='Application List.php'><span>Personal Preferences</span></a></li>
                </ul>
            </li>
            <li><a href='Report Generation.php'><span>Mail Box</span></a></li>
            <li class='active has-sub'><a href='' style="background:#FFCC33;"><span>Approve Applicants</span></a>
                <ul>
                    <li><a href='Individual Applicant list.php' style="background:#FFCC33;"><span>Individual</span></a></li>
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
                 <?php include "conn.php"?>
                    <?php 
                    $applicantNum=$_POST["applicantNum"];
                    if($_POST["approveDeny"]=="Approve"){
                        $status="Approved";
                    }
                    else{
                        $status="Denied";
                    }
                    if(!empty($applicantNum)){
                        $query = "update individualApplicant set approvalStatus='".$status."' , approvalDateTime=SYSDATE() where applicantNum=".$applicantNum.";";

                    if(mysqli_query($conn, $query)){
                        
                        echo "<script type='text/javascript'>alert('Corporate Applicantion No ".$applicantNum." has been ".$status.".');</script>";
                    }
                    }
                    
                    ?>
                    <table id="mytable" cellspacing="0" summary="Individual Applicant List">
                        <caption>Individual Applicants List :<br></caption>
                        <tr>
                            <th scope="col" abbr="Application Number">Application Number</th>
                            <th scope="col" abbr="Applicant Name">Applicant Name</th>
                            <th scope="col" abbr="Applicant Status">Application Status</th>
                            <th scope="col" abbr="Appoval Date">Approval Date/Time</th>
                        </tr>
<?php
$query = "select applicantNum,fName,lName,approvalStatus,approvalDateTime from individualApplicant order by (approvalStatus='New') DESC, approvalStatus ASC;";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $i=0;
    while($row = mysqli_fetch_assoc($result)) {
        if($i%2==0){
        echo "<tr>"
                ."<td><form method='POST' action='IndividualApprove.php'><input type='submit' style= 'background: none; border: none; color: blue; text-decoration: underline; cursor: pointer;' name='applicantNum' value='", $row["applicantNum"], "'/></form></td>"
                ."<td>".$row["fName"]." ".$row["lName"]."</td>"
                ."<td>".$row["approvalStatus"]."</td>"
                ."<td>".$row["approvalDateTime"]."</td>"
        . "</tr>";
    }
    else{
         echo "<tr>"
                ."<td class='alt'><form method='POST' action='IndividualApprove.php'><input type='submit' style= 'background: none; border: none; color: blue; text-decoration: underline; cursor: pointer;' name='applicantNum' value='", $row["applicantNum"], "'/></form></td>"
                ."<td class='alt'>".$row["fName"]." ".$row["lName"]."</td>"
                ."<td class='alt'>".$row["approvalStatus"]."</td>"
                ."<td class='alt'>".$row["approvalDateTime"]."</td>"
        . "</tr>";
    }
    $i++;
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>
                    </table>
              </content>
             </article>
        </div>
</body>
</html>