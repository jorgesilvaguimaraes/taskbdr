<?php 
    class MyUserClass
    {
        private $db;

        public function __construct()
        {
            $this->setDB();        
        }

        private function setDB()
        {
            $this->db = new DatabaseConnection('localhost','user','password');
        }

        public function getUserList()
        {
            $results = $this->db->query('select name from user');
            return sort($results);
        }
    }
?>