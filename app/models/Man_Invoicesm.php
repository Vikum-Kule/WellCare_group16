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

        public function addinvoicem($data) {

            $this->db->query('INSERT INTO invoice (invoiceNo, medicineList) VALUES (:invoiceNo, :medicineList)');
            
            $this->db->bind(':invoiceNo', $data['invoiceNo']);
            $this->db->bind(':medicineList', $data['medicineList']);
           
           
            if ($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
    
        }


        public function findinvoice($invoiceNo){
            $this->db->query('SELECT * FROM inquiry WHERE invoiceNo = :invoiceNo' );
    
            $this->db->bind(':invoiceNo', $invoiceNo);
    
            $row = $this->db->single();
            return $row;
        }
    
        public function updatedrug($data){
            $this->db->query('UPDATE inquiry SET invoiceNo = :invoiceNo, medicineList = :medicineList,  WHERE invoiceNo = :invoiceNo');
    
    
            $this->db->bind(':invoiceNo', $data['invoiceNo']);
            $this->db->bind(':medicineList', $data['nammedicineListe']);
            
           
    
            if ($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }


    }

 ?>