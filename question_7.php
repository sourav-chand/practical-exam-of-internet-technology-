<!-- 7. Write a PHP script to:
• Define an associative array and print its key-value pairs.
• Sort an array in ascending and descending order.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Array Operations in PHP</title>
   <style>
       .container {
           margin: 20px;
           font-family: Arial, sans-serif;
       }
       .array-display {
           background: #f5f5f5;
           padding: 15px;
           margin: 10px 0;
           border-radius: 5px;
       }
   </style>
</head>
<body>
   <div class="container">
       <?php
       // Define an associative array
       $student = array(
           "name" => "John Doe",
           "age" => 20,
           "grade" => "A",
           "course" => "Computer Science"
       );

       // Print associative array
       echo "<h3>Associative Array:</h3>";
       echo "<div class='array-display'>";
       foreach($student as $key => $value) {
           echo "$key: $value<br>";
       }
       echo "</div>";

       // Numeric array for sorting
       $numbers = array(64, 34, 25, 12, 22, 11, 90);
       
       // Print original array
       echo "<h3>Original Numeric Array:</h3>";
       echo "<div class='array-display'>";
       echo implode(", ", $numbers);
       echo "</div>";

       // Sort in ascending order
       $ascending = $numbers;
       sort($ascending);
       echo "<h3>Sorted in Ascending Order:</h3>";
       echo "<div class='array-display'>";
       echo implode(", ", $ascending);
       echo "</div>";

       // Sort in descending order
       $descending = $numbers;
       rsort($descending);
       echo "<h3>Sorted in Descending Order:</h3>";
       echo "<div class='array-display'>";
       echo implode(", ", $descending);
       echo "</div>";

       // Sort associative array by values
       echo "<h3>Associative Array Sorted by Values:</h3>";
       $temp_student = $student;
       asort($temp_student);
       echo "<div class='array-display'>";
       foreach($temp_student as $key => $value) {
           echo "$key: $value<br>";
       }
       echo "</div>";

       // Sort associative array by keys
       echo "<h3>Associative Array Sorted by Keys:</h3>";
       $temp_student = $student;
       ksort($temp_student);
       echo "<div class='array-display'>";
       foreach($temp_student as $key => $value) {
           echo "$key: $value<br>";
       }
       echo "</div>";
       ?>
   </div>
</body>
</html>