<?php

namespace SM\Modules\Loaders;

class Loader 
{
    /**
     * File Path
     */
    protected String $filePath;

    /**
     * Layer name to load
     */
    protected String $layerName = '';


    /**
     * Set file path  
     * 
     * @param String $filePath
     * @return \Exception
     * @return String 
     */
    protected function _setFilePath(String $filePath)
    {
        $pathLayer = explode("components", __DIR__)[0]."app\\".$this->layerName;

        if($this->layerName == '' || !$this->_checkLayer($pathLayer))
        {
            throw new \Exception("Layer not found: ".$this->layerName);
        }

        $this->filePath = $pathLayer."\\".$filePath.".php";
        return $filePath;
    }

    /**
     * Method that dynamically loads files
     *
     *  @param String $fileLoad
     *  @return \Exception
     *  @return Bool 
     */
    public function load(String $fileLoad)
    {
        $this->_setFilePath($fileLoad);

        if($this->_checkFile($this->filePath))
        {
            require_once($this->filePath);
            return true;
        }else{
            throw new \Exception(" not found");
        }
    }

    /**
     * If the layer exists, the method returns True, otherwise False
     * 
     * @param String $layerPath
     * @return Bool
     */
    private function _checkLayer(String $layerPath)
    {
        return file_exists($layerPath);
    }

    /**
     * If the file exists, the method returns True, otherwise False
     * 
     * @param String $fileName
     * @return Bool
     */
    private function _checkFile(String $fileName)
    {
        return file_exists($fileName);
    }
} 
