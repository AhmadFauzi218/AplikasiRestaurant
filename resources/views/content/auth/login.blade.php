<!DOCTYPE html>
<html>
<head>
	<title> Halaman Login </title>
</head>
<body>

<center>
	<h1>Halaman Login</h1>
	<table>
		<form method="POST" action="{{ url('/signin') }}">
			{{ csrf_field() }}
			<tr>
				<td> Name : </td>
				<td>
					<input type="text" name="name" placeholder="Your Name">
				</td>
			</tr>
			<tr>
				<td> Password : </td>
				<td>
					<input type="password" name="password" placeholder="Your Password">
				</td>
			</tr>
			<tr>
				<td>
					<button type="submit">
						Login
					</button>
				</td>
			</tr>
		</form>
	</table>
</center>

</body>
</html>