<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family:"Lucida Bright", sans-serif}
body, html {
  height: 100%;
  line-height: 1.8;
}
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("images/7.jpg");
  min-height: 100%;
}
.css1{
  background-color: #e1ebfa;
}
.css2{
  background-color:#e8dcf4;
}
.css3{
  background-color: #e1e7f5;
}
.css4{
  border-radius: 25px;
}
.w3-bar .w3-button {
  padding: 16px;
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-greyscale w3-card" id="myNavbar">
     <a href="#home" class="w3-bar-item w3-button w3-dark-grey">Employee Time Tracking System</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about"  class="w3-bar-item w3-button" class="fa fa-th">ENTER EMPLOYEE DETAILS</a>
      <a href="#work"  class="w3-bar-item w3-button"><i class="fa fa-th"></i> RETRIEVE EMPLOYEE DETAILS</a>
      <a href="#taskdetails" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> TASK DETAILS</a>
      <a href="#leavestatus" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> LEAVE STATUS</a>
	  <a href="logout.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> LOGOUT</a>
    </div>
  </div>
</div>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-black" style="padding:48px">
    <span class="w3-jumbo w3-hide-small ">Welcome</span><br>
  
    <span class="w3-large">One stop solution for efficient and relaible management system.</span>
    <p><a href="#about" class="w3-button w3-dark-grey w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more about the project</a></p>
  </div> 
</header>

<!-- About Section -->
<div class="css1" style="padding:80px 16px" id="about">
<h3 class="w3-center">Enter Employee Details</h3>
  <div class="w3-row-padding" style="margin-top:64px">
  <form action="enterdetails.php" method="post">
    <input class="w3-input w3-border css4 " placeholder="Name"type="text" id="ename" name="ename"><br> 
    <input class="w3-input w3-border css4" placeholder="Email" type="text" id="eposition" name="eposition"><br> 
    <input class="w3-input w3-border css4" placeholder="Employee ID" type="number" id="eid" name="eid"><br>
    <input class="w3-input w3-border css4" placeholder="Department" type="text" id="edept" name="edept"><br>   
    <input class="w3-input w3-border css4" placeholder="Phone Number" type="number" id="ephno" name="ephno"><br>   
    <input class="w3-input w3-border css4" placeholder="Task ID" type="number" id="taskid" name="taskid"><br><br>
    <input type="submit" value="Submit">
</form>
</div>
</div>

<!-- Retrieve Details Section -->
<div class="css2" style="padding:170px 50px" id="work">
  <h2 class="w3-center">RETRIEVE DETAILS</h2>
   <div class="w3-row-padding" style="margin-top:90px">
  <li class="w3-light-grey w3-padding-24 css4">
  <label class="w3-large">Click the button to view Employee Details</label>
  <a href="http://localhost/dbms_final/Login/views/retrieve_name.php"><button class="w3-button css4 w3-black w3-padding-large">Click here</button></a>    
  <li class="w3-light-grey w3-padding-24 css4">
  <label class="w3-large">Click the button to view Shift Details of Employee</label>
  <a href="http://localhost/dbms_final/Login/views/shiftdetails.php"><button class="w3-button css4 w3-black w3-padding-large">Click here</button></a>    
</div>
</div>

<!-- Task Details Section -->
<div class="w3-container w3-center w3-dark-grey" style="padding:82px 16px" id="taskdetails">
  <h3>Task Details</h3>
  <p class="w3-large">Choose a department to see ongoing/accomplished tasks.</p>
  <div class="w3-row-padding" style="margin-top:50px">
    <?php
    // Department names and corresponding links
    $departments = array(
      "HR" => "hr",
      "Accounts" => "accounts",
      "Marketing" => "marketing",
      "R&D" => "r&d",
      "IT" => "it",
      "Customer Service" => "customerservice"
    );
    // Loop through departments
    foreach ($departments as $dept => $link) {
      ?>
      <div class="w3-third w3-section">
        <ul class="w3-ul w3-white w3-hover-shadow">
          <li class="<?php echo ($dept === 'HR' || $dept === 'Marketing' || $dept === 'IT') ? 'w3-black' : 'w3-red'; ?> w3-xlarge w3-padding-32"><?php echo $dept; ?></li>
          <li class="w3-light-grey w3-padding-24">
            <a href="http://localhost/dbms_final/Login/views/<?php echo $link; ?>.php"><button class="w3-button w3-black w3-padding-large">Click here</button></a>
          </li>
        </ul>
      </div>
    <?php } ?>
  </div>
</div>

<!-- Leave Status Section -->
<div class="css3" style="padding:138px 16px" id="leavestatus">
  <h3 class="w3-center">Enter Employee ID to search for Leave Status</h3>
  <div class="w3-row-padding" style="margin-top:64px" method="post">
  <form action="http://localhost/dbms_final/Login/views/leave_status.php" method="post">
    <input class="w3-input w3-border css4" placeholder="Employee ID" type="number" id="eid" name="eid"><br><br>
    <input type="submit" value="Submit">
</form>
</div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
</footer>
 
</body>
</html>
