<?php

if(isset( $_POST['metric-submitted'])){
    $weight = $_POST['kg']; 
    $height = $_POST['cm']; 
    $info = displayBmiMetric($weight, $height); 
}

else if (isset( $_POST['imperial-submitted'])){
    $feet = $_POST['feet']; 
    $inches = $_POST['inches']; 
    $lbs = $_POST['lbs']; 
    $info = displayBmiImperial($lbs, $feet, $inches);

}

else{
    include_once "views/bmi.php"; 
}

function displayBmiMetric(string $weight, $height) : string{
    $response = "<p>You said that you weigh <span class = 'answer'>$weight</span> kg and are <span class = 'answer'>$height</span> cm tall."; 
    $meters = $height/100; 
    $BMI = $weight/($meters**2); 
    $response .= "<p>Your BMI is: $BMI </p>"; 
    $response .= "<p><a href ='index.php?page=bmi'>Try Another BMI? </a></p>"; 
    return $response; 
}

function displayBmiImperial(string $lbs, $feet, $inches) : string {
    $response = "<p>You said that you weigh <span class = 'answer'>$lbs</span> lbs and are <span class = 'answer'>$feet</span> feet, <span class = 'answer'>$inches</span> inches tall."; 
    $inch = 12*$feet + $inches; 
    $BMI = ($lbs/($inch**2)) * 703; 
    $response .= "<p>Your BMI is: $BMI </p>"; 
    $response .= "<p><a href ='index.php?page=bmi'>Try Another BMI? </a></p>"; 
    return $response; 
}
?>
