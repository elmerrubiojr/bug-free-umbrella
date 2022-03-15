<?php
$sentence=array("the","quick","brown","fox","jumps","over","the","lazy","dog");

foreach($sentence as $word){
    if($word != "the"){
        echo $word." ";
    }
}
?>