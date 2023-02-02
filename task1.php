<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="result.php">
      <h3>Enter First number</h3>
      <input type="number" name="num1" placeholder="First number" required>
      <h3>Enter Second number</h3>
      <input type="number" name="num2" placeholder="Second number" required><br><br>
      <select name="operators" required>
            <option value=""></option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>    
      <input type="submit" name="submit" >
    
</form>   





</body>
</html>