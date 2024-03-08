<?php

header("Content-type:text/plain");

$feedback = $_POST["text"];
$feedbackPath = "feedback.txt";
file_put_contents($feedbackPath, $_POST[$feedback]);
echo "success";
?>
