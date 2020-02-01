<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Matana University</title>

	<script>
		function isi_form()
		{
			var nim = document.getElementById("id_nim").value;
			if(nim == "")
			{
				alert ("Harap masukkan NIM anda!");
				return false;
			}

			var password = document.getElementById("id_password").value;
			if (password == "") 
			{
				alert ("Harap masukkan Password anda!");
				return false;
			}
		}

		function lihat_password() 
		{
		    var x = document.getElementById("id_password");
		    if (x.type === "password") 
		    {
		        x.type = "text";
		    } 

		    else 
		    {
		        x.type = "password";
		    }
		}
	</script>
</head>
<body>
	<form method="POST" action="authen_login.php" onsubmit="return isi_form()" autocomplete="off">
		<table border="0" align="center">
			<tr>
				<td colspan="2" align="center">Matana University</td>
			</tr>
			<tr>
				<td colspan="2" align="center">Sign In</td>
			</tr>

			<br/>

			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim" placeholder="NIM Anda" size="30" id="id_nim" autofocus="autofocus"></td>
			</tr>

			<tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder="Masukkan Password Anda" size="30" id="id_password"></td>
				<th> <input type="checkbox" onclick="return lihat_password()">Lihat Password </th>
			</tr>

			<tr>
				<td colspan="2" align="center"><input type="submit" name="signin" value="SIGN IN"></td>
			</tr>
			
		</table>
	</form>

</body>
</html>