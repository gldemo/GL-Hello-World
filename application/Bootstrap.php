<?php
// application/Bootstrap.php
 
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initDoctype()
    {
        $this->bootstrap('view');
        $view = $this->getResource('view');
        $view->doctype('XHTML1_STRICT');
    }
    
    protected function _initAutoloader()
    {
        // Require the autoloader class file
        require_once 'Zend/Loader/Autoloader.php';
        
        // Fetch the Singleton instance of Zend_Loader_Autoloader
        $autoloader = Zend_Loader_Autoloader::getInstance();

        // Set the autoloader as a fallback autoloader (loads all namespaces by default)
        $autoloader->setFallbackAutoloader(true);
        
        // Return the autoloader
        return $autoloader;
    }

    /**
     * Init database
     */
    protected function _initDb()
    {
        /**
        * This function initiates database adapter.
        * 
        * Based on applicayion environment this function will enable or disable firebug DB profiler
        *
        * @param string APPLICATION_ENV (can have few values by configuration: production, development)
        */
        $db = $this->getPluginResource('db')->getDbAdapter();
        $db->query('SET NAMES utf8;');
        $profiler = new Zend_Db_Profiler_Firebug('All DB Queries');
        $profiler->setEnabled(true);
        // Attach the profiler to your db adapter
        $db->setProfiler($profiler);
 
        Zend_Db_Table_Abstract::setDefaultAdapter($db);
        Zend_Registry::set('dbAdapter', $db);
    }
}

?>
