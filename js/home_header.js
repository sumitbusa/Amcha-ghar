function showNavigationBlock() 
{	
	user_prof_name.style.backgroundColor ="rgba(0,0,0,0.2)";	
}
function showNavigationNone() 
{	
	user_prof_name.style.backgroundColor ="#0E2A36";
}
function gotosignout()
{
	if (signoutOption.style.display.match("block"))
	{
		signoutOption.style.display="none";
	}
	else
	{
		signoutOption.style.display="block";
	}	
}
function hide_signout()
{
	signoutOption.style.display="none";
}