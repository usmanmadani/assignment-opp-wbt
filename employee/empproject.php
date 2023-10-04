
<html>
<head>
<link rel="icon" href="assets/employee.jpg">
	<title>Employee Panel</title>
	<link rel="stylesheet" type="text/css" href="css/styleview.css">
</head>
<body>
	
	<header>
		<nav>
			<h1>EMPLOYEE MANAGEMENT SYSTEM</h1>
			<ul id="navli">
				<li><a class="homeblack" href="eloginwel.php">HOME</a></li>
				<li><a class="homeblack" href="myprofile.html">My Profile</a></li>
				<li><a class="homered" href="empproject.php">My Projects</a></li>
				<li><a class="homeblack" href="applyleave.php">Apply Leave</a></li>
				<li><a class="homeblack" href="elogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">

	<main>
		<ul>
</div>
		<table>
		<thead>
			<tr>
			<th>#</th>
				<th align = "center">Full Name</th>
				<th align = "center">Project</th>
				<th align = "center">Due Date</th>
</tr>
</thead>
<tbody>
		
		</body>
</html>


		
		<?php
$content = file_get_contents("class/user.json");
$studentData = json_decode($content, true);



$sn=0;
           foreach($studentData as $key =>$row){
$sn++;
?>

                <tr>
                    <td><?php echo $sn; ?></td>
					<td><?php echo $row["firstName"]." ". $row["project"];?></td>
                    <td><?php echo $row["lastName"];?></td>
                    <td><?php echo $row["date"];?></td>
                </tr>
                
				<?php
           }
                ?>

		
		</main>
</body>
</html>


		