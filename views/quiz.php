<?php
$info = "<form method = 'post' action = 'index.php?page=newquiz'>

        <p>Is it hard fun to learn PHP?</p>
        <select name='answer1'>
        <option value='yes'>Yes, it is</option>
        <option value='no'>No, not really</option>
        </select>

        <p>But do you still have fun?</p>
        <select name = 'answer2'>
        <option value = 'do'>Yes, I do</option>
        <option value = 'do not'>No, I do not</option>
        </select>

        <p>How has your experience been so far regarding your PHP education experience?</p>
        <input type = 'text' name = 'answer3'>


        <p>Choose Your favourite back-end language</p>
        <input type='radio' id ='html' name = 'answer4' value='HTML'>
        <label for='html'>HTML</label><br>
        <input type='radio' id ='css' name = 'answer4' value='CSS'>
        <label for='css'>CSS</label><br>

        </br></br>



        <input type='submit' name= 'quiz-submitted' value ='submit'/>


        </form>"; 
?>