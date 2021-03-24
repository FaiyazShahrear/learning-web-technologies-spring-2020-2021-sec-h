<center>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="4" align="CENTER">Users</td></tr>
		<tr>
			<td>ID</td><td>NAME</td><td>Email</td><td>USER TYPE</td>
		</tr>
		<?php
                
                $conn = mysqli_connect('localhost', 'root', '', 'webtech');
                $sql = "select * from user ";
                $result = mysqli_query($conn, $sql);
                while($user=mysqli_fetch_array($result))
                {
                        echo "<tr>";
                        
                        echo "<td>"; echo $user["id"]; echo "</td>";
                        echo "<td>"; echo $user["name"]; echo "</td>";
                        echo "<td>"; echo $user["email"]; echo "</td>";
                        echo "<td>"; echo $user["type"]; echo "</td>";
                        
                        echo "</tr>"; }?>
		
		<tr>
			<td colspan="3" align="right">
				<a href="admin_home.php">Go Home</a>
			</td>
		</tr>
	</table>			
</center>