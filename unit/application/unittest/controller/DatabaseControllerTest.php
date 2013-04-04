<?php

class DatabaseControllerTest extends ControllerTestCase
{
    public function indexAction() 
    {
      
    }
    
    public function testinsert() 
    {
        $database = Zend_Registry::getInstance()->dbAdapter;
        
        
        $data1 = array('name' => 'Pera', 'phone' => '091-345-345', 'date' => '1.2.2002');
        $data2 = array('name' => 'Zika', 'phone' => '341-453-565', 'date' => '09.08.1908');
        
        $insert1 = $database->insert('list', $data1);
        $insert2 = $database->insert('list', $data2);
        
        if (!$insert1 || !$insert2) {
            $this->setFalse();
        }
    }
}
?>
