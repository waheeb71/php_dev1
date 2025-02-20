<?php

$students = [
    ["name" => "Ahmed", "grades" => [80, 75, 90, 85, 88]],
    ["name" => "waheeb", "grades" => [60, 55, 45, 70, 65]],
    ["name" => "amr", "grades" => [90, 88, 92, 87, 95]],
    ["name" => "asad", "grades" => [40, 35, 50, 45, 55]],
    ["name" => "omar", "grades" => [70, 75, 80, 85, 90]],
    ["name" => "mohamad", "grades" => [50, 55, 60, 65, 70]],
    ["name" => "ali", "grades" => [30, 25, 40, 35, 45]],
    ["name" => "monawr", "grades" => [85, 90, 95, 100, 92]],
    ["name" => "am_abd", "grades" => [65, 70, 75, 80, 85]],
    ["name" => "raheeb", "grades" => [55, 60, 65, 70, 75]],
];
function getsult($grades) {
    foreach ($grades as $grade) {
        if ($grade < 50) {
            return "راسب";
        }
    }
    return "ناجح";
}
echo "<h2>الطلاب مع الدرجات </h2>";
foreach ($students as $student) {
    $name = $student["name"];
    $grades = $student["grades"];
    $totl = array_sum($grades);
    $average = $totl / count($grades);
    $result = getsult($grades);

    echo "<h3>Student: $name</h3>";
    echo "<p>Grade: " . implode(", ", $grades) . "</p>";
    echo "<p>Totl: $totl</p>";
    echo "<p>Average: " . number_format($average, 2) . "</p>";
    echo "<p>result: $result</p>";
    echo "<hr>";
}
?>