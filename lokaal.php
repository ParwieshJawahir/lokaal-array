<?php

$lokaal = [
    ["naam"=>"Lokaal 10","capaciteit"=> 20],
    ["naam"=>"Lokaal 28","capaciteit"=> 12],
    ["naam"=>"Lokaal 5","capaciteit"=> 45],
    ["naam"=>"Lokaal 24","capaciteit"=> 27],
    ["naam"=>"Lokaal 19","capaciteit"=> 32]

];
echo "<ul>";
foreach($lokaal as $lokaal){
    echo "<li>" . $lokaal['naam'] . " Stoelen " . $lokaal['capaciteit'] . "</li>";

}

echo "</ul>";
?>