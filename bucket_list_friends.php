<?php
echo "> How many many friends shall i ask for their dreams?" . PHP_EOL;
$aantal = readline("> ");
$totaal = 1;
$shit = array(
);

    if (is_numeric($aantal)) {
        for ($tell = 1; $tell <= $aantal; $tell++) 
        { 
        echo "> What is your name?" . PHP_EOL;
        $name = readline("> ");
        
        echo "> What is your dream?" . PHP_EOL;
        $dream = readline("> ");
        
        $shit[$name] = $dream;
        }      
    }
else
{
    exit("> '" . $aantal . "' is not a number, try again.");
}
foreach($shit as $name => $dream) {
    echo "> $name has entered this as his dream: $dream" . PHP_EOL;
  }
exit;