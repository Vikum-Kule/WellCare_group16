<?php
    class Cart {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }
        public function getItem($id){

            $this->db->query('SELECT 
           	medicineId,name,brand,description,price,subcategory,imageLocation
            FROM 
            medicine
            WHERE 
            medicineId  =:id
            ');
            
            $this->db->bind(':id',$id);
            
            $results = $this->db->resultSet();
            return $results;


        }
        
        
    }
   
   