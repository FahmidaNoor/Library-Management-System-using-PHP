<?php
include_once 'DBMySql.php';
$con = new DB_con();

// data insert code starts here.
if(isset($_POST['signin']))
{
	$studentid = $_POST['id'];
	$studentpassword = $_POST['password'];

	$res = $con->selectStudent($studentid,$studentpassword);
	if($res)
	{
		?>
		<script>
		alert('Successfull logged in...');
        window.location='Student.php'
        </script>
		<?php

	}
	else
	{
		?>
		<script>
		alert('error login failed...');
        window.location='Student.php'
        </script>
		<?php
	}
}
// data insert code ends here.

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Library Management System Using OOP</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
	<div id="content">
    <a href="index.php"><label>Library Management System Using OOP</label><a/>
    </div>
</div>
<div id="body">
	<div id="content">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <table align="center">
	
	<tr>
    <th colspan="5">  <a href="index.php"><img src="b_back.jpg" alt="back" height="42" width="42"/></a></th>
    </tr>
	
    <tr>
    <td><input type="text" name="id" placeholder="id" required /></td>
    </tr>
    <tr>
    <td><input type="password" name="password" placeholder="password" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="signin"><strong>Sign In</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>