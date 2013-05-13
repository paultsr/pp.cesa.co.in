<?php
$mailto="paulson@jecc.ac.in";
$from=$_POST["from"];
$admno=$_POST["admno"];
$mailsubject=$_POST["mailsubject"];
$mailbody=$_POST["mailbody"];
if(empty($mailto))
{
die("Recipient is blank !");
}
if(empty($from))
{
die("Sender is blank !");
}
$headers = "From: $from \n";
if(empty($admno))
{
die("Admission No is blank !");
}
$headers.="Cc: $admno";
if(empty($mailsubject))
{
$mailsubject="";
}
if(empty($mailbody))
{
$mailbody="";
}
$result=mail($mailto,$mailsubject,$mailbody,$headers);
if($result)
{
echo "<br><h1><center>Email sent Successfully !!</center></h1>";
}
else
{
echo "<br><h1><center>Email could not be sent.</center></h1>";
}
?>

