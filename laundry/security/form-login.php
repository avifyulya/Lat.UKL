<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script src="https://cdn.tailwindcss.com"></script>
<h3 class="font-bold p-4" align="center">Halaman Login</h3>
<div class="flex justify-center pt-24">
    <form action="login-auth.php" method="POST" border="1">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" class="bg-gray-300"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" class="bg-gray-300"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login" value="Log In" class="bg-gray-300"></td>
			</tr>
		</table>
	</form>
    </div>
</body>
</html>
