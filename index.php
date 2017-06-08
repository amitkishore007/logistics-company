 <?php
     include('db.php');
     

if(isset($_POST['submit']))
{
  $fname=$_POST['fname'];
  $mname=$_POST['mname'];
  $lname=$_POST['lname'];
  $dd=$_POST['dd'];
  $mm=$_POST['mm'];
  $yy=$_POST['yy'];
  $dob=$dd.$mm.$yy;

  $maritial_status=$_POST['marital_status'];
  $city=$_POST['city'];
  $area=$_POST['area'];
  $pincode=$_POST['pincode'];
  $employ_status=$_POST['employ_status'];
$fn=$_FILES['file']['name'];
$tmn=$_FILES['file']['tmp_name'];
move_uploaded_file($tmn, "file/".$fn);
 
$email=$_POST['email'];
$mob1=$_POST['mob1'];
$mob2=$_POST['mob2'];
$homeland1=$_POST['homeland1'];
$homeland2=$_POST['homeland2'];
$homestd1=$_POST['homeland2'];
$homestd2=$_POST['homeland2'];
$officeland1=$_POST['officeland1'];
$officeland2=$_POST['officeland2'];
$std1=$_POST['std1'];
$std2=$_POST['std2'];
$extn1=$_POST['extn1'];
$extn2=$_POST['extn2'];


  $q1="insert into personal_info (fname,mname,lname,dob,maritial_status,city,area,pincode,employ_status,file,email,mob1,mob2,homeland1,homeland2,homestd1,homestd2,officeland1,officeland2,std1,std2,extn1,extn2) values('$fname', '$mname', '$lname','$dob','$maritial_status','$city', '$area','$pincode', '$employ_status','$fn','$email','$mob1','$mob2', '$homeland1','$homeland2','$homestd1','$homestd2','$officeland1','$officeland2','$std1', '$std2', '$extn1','$extn2')";
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
   <form class="form-horizontal" method="POST"  action="index.php" enctype="multipart/form-data">
      <div class="col-lg-5 col-md-5">
	  <h3>Please provide your personal details</h3>
	  <div>
	 
  <div class="form-group">
    <label for="inputName" class="col-sm-3 control-label" >First Name</label>
	<div class="col-sm-3">
      <select class="form-control">
  <option>Mr</option>
  <option>Mrs</option>
  <option>Ms</option>
  <option>Miss</option>
  <option>Master</option>
</select>
    </div>
	
	
    <div class="col-sm-6">
      <input type="text" class="form-control"  placeholder="Name" name="fname">
    </div>
  </div>
  <div class="form-group">
    <label for="inputMobile" class="col-sm-3 control-label">Middle Name :</label>
    <div class="col-sm-9">
      <input type="text" class="form-control"  placeholder="Middle Name" name="mname">
    </div>
  </div>
  
  
  <div class="form-group">
    <label for="Staff Id" class="col-sm-3 control-label">Last Name :</label>
    <div class="col-sm-9">
      <input type="text" class="form-control"  placeholder="Last Name" name="lname">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputName" class="col-sm-3 control-label">DOB :</label>
	<div class="col-sm-3">
      <select class="form-control" name="dd">
  <option>DD</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
</select>
    </div>
	
	
    <div class="col-sm-3">
      <select class="form-control" name="mm">
  <option>MM</option>
  <option>JAN</option>
  <option>FEB</option>
  <option>MARCH</option>
  <option>APRIL</option>
</select>
    </div>
	<div class="col-sm-3">
      <select class="form-control" name="yy">
  <option>YYYY</option>
  <option>2010</option>
  <option>2011</option>
  <option>2012</option>
  <option>2013</option>
</select>
    </div>
  </div>
  
  
  <div class="form-group">
    <label for="inputName" class="col-sm-3 control-label">Marital Status :</label>
	<div class="col-sm-9">
      <select class="form-control" name="marital_status">
  <option>Single</option>
  <option>Married</option>
  <option>Widowed</option>
  <option>Divorced</option>
</select>
    </div>

  </div>
  
  <div class="form-group">
    <label for="Staff Id" class="col-sm-3 control-label">City :</label>
    <div class="col-sm-9">
      <input type="text" class="form-control"  placeholder="Enter City" name="city">
    </div>
  </div>
  <div class="form-group">
    <label for="Staff Id" class="col-sm-3 control-label">Area :</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="area"  placeholder="Enter Area">
    </div>
  </div>
  <div class="form-group">
    <label for="Staff Id" class="col-sm-3 control-label">Pincode :</label>
    <div class="col-sm-9">
      <input type="number" class="form-control"  placeholder="" name="pincode">
    </div>
  </div>
  <div class="form-group">
    <label for="inputName" class="col-sm-3 control-label">Employ Status :</label>
	<div class="col-sm-9">
      <select class="form-control" name=employ_status>
  <option>Employed</option>
  <option>Businessman</option>
  <option>Media</option>
  <option>Sports</option>
</select>
    </div>

  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Save & Continue</button>
    </div>
<!-- </form> -->
	  
	  
	  
	  
	</div>
	<div class="col-lg-4 col-md-4">
	
	<div style="    margin-top: 55px;">
	<div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile" name="file">
  </div>
	</div>
	
	
	
	<!-- <form class="form-horizontal" method="post" action="index.php"> -->
  <div class="form-group">
    <label for="inputName" class="col-sm-4 control-label" >Email ID :</label>
    <div class="col-sm-6">
      <input type="Email" class="form-control"  name="email"  placeholder="Email ID">
    </div>
	<div class="col-sm-2">
      <button type="button" class="btn btn-info">Verify</button>
    </div>
  </div>
  <div class="form-group">
    <label for="inputMobile" class="col-sm-4 control-label">Mobile No 1:</label>
    <div class="col-sm-8">
      <input type="Number" class="form-control"  placeholder="Mobile No. 1" name="mob1">
    </div>
  </div>
  
  
  <div class="form-group">
    <label for="inputMobile" class="col-sm-4 control-label">Mobile No 2:</label>
    <div class="col-sm-8">
      <input type="Number" class="form-control"  placeholder="Mobile No. 2" name=mob2>
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputName" class="col-sm-4 control-label">Home Landline 1:</label>
	<div class="col-sm-3">
      <input type="Number" class="form-control"  placeholder="STD" name="homestd1">
    </div>
	
	
    <div class="col-sm-5">
      <input type="Number" class="form-control"  placeholder="" name="homeland1">
    </div>
	
  </div>
  <div class="form-group">
    <label for="inputName" class="col-sm-4 control-label">Home Landline 2:</label>
	<div class="col-sm-3">
      <input type="Number" class="form-control"  placeholder="STD" name="homestd2">
    </div>
	
	
    <div class="col-sm-5">
      <input type="Number" class="form-control"  placeholder="" name="homeland2">
    </div>
	
  </div>
  <div class="form-group">
    <label for="inputName" class="col-sm-4 control-label">Office Landline 1:</label>
	<div class="col-sm-3">
      <input type="text" class="form-control"  placeholder="STD" name="std1">
    </div>
	
	
    <div class="col-sm-3">
      <input type="Number" class="form-control"  placeholder="" name="officeland1">
    </div>
	<div class="col-sm-2">
      <input type="text" class="form-control"  placeholder="EXTN" name="extn1">
    </div>
	
  </div>
  <div class="form-group">
    <label for="inputName" class="col-sm-4 control-label">Office Landline 2:</label>
	<div class="col-sm-3">
      <input type="text" class="form-control"  placeholder="STD" name="std2">
    </div>
	
	
    <div class="col-sm-3">
      <input type="Number" class="form-control"  placeholder="" name="officeland2">
    </div>
	<div class="col-sm-2">
      <input type="text" class="form-control"  placeholder="EXTN" name=extn2>
    </div>
	
  </div>
  
<!-- </form> -->

	
	
	</div>
  </form>
   
    </div></div>
	
	
	
    
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
