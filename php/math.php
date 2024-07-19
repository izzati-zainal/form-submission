<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $height = isset($_POST["inHeight"]) ? $_POST["inHeight"] : null;
    $weight = isset($_POST["inWeight"]) ? $_POST["inWeight"] : null;

    $height = $height/100;

    if ($height !== null && $weight !== null) {
        $bmi = ($weight / ($height*$height)) ;

        $bmi = round($bmi, 2);

        echo "Your BMI is: " . $bmi;
    } else {
        echo "Please enter a valid number.";
    }
} else {
    echo "Invalid request method.";
}
?>
