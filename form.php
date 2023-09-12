<form action="">
    <label for="country">Country</label>
    <select name="country" id="country">
        <?php include "data/html/countries.html"; ?>
    </select>

    <label for="state">State</label>
        <select name="state" id="state">
            <?php 
                if($fo = fopen("data/html/states.html","r")){
                    while(!feof($fo)){
                        $line = fgets($fo);
                        if(strpos($line,"Mandalay")){
                            echo str_replace(">Mandalay" , "Selected>Mandalay",$line);
                        }else{
                            echo $line;
                        }               
                    }
                    fclose($fo);
                }
                echo '<optgroup label="Us Outlying Territories">';
                    $states = file_get_contents("data/html/territories.html");
                    echo ($states);
                echo '</optgroup>';

                echo '<optgroup label="Armed Forces">';
                $state_array= file("data/html/armed_forces.html");
                    foreach($state_array as $sa){
                        echo str_replace("Armed Forces",'',$sa);
                    }
                echo '</optgroup>';                   
            ?>
        </select>
</form>