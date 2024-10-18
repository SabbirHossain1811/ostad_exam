<?php
// Function to calculate the result
function calculateResult($marks) {
    
    // Validate mark range for each subject
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Mark range is invalid. Please enter marks between 0 and 100.";
            return;
        }
    }

    // Check for fail condition
    foreach ($marks as $mark) {
        if ($mark < 33) {
            echo "The student has ( F ) failed in one or more subjects.";
            return;
        }
    }

    // Calculate total and average
    $total = array_sum($marks);
    $average = $total / count($marks);

    // Determine the grade using switch-case
    switch (true) {
        case $average >= 80:
            $grade = "A+";
            break;
        case $average >= 70:
            $grade = "A";
            break;
        case $average >= 60:
            $grade = "A-";
            break;
        case $average >= 50:
            $grade = "B";
            break;
        case $average >= 40:
            $grade = "C";
            break;
        case $average >= 33:
            $grade = "D";
            break;
        default:
            $grade = "F";
            break;
    }

    // Output the result
    echo "Total Marks: " . $total . "<br>";
    echo "Average Marks: " . number_format($average, 2) . "<br>";
    echo "Grade: " . $grade . "<br>";
}

// Sample marks (replace these values with actual input)
$marks = [75, 87, 88, 40, 73];

// Call the function to calculate and display the result
calculateResult($marks);
?>
