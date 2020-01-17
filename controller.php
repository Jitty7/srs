<?php
echo "hi";


class controller{
 var $Reg_no;
 var $Fname;
 var $Lname;
 var $Mobile;
 var $Dept_name;
 var $Course_name;
 var $Password;
 var $Email;
 var $Name;
 var $Sem_no;
 var $Years;
 
 //private $password;


public function display($Reg_no,$Fname,$Lname,$Mobile,$Dept_name,$Course_name,$Password,$Email,$Name,$Sem_no,$Years)
{
  
  include 'model/model.php';
  $mod= new model();
  $mod->insert($Reg_no,$Fname,$Lname,$Mobile,$Dept_name,$Course_name,$Password,$Email,$Name,$Sem_no,$Years);
  echo "ok";

}
}


//require_once(../model/Loginsystem.php)
//$l 01oginSystem = new LoginSystem();
//if($loginSystem->doLogin($this->username,$this->password))

/**
 * 
 */
?> 
