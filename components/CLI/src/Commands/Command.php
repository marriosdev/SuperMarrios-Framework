<?php

namespace Firulin\Commands;

use Firulin\Messages\MessageNormal;
use Firulin\Messages\MessageSuccess;
use Firulin\Messages\MessageError;

class Command
{
    /**
     * Command suggestion 
     * 
     * @param string $command
     * @param array $sugList
     * 
     * @return string  
     */    
    static function suggest($command, $sugList)
    {
        $suggest = ["type"=> $sugList[0], "countMatch"=> 0]; 
        $strMatchCount = 0;
        foreach($sugList as $sugCom){
            $strMatchCount = 0;
            for($c=0; $c < strlen($command); $c++){
                if($sugCom[$c] == $command[$c]){
                    $strMatchCount++;
                }
            }
            if($strMatchCount > $suggest["countMatch"]){
                $suggest= ["type"=> $sugCom, "countMatch"=> $strMatchCount];
            }
        }
        echo MessageError::send("Command Not Found \nDid you mean: ".$suggest["type"]);
        echo "Y or N: ";
        $question = readline();
        if(strpos($question, "y") !== false){
            return $suggest["type"]; 
        }
        return $command;
    }

    /**
     * 
     */
    static function listCommand ($nameList, $list)
    {
        echo MessageNormal::send("Command list: ".$nameList);
        foreach($list as $command)
        {
            echo "\033[1;32m"."» ".$nameList.":".$command."\033[0m\n";
        }
    }
}