<?php
//readfile('fileread.txt');
$myfile = fopen("fileread.txt","a") or die("Unable to open file!"); //open the file or create a new file
/*echo fread($myfile,filesize("fileread.txt")); //read the file that already open
fclose($myfile);  //close the file*/
//echo fgets($myfile);  //used to read single line from file
/*while(!feof(myfile)){  //check if is the file reached end of line
    //echo fgets($myfile) . "<br>";  
    echo fgetc($myfile) . "<br>"; //used to read single character and show single character in each line
}
fclose($myfile);*/
$text= "Hello I am Rashi\n";  //
fwrite($myfile,$text);   
$text= "Example of fwrite\n";
fwrite($myfile,$text);
fclose($myfile);


?> 