
<html>
<link rel="icon" href="assets/employee.jpg">
<head>
	<title>View Employee | Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="css/styleview.css">
</head>
<body>
	<header>
		<nav>
			<h1>EMPLOYEE SYSTEM</h1>
			<ul id="navli">
				<li><a class="homeblack" href="aloginwel.php">HOME</a></li>
				<li><a class="homeblack" href="addemp.html">Add Employee</a></li>
				<li><a class="homered" href="viewemp.php">View Employee</a></li>
				<li><a class="homeblack" href="assign.php">Assign Project</a></li>
				<li><a class="homeblack" href="assignproject.php">Project Status</a></li>
				<li><a class="homeblack" href="salaryemp.php">Salary Table</a></li>
				<li><a class="homeblack" href="empleave.php">Employee Leave</a></li>
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>

	<main>
    <ul>
   
        </div>

        <table>
            <thead>
                <tr>
                    <th>#</th>
					<th align = "center">Picture</th>
				<th align = "center">Full Name</th>
				<th align = "center">Email</th>
				<th align = "center">Birthday</th>
				<th align = "center">Gender</th>
				<th align = "center">Contact</th>
				<th align = "center">Address</th>
				<th align = "center">Department</th>
				<th align = "center">Degree</th>
            </tr>
            </thead>
            <tbody>
	
</body>
</html>


<?php


?>       
           <?php
$content = file_get_contents("class/emp.json");
$employeedata = json_decode($content, true);



$sn=0;
           foreach($employeedata as $key =>$row){
$sn++;
?>

                <tr>
                    <td><?php echo $sn; ?></td>
					<td><?php echo $row["file"];?></td>
                    <td><?php echo $row["firstName"]." ". $row["lastName"];?></td>
                    <td><?php echo $row["email"];?></td>
                    <td><?php echo $row["birthday"];?></td>
					<td><?php echo $row["gender"];?></td>
                    <td><?php echo $row["contact"];?></td>
					<td><?php echo $row["address"];?></td>
					<td><?php echo $row["department"];?></td>
					<td><?php echo $row["degree"];?></td>
                </tr>
                
				<?php
           }
                ?>


              
</main>
</body>
</html>