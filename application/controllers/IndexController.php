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
error_reporting(E_ALL);
ini_set('display_errors', 'on');

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
       $persons = Person::getAllPersons();
       $this->view->persons = $persons;
    }
}


?>