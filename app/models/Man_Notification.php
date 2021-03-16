<?php 
	class Man_Notification {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }
        public function findallnotifications(){
            $this->db->query('SELECT medicineId, name, brand, dose, QTY FROM medicine WHERE QTY<50' );

            $results1 = $this->db->resultSet();

            return $results1;
        }



	}
	

 ?>