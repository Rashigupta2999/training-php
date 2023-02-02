<html>
<body>

<?php
    if(isset($_POST['submit'])){   //isset is to check whether submit button is working or not ,if we click on submit button then
        $no1=$_POST['num1'];
        $no2=$_POST['num2'];
        $oprnd=$_POST['operators'];
        if($oprnd == "+")
            echo $no1 + $no2;
        else if($oprnd == "-")
        echo $no1 - $no2;
        else if($oprnd == "*")
        echo $no1 * $no2;
        else if($oprnd == "/")
        echo $no1 / $no2; 
    }
?>


</body>
</html>
