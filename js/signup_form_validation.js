function onlyNos(e,t)
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
                if (charCode > 31 && (charCode < 48 || charCode > 57)) 
				{	
                    return false;
                }
               return true;
            }
            catch (err) 
			{
               alert(err.Description);
            }
        }
		
		function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                    return true;
                else
                   return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }
		
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
			var pswd = signup_form.spassword.value;
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
				else if (isNaN(character) && character == character.toUpperCase() && upper == 0) 
				{
					strength++;
					upper++;
				}
				else if (isNaN(character) &&character == character.toLowerCase() && lower == 0)
				{
					strength++;
					lower++;
				}	
			}
			if(length<5)
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
			var repswd = signup_form.sc_password.value;
			var pswd = 	signup_form.spassword.value;
			if(repswd == pswd)
			{
				document.getElementById("error_repassword").style.color = "green";
				document.getElementById("error_repassword").innerHTML = "Password match...";
			}
			else
			{
				document.getElementById("error_repassword").style.color = "orange";
				document.getElementById("error_repassword").innerHTML = "Password mismatch...";
			}
		}
		function college_id_validate()
		{
			var length = signup_form.college_id_no.value.length;
			if(length < 7)
			{
				document.getElementById("error_idno").style.color = "orange";
				document.getElementById("error_idno").innerHTML = "ID no must be contain 7 digit...";
			}
			else
			{
				document.getElementById("error_idno").innerHTML = "";
			}
		}
		function contactno_validate()
		{
			var length = signup_form.contact_no.value.length;
			if(length < 10)
			{
				document.getElementById("error_contactno").style.color = "orange";
				document.getElementById("error_contactno").innerHTML = "Mobile no must be contain 10 digit...";
				
			}
			else
			{
				document.getElementById("error_contactno").innerHTML = "";
			}
		}
		function onformsubmit()
		{
			
			var pswd = signup_form.spassword.value;
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
				else if (isNaN(character) && character == character.toUpperCase() && upper == 0) 
				{
					strength++;
					upper++;
				}
				else if (isNaN(character) &&character == character.toLowerCase() && lower == 0)
				{
					strength++;
					lower++;
				}	
			}
			if(length<5)
			{
				document.getElementById("error_password").style.color = "orange";
				document.getElementById("error_password").innerHTML = "Too short...";
				signup_form.spassword.focus();
				return false;
			}
			else
			{
				if(strength==1)
				{
					document.getElementById("error_password").style.color = "#4d4d4d";
					document.getElementById("error_password").innerHTML = "Password strength: Weak...";
					signup_form.spassword.focus();
					return false;
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
			
			var repswd = signup_form.sc_password.value;
			var pswd = 	signup_form.spassword.value;
			if(repswd == pswd)
			{
				document.getElementById("error_repassword").style.color = "green";
				document.getElementById("error_repassword").innerHTML = "Password match...";
			}
			else
			{
				document.getElementById("error_repassword").style.color = "orange";
				document.getElementById("error_repassword").innerHTML = "Password mismatch...";
				signup_form.sc_password.focus();
				return false;
			}
			
			var length = signup_form.college_id_no.value.length;
			if(length < 7)
			{
				document.getElementById("error_idno").style.color = "orange";
				document.getElementById("error_idno").innerHTML = "ID no must be contain 7 digit...";
				signup_form.college_id_no.focus();
				return false;
			}
			else
			{
				document.getElementById("error_idno").innerHTML = "";
			}
			
			
			var length = signup_form.contact_no.value.length;
			if(length < 10)
			{
				document.getElementById("error_contactno").style.color = "orange";
				document.getElementById("error_contactno").innerHTML = "Mobile no must be contain 10 digit...";
				signup_form.contact_no.focus();
				return false;
				
			}
			else
			{
				document.getElementById("error_contactno").innerHTML = "";
			}
		}