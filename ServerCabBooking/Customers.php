<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>An Efficient Android App Monitoring For Cab Booking And Servicing</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="header">	
</div>
<div id="content">
	<div id="colOne">
	  <div id="ihome4">
      <div id="title">CUSTOMERS DETAILS</div>
      <div id="work1">
        <table width="648" height="32" border="0">
  		<tr height="35" align="center" style="font-weight:bold; color:#ffffff; background-color:#800000">
        <th width="45">CUSTOMER ID</th>
        <th width="45">CUSTOMER NAME</th>
        <th width="129">GENDER</th>
        <th width="84">CONTACT NO</th>
        <th width="110">EMAIL ID</th>
        <th width="110">CITY</th>
        <th width="110">STATE</th>
        <th width="136">ADDRESS</th> 
        <th width="136">PIN CODE</th> 
       </tr>
        <?php	 
		error_reporting(error_reporting() & ~E_NOTICE);
 		include('dbcon.php');		
		
		$result=mysql_query("select * from customer");
		while($rec = mysql_fetch_assoc($result))
		{
			 print"<tr align='center' style='color:#000000; background-color:#999999'>";
			 print"<td>";
			 echo $rec['customer_id'];
			 print"</td><td>";	
			 echo $rec['name'];
			 print"</td><td>";	
			 echo $rec['gender'];
			 print"</td><td>";	
			 echo $rec['cno'];
			 print"</td><td>";
			 echo $rec['email'];	
			 print"</td><td>";
			 echo $rec['city'];		 
			 print"</td><td>";
			 echo $rec['state'];	
			 print"</td><td>";
			 echo $rec['address'];
			 print"</td><td>";
			 echo $rec['pcode'];					 
			 print"</td>";
	 		 print"</tr>";  
		}   		
	  ?>  
		</table> 
      </div>
      </div>	
	</div>
	<div id="colTwo">
    <h2>Menu</h2>				
	<ul>		
		<li><a href="Customers.php" class="active">Customers</a></li>
        <li><a href="CabBooking.php">Cab Booking</a></li>        
        <li><a href="SHome.php">Back</a></li>
	</ul>	
	</div>
	<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer">	
</div>
<div align=center></div></body>
</html>