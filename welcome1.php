
<html>
<body bgcolor=lightgreen>
<?php
          if(isset($_POST["submit"]))
          {
              $name=$_POST["user"];
           $password=$_POST["pass"];
    
           
           if($name=="goodyear" && $password=="1234")
           {
               
              ;
           }
           
           else
           {
           echo"<br>WRONG ID/PASSWORD ENTERED";
               exit(0);
               
           }}
           ?>
<form action="registration.php" method="post" name="b1">

    <h1><font color=purple>Welcome User</font></h1>    
<table width = "10" border = "5" cellspacing = "5"  
                     cellpadding = "5"> 
                   
                     <tr> 
                        
                        <td><input name = "b1" type = "submit" value="Registration"></td> 
                     </tr> 
                   
    <tr> </table></form>
    <form action="registration1.php" method="post" name="b2">

        <table width = "10" border = "5" cellspacing = "5"  
                     cellpadding = "5"> 
                   
   <tr><td><input name = "b2" type = "submit" value="View"></td> 
                     </tr> 
    </table>
    </form>

</body>
</html>
