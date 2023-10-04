
<html>
<head>
<link rel="icon" href="assets/employee.jpg">
	<title>Salary Table</title>
	<link rel="stylesheet" type="text/css" href="css/styleview.css">
</head>
<body>
	
	<header>
		<nav>
			<h1>EMPLOYEE SYSTEM</h1>
			<ul id="navli">
				<li><a class="homeblack" href="aloginwel.php">HOME</a></li>
				
				<li><a class="homeblack" href="addnew.html">Add Employee</a></li>
				<li><a class="homeblack" href="viewemp.php">View Employee</a></li>
				<li><a class="homeblack" href="assign.php">Assign Project</a></li>
				<li><a class="homeblack" href="assignproject.php">Project Status</a></li>
				<li><a class="homered" href="salaryemp.php">Salary Table</a></li>
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
				<th align = "center">FullName</th>
				<th align = "center">Email</th>	
				<th align = "center">Salary</th>
				<th align = "center">Gender</th>
				
				
				</tr>
            </thead>
            <tbody>
	
</body>
</html>
			      
           <?php
$content = file_get_contents("class/emp.json");
$employeedata = json_decode($content, true);



$sn=0;
           foreach($employeedata as $key =>$row){
$sn++;
?>

                <tr>
                    <td><?php echo $sn; ?></td>
                    <td><?php echo $row["firstName"]." ". $row["lastName"];?></td>
                    <td><?php echo $row["email"];?></td>
					<td><?php echo $row["salary"];?></td>
                    <td><?php echo $row["gender"];?></td>
					
                </tr>
                
				<?php
           }
                ?>


		</main>
</body>
</html>