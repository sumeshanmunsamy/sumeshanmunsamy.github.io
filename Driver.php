<?php
if(isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "proj";
    

    $driverId = $_POST['DID'];
    $fName = $_POST['Dname'];
	$lName = $_POST['Sname'];
    $idNum= $_POST['ID'];
	$cellNum = $_POST['number'];
    $email= $_POST['email'];
	$address= $_POST['address'];
    $licType= $_POST['Ltype'];
	$vehicleId = $_POST['VID'];
    

    $connect = mysqli_connect($hostname, $driverId , $fName,$lName,$idNum ,$cellNum,$email , $address,$licType,$vehicleId, $databaseName);
    


    $query = "INSERT INTO `driver`(`DID`, `Dname`,`Sname` ,`ID` ,`number` , `email`,`address` , `Ltype`, `VID`) VALUES ('$driverId',' $fName',' $lName' ,' $idNum' , ' $cellNum',' $email' ,'$address' ,'$licType' ,' $vehicleId')";
    
    $result = mysqli_query($connect,$query);
    

    if($result)
    {
        echo 'Data Inserted';
    }
    
    else{
        echo 'Data Not Inserted';
    }
    mysqli_free_result($result);
    mysqli_close($connect);
}
?>
<html>
<head>
<center><h1>Driver Registration</h1></center>
</head>
<h1><title>New Driver</title></h1>
<style>
body{
	font-color:Gray;
background: lightgreen url("green.jpg") no-repeat fixed center; 
}
</style>
<body>
<form action ="RegDriver.php" method="POST" target=""> 
<div class="table">
<div class ="row">
<div class="cell"><label><b> Driver Username:</b></label></div>
      <input type="text" placeholder="Enter Driver Username" name="DUN" required><br><br>
	  <div class="cell"><label><b> Driver Password:</b></label></div>
      <input type="text" placeholder="Enter Driver Password" name="DPWD" required><br><br>
	  	 
 <div class="cell"><label><b> Driver First Name:</b></label><br>
      <input type="text" placeholder="Enter Driver Name" name="Dname" required><br><br>
	  <div class="cell"> <label><b> Driver Last Name:</b></label></div>
      <input type="text" placeholder="Enter Driver Surname" name="Sname" required><br><br>
	   <div class="cell"> <label><b> ID Number:</b></label></div>
      <input type="text" placeholder="Enter ID number" name="ID" required><br><br>	  
	  <div class="cell"> <label><b> Driver Cell Number :</b></label></div>
      <input type="text" placeholder="Enter cell number" name="number"required><br><br>
	  <div class="cell"> <label><b> Driver Email :</b></label></div>
      <input type="text" placeholder="Enter email address" name="email"required><br><br>
	 <div class="cell">  <label><b> Driver Address :</b></label></div>
      <input type="text" placeholder="Enter address" name="address"required><br><br>
	  
	  
	 <!--div class="cell">  <label><b> Driver License Type:</b></label></div>
      <input type="text" placeholder="Enter Driver Name" name="Ltype"><br><br-->

<label><b>License type</b></label><br>
<select name="Ltype">
<option disabled selected>Select A License Type</option>
<option value="admin">Code 8</option>
<option value="driver">Code 10</option>
</select>
<br><br>
	  
	  
	 <div class="cell">  <label><b>Vehicle ID:</b></label></div>
      <input type="text" placeholder="Enter Vehicle ID" name="VID"required><br><br>
	  <input type = "submit" id ="btn" value = "Register">
	  </form>

	 </div>
	 </div>
</body>
</html>