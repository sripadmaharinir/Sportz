<?php
    session_start();
    ?>
<!DOCTYPE html>
<html>
<head>
<title>Sales Report</title>
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

<li><a href='SalesReport.php' style="background:#FFCC33;"><span>Generate Report</span></a></li>
<li class='last'><a href=''><span>Employee Services</span></a></li>
</ul>
</div>
<div class="mainContent">
<div class="content">
<article class="topcontent">
<content>

<?php include "conn.php"?>

<legend><b><i><u>Monthly Subscription Sales Report:</u></i></b><br></legend><br>
<form method="POST" action="SalesReport.php">
<div>
<div style="float:left;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Start Date: <input name="startDate" type="date" id="datepicker" style="border: solid 1px #E5E5E5;
background: #FFFFFF;
margin: 0px 50px 0px 50px;
padding: 9px;
display:block;
font-size:16px;
width:160px;
background:
-webkit-gradient(
                 linear,
                 left top,
                 left 25,
                 from(#FFFFFF),
                      color-stop(4%, #EEEEEE),
                                 to(#FFFFFF)
                                    );
                                 background:
                                 -moz-linear-gradient(
                                                      top,
                                                      #FFFFFF,
                                                      #EEEEEE 1px,
                                                      #FFFFFF 25px
                                                      );
                                 -moz-box-shadow: 0px 0px 8px #f0f0f0;
                                 -webkit-box-shadow: 0px 0px 8px #f0f0f0;
                                 box-shadow: 0px 0px 8px #f0f0f0;"/>
                                 </div>
                                 
                                 <div>End Date:
                                 <input id="datepicker1"  type="date" name="endDate" style="border: solid 1px #E5E5E5;
                                 background: #FFFFFF;
                                 margin: 0px 0px 0px 0px;
                                 padding: 9px;
                                 display:block;
                                 font-size:16px;
                                 width:160px;
                                 background:
                                 -webkit-gradient(
                                                  linear,
                                                  left top,
                                                  left 25,
                                                  from(#FFFFFF),
                                                       color-stop(4%, #EEEEEE),
                                                                  to(#FFFFFF)
                                                                     );
                                                                  background:
                                                                  -moz-linear-gradient(
                                                                                       top,
                                                                                       #FFFFFF,
                                                                                       #EEEEEE 1px,
                                                                                       #FFFFFF 25px
                                                                                       );
                                                                  -moz-box-shadow: 0px 0px 8px #f0f0f0;
                                                                  -webkit-box-shadow: 0px 0px 8px #f0f0f0;
                                                                  box-shadow: 0px 0px 8px #f0f0f0;"/>
                                                                  </div>
                                                                  </div>
                                                                  <input type="reset" value="Cancel" style="width:100px; margin:20px 50px;">
                                                                  <input type="submit" value="Generate"style="width:100px; margin:20px 140px;"/>
                                                                  </form>
                                                                  <?php
                                                                  if(empty($_POST["endDate"])){
                                                                  $startDate="2015-11-01";
                                                                  $endDate="2015-12-01";
                                                                  }
                                                                  else{
                                                                  $startDate=$_POST["startDate"];
                                                                  $endDate=$_POST["endDate"];
                                                                  }
                                                                  echo "<br><br><h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sales Report for dates ".$startDate." to ".$endDate."</h5>";
                                                                  ?>
                                                                  <table id="mytable" cellspacing="0" summary="Sales Report">
                                                                  <tr>
                                                                  <th scope="col" abbr="Subscription Type">Subscription Type</th>
                                                                  <th scope="col" abbr="State">State</th>
                                                                  <th scope="col" abbr="Application Number">Subscriber Number</th>
                                                                  <th scope="col" abbr="NumOfCopies">Number of Copies</th>
                                                                  <th scope="col" abbr="Duration">Duration</th>
                                                                  <th scope="col" abbr="Start Date">Subscription Start Date</th>
                                                                  <th scope="col" abbr="RenewalDate">Subscription Renewal Date</th>
                                                                  </tr>
                                                                  <?php
                                                                  
                                                                  $query = "select 'Individual' as subtype,state,applicantNum,numOfCopiesPerMonth,substring(subDuration,1,1) as duration,DATE(approvalDateTime) as approvalDate,DATE(renewalDateTime) as renewalDate from individualSubscriber where (approvalDateTime>'".$startDate."' and approvalDateTime<'".$endDate."') or (renewalDateTime>'".$startDate."' and renewalDateTime<'".$endDate."') UNION select 'Corporate' as subtype,state,applicantNum,numOfCopiesPerMonth,substring(subDuration,1,1) as duration,DATE(approvalDateTime) as approvalDate,DATE(renewalDateTime) as renewalDate from corporateSubscriber where (approvalDateTime>'".$startDate."' and approvalDateTime<'".$endDate."') or (renewalDateTime>'".$startDate."' and renewalDateTime<'".$endDate."') order by subtype desc,state;";
                                                                  
                                                                  $result = mysqli_query($conn, $query);
                                                                  
                                                                  if (mysqli_num_rows($result) > 0) {
                                                                  // output data of each row
                                                                  $i=0;
                                                                  $salesGrandTotal=0;
                                                                  while($row = mysqli_fetch_assoc($result)) {
                                                                  if($i%2==0){
                                                                  echo "<tr>";
                                                                  
                                                                  if (empty($subtype)){
                                                                  $subTot=$row["numOfCopiesPerMonth"];
                                                                  $subtype=$row["subtype"];
                                                                  echo "<td>".$row["subtype"]."</td>";
                                                                  $subStateTot=$row["numOfCopiesPerMonth"];
                                                                  $stateGroup=$row["state"];
                                                                  echo "<td>".$row["state"]."</td>";
                                                                  }
                                                                  else if($subtype==$row["subtype"]){
                                                                  $subTot=$subTot+$row["numOfCopiesPerMonth"];
                                                                      if($stateGroup==$row["state"]){
                                                                      $subStateTot=$subStateTot+$row["numOfCopiesPerMonth"];
                                                                      echo "<td>".""."</td>";
                                                                      echo "<td>".""."</td>";
                                                                      }
                                                                      else{
                                                                      echo "<td colspan='7' align='right'>".$subtype." sales for ".$stateGroup."=".$subStateTot."</td></tr><tr>";
                                                                      $subStateTot=$row["numOfCopiesPerMonth"];
                                                                      $stateGroup=$row["state"];
                                                                      echo "<td>".""."</td>";
                                                                      echo "<td>".$row["state"]."</td>";
                                                                      }
                                                                  }
                                                                  else{
                                                                      echo "<td colspan='7' align='right'>".$subtype." sales for ".$stateGroup."=".$subStateTot."</td></tr><tr>";
                                                                      echo "<td colspan='7' align='right'>Total ".$subtype." sales=".$subTot."</td></tr><tr>";
                                                                  $salesGrandTotal=$salesGrandTotal+$subTot;
                                                                   $subTot=$row["numOfCopiesPerMonth"];
                                                                  $subtype=$row["subtype"];
                                                                  echo "<td>".$row["subtype"]."</td>";
                                                                  $subStateTot=$row["numOfCopiesPerMonth"];
                                                                  $stateGroup=$row["state"];
                                                                  echo "<td>".$row["state"]."</td>";
                                                                  }
                                                                  
                                                                  
                                                                  echo "<td>".$row["applicantNum"]."</td>"
                                                                  ."<td>".$row["numOfCopiesPerMonth"]."</td>"
                                                                  ."<td>".$row["duration"]."</td>"
                                                                  ."<td>".$row["approvalDate"]."</td>"
                                                                  ."<td>".$row["renewalDate"]."</td>"
                                                                  . "</tr>";
                                                                  }
                                                                  else{
                                                                  echo "<tr>";
                                                                  
                                                                  if (empty($subtype)){
                                                                  $subTot=$row["numOfCopiesPerMonth"];
                                                                  $subtype=$row["subtype"];
                                                                  echo "<td class='alt'>".$row["subtype"]."</td>";
                                                                  $subStateTot=$row["numOfCopiesPerMonth"];
                                                                  $stateGroup=$row["state"];
                                                                  echo "<td class='alt'>".$row["state"]."</td>";
                                                                  }
                                                                  else if($subtype==$row["subtype"]){
                                                                  $subTot=$subTot+$row["numOfCopiesPerMonth"];
                                                                  if($stateGroup==$row["state"]){
                                                                  $subStateTot=$subStateTot+$row["numOfCopiesPerMonth"];
                                                                  echo "<td class='alt'>".""."</td>";
                                                                  echo "<td class='alt'>".""."</td>";
                                                                  }
                                                                  else{
                                                                  echo "<td colspan='7' align='right'>".$subtype." sales for ".$stateGroup."=".$subStateTot."</td></tr><tr>";
                                                                  $subStateTot=$row["numOfCopiesPerMonth"];
                                                                  $stateGroup=$row["state"];
                                                                  echo "<td class='alt'>".""."</td>";
                                                                  echo "<td class='alt'>".$row["state"]."</td>";
                                                                  }
                                                                  }
                                                                  else{
                                                                  echo "<td colspan='7' align='right'>".$subtype." sales for ".$stateGroup."=".$subStateTot."</td></tr><tr>";
                                                                  echo "<td colspan='7' align='right'>Total ".$subtype." sales=".$subTot."</td></tr><tr>";
                                                                  $salesGrandTotal=$salesGrandTotal+$subTot;
                                                                  $subTot=$row["numOfCopiesPerMonth"];
                                                                  $subtype=$row["subtype"];
                                                                  echo "<td class='alt'>".$row["subtype"]."</td>";
                                                                  $subStateTot=$row["numOfCopiesPerMonth"];
                                                                  $stateGroup=$row["state"];
                                                                  echo "<td class='alt'>".$row["state"]."</td>";
                                                                  }
                                                                  
                                                                  
                                                                  echo "<td class='alt'>".$row["applicantNum"]."</td>"
                                                                  ."<td class='alt'>".$row["numOfCopiesPerMonth"]."</td>"
                                                                  ."<td class='alt'>".$row["duration"]."</td>"
                                                                  ."<td class='alt'>".$row["approvalDate"]."</td>"
                                                                  ."<td class='alt'>".$row["renewalDate"]."</td>"
                                                                  . "</tr>";
                                                                  }
                                                                  $i++;
                                                                  }
                                                                  echo "<td colspan='7' align='right'>".$subtype." sales for ".$stateGroup."=".$subStateTot."</td></tr><tr>";
                                                                  echo "<td colspan='7' align='right'>Total ".$subtype." sales=".$subTot."</td></tr><tr>";
                                                                  $salesGrandTotal=$salesGrandTotal+$subTot;
                                                                  echo "<td colspan='7' align='right'>Sales Grand Total =".$salesGrandTotal."</td></tr>";
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