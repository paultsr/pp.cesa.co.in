<?php
//Copyright (C) 2013 PAUL SHAIJU, THRISSUR, KERALA, INDIA.
//
// This script is free software; you can redistribute it and/or modify
// it under the terms of the GNU Lesser General Public License as
// published by the Free Software Foundation; either version 3 of the
// License, or (at your option) any later version.
//
// This library is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
// Lesser General Public License for more details.
//
// You should have received a copy of the GNU Lesser General Public
// License along with this library; if not, write to the Free Software
// Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307,
// USA.
//
// Author: Paul S <intouch.paulson@gmail.com>
// Website : http://paultsr.in
// Email-id : paultsr@gmail.com
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

