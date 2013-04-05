<?php

    class PersonTest extends Zend_Test_PHPUnit_DatabaseTestCase
    {
        private $_connectionMock;
     
        /**
         * Returns the test database connection.
         *
         * @return PHPUnit_Extensions_Database_DB_IDatabaseConnection
         */
        protected function getConnection()
        {
            if($this->_connectionMock == null) {
                $connection = Zend_Db_Table_Abstract::getDefaultAdapter();
                
                $this->_connectionMock = $this->createZendDbConnection(
                    $connection, 'zfunittests'
                );
                Zend_Db_Table_Abstract::setDefaultAdapter($connection);
            }
            
            return $this->_connectionMock;
        }
     
        /**
         * @return PHPUnit_Extensions_Database_DataSet_IDataSet
         */
        protected function getDataSet()
        {
            return $this->createFlatXmlDataSet(
                dirname(__FILE__) . '/_files/personSeed.xml'
            );
        }
        
        public function testBugInsertedIntoDatabase()
        {
            $bugsTable = new Person();

            $data = array(
                'name'      => 'Nikola',
                'phone'     => '654/345-6534',
                'date'      => '2007-03-22 00:00:00'
            );
            
            $bugsTable->insert($data);
            
            $ds = new Zend_Test_PHPUnit_Db_DataSet_QueryDataSet(
                $this->getConnection()
            );
            $ds->addTable('person', 'SELECT * FROM person');
            
            $this->assertDataSetsEqual(
                $this->createFlatXmlDataSet(dirname(__FILE__)
                                          . "/_files/bugsInsertIntoAssertion.xml"),
                $ds
            );
        }
        
        
        public function testBugDelete()
        {
            $bugsTable = new Person();
            $data      = array(1,2,3,4,5);
            $bugsTable->delete($data);
            
            $ds = new Zend_Test_PHPUnit_Db_DataSet_QueryDataSet(
                $this->getConnection()
            );
            $ds->addTable('person', 'SELECT * FROM person');
            
            $this->assertDataSetsEqual(
                $this->createFlatXmlDataSet(dirname(__FILE__)
                                          . "/_files/bugsDelete.xml"),
                $ds
            );
        }
    }
?>
