<?php include '../Controller/loginC1.php'; ?>

<!-- <body background="front.jpg">
</body> -->
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
				<input type="text" name="name">
				<span class="error" style='color:red;'>* <?php echo $nameErr; ?> </span>
				<br><br>

				Password:
				<input type="password" name="pass">
				<span class="error" style='color:red;'>* <?php echo $passErr; ?> </span>
				<br><br>

				<span class="error" style='color:red;'>* required field </span>
				<br><br>

				<input type="submit" name="logClick" value="Login">
				<input type="submit" name="regClick" value="No account yet! Click to register">
				<br><br>
			</form>
		</td>
	</tr>
</table>

<?php include '../Controller/loginC2.php'; ?>