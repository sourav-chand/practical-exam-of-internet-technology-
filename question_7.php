<!-- 7. Write a PHP script to:
• Define an associative array and print its key-value pairs.
• Sort an array in ascending and descending order.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Array Operations in PHP</title>
</head>

<body>
    <div>
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
        foreach ($student as $key => $value) {
            echo "$key: $value<br>";
        }
        echo "</div>";

        // Numeric array for sorting
        $numbers = array(64, 34, 25, 12, 22, 11, 90);

        // Print original array
        echo "<h3>Original Numeric Array:</h3>";
        echo implode(", ", $numbers);
        echo "</div>";

        // Sort in ascending order
        $ascending = $numbers;
        sort($ascending);
        echo "<h3>Sorted in Ascending Order:</h3>";
        echo implode(", ", $ascending);
        echo "</div>";

        // Sort in descending order
        $descending = $numbers;
        rsort($descending);
        echo "<h3>Sorted in Descending Order:</h3>";
        echo implode(", ", $descending);
        echo "</div>";

        // Sort associative array by values
        echo "<h3>Associative Array Sorted by Values:</h3>";
        $temp_student = $student;
        asort($temp_student);
        foreach ($temp_student as $key => $value) {
            echo "$key: $value<br>";
        }
        echo "</div>";

        // Sort associative array by keys
        echo "<h3>Associative Array Sorted by Keys:</h3>";
        $temp_student = $student;
        ksort($temp_student);
        foreach ($temp_student as $key => $value) {
            echo "$key: $value<br>";
        }
        echo "</div>";
        ?>
    </div>
</body>

</html>