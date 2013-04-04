<?php

class UnitController Test extends ControllerTestCase
{
    public function insertUsersAction()
    {
        $database = Zend_Registry::getInstance()->dbAdapter;
        $data1 = array('name' => 'Pera', 'phone' => '091-345-345', 'date' => '1.2.2002');
        $data2 = array('name' => 'Zika', 'phone' => '341-453-565', 'date' => '09.08.1908');
        
        $inset1 = $database->insert('list', $data1);
        $inset2 = $database->insert('list', $data2);
    }
}
?>
