<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>PHP FUNCTIONS</title>
</head>
<body>
          <form action="functions.php" method="post">
                    <label for="width">Enter the width: </label> <br/>
                    <input type="text" name="width" minlength="1" maxlength="8"/> <br/>
                    <label for="width">Enter the height: </label> <br/>
                    <input type="text" name="height" minlength="1" maxlength="8"/> <br/>
                    <label for="width">Enter the length: </label> <br/>
                    <input type="text" name="length" minlength="1" maxlength="8"/> <br/>
                    <input type="submit" value="Calculate Area" name="area">
                    <input type="submit" value="Calculate Volume" name="volume">
                    <input type="submit" value="Calculate Perimeter" name="perimeter">
                    
          </form>
</body>
</html>

<?php

 function call_this_function(){
          echo "I am a function!!!!Being called!! <br/>";

 }

 call_this_function();

 //This is a function for calculating an area, volume and perimeter!!

 function calculate_area($length, $width){
          $area = $length * $width;
          echo "The area of the rectangle is: {$area} <br/>";

 }

 function calculate_volume($length, $width, $height){
          $volume = $length * $width * $height;
          echo "The volume of the rectangle is: {$volume} <br/>";

 }

 function calculate_perimeter($length, $width){
          $perimeter = (($length * 2) +  ($width * 2));
          echo "The perimeter of the rectangle is: {$perimeter} <br/>";

 }

$get_width = $_POST['width'];
$get_height = $_POST['height'];
$get_length = $_POST['length'];
$get_area_button = $_POST['area'];
$get_volume_button = $_POST['volume'];
$get_perimeter_button = $_POST['perimeter'];

if(isset($get_area_button)){
calculate_area($get_height, $get_length);
}
elseif(isset($get_volume_button)){
calculate_volume($get_width, $get_length, $get_height);
}
elseif(isset($get_perimeter_button)){
calculate_perimeter($get_length, $get_height);
}
else{
          echo"Nothing to do here pal!!!!!!! <br/>";
}

?>