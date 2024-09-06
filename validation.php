<?php
$value = $_GET['query'];
$formfield = $_GET['field'];
// Check Valid or Invalid user name when user enters user name in username input field.
if ($formfield == "firstname" ||$formfield == "middelname" || $formfield == "lastname"  ) 
{
	if (strlen($value) < 4) 
	{
		echo "Must be 3+ letters";
	}
	else 
	{
		echo "<span>Valid</span>";
	}
}

// Check Valid or Invalid email when user enters email in email input field.
if ($formfield == "email") 
{	
	if(!filter_var($value,FILTER_VALIDATE_EMAIL))
	// if (!preg_match("/[a-z0-9]+@[a-z]+\.[a z]{2,3}/", $value)) 
	{
		$emailErr = "Invalid email";
		echo "Invalid email";
	} 
	else 
	{
		echo "<span>Valid</span>";
	}
}
// Check Valid or Invalid password when user enters password in password input field.
if ($formfield == "password" || $formfield == "repassword") 
{
	if (strlen($value) < 6) 
	{
		echo "Password too short";
	} 
	else
	{
		echo "<span>Strong</span>";
	}
}
if ($formfield == "add") 
{
	if (strlen($value) < 25) 
	{
		echo "Must be 25+ letters";
	}
	else 
	{
		echo "<span>Valid</span>";
	}
}
if ($formfield == "mobile") 
{
	if (!preg_match("/[0-9]+/", $value) || (strlen($value) < 10) || (strlen($value) > 10)) 
	{
		echo "Invalid number ";
		echo " Must be 10 digits";
	} 
	else 
	{
		echo "<span>Valid</span>";
	}
}
/*if($formfield == "agree"){
	if($value == false){
		echo "done";
	}
	else{
		echo "please check this.";
	}

}*/
// if($formfield == "birthdate"){
// 	if($value != 'agree'){
// 		echo "please check this.";
// 	}
// 	else{
// 		echo "done";
// 	}

// }
?>