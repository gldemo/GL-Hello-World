<?
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
error_reporting(E_ALL);
ini_set('display_errors', 'on');

class IndexController extends Zend_Controller_Action
{
    
    public function indexAction()
    {
        $dbAdapter = Zend_Registry::getInstance()->dbAdapter;
        
        $sql = "SELECT * FROM list";
        
        $dbFetch = $dbAdapter->fetchAll($sql);
        
        
        $this->view->db = $dbFetch;
    }
    
    /**
    * This method is for database testing
    */
    public function listAction()
    {        
       $persons = Person::getAllPersons();
       $this->view->persons = $persons;
    }
}


?>