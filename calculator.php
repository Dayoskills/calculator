<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
   
   <form action= " " method= "GET">
    <input type= "number" name= "num1" placeholder="enter number1">
    <input type= "number" name= "num2" placeholder="enter number2">
    <select name= "operator">
        <option> None </option>
        <option> Add </option>
        <option> Subtract </option>
        <option> Multiply </option>
        <option> Divide </option>
    </select>
    <br> <br>
    <button type= "submit" name="submit" value="submit">Calculate</button>

   </form>

   <h4>The Answer is : </h4>

   <?php
   if (isset($_GET['submit'])) {
    $number1 = $_GET['num1'];
    $number2 = $_GET['num2'];
    $sign = $_GET['operator'];
   }

   switch ($sign) {
    case 'None':
        echo "Error, select an arithemetric sign";
        break;

     case 'Add':
        echo $number1 + $number2;
        break;
        
     case 'Subtract':
        echo $number1 - $number2;
        break;   

     case 'Multiply':
        echo $number1 * $number2;
        break;  
        
     case 'Divide':
        echo $number1 / $number2;
        break;   
    
   }
   ?>
   
   
   
</body>
</html>