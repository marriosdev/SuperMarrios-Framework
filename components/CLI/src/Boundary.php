<?php

require_once("constants.php");
$configs = include("config.php");
define("BASE_PATH", $configs["raiz"]."app");

$listCommand = $configs["suggestList"];

/**
 * [List commands class] 
 * In order for a new command to be recognized 
 * by Firulin, it is necessary to add it to the command switch
 */

Use Firulin\Captain;
use Firulin\Commands\Command;
use Firulin\Commands\Project;
use Firulin\Commands\Cli;
use Firulin\Commands\Make;

function start($command)
{
    global $listCommand;
    $captain = new Captain();

    if(!in_array($command->type, $listCommand)){
        $command->type = Command::suggest($command->type, $listCommand);
    }

    /**
     * command switch
     */
    switch ($command->type) {
        case 'project':
            $captain->execute(Project::class, $command);                
            break;
        case 'cmd':
            $captain->execute(Cli::class, $command);                
            break;
        case 'make':
            $captain->execute(Make::class, $command);                
            break;
    }
}
