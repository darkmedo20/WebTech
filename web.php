<?php
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

echo '<response>';
    $food = $_GET["food"];
    $foodArray = array(1,"tuna",'bacon','beef');
    if($food==2){
        echo "love you $food";
    }
    elseif(in_array($food,$foodArray)){
        echo 'We do have '. $food . '!';
    }elseif($food==''){
        echo 'Enter a food idiot';
    }else{
        echo 'Sorry we dont sell ' . $food;
    }
echo '</response>';
?>