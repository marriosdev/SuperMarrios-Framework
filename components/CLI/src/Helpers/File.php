<?php

namespace Firulin\Helpers;

trait File
{
    private $basePath;

    /**
     * 
     */
    private function makeFile($filePath, $fileName)
    {
        $file = $filePath.$fileName.".php";
        $openFile = fopen($file , "x");
        if($openFile)
        {
            fclose($openFile);
            return true;
        }
        // fclose($openFile);
        return false;
    }

    /**
     * 
     */
    private function openFile($nameFile)
    {
        $file = fopen(__DIR__."/".$command->arg1.".php", "wb");
        fclose($file);
    }

}