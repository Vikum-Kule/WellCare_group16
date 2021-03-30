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
            //$currentdate=CURDATE();
            //$todays_date = date("Y-m-d");
            //$today=GETDATE();
            $this->db->query('SELECT  refillId, brandName, dose, doseStatus,EXP,QTY FROM stock_refill WHERE EXP < CURDATE()' );

            $results2 = $this->db->resultSet();

            return $results2;
        }



	}
	

 ?>