
<?php
     include('db.php');
     

if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $contact=$_POST['contact'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $pincode=$_POST['pincode'];
  $city=$_POST['city'];
  $landmark=$_POST['landmark'];

  $st=$_POST['st'];
  $landno=$_POST['landno'];
  $tag=$_POST['tag'];
  


  $q1="insert into address (name,contact,email,address,pincode,city,landmark,st,landno,tag) values('$name', '$contact', '$email','$address','$pincode','$city', '$landmark','$st', '$landno','$tag')";
$ar=ExecuteQuery($q1);



  
    


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
	  <h3>Please provide home and office address</h3>
     <form method="POST" action="address.php">
	 <div class="row" style="border:1px solid #ebebeb; margin:30px 20px; padding:30px;">
	  <div class="col-lg-4 col-md-4">
	 
  <div class="form-group">
    <label for="exampleInputEmail1">Name:</label>
    <input type="text" class="form-control" placeholder="Name" name="name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address:</label>
   <textarea class="form-control" rows="2" name="address"></textarea>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter Landmark" name="landmark">
  </div>
  
 <!--  </form> -->
	  
	  </div>
	   <div class="col-lg-4 col-md-4">
	   <!-- <form> -->
  
  <div class="form-group">
    <label for="exampleInputEmail1">Contact Number:</label>
    <input type="Number" class="form-control"  placeholder="Contact Number" name="contact">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Pin Code:</label>
    <input type="Number" class="form-control"  placeholder="Enter Pincode" name="pincode">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Landline Number:</label>
  <div>
  <div class="col-sm-4">
      <input type="text" class="form-control"  placeholder="STD" name="st">
    </div>
    <div class="col-sm-8">
      <input type="text" class="form-control"  placeholder="" name="landno">
    </div>
  </div>
  </div>
 <!--  </form> -->
	   </div>
	    <div class="col-lg-4 col-md-4">
	<!-- 	<form> -->
  <div class="form-group">
    <label for="exampleInputEmail1">Email ID :</label>
    <input type="email" class="form-control"  placeholder="Email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">City :</label>
    <input type="text" class="form-control"  placeholder="Enter City" name="city">
  </div>
  
  
  <div class="form-group">
    <label for="exampleInputEmail1">Tag :</label>
    
      <select class="form-control" name="tag">
  <option>Select</option>
  <option>Home</option>
  <option>Office</option>
  <option>Other</option>
</select>
   
  </div>

 <!--  <button type="button" class="btn btn-primary">Add Address</button> -->
  
		</div>
	 </div>
	   <button type="submit" name="submit" class="btn btn-primary" >Save & Continue</button>
	</div>
	  </form>
   
    </div></div>
	
	
	
    
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
