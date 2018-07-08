<html>
<body bgcolor=skyblue>
<?php 
         if(isset($_POST['submit'])) { 
            $dbhost = 'localhost:3306'; 
            $dbuser = 'root'; 
            $dbpass = '1234'; 
            $conn = mysql_connect($dbhost, $dbuser, $dbpass); 
             
            if(! $conn ) { 
               die('Could not connect: ' . mysql_error()); 
            } 
             
            if(! get_magic_quotes_gpc() ) { 
               $t1 = addslashes ($_POST['t1']); 
               $t2 = addslashes ($_POST['t2']); 
            $t3 = addslashes ($_POST['t3']); 
               $t4 = addslashes ($_POST['t4']); 
               $t5 = addslashes ($_POST['t5']); 
               $t6 = addslashes ($_POST['t6']); 
               $t7 = addslashes ($_POST['t7']); 
               $t8 = addslashes ($_POST['t8']); 
               $t9 = addslashes ($_POST['t9']); 
               $t10 = addslashes ($_POST['t10']); 
               
          
            }else { 
               /*$emp_name = $_POST['emp_name']; 
               $emp_address = $_POST['emp_address']; 
            */
                
            } 
             
            //$emp_salary = $_POST['emp_salary']; 
             
            $sql = "INSERT INTO Registration ". "(Employee_no,UAN_No,Name_of_employee, Fathers_name,Payment,Account_no,Esc_no,Work_place,PF_no,Attendance) ". "VALUES('$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8','$t9','$t10')"; 
                
            mysql_select_db('goodyear'); 
            $retval = mysql_query( $sql, $conn ); 
             
            if(! $retval ) { 
               die('Could not enter data: ' . mysql_error()); 
            } 
             
            echo "Entered data successfully\n"; 
            mysql_close($conn); 
          }else { 
  
          
             ?>
<h1>Registration Form</h1>    
 <form method = "post" action ="<?php $_PHP_SELF ?>"> 
                  <table width = "400" border = "0" cellspacing = "3"  
                     cellpadding = "6"> 
                   
                     <tr> 
                        <td width = "120">Employee No.</td> 
                        <td><input name = "t1" type = "number"></td> 
                     </tr> 
                     <tr> 
                        <td width = "120">UAN No.</td> 
                        <td><input name = "t2" type ="number"></td> 
                     </tr> 
                      <tr>
                        <td width = "120">Name Of Employee </td> 
                        <td><input name = "t3" type = "text"></td> 
                     </tr> 
                   
                     <tr> 
                        <td width = "120">Father's Name</td> 
                        <td><input name = "t4" type = "text"></td> 
                     </tr> 
                   
                     <tr> 
                        <td width = "120">Payment</td> 
                        <td><input name = "t5" type ="number"></td> 
                     </tr> 
                   
                     <tr> 
                        <td width = "120">Account No.</td> 
                        <td><input name = "t6" type = "number"></td> 
                     </tr> 
                   
                     <tr> 
                        <td width = "120">ESC No.</td> 
                        <td><input name = "t7" type = "number"></td> 
                     </tr> 
                   
                     <tr> 
                        <td width = "120">Work Place</td> 
                        <td><input name = "t8" type = "text"></td> 
                     </tr> 
                   <tr> 
                        <td width = "120">PF No.</td> 
                        <td><input name = "t9" type = "number"></td> 
                     </tr> 
                   <tr> 
                        <td width = "120">Attendance</td> 
                        <td><input name = "t10" type = "number"></td> 
                     </tr> 
                   

                   <tr> 
                        <td width = "100"> </td> 
                        <td> 
                           <input name = "submit" type ="submit" id = "login"  
                              value = "REGISTER"> 
                        </td> 
                     </tr> 
                   
                  </table> 
               </form> 
        <?php 
         } 
      ?> 
    
</body>
</html>
