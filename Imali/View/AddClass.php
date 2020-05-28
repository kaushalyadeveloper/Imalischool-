<!DOCTYPE html>
<html>
<head>
	
	<title>Home</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <link rel="stylesheet" type="text/css" href="./CSS/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./CSS/main.css">



<style>
body {
  font-family: "Lato", sans-serif;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: black;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color:teal;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color:#008080;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>

</head>
<body>

<?php
 session_start();
 if(isset($_SESSION['classyes'])){
 ?><script type="text/javascript">
   alert("successfully added");
 </script><?php
}

 ?>
	
				 <nav class="navbar navbar-fixed-top" style="background-color:WHITE;-webkit-box-shadow: 3px 3px 13px -1px rgba(54,51,54,1);
-moz-box-shadow: 3px 3px 13px -1px rgba(54,51,54,1);
box-shadow: 3px 3px 13px -1px rgba(54,51,54,1);">
				        <div class="container-fluid">
				        	 <a class="navbar-brand" href="http://localhost/imali/">
  							<img src="../Resource/LOGO.JPG" style="display: inline-block;height: 30px;">
  							
						    </a>

				            <!-- Logo -->
				            <div class="navbar-header">
				                <a href="http://localhost/imali/" class="navbar-brand">TAXILA CENTRAL COLLAGE</a>
				            </div>

				           
				        </div>
                   </nav>
                  	<div class="row" style="height: 10vh;"></div>
                  	<div class="row">
                  		<div class="col-md-2">
                  			
									<div class="sidenav w3-teal">
									  <a  style="height: 8vh;"></a>
									  <a  class="w3-button" href="http://localhost/imali/View/AdminProfile.php"style="border-bottom:1px solid white;">Dashboard</a>
									  <button class="dropdown-btn w3-button" style="border-bottom:1px solid white;">Academic 
									    <i class="fa fa-caret-down"></i>
									  </button>
									  <div class="dropdown-container" style="border-bottom:1px solid white;">
									    <a href="http://localhost/imali/View/AddStudents.php" class="w3-button" style="border-bottom:1px solid white;">Add student</a>
									    <a href="http://localhost/imali/View/AddClass.php" class="w3-button" >Add class</a>
									    
									  </div>
									   <button class="dropdown-btn w3-button" style="border-bottom:1px solid white;">Staff 
									    <i class="fa fa-caret-down"></i>
									  </button>
									  <div class="dropdown-container" style="border-bottom:1px solid white;">
									    <a href="http://localhost/imali/View/AddTeacher.php"  class="w3-button"style="border-bottom:1px solid white;">Add Teacher</a>
									    <a href="http://localhost/imali/View/AddStaff.php" class="w3-button" >Add Staff</a>
									    
									  </div>
									  <a href="http://localhost/imali/View/Attendence.php" class="w3-button" style="border-bottom:1px solid white;">Attendance</a>
                    <a  class="w3-button" href="../Controller/Logout.php"style="border-bottom:1px solid white;">Logout</a>
									</div>

                    
                     
                      </div>
                      <div class="col-md-9" style="height: 100vh;">
                       
                        <div class="row">
                          <form method="post" action="../Controller/AddClassController.php">
                                <div class="form-group">
                                  <label for="inputState">Grade</label>
                                  <select id="inputState" class="form-control" >
                                    <option selected>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                     <option>13</option>
                                    
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="inputState">Class</label>
                                  <select id="inputState" class="form-control">
                                    <option selected>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>D</option>
                                    <option>E</option>
                                    <option>F</option>
                                    <option>G</option>
                                     <option>H</option>
                                    <option>I</option>
                                    <option>J</option>
                                    <option>K</option>
                                  </select>
                                </div>
                                
                                <button type="submit" class="w3 button w3-teal w3-padding">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                              </form>
                          </div>
                      </div>
                  	<script>

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
                  
	
</body>
</html>