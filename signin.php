<html>
<head>
<link src= "style.css"> </link>
<style>
</style>
<script>

function submit1()
{
	document.getElementById('signin').submit();

}

</script>



</head>
<body>
Login Page

<form action="function.php" name="signin" id="signin" method="POST">

<Input type="text" name="username" id="username">
<br>
<input type="password" name="pass" id="pass"  >
<br>
<input type="hidden" name="signinform" id="signinform" value="submitted">
<br>
<input type="submit">

</form>

</body>



