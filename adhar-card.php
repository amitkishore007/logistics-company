<?php
     include('db.php');
     

if(isset($_POST['submit']))
{
  $title=$_POST['title'];
  $name=$_POST['name'];
  $adharno=$_POST['adharno'];
  $fn=$_FILES['file']['name'];
$tmn=$_FILES['file']['tmp_name'];
move_uploaded_file($tmn, "file/".$fn);
  $email=$_POST['email'];
  $pincode=$_POST['pincode'];
  $dd=$_POST['dd'];
  $mm=$_POST['mm'];
  $yy=$_POST['yy'];
  $dob=$dd.$mm.$yy;
  


  $q1="insert into documents (name,adharno,file,email,pincode,dob) values('$name', '$adharno', '$fn',  '$email','$pincode','$dob')";
$ar=ExecuteQuery($q1);



  
    


}
     ?><!DOCTYPE html>
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
	  
	  
	   <form method="post" action="adhar-card.php" enctype="multipart/form-data">
  <div class="form-group">
  
  <div class="col-sm-2">
  <p>Title:</p>
     <select class="form-control" name="title">
  <option>Mr</option>
  <option>Mrs</option>
  <option>Ms</option>
  <option>Miss</option>
  <option>Master</option>
</select>
    </div>
    <div class="col-sm-3">
	<p>Name:</p>
      <input type="text" class="form-control"  placeholder="First Name" name="name">
    </div>
 <div class="col-sm-3">
	<p>Aadhar Number</p>
      <input type="text" class="form-control"  placeholder="Enter Aadhar Number" name="adharno">
    </div>
	<div class="col-sm-4">
	<p>File input:</p>
     <div class="form-group">
    
    <input type="file" id="exampleInputFile" name="file">
  </div>
    </div>
  </div>

  <div class="form-group">
  
    <div class="col-sm-8">
	<p>Enter Email:</p>
      <input type="text" class="form-control"  placeholder="Enter Email" name="email">
    </div>
 <div class="col-sm-4">
	<p>Pin Code</p>
      <input type="text" class="form-control"  placeholder="Enter Pin Code" name="pincode">
    </div>
	
  </div>
  <div class="form-group">
   
	<div class="col-sm-3">
	 <p style="    margin-top: -18px;
">DOB :</p>
      <select class="form-control" name="dd">
  <option>1</option>
  <option>1</option>
 <option>2</option>
  <option>3</option>
    <option>4</option>
      <option>5</option>
      <option>6</option>
         <option>7</option>
       <option>8</option>
       <option>9</option>
          <option>10</option>
  
 

  
</select>
    </div>
	
	
    <div class="col-sm-3">
	<p></p>
      <select class="form-control" name="mm">
  <option>MM</option>
  <option>JAN</option>
  <option>FEB</option>
  <option>MARCH</option>
  <option>APRIL</option>
</select>
    </div>
	<div class="col-sm-3">
	<p></p>
      <select class="form-control" name="yy">
  <option>YYYY</option>
  <option>2010</option>
  <option>2011</option>
  <option>2012</option>
  <option>2013</option>
</select>
    </div>
  </div>
  
 
	   <!--  <button type="button" class="btn btn-primary">Add </button> -->
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
