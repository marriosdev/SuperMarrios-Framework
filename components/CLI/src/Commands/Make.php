<?php

namespace Firulin\Commands;

use Firulin\Messages\MessageNormal;
use Firulin\Messages\MessageSuccess;
use Firulin\Messages\MessageError;
use Firulin\Helpers\File;

class Make extends Command
{
    use File;
    
    /**
     * Criando um novo arquivo na camada de controllers
     */
    public function controller(\StdClass $command)
    {
        $pathFile    = BASE_PATH."\\Controllers\\";
        $fileName    = $command->arg1;

        echo MessageNormal::send("Creating Controller...");
        sleep(1);

        if(isset($command->arg1)){
            if($this->makeFile($pathFile, $fileName))
            {
                //Transferindo conteudo de um arquivo para outro
                echo MessageSuccess::send("OK!");
                $fromFile = PATH_ASSETS."\ContentController.txt";
                $toFile   = $pathFile.$fileName.".php";
                $file       = fopen($toFile, "wb");
                $content    = file_get_contents($fromFile);
        
                $content    = str_replace("nameClass", $command->arg1, $content);
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
