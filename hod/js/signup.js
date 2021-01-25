function checkMail()
{
	var value = email.value;
	if(value.endsWith("@mes.ac.in"))
	{
		document.getElementById('emailv').style.display = "none";
		email.style.borderBottomColor = "green";
	} 
	else
	{
		document.getElementById('emailv').style.display = "block";
		email.style.borderBottomColor = "red";
	}
}

function checkName()
{
	var value = fname.value;
	if(value.length > 3)
	{
		document.getElementById('namev').style.display = "none";
		fname.style.borderBottomColor = "green";
	} 
	else
	{
		document.getElementById('namev').style.display = "block";
		fname.style.borderBottomColor = "red";
	}
}
function checkID()
{
	var value = fid.value;
	if(value.length == 6)
	{
		document.getElementById('idv').style.display = "none";
		fid.style.borderBottomColor = "green";
	} 
	else
	{
		document.getElementById('idv').style.display = "block";
		fid.style.borderBottomColor = "red";
	}
}

function checkPass()
{
	var value = pass.value;
	if(value.length > 6)
	{
		document.getElementById('passv').style.display = "none";
		pass.style.borderBottomColor = "green";
	} 
	else
	{
		document.getElementById('passv').style.display = "block";
		pass.style.borderBottomColor = "red";
	}
}

function validate()
{
	if(email.style.borderBottomColor != "green")
	{
		window.location.href="signup.php";
		alert("Wrong Email");
	}
	
	else if(name.style.borderBottomColor != "green")
	{
		window.location.href="signup.php";
	}

	else if(pass.style.borderBottomColor != "green")
	{
		window.location.href="signup.php";
	}

	else if(fid.style.borderBottomColor != "green")
	{
		window.location.href="signup.php";
	}
	else
	{
		window.location.href="index.php";
		alert("Account created successfully.")
	}
}