<?php 
	class Man_Notification {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }
        public function findallnotifications(){
            $this->db->query('SELECT  name, brand, doseStatus, dose, QTY FROM medicine WHERE QTY<100' );

            $results1 = $this->db->resultSet();

            return $results1;
        }

        public function expirationdrugsm(){
            $this->db->query('SELECT  name, brand, doseStatus, dose, QTY FROM medicine WHERE QTY<100' );

            $results1 = $this->db->resultSet();

            return $results1;
        }



	}
	

 ?>