<!DOCTYPE html>
<html>
<head>
    <title>File Handling in PHP</title>
</head>
<body>
    <h2>File Operations Demo</h2>

    <?php
    // Create and write to a file
    $file = fopen("sample.txt", "w");
    $text = "Hello! This is the initial text.\n";
    fwrite($file, $text);
    fclose($file);
    
    echo "<p>File created and initial text written successfully.</p>";

    // Read and display file contents
    echo "<h3>Reading file contents:</h3>";
    $content = file_get_contents("sample.txt");
    echo "<pre>" . htmlspecialchars($content) . "</pre>";

    // Append additional text
    $file = fopen("sample.txt", "a");
    $additional_text = "This is additional text appended to the file.\n";
    fwrite($file, $additional_text);
    fclose($file);
    
    echo "<p>Additional text appended successfully.</p>";

    // Read and display updated contents
    echo "<h3>Updated file contents:</h3>";
    $updated_content = file_get_contents("sample.txt");
    echo "<pre>" . htmlspecialchars($updated_content) . "</pre>";
    ?>

</body>
</html>