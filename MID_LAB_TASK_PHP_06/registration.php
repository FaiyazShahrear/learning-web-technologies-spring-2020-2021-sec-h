<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION</title>
</head>
<body>

	<form method="POST" action="registration.php">
		<fieldset>
			<legend> <b>REGISTRATION</b></legend>
				<table>
					<tr>
						<td> Name </td>
						<td> :<input type="text" name="Name"/> 
						<br/> </td>
					</tr>
					<tr>
						<td> Email </td>
						<td> :<input type="email" name="Email"/> 
						<br/> </td>
					</tr>
					<tr>
						<td> User Name </td>
						<td> :<input type="username" name="UserName"/> 
						<br/> </td>
					</tr>
					<tr>
						<td> Password </td>
						<td> :<input type="password" name="Password"/> 
						<br/> </td>
					</tr>
					<tr>
						<td> Confirm Password </td>
						<td> :<input type="password" name="cPassword"/> 
						<br/> </td>
					</tr>
			</table>
				<fieldset>
					<legend>Gender</legend>
					    <input type='radio' name='gender' value='Male'>Male
            			<input type='radio' name='gender' value='Female'>Female
            			<input type='radio' name='gender' value='Others'>Others
				</fieldset>
				<fieldset>
					<legend>DOB</legend>
							<input type="number" name="date" size="5"> /
							<input type="number" name="month" size="5"> /
							<input type="number" name="year" size="5"> <i> (dd/mm/yyyy) </i>
				</fieldset>
			<hr>
			<input type="reset" name="Reset" value="Reset">
			<input type="submit" name="Submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>