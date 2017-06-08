<html>
<head>

</head>

<body>
<h1 style="text-align: center; position:relative; top:300px; color:green;">You have successfully fill your all information</h1>
<?php
$result = mysql_query("select id from personal_info where fname ='".$_SESSION['fname']."'");
$row = mysql_fetch_array($result);

$id = $row['id'];

?>
</body>
</html>