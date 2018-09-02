

<html>
<head>
<center><h1>New Vehicle Registration</h1></center>
</head>
<h1><title>New Vehicle</title></h1>
<style>
body{
background: lightblue url("green.jpg") no-repeat fixed center; 
}
</style>
<body>
<form action ="Vreg.php" method="POST" target=""> 
 <!--label><b> Vehicle ID :</b></label>
      <input type="text" placeholder="Enter Vehicle ID" name="VID"required><br><br-->
	  
	   <label><b> Registration Number :</b></label>
      <input type="text" placeholder="Enter Vehicle Register Number" name="Vreg"required><br><br>
	  
	  
	   <!--label><b> Vehicle Type:</b></label>
      <input type="text" placeholder="Enter Vehicle Type" name="Vtype"required><br><br-->
	  
	  <label><b>Vehicle Type</b></label><br>
<select name="Vtype">
<option disabled selected>Select A Vehicle Type</option>
<option value="hatch">Hatch</option>
<option value="sedan">Sedan</option>
<option value="minibus">Minibus</option>
<option value="other">Other</option>
</select>
	  
	  
	   <label><b> Seats :</b></label>
	    <input type="text" placeholder="Enter Vehicle Type" name="Seats"required><br><br>

	  <input type = "submit" id ="btn"value = "Add">
	  </form>	 
</body>
</html>