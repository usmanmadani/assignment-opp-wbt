<html>
<link rel="icon" href="assets/employee.jpg">
<head>
	<title>Apply Leave | Employee Panel</title>
	<link rel="stylesheet" type="text/css" href="css/styleapply.css">
</head>
<body bgcolor="#F0FFFF">
	
	<header>
		<nav>
			<h1>EMPLOYEE MANAGEMENT SYSTEM</h1>
			<ul id="navli">
				<li><a class="homeblack" href="eloginwel.php">HOME</a></li>
				<li><a class="homeblack" href="myprofile.html">My Profile</a></li>
				<li><a class="homeblack" href="empproject.php">My Projects</a></li>
				<li><a class="homered" href="applyleave.php">Apply Leave</a></li>
				<li><a class="homeblack" href="elogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Apply Leave Form</h2>
                    <form action="process/applyleaveprocess.php" method="POST">

                    <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Full Name" name="fullname">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Reason" name="reason">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                            	<p>Start Date</p>
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="start" name="start">
                                   
                                </div>
                            </div>
                            <div class="col-2">
                            	<p>End Date</p>
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="end" name="end">
                                   
                                </div>
                            </div>
                        </div>
                        



                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" name="submit" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>