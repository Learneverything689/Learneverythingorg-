<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the question field is set and not empty
    if (isset($_POST["question"]) && !empty($_POST["question"])) {
        // Sanitize the input question
        $question = htmlspecialchars($_POST["question"]);
        
        // Open a file in append mode
        $file = fopen("questions.txt", "a");
        
        // Write the question to the file
        fwrite($file, $question . PHP_EOL);
        
        // Close the file
        fclose($file);
        
        echo "Question successfully stored!";
    } else {
        echo "Please enter a valid question";
    }
} else {
    echo "Invalid request";
}
?>
