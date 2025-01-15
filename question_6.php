<!-- 6. Create a PHP script to display the multiplication table for a given number.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px 0;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        form {
            margin: 20px 0;
        }
    </style>
</head>

<body>
    <h2>Multiplication Table Generator</h2>

    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Generate Table">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the number from the form
        $number = $_POST["number"];

        // Display the multiplication table
        echo "<table>";
        echo " <caption>Multiplication Table for $number</caption>";
        echo "<tr>
                <th>×</th>
                <th>$number</th>
                <th>Result</th>
              </tr>";

        // Generate table rows from 1 to 10
        for ($i = 1; $i <= 10; $i++) {
            $result = $i * $number;
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$number</td>";
            echo "<td>$result</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
    ?>
</body>

</html>