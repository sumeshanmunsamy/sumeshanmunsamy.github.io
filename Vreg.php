<html>
   <head>
   </head>
<?php          
	

        if (isset($_POST["Vreg"])) { $v2 = "'" . $_POST["Vreg"] . "'" ; }
        if (isset($_POST["Vtype"])) { $v3= "'" . $_POST["Vtype"] . "'" ; }  
       if (isset($_POST["Seats"])) { $v4= "'" . $_POST["Seats"] . "'" ; } 			 
    

        $connect = mysqli_connect("localhost", "root", "", "proj");

    
        if (mysqli_connect_errno()) 
        {
           printf("Connect failed: %s\n", mysqli_connect_error());
           exit();
        }   


       
        mysqli_close($connect);
        
        

         $db = mysqli_connect("localhost", "root", "", "proj");
         if (mysqli_connect_errno()) 
         {
           printf("Connect failed: %s\n", mysqli_connect_error());
           exit();
		   
         }   
          /*$query = "SELECT MAX(vehicleId) AS MaxvehicleId FROM register;";
           $result = mysqli_query($db, $query);
           $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
           $v1 = $row["MaxvehicleId"] + 1;		*/ 

         $query = "INSERT INTO vehicles (vRegNum , vehicleType ,SeatsAvail) VALUES ($v2, $v3 ,$v4)";

         if (mysqli_query($db, $query)) {echo "VEHICLE REGISTERED\n" ;}
         else {echo "Error: " . $query . "<br>" . mysqli_error($db);}
        
       
         mysqli_close($db);
   ?>
       <form action = "Questions.html" method = "POST">
      <br><b><font size= "24">VEHICLE REGISTERED</font></b><br>
   <br><input type = "submit" id ="btn"value = "Proceed"><br>

  </form>
  </body>
  
</html>
