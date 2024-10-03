<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["question"])) {
    $question = $_POST["question"] . "\n";
    
    $file = 'questions.txt';
    // Append the question to the file
    file_put_contents($file, $question, FILE_APPEND );
    
    echo "Question submitted successfully!";
} else {
    echo "Error: Invalid request.";
}
?>
