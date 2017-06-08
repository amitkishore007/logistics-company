<?php
     include('db.php');


if(isset($_POST['submit']))
{
  
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $father_name=@$_POST['father_name'];
   
  $pn=$_FILES['file']['name'];
$tmn=$_FILES['file']['tmp_name'];
move_uploaded_file($tmn, "file/".$pn);
$panemail=$_POST['panemail'];

  $pancard=$_POST['pancard'];

  $dd=$_POST['dd'];
  $mm=$_POST['mm'];
  $yy=$_POST['yy'];
  $pandob=$dd.$mm.$yy;
  


  $q1="insert into documents (fname,lname,father_name,filepan,panemail,pancard,pandob) values('$fname','$lname','$father_name', '$pn', '$panemail','$pancard','$pandob')";
$ar=ExecuteQuery($q1);

if($ar)
{
 header("location:complete.php");
}
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Meta information -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"><!-- Mobile Specific Metas -->
    
    <!-- Title -->
    <title>Personal Details</title>
    
   
    <!-- CSS Stylesheet -->
    <link href="css/bootstrap.css" rel="stylesheet"><!-- bootstrap css -->
    <link href="css/style.css" rel="stylesheet" /><!-- font css --> 
   
   
</head>
    
<body>
    
<header>
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12">
	<div>Sahin's Profile   |  9694747852</div>
	</div>
      
   
    </div></div>
</header>
   	

	<div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-3">
	<div class="sidewrap">
	<h2>FILL PROFILE IN FEW STEPS</h2>
	<ul>
	<li><a href="index.php">Personal Details</a></li>
  <li><a href="address.php">Addresses</a></li>
  <li><a href="services.php">Services</a></li>
  <li><a href="document.php">Documents</a></li>
  <li><a href="#">Completed</a></li>
	</ul>
	</div>
	</div>
      <div class="col-lg-9 col-md-9">
	 
	 <div class="row" style="border:1px solid #ebebeb; margin:30px 20px; padding-bottom:30px;">
	  
	  
	   <form method="post" action="pan.php" enctype="multipart/form-data">
  <div class="form-group">
  
  
    <div class="col-sm-4">
	<p>Name:</p>
      <input type="text" class="form-control"  placeholder="First Name" name="fname" required="">
    </div>
 <div class="col-sm-4">
	<p>Last Name</p>
      <input type="text" class="form-control"  placeholder="Last Name" name="lname" required>
    </div>
	<div class="col-sm-4">
	<p>Father's Name:</p>
      <input type="text" class="form-control"  placeholder="Enter Father's Name" name="faher_name" required>
    </div>
  </div>

  <div class="form-group">
  
    <div class="col-sm-4">
	<p>Enter Email:</p>
      <input type="text" class="form-control"  placeholder="Enter Email" name="panemail" required>
    </div>
	<div class="col-sm-4">
	<p>PAN Number:</p>
      <input type="text" class="form-control"  placeholder="Enter PAN Number" name="pancard" required>
    </div>
 <div class="col-sm-4">
	<p>File input:</p>
     <div class="form-group">
    
    <input type="file" id="exampleInputFile" name="file" required>
  </div>
    </div>
	
  </div>
  <div class="form-group">
   
	<div class="col-sm-3">
	 <p style="    margin-top: -18px;
">DOB :</p>
      <select class="form-control" name="dd" required>
  <option>DD</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
</select>
    </div>
	
	
    <div class="col-sm-3">
	<p></p>
      <select class="form-control" name="mm" required>
  <option>MM</option>
  <option>JAN</option>
  <option>FEB</option>
  <option>MARCH</option>
  <option>APRIL</option>
</select>
    </div>
	<div class="col-sm-3">
	<p></p>
      <select class="form-control" name="yy" required>
  <option>YYYY</option>
  <option>2010</option>
  <option>2011</option>
  <option>2012</option>
  <option>2013</option>
</select>
    </div>
  </div>
  
 
	<!--     <button type="button" class="btn btn-primary">Add </button> -->
	 </div>
	   <button type="submit" class="btn btn-primary" name="submit">Save & Continue</button>
      </form>
	</div>
	
   
    </div></div>
	
	
	
    
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
