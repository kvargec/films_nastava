<ul>
<?php
    foreach($filmovi as $film){
        echo '<li>'.$film['title'].'-'.$film['lan'].'</li>';
    }
?>
</ul>


