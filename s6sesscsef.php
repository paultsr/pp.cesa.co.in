<html>
<head>
<title>PP Sessional Marks (RAW)</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor="#FFFFFF" text="#000000">
<?php
$host="";// Leave it blank(means localhost) if you are hosting in remote webserver from b4uindia,godaddy or like.
$uname=""; // Type username for the dB
$pass=""; // Type password for the dB
$db=""; //Type name of the dB
$tab1=""; //Type the name of the table in dB
$ureg2=$_GET["ureg"];
//$ureg2=$_POST["ureg"];
$con=mysql_connect($host,$uname,$pass) 
or die("Database Connection Failed ! <br>");
$res=mysql_select_db($db)
 or die("Database could not be selected");
$qu="SELECT * from s4cse where urno='". $ureg2 ."'";
$res=mysql_query($qu);
$row=mysql_fetch_array($res);
$uname2=$row["name"];
$uremrk=$row["remaksr"];
$withheld=$row["astc"];
//$uremrk=$row["remaksn"];
//$idmc=$row["idm"]*15/50;
//$tstcn=$row["tstc"] + round($idmc);
if($row["chk"]== 1)
{
$qu="SELECT * from s4cse where urno='". $ureg2 ."'";
$res=mysql_query($qu);
 if(!$res)
 {
 die("Query could not be executed.<br>");
 }
 else
 {
echo "<center><b><h2><font color=\"#800517\">Jyothi Engineering College</h2></b></center>";
echo "<center><b><h3>Computer Science Department</h3></b></center>";
echo "<center><b><u>CSE 2011 - 2015 Batch - PP Sessional Marks (RAW)</u></b></center>";
//echo "<center><b><u>CSE 2008 - 2012 Batch - CS04 705C SAM Sessional Marks (NORMALIZED)</u></b></center>";
echo "<br><center>Welcome, ". $uname2 ."</center>";
echo "<table border=\"1\" width=\"750\" align=\"center\" cellpadding=\"5\" cellspacing=\"3\">";
echo " <tr bgcolor=\"#c36241\">";
echo "<td width=\"150\"><center><b>Attnd (3)</b></center></td>\n";
echo "<td width=\"150\"><center><b>Assig (9)</b></center></td>\n";
echo "<td width=\"150\"><center><b>Test (18)</b></center></td>\n";
echo "<td width=\"150\"><center><b>Total (30)</b></center></td>\n";
echo "<td width=\"150\"><center><b>ClassAvg</b></center></td>\n";
 echo "</tr>\n";
 while($row=mysql_fetch_array($res))
 {
 echo "<tr bgcolor=\"#eeeeee\">\n";
 echo "<td><center>".$row["atms"]."</center></td>\n";
 echo "<td><center>".$row["astc"]."</center></td>\n";
 echo "<td><center>".$row["tstc"]."</center></td>\n";
 //echo "<td><center>".$tstcn."</center></td>\n";

 if($row["sesr"]<22)
 //if($row["sesn"]<35)
 {
echo "<td><font color=\"red\"><center>".$row["sesr"]."</center></font></td>\n";
 //echo "<td><font color=\"red\"><center>".$row["sesn"]."</center></font></td>\n";
 }
 else
 {
 echo "<td><center>".$row["sesr"]."</center></td>\n";
 //echo "<td><center>".$row["sesn"]."</center></td>\n";
 }
echo "<td><center>".$row["clavsr"]."</center></td>\n";
//echo "<td><center>".$row["clavsn"]."</center></td>\n";
echo "</tr>\n";
}
echo "</table>\n";
echo "<br>";
#if($uremrk==3)
#{
#echo "<center><b><font color=\"red\">Meet Me !</font></b></center>";
#}
#else if($uremrk==0)
if($uremrk==0)
{
echo "<center><b>Very Good !</b></center>";
}
else if($uremrk==1)
{
echo "<center><b>Good !</b></center>";
}
else
{
echo "<center><b>Work Hard & Persevere !</b></center>\n";
echo "<center><b><font color=\"red\">Meet Me </font></b></center>";
}
if($withheld==0)
{
echo "<center><b><font color=\"red\">Submit PP Program Book at the Earliest </font></b></center>";
}
echo "<br>";
echo "<center><i>Compiled By Paul Shaiju(PS)</i></center>";
echo "<br>";
echo "<center><b>** All the Best 4 the University Examinations **</b></center>";
echo "<br>";
echo "<center><b>** HAPPY EASTER **</b></center>\n";
echo "<br>";
echo "<center><a href=\"index.html\" >Logout </a>";
echo "&nbsp;&nbsp;&nbsp;<a href=\"s6sesscsefd.php?ureg=$ureg2&Submit=Login\" >Expand Marks</a>";
echo "&nbsp;&nbsp;&nbsp;<a href=\"complaintform.html\" >Complaints</a></center><br>";
//echo"<center>* Attendance marks(out of 5) will be added to the Total only after the end of this semester, 15th October 2010</center>";
echo "<hr><i>CSE Department is not responsible for any inadvertent error that may have crept in the information being published in the site. The details published are for immediate information of the candidate and cannot be treated as original documents.</i>";
}
}
else
{
//echo $ureg2;
echo "<p>&nbsp;</p><br><br><br><br><br><center><h3>";
echo "<center><a href=\"index.html\" >Login</a></center><br>";
die("User does not exist !");
}
?>
</body>
</html>

