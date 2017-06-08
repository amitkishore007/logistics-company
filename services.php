 <?php
     include('db.php');
     

if(isset($_POST['submit']))
{
  $services=$_POST['services'];
 
  


  $q1="insert into partner_services (name) values('$services')";
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
	  <h3>Select your Services</h3>
	 <div class="row" style="border:1px solid #ebebeb; margin:30px 20px; padding-bottom:30px;">
	  
	  
	   <form method="post" action="services.php">
  
    
	<div class="col-sm-9">
	<p>Select Services:</p>
     <select class="form-control" style=" width:100%;" name="services">
  <option>select</option>
  <?php 
                 $q="select * from services ";
               $ar=ExecuteQueryResule($q);
               foreach($ar as $k)
               { 
                 ?>                
  <option><?php echo $k['s_head'];?></option>
  <?php
}
  ?>
  
 
</select>
    </div>
  </div>

 
  
	
	 </div>
	   <button type="submit" class="btn btn-primary" name="submit">Save & Continue</button>

	</div>
	
   
    </div></div>
	
	
	
    
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
