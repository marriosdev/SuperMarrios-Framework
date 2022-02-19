<?php

namespace Firulin\Commands;

use Firulin\Messages\MessageNormal;
use Firulin\Messages\MessageSuccess;
use Firulin\Messages\MessageError;

class Project extends Command
{

   /**
    * Create new project 

    * @param \StdClass $command
    */
   public function create(\StdClass $command)
   {
         //get configs
         $configs = require(explode("src", __DIR__)[0]."src/config.php");
         $dir = $configs["raiz"];
         $nameProject = $configs["nameProject"];
         
         echo MessageNormal::send("Creating project: ".$nameProject);
         sleep(1);
         
         if(mkdir($dir.$nameProject)){
            echo MessageSuccess::send("OK!");
            foreach($configs["dirs"] as $subDir)
            {
               echo MessageNormal::send("Creating: ".$subDir);
               if(mkdir($dir.$nameProject."/".$subDir))
               {
                  echo MessageSuccess::send("OK!");
               }else{
                  echo MessageError::send("Erro!");
               }
            }
         }else{
            echo MessageError::send("The project ".$nameProject." already exists");
         }
   }
}