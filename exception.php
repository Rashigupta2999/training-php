<!DOCTYPE html>
<html>
<body>

<?php
 function add($dividend,$divisor){
    if($divisor==0){
        throw new Exception("It is not allowed to divide by zero");
    }
    return $dividend / $divisor;
 }

 //Use try catch
 try{
echo add(4, 0);
 }catch(Exception $e){  //holds type of exception and should be caught name of the variable which can be used to access exception
          echo "Unable to divide by zero";
 }finally{
    
    echo "Process Complete";
 }

?>

</body>
</html>