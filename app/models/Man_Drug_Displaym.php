<?php 
	class Man_Drug_Displaym {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }
        public function countalldrugs(){
            $this->db->query("SELECT COUNT(medicineId) as count FROM medicine ;");
           
            $count = $this->db->single();
            return $count;
        }
		
		 public function countallnotifications(){
            $this->db->query("SELECT COUNT(medicineId) as count FROM medicine WHERE QTY<50;");
           
            $count = $this->db->single();
            return $count;
        }



        
    }
?>