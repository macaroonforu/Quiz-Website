<?php
$quizIsSubmitted = isset( $_POST['quiz-submitted']); 
if( $quizIsSubmitted ){
    $answer1 = $_POST['answer1']; 
    $answer2 = $_POST['answer2']; 
    $answer3 = $_POST['answer3']; 
    $answer4 = $_POST['answer4']; 
    $info = showQuizResponse( $answer1, $answer2, $answer3, $answer4); 

    //$info .= "<pre>"; 
    //$info .= print_r($_POST, true); 
    //$info .= "</pre>"; 
}
else{
    include_once "views/quiz.php"; 
}

function showQuizResponse( string $answer1, $answer2, $answer3, $answer4) : string {
    $response = "<p>You said <span class = 'answer'>$answer1</span>, when asked if learning PHP is hard fun and that you <span class ='answer'>$answer2</span> enjoy learning this language</p>"; 
    $response .= "<p>These are your thoughts on PHP: <span class = 'answer'>$answer3</span> </p>"; 
    $response .= "<p>This is your favourite coding language: <span class = 'answer'>$answer4</span></p>"; 
    $response .= "<p><a href= 'index.php?page=quiz'>Try Quiz again?</a></p>"; 
    return $response; 
}
?>


