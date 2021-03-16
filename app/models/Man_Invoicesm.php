<?php 
	class Man_Invoicesm {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function showallinvoices(){
            $this->db->query('SELECT * FROM invoice' );

            $results = $this->db->resultSet();

            return $results;
        }
    }

 ?>