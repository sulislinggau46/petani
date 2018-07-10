<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2>Login</h2>
<form action="http://localhost/ci/index.php/login" method="post">
<?php echo $model->labels['username'] ;?> 
<input type="text" name="username"> <br /> <br />
<?php echo $model->labels['password'] ;?> 
<input type="text" name="password"> <br /> <br />
<input type="submit" name="btnSubmit" value="Login">

</form>

</body>
</html>