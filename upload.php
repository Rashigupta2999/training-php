<!DOCTYPE HTML>
<html>  
<body>
<!--The enctype attribute specifies how the form-data should be encoded when submitting it to the server.-->
<form action="upload1.php" method="post" enctype="multipart/form-data">
Name: <input type="text" name="name" required><br>
E-mail: <input type="text" name="email"><br>
Image: <input type="file" name="fileToUpload" id="fileToUpload">


<input type="submit">
</form>

</body>
</html>
