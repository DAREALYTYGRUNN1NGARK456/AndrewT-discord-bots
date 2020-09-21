<html>
<body>
<form class="signupform">
<input id="email" type="email" placeholder="email">
<input type="username" placeholder="username">
<input type="password" placeholder="password">
<input type="submit" onclick="sub()" value="Signup">
<input type="checkbox" value="remember password?" name="remember password?">remember password?


	</form>

	</body>
	<style>
		body {
			background-color: grey;
		}
		input {
			display: block;
		}
		</style>
		<script>
function sub() {
	alert("submited")
 const db = require('./json/db.json')
 const acc = db.accounts
var emailinput = document.GetElementById("email").value

 if (acc.emails === emailinput) return alert("sorry but that email is already in use")
else if (!acc.emails.email1 === None) {
	acc.emails.email1.write(emailinput)
}
}

			</script>
</html>