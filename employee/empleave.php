<html>
<head>
<link rel="icon" href="assets/employee.jpg">
	<title>Employee Leave | Admin Panel </title>
	<link rel="stylesheet" type="text/css" href="css/styleview.css">
</head>
<body>
	
	<header>
		<nav>
			<h1>EMPLOYEE SYSTEM</h1>
			<ul id="navli">
				<li><a class="homeblack" href="aloginwel.php">HOME</a></li>
				
				<li><a class="homeblack" href="addemp.html">Add Employee</a></li>
				<li><a class="homeblack" href="viewemp.php">View Employee</a></li>
				<li><a class="homeblack" href="assign.php">Assign Project</a></li>
				<li><a class="homeblack" href="assignproject.php">Project Status</a></li>
				<li><a class="homeblack" href="salaryemp.php">Salary Table</a></li>
				<li><a class="homered" href="empleave.php">Employee Leave</a></li>
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
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
				<th align = "center">Reason</th>
				<th align = "center">Start Date</th>
				<th align = "center">End Date</th>
</tr>
</thead>
<tbody>
		
		</body>
</html>


		
		<?php
$content = file_get_contents("process/leave.json");
$studentData = json_decode($content, true);



$sn=0;
           foreach($studentData as $key =>$row){
$sn++;
?>

                <tr>
                    <td><?php echo $sn; ?></td>
                    <td><?php echo $row["fullname"];?></td>
					<td><?php echo $row["reason"];?></td>
                    <td><?php echo $row["start"];?></td>
					<td><?php echo $row["end"];?></td>
                </tr>
                
				<?php
           }
                ?>

		
		</main>
</body>
</html>