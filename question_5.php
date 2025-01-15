<!-- 5. Use a conditional statement in PHP to check if a user-provided number is
positive, negative, or zero.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Number Checker</title>
</head>

<body>
  <h2>Number Checker</h2>

  <form method="post">
    <label for="number">Enter a number:</label>
    <input type="number" name="number" id="number" step="any" required />
    <input type="submit" value="Check Number" />
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the number from the form
    $number = $_POST["number"];

    // Check if the number is positive, negative, or zero
    if ($number > 0) {
        echo "<p>$number is a positive number.</p>";
    } 
    elseif ($number < 0) {
        echo "<p>$number is a negative number.</p>";
    } 
    else {
      echo "<p>The number is zero.</p>";
    }
  } ?>
</body>

</html>