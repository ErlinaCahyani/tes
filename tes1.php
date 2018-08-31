<!DOCTYPE html>

<html>
<head>
	<title></title>	
</head>
<body>
	<form action="app.php" method="post">
		<input type="type" name="n">
		<button type="submit">enter</button>
	</form>
	<?
		if($_SERVER['REQUEST_METHOD']=='POST')
           {
               cekNo1($_POST['n']);
           } 
    ?>
</body>
</html>