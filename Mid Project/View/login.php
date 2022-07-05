<?php include '../Controller/loginC1.php'; ?>

<body style="background-color:Gainsboro;">
</body>
<table align="center">
	<tr>
		<th></th>
	</tr>

	<tr>
		<td>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
				<br><br><br><br><br><br><br><br><br>
				<h2 align="center">Login Form</h2>
				Username:
				<input type="text" name="name" value="<?php if (isset($_COOKIE["name"])) {
															echo $_COOKIE["name"];
														} ?>">
				<span class="error" style='color:red;'>* <?php echo $nameErr; ?> </span>
				<br><br>

				Password:
				<input type="password" name="pass" value="<?php if (isset($_COOKIE["pass"])) {
																echo $_COOKIE["pass"];
															} ?>">
				<span class="error" style='color:red;'>* <?php echo $passErr; ?> </span>
				<br><br>
				<input type="checkbox" id="remember" name="remember" value="remember">Remember me
				<br><br>

				<input type="submit" name="logClick" value="Login">
				<input type="submit" name="regClick" value="Click for registration,if not registered!">
			</form>
		</td>
	</tr>
	<tr>
		<td><img src="1.PNG" alt="" height=250 width=250 /></td>
	</tr>
</table>

<?php include '../Controller/loginC2.php'; ?>