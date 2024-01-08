<?php
class pgdca
{
    //visibility

     function demo()
     {
        echo "this is demo method"; 
        echo "<br>";
           
     }
      function testing()  
    {
         echo "this is testing";
    }
}
$obj = new pgdca;
$obj -> demo();
$obj -> testing();
?>