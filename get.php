<?php

header("Content-type:text/plain")

$confirmation = $_POST["text"];
$feedbackPath = "feedback.txt";

$string = file_get_contents($feedbackPath);
echo $string;
?>



