<html>
   <head>
   </head>
<?php          

        if (isset($_POST["DUN"])) { $v1 = "'" . $_POST["DUN"] . "'" ; }
		 if (isset($_POST["DPWD"])) { $v2 = "'" . $_POST["DPWD"] . "'" ; }
		  
        if (isset($_POST["Dname"])) { $v3 = "'" . $_POST["Dname"] . "'" ; }
        if (isset($_POST["Sname"])) { $v4= "'" . $_POST["Sname"] . "'" ; }  
        if (isset($_POST["ID"])) { $v5= "'" . $_POST["ID"] . "'" ; }
         if (isset($_POST["number"])) { $v6= "'" . $_POST["number"] . "'" ; } 
        if (isset($_POST["email"])) { $v7= "'" . $_POST["email"] . "'" ; } 	
       if (isset($_POST["address"])) { $v8= "'" . $_POST["address"] . "'" ; } 	
      if (isset($_POST["Ltype"])) { $v9= "'" . $_POST["Ltype"] . "'" ; } 	
        if (isset($_POST["VID"])) { $v10= "'" . $_POST["VID"] . "'" ; } 		 
    

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
         /* $query = "SELECT MAX(userid) AS Maxid FROM driver;";
           $result = mysqli_query($db, $query);
           $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
           $v1 = $row["Maxid"] + 1;		 */

         $query = "INSERT INTO driver (username,fName , lName ,idNum , cellNum,email, address ,licType ,vRegNum) VALUES ($v1,$v3 ,$v4 ,$v5,$v6,$v7,$v8,$v9,$v10)";
		 
         $query2="INSERT INTO users (username,password,usertype VALUES($v1,$v2,Driver)";
		 
         if (mysqli_query($db, $query)) {echo "DRIVER REGISTERED\n" ;}
         else {echo "Error: " . $query . "<br>" . mysqli_error($db);}
        
       
         mysqli_close($db);
   ?>
       <form action = "Questions.html" method = "POST">
      <br><b><font size= "24">Registered Driver</font></b><br>
   <br><input type = "submit" id ="btn"value = "Proceed"><br>

  </form>
  </body>
  
</html>