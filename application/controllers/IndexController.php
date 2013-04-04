<?

class IndexController extends Zend_Controller_Action
{
    
    public function indexAction()
    {
        $dbFetch = DBConnect::getAll();        
        
        
        $this->view->nesto = $dbFetch;
    }
}


?>