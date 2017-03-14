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
			var pswd = updating_form.password.value;
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
				document.getElementById("error_password").innerHTML = "Password strength: Too short...";
				return false;
			}
			else
			{
				if(strength==1)
				{
					document.getElementById("error_password").style.color = "#4d4d4d";
					document.getElementById("error_password").innerHTML = "Password strength: Weak...";
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
		}
		function passwordmatch()
		{
			var repswd = updating_form.cpassword.value;
			var pswd = 	updating_form.password.value;
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
			var length = updating_form.college_id_no.value.length;
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
		function sap_no_validate()
		{
			var length = updating_form.sap_no.value.length;
			if(length < 11)
			{
				document.getElementById("error_sapno").style.color = "orange";
				document.getElementById("error_sapno").innerHTML = "SAP no must be contain 11 digit...";
			}
			else
			{
				document.getElementById("error_sapno").innerHTML = "";
			}
		}
		function contactno_validate()
		{
			var length = updating_form.contact_no.value.length;
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
			
			var pswd = updating_form.password.value;
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
				updating_form.password.focus();
				return false;
			}
			else
			{
				if(strength==1)
				{
					document.getElementById("error_password").style.color = "#4d4d4d";
					document.getElementById("error_password").innerHTML = "Password strength: Weak...";
					updating_form.password.focus();
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
			
			var repswd = updating_form.cpassword.value;
			var pswd = 	updating_form.password.value;
			if(repswd == pswd)
			{
				document.getElementById("error_repassword").style.color = "green";
				document.getElementById("error_repassword").innerHTML = "Password match...";
			}
			else
			{
				document.getElementById("error_repassword").style.color = "orange";
				document.getElementById("error_repassword").innerHTML = "Password mismatch...";
				updating_form.cpassword.focus();
				return false;
			}
			
			var length = updating_form.college_id_no.value.length;
			if(length < 7)
			{
				document.getElementById("error_idno").style.color = "orange";
				document.getElementById("error_idno").innerHTML = "ID no must be contain 7 digit...";
				updating_form.college_id_no.focus();
				return false;
			}
			else
			{
				document.getElementById("error_idno").innerHTML = "";
			}
			
			var saplength = updating_form.sap_no.value.length;
			if(saplength < 11)
			{
				document.getElementById("error_sapno").style.color = "orange";
				document.getElementById("error_sapno").innerHTML = "SAP no must be contain 11 digit...";
				updating_form.sap_no.focus();
			}
			else
			{
				document.getElementById("error_sapno").innerHTML = "";
			}
			
			
			
			
			var length = updating_form.contact_no.value.length;
			if(length < 10)
			{
				document.getElementById("error_contactno").style.color = "orange";
				document.getElementById("error_contactno").innerHTML = "Mobile no must be contain 10 digit...";
				updating_form.contact_no.focus();
				return false;
				
			}
			else
			{
				document.getElementById("error_contactno").innerHTML = "";
			}
		}
		
		
function uploadBtnToText(e) 
	{			
		var a=updating_form.uploadBtn.value;
		document.getElementById("uploadFile").value =a;
	}
	/*
    function checkFile()
    {   
    var node_list = document.getElementsByTagName('input');
    for (var i = 0; i < node_list.length; i++) 
    {
			var node = node_list[i];
			if (node.getAttribute('type') == 'file') 
			{
				var sFileName = node.value;
				var sFileExtension = sFileName.split('.')[sFileName.split('.').length - 1];
				var iFileSize = node.files[0].size;
				var iConvert=(node.files[0].size/10485760).toFixed(2);
			}
			if (sFileExtension != "pdf" && sFileExtension != "doc" && sFileExtension != "docx" && iFileSize>10485760)
			{   
				txt="File type : "+ sFileExtension+"\n\n";
				txt+="Size: " + iConvert + " MB \n\n";
				txt+="Please make sure your file is in pdf or doc format and less than 10 MB.\n\n";
				alert(txt);
			}
		}
	}*/		
