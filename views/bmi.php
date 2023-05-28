<?php
    $info = 
    "<form method = 'post'>
    <p>Do you wish to proceed in metric units or imperial units?</br></br></p>
    <select name='system'>
        <option value='impterial'>Imperial Units(ft/lbs)</option>
        <option value='metric'>Metric Units (kg/cm)</option>
    </select>
    <input type='submit' name= 'unit-selected' value ='Submit'/>
    </form>"; 

    $unitIsSelected = isset( $_POST['unit-selected']); 

    if($unitIsSelected){
        $system = $_POST['system']; 
        $info .= showNextForm($system); 
    }


    function showNextForm( string $system) : string{
        if($system == 'metric'){
            $form = "<p>Metric</p>
            <form method = 'post' action = 'index.php?page=newbmi'>
           <input type = 'text'  name = 'cm'> <label>cm</label>
           <input type = 'text'  name = 'kg'> <label>kg</label>
           </br></br>
            <input type='submit' name= 'metric-submitted' value ='Submit'/>
            </form>";
        }
        else{
           $form = "<p>Imperial</p>
           <form method = 'post' action = 'index.php?page=newbmi'>
           <input type = 'text'  name = 'feet'> <label>Feet</label>
           <input type = 'text'  name = 'inches'> <label>Inches</label>
           <input type = 'text'  name = 'lbs'><label>Pounds</label>
           </br></br>
           <input type='submit' name= 'imperial-submitted' value ='Submit'/>
           </form>";
        }
        return $form; 
    }
    
?> 