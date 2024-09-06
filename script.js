function checkForm() 
{
	// Fetching values from all input fields and storing them in variables.
	var firstname = document.getElementById("firstname1").value;
	var middelname = document.getElementById("middelname1").value;
	var lastname = document.getElementById("lastname1").value;
	var birthdate = document.getElementById("birthdate1").value;
	var add = document.getElementById("add1").value;
	var mobile = document.getElementById("mobile1").value;
	var email = document.getElementById("email1").value;
	var password = document.getElementById("password1").value;
	var repassword = document.getElementById("repassword1").value;
	// var check = document.getElementById("agree1").value;

	//Check input Fields Should not be blanks.
	if (firstname == '' ||middelname == '' ||lastname == '' ||birthdate == '' || email == ''||  add == '' || mobile == '' /* ||check == '' */) 
	{
		if(password != repassword)
		{
			alert("passworddo not match!");
			document.getElementById("password").style.borderColor="#E34234";
			document.getElementById("repassword").style.borderColor="#E34234";
		}
		alert("Fill All Fields");
		// consol.log("Fill All Fields");
	} 
	else 
	{
	//Notifying error fields
		var firstname1 = document.getElementById("firstname");
		var middelname1 = document.getElementById("middelname");
		var lastname1 = document.getElementById("lastname");
		// var birthdate1 = document.getElementById("birthdate");
		var add1 = document.getElementById("add");
		var add1 = document.getElementById("mobile");
		var mobile1 = document.getElementById("email");
		var password1 = document.getElementById("password");
		var repassword1 = document.getElementById("repassword");
		var check1 = document.getElementById("agree");

		//Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
		if (firstname1.innerHTML == 'Must be 3+ letters' ||middelname1.innerHTML == 'Must be 3+ letters' ||lastname1.innerHTML == 'Must be 3+ letters' || email1.innerHTML == 'Invalid email'|| password1.innerHTML == 'Password too short' || repassword1.innerHTML == 'Password too short' || add1.innerHTML == 'Invalid address' || mobile1.innerHTML == 'must enter mobile no' /* || check1.innerHTML == 'please check this.'*/) 
		{
			alert("Fill Valid Information");
		} 
		else
		{
			//Submit Form When All values are valid.
			document.getElementById("myForm").submit();
		}
	}
}
// AJAX code to check input field values when onblur event triggerd.
function validate(field, query) 
{
	var xmlhttp;
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
		{
			document.getElementById(field).innerHTML = xmlhttp.responseText;
		}
		else 
		{
			document.getElementById(field).innerHTML = "Error Occurred.Reload Or Try Again the page.";
		}
	}
	xmlhttp.open("GET", "validation.php?field=" + field + "&query=" + query, false);
	xmlhttp.send();
}