<?php
include 'controller/controller.php';
if(isset($_POST['submit']))
{
  $Reg_no=$_POST['Reg_no'];
  $Fname=$_POST['Fname'];
  $Lname=$_POST['Lname'];
  $Mobile=$_POST['Mobile'];
  $Dept_name=$_POST['Dept_name'];
  $Course_name=$_POST['Course_name'];
  $Password=$_POST['Password'];
  $Email=$_POST['Email'];
  $Name=$_POST['Name'];
  $Sem_no=$_POST['Sem_no'];
  $Years=$_POST['Years'];
 
 $con=new controller();
 $con->display($Reg_no,$Fname,$Lname,$Mobile,$Dept_name,$Course_name,$Password,$Email,$Name,$Sem_no,$Years);

}

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<title>
</title>


<center>
<div  class="var"style="border:2px solid red; width:30%;">
<h2 style="color :white"> REGISTRATION FORM </h2>

<form name="register"    method="POST" onsubmit="return validate()" class="container" action="../controller/controller.php">
<script>
function validate()
	{   var Reg_no=document.forms["register"]["Reg_no"].value;
	    var Fname=document.forms["register"]["Fname"].value;
		var Lname=document.forms["register"]["Lname"].value;
		var Mobile=document.forms["register"]["Mobile"].value;
		var Dept_name=document.forms["register"]["Dept_name"].value;
		var Course_name=document.forms["register"]["Course_name"].value;
		var Password=document.forms["register"]["Password"].value;
		var Email=document.forms["register"]["Email"].value;
		var Name=document.forms["register"]["Name"].value;
		var Sem_no=document.forms["register"]["Sem_no"].value;
		var Years=document.forms["register"]["Years"].value;
		
		
		if(Reg_no=="")
		{
			alert("plse entr the register number");
			document.forms["register"]["Reg_no"].focus();
			return false;
		}	
		else if(Fname=="")
		{
			alert("plse entr the first name");
			document.forms["register"]["Fname"].focus();
			return false;
		}	
		else if(Lname=="")
		{
			alert("plse entr the last name");
			document.forms["register"]["Lname"].focus();
			return false;
		}
		else if(Mobile=="")
		{
			alert("plse entr the mobile");
			document.forms["register"]["Mobile"].focus();
			return false;
		}
		else if(Dept_name=="")
		{
			alert("plse entr the department name");
			document.forms["register"]["Dept_name"].focus();
			return false;
		}	
		else if(Course_name=="")
		{
			alert("plse entr the course");
			document.forms["register"]["Course_name"].focus();
			return false;
		}
        else if(Password=="")
		{
			alert("plse entr the password");
			document.forms["register"]["Password"].focus();
			return false;
		}			
		else if(Email=="")
		{
			alert("plse entr the email");
			document.forms["register"]["Email"].focus();
			return false;
		}
        else if(Name=="")
		{
			alert("plse entr the user name");
			document.forms["register"]["Name"].focus();
			return false;
		}	
				
		
		else if(Sem_no=="")
		{
			alert("plse entr the sem number");
			document.forms["register"]["Sem_no"].focus();
			return false;
		}
		else if(Years=="")
		{
			alert("plse entr the year");
			document.forms["register"]["Years"].focus();
			return false;
		}
		
		else if(pwd.length<6)
		{
			alert("password min 6 value");
			document.forms["register"]["password"].focus();
			return false;
		}	
		else if(pwd==cpwd)
			{
				return true;
			}
		else{
			alert("Password and conform password");
			return false;
		    }
		alert("checkpoint1");
			return true;
	}
</script>

Register Number:<input type="text"  name="Reg_no"   class="frm"><br><br>

First Name:	 <input type="text"  name="Fname"  class="frm"><br><br>
Last Name:	 <input type="text"  name="Lname"  class="frm"><br><br>
mobile no:	 <input type="text"  name="Mobile"    class="frm"><br><br>
Dept Name:	 <select name="Dept_name"  class="frm">
				 <option value="select" class="frm">Select</option>
	           <option value="BA" class="frm">BA</option>					 
               <option value="MCA" class="frm">BCA</option>
               <option value="BTECH" class="frm">BTECH</option>	
			   <option value="BCOM" class="frm">BCOM</option>
</select><br><br>
Course Name: <select name="Course_name"  class="frm">
				<option value="select" class="frm">Select</option>
	           <option value="CSE" class="frm">CSE</option>
               <option value="Ce" class="frm">CE</option>			   
               <option value="EC" class="frm">EC</option>
               <option value="MEC" class="frm">MEC</option>	
			   <option value="EEE" class="frm">EEE</option>
			   <option value="AEI" class="frm">AEI</option>
</select><br><br>
Password:	 <input type="password"  name="Password"   class="frm"><br><br>
Email:	 <input type="email"  name="Email"  class="frm"><br><br>
Username:	 <input type="text"  name="Name"   class="frm"><br><br>

Semester No:	 <select name="Sem_no"  class="frm">
	           <option value="1" class="frm">1</option>					 
               <option value="2" class="frm">2</option>
               <option value="3" class="frm">3</option>	
			   <option value="4" class="frm">4</option>
			   <option value="4" class="frm">5</option>
			   <option value="4" class="frm">6</option>
			   <option value="4" class="frm">7</option>
			   <option value="4" class="frm">8</option>
</select><br><br> 

Year:	<select name="Years" class="frm">
	           <option value="1" class="frm">1</option>					 
               <option value="2" class="frm">2</option>
               <option value="3" class="frm">3</option>	
			   <option value="3" class="frm">4</option>
</select><br><br> 


<input type="submit" value="submit" class="frm-btn" >
</div>
</center>