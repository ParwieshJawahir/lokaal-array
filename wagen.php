<?php
 
 $games = [
    ["naam"=>"Mortal Kombat 1","prijs"=>40],
    ["naam"=>"GTA V","prijs"=>20],
    ["naam"=>"Spider-Man 2","prijs"=>65],
    ["naam"=>"Fortnite","prijs"=>0],
    ["naam"=>"Crew Motorfest","prijs"=>40]

 ];
echo "<ul>";
 foreach ($games as $game){
    echo "<li>" . $game['naam'] . " - $" . $game['prijs'] . "</li>";
    
 }
echo "</ul>";
 
?>

