function alphanumeric(e, t) 
{
    try 
	{
        if (window.event) 
		{
            var charCode = window.event.keyCode;
        }
        else if (e) 
		{
            var charCode = e.which;
        }
        else { return true; }
        if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode < 31 || (charCode >= 48 && charCode <= 57))
            return true;
         else
			return false;
    }
    catch (err) 
	{
        alert(err.Description);
	}
}
		function password_strength()
		{
			var pswd = reset_password_form.r_password.value;
			length = pswd.length;
			var num=0;
			var upper=0;
			var lower=0;
			var strength=0;
			var i=0;
			for(i=0;i<length;i++)
			{ 
				var character = pswd.charAt(i);
				if (!isNaN(character) && num == 0)
				{
					strength++;
					num++;
				}
				else
				{
					if (character == character.toUpperCase() && upper == 0) 
					{
						strength++;
						upper++;
					}
					if (character == character.toLowerCase() && lower == 0)
					{
						strength++;
						lower++;
					}
				}
			}
			if(length<6)
			{
				document.getElementById("error_password").style.color = "orange";
				document.getElementById("error_password").innerHTML = "Too short...";
			}
			else
			{
				if(strength==1)
				{
					document.getElementById("error_password").style.color = "#4d4d4d";
					document.getElementById("error_password").innerHTML = "Password strength: Weak...";
				}
				else if(strength==2)
				{
					document.getElementById("error_password").style.color = "blue";
					document.getElementById("error_password").innerHTML = "Password strength: Medium...";
				}
				else if(strength==3)
				{
					document.getElementById("error_password").style.color = "green";
					document.getElementById("error_password").innerHTML = "Password strength: Strong...";
				}
			}
		}
		function passwordmatch()
		{
			var repswd = reset_password_form.rc_password.value;
			var pswd = 	reset_password_form.r_password.value;
			if(repswd == pswd)
			{
				document.getElementById("reerror_repassword").style.color = "green";
				document.getElementById("reerror_repassword").innerHTML = "Password match...";
			}
			else
			{
				document.getElementById("reerror_repassword").style.color = "orange";
				document.getElementById("reerror_repassword").innerHTML = "Password mismatch...";
			}
		}