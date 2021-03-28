<?php
    class Man_Stock_Refilm {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function findallrefill(){
            $this->db->query('SELECT * FROM stock_refill' );

            $results = $this->db->resultSet();

            return $results;
        }
        public function findMedId($brand, $name, $dose,$doseForm){
            $this->db->query("SELECT medicineId FROM medicine WHERE name = :name AND brand = :brand AND dose = :dose AND doseStatus= :doseForm ");
            $this->db->bind(':name',$name);
            $this->db->bind(':brand',$brand);
            $this->db->bind(':dose',$dose);
            $this->db->bind(':doseForm',$doseForm);
            $results = $this->db->single();
            return $results;
        }

        public function updateQty($medId, $qty){
            $this->db->query("UPDATE medicine SET QTY = :QTY WHERE medicineId = :medId");
            $this->db->bind(':medId',$medId);
            $this->db->bind(':QTY',$qty);
            if ($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }
        public function fill_stock($data){
            $this->db->query('INSERT INTO 
            stock_refill 
            (supplyId, refillDateTime, medicineId , brandName, doseStatus, dose, QTY, price) 
            VALUES (:supplyId, current_timestamp(), :medicineId , :brandName, :doseStatus, :dose, :QTY, :price)');
            
            $this->db->bind(':supplyId', $data['supplyId']);
            $this->db->bind(':medicineId', $data['medicineId']);
            $this->db->bind(':brandName', $data['brandName']);
            $this->db->bind(':doseStatus', $data['doseStatus']);
            $this->db->bind(':dose', $data['dose']);
            $this->db->bind(':QTY', $data['QTY']);
            $this->db->bind(':price', $data['price']);
            if ($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

    }