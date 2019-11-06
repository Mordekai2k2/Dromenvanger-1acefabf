<?php

echo 'Hoe veel vrienden wil je vragen om hun droom?' . PHP_EOL;
$aantal = readline();
$vrienden = array();
if (is_numeric($aantal)) {
    echo "Je gaat $aantal vrienden toevoegen!" . PHP_EOL;

    for ($a = 0; $a < $aantal; $a++){
        $dromen = array();
        $naam = readline("Wat is ge naam boi?");
        echo "Hoeveel dromen wil je toevoegen?" . PHP_EOL;
        $aantal2 = readline();

        for($b = 0; $b < $aantal2; $b++){
            echo "Wat is ge droom boi?" . PHP_EOL;
            $droom = readline();
            array_push($dromen, $droom);
        }

        $vrienden[$naam]  = $dromen;
    }

    foreach($vrienden as $yeet){
        $naam = array_search ($yeet, $vrienden);
        foreach($yeet as $droom){
            echo $naam . " Heeft als droom: " . $droom . PHP_EOL;
        }
    }

} else {
    echo "Feck you reetkever";
    exit();
}
