<?
/**
* IndexController
*
* LICENSE: Commercial
* 
* @package CORE
* @subpackage 
* @copyright Ivan Dudas
* @license http://www.example.com/license
* @version  1.0.0
* @link  http://www.example.com
* @since 2013
*/



/**
* IndexController.
*
* LICENSE: Commercial
* 
* @package CORE
* @subpackage 
* @copyright Ivan Dudas
* @license http://www.example.com/license
* @version  1.0.0
* @link  http://www.example.com
* @since 2013
*/

class IndexController extends Zend_Controller_Action
{
 
    public function init()
    {
        /* Initialize action controller here */
    }
 
    public function indexAction()
    {
        // action body
    }
    
     /**
     * This method is for database testing
     */
    public function listAction()
    {
        // action body
       $dbAdapter = Zend_Registry::getInstance()->dbAdapter;
       $dbAdapter->setFetchMode(Zend_Db::FETCH_OBJ);
       $persons   = $dbAdapter->fetchall("select * from list");

       $this->view->persons = $persons;
    }
}


?>