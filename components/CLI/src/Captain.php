<?php

namespace Firulin;

use Firulin\Messages\MessageError;
use Firulin\Messages\MessageNormal;
use Firulin\Messages\MessageSuccess;
use Firulin\Commands\Command;

class Captain
{
    /**
     * List commands
     * @var string[]
     */
    public $listCommands = [];

    /**
     * @param string $class
     * @param object $cmd
     * 
     *  @example [ Captain::execute(CommandController::class, \StdClass $std);
     */
    static function execute($class, \StdClass $cmd)
    {   
        $list = include("config.php");
        $list = $list["commands"][$cmd->type];

        if(!in_array($cmd->action, $list)){
            $cmd->action = Command::suggest($action ,$list);   
        }
        if(isset($cmd->action)){
            $command = new $class();
            $action = $cmd->action;
            $command->$action($cmd);
        }else{
            Command::listCommand($cmd->type, $list);
        }
        try {
        } catch (\Throwable $th) {
            echo MessageError::send("This action does not exist");            
        }

    }
}