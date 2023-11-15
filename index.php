<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 
    <form action="index.php" method="post">
    <label for="radius">Enter the radius: </label> <br>
    <input type="text" name="radius" placeholder="The radius is required!!. eg: 43, 24, 8" required>
    <input type="submit" value="Calculate!!">

    </form> -->
  <form action="index.php" method="post">
    <h3>Click the button to display items!!</h3>
    <input type="submit" name="button" value="Click Me!!!!">
  </form>

</body>
</html>


<?php

/*
 $radius = $_POST["radius"];
 $curcum = round(2 * pi() * $radius, 2);
 $area = 3.14  * pow($radius, 2);

 echo "The radius you entered is: $radius <br>";
 echo "The Curcumfrence of the circle is: $curcum cm^2 <br>";
 echo "The area of the circle is: {$area}cm^2 <br>";
 

 if ($radius >= 12){
    echo "The radius entered is: {$radius} which is more than 12!!!! <br>";
    echo "Done and dusted!!!!!!!";
    echo "uoweh[woefjeijhwp[eifherreuhhfweim cswpejwiehfqweojfnwelfwweoijwpeokm;dwefjpweihfpewi";
    echo "<br> This is my php!!!!!!!!!";

 }
 else if($radius <= 12){
    echo"The number entered is: {$radius} which is less than 12!!!!";
 }
else{
    echo "Too tired to tell!!!!!!!!!!!!!";
}

http://127.0.0.1:3000/

*/

// echo "Here are the details from the form attribute!! <br>";

// $name = $_POST['name'];
// $email = $_POST['email'];
// $password = $_POST['password'];

// echo "The person's name is {$name} <br>";
// echo "{$name}'s email account is {$email} <br>";
// echo "The password entered is {$password} <br>";

$display_array_items = $_POST['button'];

if(isset($display_array_items)){
$fruit =array('Mango', 'Orange', 'Banana', 'Melon', 'PineApple');

for($j = 0; $j <= count($fruit); $j++){
    echo $fruit[$j] . "<br/>";
}
 
$food = array('Biscuit', 'Juice', 'Apple', 'Yoghurt');

array_push($food, "Mango2", "Mango3");
array_pop($food);

foreach($food as $food1){
    echo $food1 . "<br/>";
}

$capital_cities = array(
    "USA 🇺🇸" => "Washington DC",
    "Japan 🇯🇵" => "Kyoto",
    "South Korea 🇰🇷" => "Seoul",
    "India 🇮🇳" => "New Delhi",
    "Kenya 🇰🇪" => "Nairobi",
    "Jamaica 🇯🇲" => "Jamaica"
);

foreach($capital_cities as $capitals => $cities){
    echo "The capital city of: " . $capitals . " is " . $cities . ".<br/>";
}
}
?>