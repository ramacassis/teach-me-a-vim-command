<!DOCTYPE html>

<?php

// Text files containing vim commands
define("BASIC_COMMAND_FILE", "basicCommands.txt");
define("MEDIUM_COMMAND_FILE", "mediumCommands.txt");
define("ADVANCED_COMMAND_FILE", "advancedCommands.txt");

// Delimiter separating commands from explanations
define("DELIMITER", "--");

?>

<html>
    <head>
        <meta charset utf-8 />
        <link rel="stylesheet" href="teach-me-vim.css" />
        <title> Teach me a vim command </title>
    </head>

    <body>
        <h1 id="mainTitle">Teach me a vim command</h1>

        <form method="post" id="mainButtons">
            <input class="centralButtons" type="submit" name="basicButton" value="ROOKIE"/>
            <input class="centralButtons" type="submit" name="mediumButton" value="AVERAGE"/>
            <input class="centralButtons" type="submit" name="advancedButton" value="SPECIALIST"/>
        </form>

        <p id="commandToDisplay">

        <?php

           function getRandomLine($filename)
           {
               $lines = file($filename);
               return $lines[array_rand($lines)];
           }

           function getRandomLineParsed($filename)
           {
               return str_replace(DELIMITER, '<br />', getRandomLine($filename));
           }

           $vimCmd = "";

           if(isset($_POST['basicButton']))
           {
               $vimCmd = (string) getRandomLineParsed(BASIC_COMMAND_FILE);
           }
           elseif(isset($_POST['mediumButton']))
           {
               $vimCmd = (string) getRandomLineParsed(MEDIUM_COMMAND_FILE);
           }
           elseif(isset($_POST['advancedButton']))
           {
               $vimCmd = (string) getRandomLineParsed(ADVANCED_COMMAND_FILE);
           }

               echo $vimCmd;
           ?>

        </p>

    </body>
</html>
