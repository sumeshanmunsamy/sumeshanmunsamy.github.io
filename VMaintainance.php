<html>
   <head>
   </head>
<?php          
        if (isset($_POST["VREG"])) { $v2= "'" . $_POST["VREG"] . "'" ; }  
       if (isset($_POST["AID"])) { $v3= "'" . $_POST["AID"] . "'" ; }
         if (isset($_POST["DID"])) { $v4= "'" . $_POST["DID"] . "'" ; } 	
         if (isset($_POST["Des"])) { $v5= "'" . $_POST["Des"] . "'" ; } 		 
    

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
          $query = "SELECT MAX(vehicleId) AS MaxmaintainanceId FROM register;";
           $result = mysqli_query($db, $query);
           $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
           $v1 = $row["MaxmaintainanceId"] + 1;		 

         $query = "INSERT INTO vmaintenance (maintenanceId, vRegNum , username,maindescription) VALUES ($v1, $v2, $v3 ,$v4 ,$v5)";

         if (mysqli_query($db, $query)) {echo "Maintainance Aquired\n" ;}
         else {echo "Error: " . $query . "<br>" . mysqli_error($db);}
        
       
         mysqli_close($db);
   ?>
          <form action = "Questions.html" method = "POST">
      <br><b><font size= "24">Vehicle Maintainance Initiated</font></b><br>
   <br><input type = "submit" id ="btn"value = "Proceed"><br>

  </form>
  </body>
  
</html>