<?PHP
	$Dname = $_GET['Dname'];
	$Mname = $_GET['Mname'];
	$Gcon = $_GET['Gcon'];
	// Database Connection code
	$servername = "localhost";
	$username = "id13871756_jk";
	$password = "youssefJk111_";
	$dbname = "Subdb";
	$con = mysqli_connect($servername,$username,$password,$dbname);
	if(!$con)
	{
		die("Error : ".mysqli_connect_error());
	}

		$sql = "INSERT INTO `Subdb`(`Dname`, `Mname`, `Gcon`) VALUES('$Dname','$Mname','$Gcon');";
		if(mysqli_query($con,$sql))
		{
			echo "Subscribtion Done Successfully...";

		}
		else
		{
			echo "Something went Wrong...";
		}

	mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Done</title>
	<link rel="shortcut icon" href="Photos/Mainlogo.ico">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<iframe width="0" height="0" src="https://www.youtuberepeater.com/watch?v=aBkTkxKDduc#gsc.tab=0" frameborder="0" allowfullscreen></iframe>
</head>
<body>
	<header>
	<div class="main">
		<div class="logo">
			<a href="index.html"><img src="Photos/Mainlogo.ico"></a>
		</div>
		<ul>
			<li><a href="Sub.html">Go Back</a></li>
		</ul>
	</div>
	</header>
</body>
</html>