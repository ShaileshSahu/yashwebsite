<?php 
   $dbhost = 'localhost:3306'; 
   $dbuser = 'root'; 
   $dbpass = '1234'; 
    
   $conn = mysql_connect($dbhost, $dbuser, $dbpass); 
    
   if(! $conn ) { 
      die('Could not connect: ' . mysql_error()); 
   } 
    
   $sql = 'SELECT Employee_no, UAN_No,Name_of_employee,Fathers_name,Payment,Account_no,Esc_no,Work_place,PF_no,Attendance from registration'; 
   mysql_select_db('goodyear'); 
   $retval = mysql_query( $sql, $conn ); 
    
   if(! $retval ) { 
      die('Could not get data: ' . mysql_error()); 
   } 
    
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) { 
  

      echo "EMP NO :{$row['Employee_no']}  <br> ". 
         " UAN No : {$row['UAN_No']} <br> ". 
         " Name Of Emplyee : {$row['Name_of_employee']} <br> ". 
         " Fathers Name : {$row['Fathers_name']} <br> ". 
         " Payment : {$row['Payment']} <br> ". 
         " Account no: {$row['Account_no']} <br> ". 
         " ESC No : {$row['Esc_no']} <br> ". 
         " WorkPlace: {$row['Work_place']} <br> ". 
         " PF No : {$row['PF_no']} <br> ". 
         " Attendance : {$row['Attendance']} <br> ". 
         
          "--------------------------------<br>"; 
   } 
    
   echo "TOTAL DATA LIST OF GOOD YEAR SECURITIES PVT LTD.\n"; 
    
   mysql_close($conn); 
?> 