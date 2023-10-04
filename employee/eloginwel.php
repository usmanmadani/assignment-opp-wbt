<html>
<head>
<link rel="icon" href="assets/employee.jpg">
	<title>Employee Panel</title>
	<link rel="stylesheet" type="text/css" href="css/styleemplogin.css">
	
</head>
<body>
	<header>
		<nav>
			<h1>EMPLOYEE MANAGEMENT SYSTEM</h1>
			<ul id="navli">
				<li><a class="homered" href="eloginwel.php">HOME</a></li>
				<li><a class="homeblack" href="myprofile.html">My Profile</a></li>
				<li><a class="homeblack" href="empproject.php">My Projects</a></li>
				<li><a class="homeblack" href="applyleave.php">Apply Leave</a></li>
				<li><a class="homeblack" href="elogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	<div class="divider"></div>

	<div>
	<div style="float: left; width: 30%">
	<img src="assets/employee.jpg"  style="height: 220px; ">
</div>
<div style="float: right; width: 70%">
	<div id="divimg">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<body>
<canvas id="myChart" style="width:80%;max-width:600px"></canvas>

<script>
var xValues = ["attendance", "project", "performance", "marks", "leave"];
var yValues = [78, 49, 44, 24, 15];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Employlee Record"
    }
  }
});
</script>
</div>
</div>

</body>
</html>