<!DOCTYPE html>
<html>
<header>
	<title>ToDoIst - Sign up account as a HOD</title>
	<link rel="stylesheet" type="text/css" href="css/signup_form_layout.css">	
	<script language="Javascript" type="text/javascript" src="js/signup_form_validation.js"></script>
</header>
<body>
<?php
	include("main_header.php");
	include("navigation.php");
?>
<div style="height:100px; width:100%;"></div>
<form method="post" name="signup_form" action="process/signup_process.php" onsubmit="return onformsubmit();">
<div id="content_part">
	<div id="signup_content">
		<div style="height:100px; width:100%; font-size:50px; opacity:1;">Create an account</div>
		<div style="height:50px; width:100%;"></div>
		<div>Name</div>
		<div style="height:36px; width:382px;">
			<div style="float:left; margin-right:32px;"><input type="text" id="fname" name="fname" size="13" maxlength="15" placeholder="First Name..." tabindex="5" onkeypress="return onlyAlphabets(event,this);" required /></div>
			<div style="float:left;"><input type="text" id="lname" name="lname" size="13" maxlength="15" placeholder="Last Name..." tabindex="6" onkeypress="return onlyAlphabets(event,this);" required /></div>
		</div>
		<div style="height:20px; width:382px; padding-top:16px;">Email ID</div>
		<div style="width:800px; height:36px;">
			<div style="float:left;"><input type="email" id="semail_id" name="semail_id" size="36" tabindex="7" placeholder="someone@example.com" maxlength="30" required /></div>
			<div style="float:right; width:400px; padding:6px 5px 6px 5px; font-size:17px; height:auto;" ></div>
		</div>
		<div style="height:20px; width:450px; padding-top:16px;">Create password</div>
		<div  style="width:800px; height:36px; ">
			<div style="float:left;"><input type="password" id="spassword" name="spassword" size="36" tabindex="8" placeholder="Enter your Password here" maxlength="30" onkeypress="return alphanumeric(event,this);" required onkeyup="password_strength()"></div> 
			<div style="float:right; width:400px; padding:6px 5px 6px 5px; font-size:17px; height:auto;" id="error_password"></div>
		</div>
		<div style="height:20px; width:200px; padding-top:16px;">Re-enter password</div>
		<div  style="width:800px; height:36px;">
			<div style="float:left;"><input type="password" id="sc_password" name="sc_password" size="36" tabindex="9" placeholder="Enter your confirm password here" maxlength="30" onkeyup="passwordmatch()" onkeypress="return alphanumeric(event,this);" required></div>
			<div style="float:right; width:400px; padding:6px 5px 6px 5px; font-size:17px; height:auto;" id="error_repassword"></div>
		</div>
		<div style="height:20px; width:382px; padding-top:16px;">HOD ID No</div>
		<div  style="width:800px; height:36px;">
			<div style="float:left;"><input type="text" id="college_id_no" name="college_id_no" size="36" tabindex="10" placeholder="Enter ypur College ID no" maxlength="7" required onkeypress="return onlyNos(event,this);" onkeyup="college_id_validate()" /></div>
			<div style="float:right; width:400px; padding:6px 5px 6px 5px; font-size:17px; height:auto;" id="error_idno"></div>
		</div>
		<div style="height:20px; width:382px; padding-top:16px;">Date of Birth</div>
		<div  style="width:382px; height:36px;">
			<div style="float:left;">
				<select id="birthday" name="birthday" tabindex="11" required>
					<option selected="selected" value="">Day</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
				</select>
			</div>
			<div style="float:left; margin-left:7px; ">     <!-- margin-left:44px; (google chrome); -->
				<select id="birthmonth" name="birthmonth" tabindex="12" required>
					<option selected="selected" value="">Month</option>
					<option value="1">January</option>
					<option value="2">February</option>
					<option value="3">March</option>
					<option value="4">April</option>
					<option value="5">May</option>
					<option value="6">June</option>
					<option value="7">July</option>
					<option value="8">August</option>
					<option value="9">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>
				</select>
			</div>
			<div style="float:left; margin-left:7px;">       <!-- margin-left:44px; (google chrome); -->
				<select id="birthyear" name="birthyear" tabindex="13" required>
					<option selected="selected" value="">Year</option>
					<option value="2015">2015</option>
					<option value="2014">2014</option>
					<option value="2013">2013</option>
					<option value="2012">2012</option>
					<option value="2011">2011</option>
					<option value="2010">2010</option>
					<option value="2009">2009</option>
					<option value="2008">2008</option>
					<option value="2007">2007</option>
					<option value="2006">2006</option>
					<option value="2005">2005</option>
					<option value="2004">2004</option>
					<option value="2003">2003</option>
					<option value="2002">2002</option>
					<option value="2001">2001</option>
					<option value="2000">2000</option>
					<option value="1999">1999</option>
					<option value="1998">1998</option>
					<option value="1997">1997</option>
					<option value="1996">1996</option>
					<option value="1995">1995</option>
					<option value="1994">1994</option>
					<option value="1993">1993</option>
					<option value="1992">1992</option>
					<option value="1991">1991</option>
					<option value="1990">1990</option>
					<option value="1989">1989</option>
					<option value="1988">1988</option>
					<option value="1987">1987</option>
					<option value="1986">1986</option>
					<option value="1985">1985</option>
					<option value="1984">1984</option>
					<option value="1983">1983</option>
					<option value="1982">1982</option>
					<option value="1981">1981</option>
					<option value="1980">1980</option>
					<option value="1979">1979</option>
					<option value="1978">1978</option>
					<option value="1977">1977</option>
					<option value="1976">1976</option>
					<option value="1975">1975</option>
					<option value="1974">1974</option>
					<option value="1973">1973</option>
					<option value="1972">1972</option>
					<option value="1971">1971</option>
					<option value="1970">1970</option>
					<option value="1969">1969</option>
					<option value="1968">1968</option>
					<option value="1967">1967</option>
					<option value="1966">1966</option>
					<option value="1965">1965</option>
					<option value="1964">1964</option>
					<option value="1963">1963</option>
					<option value="1962">1962</option>
					<option value="1961">1961</option>
					<option value="1960">1960</option>
					<option value="1959">1959</option>
					<option value="1958">1958</option>
					<option value="1957">1957</option>
					<option value="1956">1956</option>
					<option value="1955">1955</option>
					<option value="1954">1954</option>
					<option value="1953">1953</option>
					<option value="1952">1952</option>
					<option value="1951">1951</option>
					<option value="1950">1950</option>
					<option value="1949">1949</option>
					<option value="1948">1948</option>
					<option value="1947">1947</option>
					<option value="1946">1946</option>
					<option value="1945">1945</option>
					<option value="1944">1944</option>
					<option value="1943">1943</option>
					<option value="1942">1942</option>
					<option value="1941">1941</option>
					<option value="1940">1940</option>
					<option value="1939">1939</option>
					<option value="1938">1938</option>
					<option value="1937">1937</option>
					<option value="1936">1936</option>
					<option value="1935">1935</option>
					<option value="1934">1934</option>
					<option value="1933">1933</option>
					<option value="1932">1932</option>
					<option value="1931">1931</option>
					<option value="1930">1930</option>
					<option value="1929">1929</option>
					<option value="1928">1928</option>
					<option value="1927">1927</option>
					<option value="1926">1926</option>
					<option value="1925">1925</option>
					<option value="1924">1924</option>
					<option value="1923">1923</option>
					<option value="1922">1922</option>
					<option value="1921">1921</option>
					<option value="1920">1920</option>
					<option value="1919">1919</option>
					<option value="1918">1918</option>
					<option value="1917">1917</option>
					<option value="1916">1916</option>
					<option value="1915">1915</option>
					<option value="1914">1914</option>
					<option value="1913">1913</option>
					<option value="1912">1912</option>
					<option value="1911">1911</option>
					<option value="1910">1910</option>
					<option value="1909">1909</option>
					<option value="1908">1908</option>
					<option value="1907">1907</option>
					<option value="1906">1906</option>
					<option value="1905">1905</option>
				</select>
			</div>
		</div>
		<div style="height:20px; width:382px; padding-top:16px;">Gender</div>
		<div  style="width:382px; height:36px;">
			<div style="float:left;">
				<select id="gender" name="gender" tabindex="14" required>
					<option selected="selected" value="">Select...</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="undefined">Not specified</option>
				</select>
			</div>
		</div>
		<div style="height:20px; width:382px; padding-top:16px;">Contact No</div>
		<div  style="width:800px; height:36px;">
			<div style="float:left;"><input type="text" id="contact_no" name="contact_no" size="36" tabindex="15" placeholder="Enter contact no without +91" maxlength="10" onkeypress="return onlyNos(event,this);" onkeyup="contactno_validate()" required></div>
			<div style="float:right; width:400px; padding:6px 5px 6px 5px; font-size:17px; height:auto;" id="error_contactno"></div>
		</div>
		<div style="height:20px; width:382px; padding-top:16px;">Security Code</div>
		<div  style="width:382px; height:36px;">
			<div><input type="password" id="security_code" name="security_code" size="36" tabindex="16" placeholder="Enter Security code " onkeypress="return alphanumeric(event,this);" maxlength="10" required /></div>
		</div>
		<div style="height:20px; width:382px; padding-top:16px;"></div>
		<div style="width:382px; height:36px;">
			<input type="checkbox" name="terms" value="accept" tabindex="17" checked required/>Accept <a href="#">terms</a> and <a href="#">conditions</a>.
		</div>
		<div style="height:20px; width:382px; padding-top:16px;"></div>
		<div style="width:382px; height:36px; float:left; border-radius:10px">
			<div style="float:left;"><input type="submit" id="signup_btn" tabindex="18" value="Sign Up" height="100%"/></div>
			<div style="float:left; height:100%; width:73px;"></div>
			<div style="float:left;"><input type="reset" id="signup_btn" tabindex="19" value="reset" height="100%"/></div>
		</div>
		<input type="hidden" name="category" value="HOD" required />
	</div>
</div>
</form>
<div style="height:30px; width:100%; "></div>
<?php
	include("IndexFooter.php");
?>
</body>
</html>