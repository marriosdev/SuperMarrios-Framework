<?php

namespace SM\Modules\Loaders;

class HelperLoader
{
    /**
     * Helpers directory path 
     */
    private String $pathHelpers;

    /**
     * Helper directory path
     */
    private String $pathHelper;

    /**
     * 
     */
    public function __construct()
    {
        $this->_setPathHelpers();
    }

    /**
     * Set path Helper 
     * 
     * @param String $nameHelper
     */
    private function _setPathHelper(String $nameHelper)
    {
        $this->pathHelper = $this->pathHelpers."\\".$nameHelper.".php";
    }

    /**
     * Set path Helpers
     */
    private function _setPathHelpers()
    {
        $this->pathHelpers = explode("components", __DIR__)[0]."app\Helpers";
    }

    /**
     * Method that dynamically loads helpers
     *
     *  @param String $nameHelper
     *  @return Bool
     */
    public function load(String $nameHelper)
    {
        $this->_setPathHelper($nameHelper);

        if($this->checkHelper($this->pathHelper))
        {
            require_once($this->pathHelper);
            return true;
        }else{
            return throw new \Exception("Helper not found");
        }
    }

    /**
     * If the helper exists, the method returns True, otherwise False
     * 
     * @param String $pathHelper
     * @return Bool
     */
    private function checkHelper(String $pathHelper)
    {
        return (file_exists($pathHelper)) ? true : false;
    }
}
