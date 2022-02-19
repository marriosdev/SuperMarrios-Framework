<?php

namespace Firulin\Commands;

use Firulin\Messages\Message;
use Firulin\Messages\MessageNormal;
use Firulin\Messages\MessageSuccess;
use Firulin\Messages\MessageError;

class Cli extends Command
{
    /**
     * Create new command
     * 
     * @param \StdClass $command
     */ 
    public function create(\StdClass $command)
    {
        echo MessageNormal::send("Creating command...");
        sleep(1);
        if(isset($command->arg1)){
            if(fopen(__DIR__."/".$command->arg1.".php", "x"))
            {
                echo MessageSuccess::send("OK!");
                $file = fopen(__DIR__."/".$command->arg1.".php", "wb");
                $content = file_get_contents("Assets/ContentCommand.txt", "r");
                $content = str_replace("NameClass", $command->arg1, $content);
                fwrite($file, $content);
                fclose($file);
            } else {
                echo MessageError::send("The command already exists");
            }
        } else {
            echo MessageError::send("You need to pass the name of the new command");
        }
    }
}