<?php
function readFolderFile($dir)
{
    $files  = scandir($dir);
    echo '<ul>';
        foreach($files as $file){
            if(substr($file,0,1) != '.'){
                echo '<li>';
                    if(is_dir($dir . "/" . $file)){
                        echo $file;
                        readFolderFile($dir . '/' . $file);
                    }else{
                        echo '<a href="'.$dir.'/'.$file.'">'.$file.'</a>';
                    }                    
                echo "</li>";
            }    
        }
    echo "</ul>";
}
readFolderFile("data");
?>