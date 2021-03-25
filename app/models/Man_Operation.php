<?php
    class Man_Operation {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function findalldrugs(){
            $this->db->query('SELECT * FROM medicine' );

            $results = $this->db->resultSet();

            return $results;
        }


        public function adddrugm($data) {

        $this->db->query('INSERT INTO medicine (medicineId, name, brand, description, QTY, price, EXP, MFD, doseStatus, dose, temperature,subCategory,imageLocation) VALUES (:medicineId, :name, :brand, :description, :QTY, :price, :EXP, :MFD, :doseStatus, :dose, :temperature,:subCategory,:imageLocation)');
        
        $this->db->bind(':medicineId', $data['medicineId']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':brand', $data['brand']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':QTY', $data['QTY']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':EXP', $data['EXP']);
        $this->db->bind(':MFD', $data['MFD']);
        $this->db->bind(':doseStatus', $data['doseStatus']);
        $this->db->bind(':dose', $data['dose']);
        $this->db->bind(':temperature', $data['temperature']);
        $this->db->bind(':subCategory', $data['subCategory']);
        $this->db->bind(':imageLocation', $data['imageLocation']);
       
        if ($this->db->execute()){
            return true;
        }
        else{
            return false;
        }

    }

    public function findDrugById($medicineId){
        $this->db->query('SELECT * FROM medicine WHERE medicineId = :medicineId' );

        $this->db->bind(':medicineId', $medicineId);

        $row = $this->db->single();
        return $row;
    }

    public function updatedrug($data){
        $this->db->query('UPDATE medicine SET name = :name, brand = :brand, description = :description, QTY = :QTY, price = :price, EXP = :EXP , MFD = :MFD, doseStatus = :doseStatus, dose = :dose, temperature = :temperature,subCategory = :subCategory,imageLocation = :imageLocation WHERE medicineId = :medicineId');


        $this->db->bind(':medicineId', $data['medicineId']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':brand', $data['brand']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':QTY', $data['QTY']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':EXP', $data['EXP']);
        $this->db->bind(':MFD', $data['MFD']);
        $this->db->bind(':doseStatus', $data['doseStatus']);
        $this->db->bind(':dose', $data['dose']);
        $this->db->bind(':temperature', $data['temperature']);
        $this->db->bind(':subCategory', $data['subCategory']);
        $this->db->bind(':imageLocation', $data['imageLocation']);
       

        if ($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    public function deletedrug($medicineId) {
        $this->db->query('DELETE FROM medicine WHERE medicineId = :medicineId');

        $this->db->bind(':medicineId',$medicineId);

         if ($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }

}