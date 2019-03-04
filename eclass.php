<?php 

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "attendance";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

$sql = "SELECT * FROM subject";
$query1 = mysqli_query($conn,$sql);


?>
<?php

$Host = '';
$db = '';

$db = mysqli_connect('localhost','root','','attendance');

if(isset($_POST['update']))
{
	$class_id = $_POST['class_id'];
	$section = $_POST['section'];
	$subject_code = $_POST['subject_code'];
	$semester = $_POST['semester'];
	$academic_year = $_POST['academic_year'];
	$schedule_day = $_POST['schedule_day'];
	$schedule_time = $_POST['schedule_time'];
	
<<<<<<< HEAD
	$result = mysqli_query($db, "UPDATE class SET class_id='$class_id', section='$section', subject_code='$subject_code', semester='$semester', academic_year='$academic_year', schedule_day='$schedule_day', schedule_time='$schedule_time' WHERE class_id='$class_id'");
=======
	$result = mysqli_query($db, "UPDATE class SET section='$section', subject_code='$subject_code', semester='$semester', academic_year='$academic_year', schedule_day='$schedule_day', schedule_time='$schedule_time' WHERE class_id='$class_id'");
>>>>>>> CRUD for student_class and take_attendance
	if($result == true){
		header("Location: cclass.php");
	}
}
?>
<?php
$class_id = 0;
$class_id = '';
$section = '';
$academic_year = '';
$schedule_day = '';
$schedule_time = '';
$class_id = $_GET['class_id'];

$result = mysqli_query($db, "SELECT * FROM class WHERE class_id='$class_id'");

while($res = mysqli_fetch_array($result))
{
	$class_id = $res['class_id'];
	$section = $res['section'];
	$subject_code = $res['subject_code'];
	$semester = $res['semester'];
	$academic_year = $res['academic_year'];
	$schedule_day = $res['schedule_day'];
	$schedule_time = $res['schedule_time'];
}
?>
<!DOCTYPE html>


<head>
	<title>subject</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/x-icon" href="picture/attendance.jpg" />

	
	
	<link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
	
	
    <link href="css/phonebook.css" rel="stylesheet">
	<script src="bootstrap-3.3.7/js/jquery.min.js"></script>
	<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
	<script src="js/phonebook.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>

    <div id="wrapper">
		
       <!-- Sidebar -->
				<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<li class="sidebar-brand">
					<img src="img/attendance.png" />
				</li>
				<br>
				<li>
					<a href="index.php" title="Go to Class"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a>
				</li>
				<li>
					<a href="cclass.php" title="Go to Class"><span class="glyphicon glyphicon-th-list"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Class</a>
				</li>
				<li>
					<a href="csubject.php" title="Go to Subject"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject</a>
				</li>
				<li>
<<<<<<< HEAD
					<a href="cstudent.html" title="Go to Student"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student</a>
				</li>
				<li>
					<a href="edit.html" title="To-do-List"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Delete</a>
				</li>
				<li>
					<a href="edit.html" title="To-do-List"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About</a>
=======
					<a href="cstudent.php" title="Go to Student"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student</a>
				</li>
				<li>
					<a href="student_class.php" title="To-do-List"><span class="glyphicon glyphicon-file"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student_Class</a>
				</li>
				<li>
					<a href="take_attendance.html" title="To-do-List"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Take_Attendance</a>
>>>>>>> CRUD for student_class and take_attendance
				</li>
				
			</ul>
		</div>

		
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
				<!-- Menu -->
				<nav class="navbar navbar-green">
					<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="glyphicon glyphicon-menu-hamburger"></span>
							<span class="icon-bar"></span>                       
							</button>
							<a class="navbar-brand" onclick="openNav()"><span  class="glyphicon glyphicon-menu-hamburger"></span>&nbsp;&nbsp;<strong>Mobile Attendance Application</strong></a>
					</div>
					
					</div>
				</nav>

				
			</div>
        </div>

    </div>
    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
	<div class="container" style="width:300px">
		<form method="post" action="eclass.php"> 
		<input name="class_id" type="hidden" value="<?php echo $class_id;?>"/>
			<center><h1><strong><font color="#ff80aa" face="Cooper Std Black">Class</font></strong></h1></center>
<<<<<<< HEAD
			<label>Class ID</label> 
			<input type="number" class="form-control" value="<?php echo $class_id;?>" id="class_id" placeholder="Enter Class ID" name="class_id" required>
=======
>>>>>>> CRUD for student_class and take_attendance
			<label>Course, Year, and Section</label> 
			<input type="text" class="form-control" value="<?php echo $section;?>" id="section" placeholder="Enter Course, Year, and Section" name="section" required>
			<label>Subject Code</label>
			<select name="subject_code" class="form-control" required>
					<?php while($row = mysqli_fetch_array($query1)):?>
			  <option value="<?php echo $row['subject_code'] ?>"><?php echo $row['subject_title'] ?></option>
			  	  <?php endwhile;?>
			</select>
			<label>Semester</label>
			<select name="semester" class="form-control" required>
<<<<<<< HEAD
			  <option value="1">First Semester</option>
			  <option value="2">Second Semester</option>
			  <option value="3">Summer</option>
=======
			  <option value="First Semester">First Semester</option>
			  <option value="Second Semester">Second Semester</option>
			  <option value="Summer">Summer</option>
>>>>>>> CRUD for student_class and take_attendance
			</select>
			<label>Academic Year</label> 
			<input type="text" class="form-control" value="<?php echo $academic_year;?>" id="academic_year" placeholder="Enter Academic Year" name="academic_year" required>
			<label>Schedule Day</label> 
			<input type="text" class="form-control" value="<?php echo $schedule_day;?>" id="schedule_day" placeholder="Enter Schedule Day" name="schedule_day" required>
			<label>Schedule Time</label> 
			<input type="text" class="form-control" value="<?php echo $schedule_time;?>"  placeholder="Enter Schedule Time" name="schedule_time" required>
			<center><input class="btn btn-dark" name="update" type="submit" value="UPDATE"></button></center>
		</form>
	</div>
	

</body>

</html>
