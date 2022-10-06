<?php
$_deviceTab = array(
    1 =>array(
        "Modele" => "PC Gamer ASUS A17 - TUF706IE-HX030W",
        "Description" => "Chassis plus compact et léger mais présente une autonomie plus importante",
        "Processeur :"=>"AMD Ryzen 7 4800H",
        "Carte Graphique :"=>"NVIDIA Geforce RTX 3050TI",
        "Ecran :" => '17,3" (43,9cm) - Mémoire vive (RAM) : 16 Go',
        "Stockage :" =>"SSD 512 GO (en PCI-Express)",
        "Prix :" =>"1299€"

    )
);
print "<h2>".$_deviceTab[1]["Modele"]."</h2>";
print "<p>".$_deviceTab[1]["Description"]."</p>";

print '<ul>';
foreach($_deviceTab as $_key => $_index){
    foreach($_index as $_key_1 => $_valeur){
        if($_key_1 != "Modele" || $_key_1 != "Description"){
            print "<li><p><b>".$_key_1." </b>".$_valeur."<p></li>";
        }
        
    }
}
print "</ul>";
?>