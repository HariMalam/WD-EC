<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST['text'];

    echo "<h2>You entered:</h2>";
    echo "<p>$text</p>";

    $file = 'entries.txt';
    file_put_contents($file, $text . PHP_EOL, FILE_APPEND);

    echo "<p>Entry stored in $file</p>";
}
?>
