
<html>
<head>
	<title>Admin Panel | </title>
	<link rel="stylesheet" type="text/css" href="css/styleemplogin.css">
</head>
<link rel="icon" href="assets/employee.jpg">
<body>
	
	<header>
		<nav>
			<h1>EMPLOYEE SYSTEM</h1>
			<ul id="navli">
				<li><a class="homered" href="aloginwel.php">HOME</a></li>
				<li><a class="homeblack" href="addemp.html">Add Employee</a></li>
				<li><a class="homeblack" href="viewemp.php">View Employee</a></li>
				<li><a class="homeblack" href="assign.php">Assign Project</a></li>
				<li><a class="homeblack" href="assignproject.php">Project Status</a></li>
				<li><a class="homeblack" href="salaryemp.php">Salary Table</a></li>
				<li><a class="homeblack" href="empleave.php">Employee Leave</a></li>
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	<div class="divider"></div>
	
	 
	<div>
	<div style="float: right; width: 59%">
	<img src="assets/employee.jpg"  style="height: 250px; ">
</div>
<div style="float: right; width: 72%">
<div id="divimg">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<body>

<canvas id="myChart" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = ["COMPUTER SCIENCE", "SCIENCE", "ART", "SOCIAL", "ADMIN"];
var yValues = [55, 49, 44, 24, 15];
var barColors = [
  "#E62E2D",
  "#3B8004",
  "#1F01FF",
  "#EFA41C",
  "#A52A2A"
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Departments"
    }
  }
});
</script>
</div>
</div>
		


	
</body>
</html>