<?php


$file = "example.txt";


if($handle = fopen($file, 'r')) {


   echo $content = fread($handle, filesize($file)); // each bite = charater



    
    fclose($handle);

} else {
    echo "the application was not able to write on the file";


}





?>