<!-- Javascript goes in the document HEAD -->
<script type="text/javascript">
function altRows(id){
	if(document.getElementsByTagName){  
		
		var table = document.getElementById(id);  
		var rows = table.getElementsByTagName("tr"); 
		 
		for(i = 0; i < rows.length; i++){          
			if(i % 2 == 0)
			{
				rows[i].className = "evenrowcolor";
			}
			else
			{
				rows[i].className = "oddrowcolor";
			}      
		}
	}
}
window.onload=function(){
	altRows('alternatecolor');
}
</script>

<!-- CSS goes in the document HEAD or added to your external stylesheet -->
<style type="text/css">
table.altrowstable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #a9c6c9;
	border-collapse: collapse;
}
table.altrowstable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
table.altrowstable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
.oddrowcolor{
	background-color:#d4e3e5;
}
.evenrowcolor{
	background-color:#c3dde0;
}
</style>

<!-- Table goes in the document BODY -->
<table class="altrowstable" id="alternatecolor">
<tr>
	<th>No.</th>
	<th>Profile Pic</th>
	<th>Roll No.</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Sap No.</th>
	<th>Email ID</th>
	<th>Gender</th>
	<th>Course</th>
	<th>Semester</th>
	<th>Contact No.</th>
	<th>address</th>
	<th>DOB</th>
	<th>JOin Date</th>
</tr>

<tr>
	<td>Text 1A</td><td>Text 1B</td><td>Text 1C</td>
</tr>
</table>
<!--  The table code can be found here: http://www.textfixer/tutorials/css-tables.php#css-table03 -->
