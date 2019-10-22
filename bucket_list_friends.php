<?php
echo "> How many many friends shall i ask for their dreams?" . PHP_EOL;
$aantal = readline("> ");
$totaal = 1;
$name = array();
$dream = array();
    if (is_numeric($aantal)) 
    {
        for ($tell = 1; $tell <= $aantal; $tell++) 
        { 
        echo "> What is your name?" . PHP_EOL;
        $custommessage = readline("> ");
        $name[] = $custommessage;
        echo "> What is your dream?" . PHP_EOL;
        $custommessage = readline("> ");
        $dream[] = $custommessage;
        }      
    }
else
{
    exit("> '" . $aantal . "' is not a number, try again.");
}


for ($tell = 0; $tell < $aantal; $tell++) {
echo "> " . $name[$tell];
echo " has entered the dream: " . $dream[$tell];
echo PHP_EOL;
}