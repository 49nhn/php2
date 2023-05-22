<?php
echo "<h4>".$title."</h4>";
foreach($news as $news){
    echo "<h3>".$news['ho']." ".$news['ten']." ".$news['tuoi']."</h3>";
}
    