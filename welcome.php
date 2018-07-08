<?php
          if(isset($_POST["submit"]))
          {
              $name=$_POST["user"];
           $password=$_POST["pass"];
    
           
           if($name=="goodyear" && $password=="security1234")
           {
               
               echo"<br>Welcome user";
           }
           
           else
           {
           echo"<br>WRONG ID/PASSWORD ENTERED";
               
               
           }}
           ?>
       