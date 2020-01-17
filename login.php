<?php
include 'controller/controller.php';
if(isset($_POST['submit']))
{
	$Name=$_POST['Name'];
	$Password=$_POST['Password'];
	$sql="select *from student where Name='$Name' and Password='$Password'";
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<style>
</style>	
<head>
	
<body>
<center>
<div class="var" style="height: 300px;margin-top:60px">
<div>
<form name="form"  method="post" >
<h2 style="color: white">LOGIN</h2></div>

<input type="text" class="frm" placeholder="User_Name" name="name"><br><br>
<input type="password"  class="frm" placeholder="Password" name="password"><br><br>
<input type="Submit" class="frm-btn" value="Submit">
<input type="Submit" class="frm-btn" value="Reset"><br><br>
</table>	
</form>
</div>
</div>
</center>
</body>
</html>
