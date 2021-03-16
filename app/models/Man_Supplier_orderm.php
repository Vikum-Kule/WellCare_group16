<?php 
	 class Man_Supplier_orderm {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function findallorders(){
            $this->db->query('SELECT * FROM supply' );

            $results = $this->db->resultSet();

            return $results;
        }
         public function addorderm($data) {

        $this->db->query('INSERT INTO supply (supplierId,invoiceNo,price,date) VALUES (:supplierId, :invoiceNo, :price, :date)');

        $this->db->bind(':supplierId', $data['supplierId']);
        $this->db->bind(':invoiceNo', $data['invoiceNo']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':date', $data['date']);
        
        if ($this->db->execute()){
            return true;
        }
        else{
            return false;
        }

    }
     public function findOrderById($orderId){
        $this->db->query('SELECT * FROM supply WHERE orderId = :orderId' );

        $this->db->bind(':orderId', $orderId);

        $row = $this->db->single();
        return $row;
    }

    public function updateorder($data){
        $this->db->query('UPDATE supply SET supplierId = :supplierId, invoiceNo = :invoiceNo, price = :price, date = :date  WHERE orderId = :orderId');

        $this->db->bind(':orderId', $data['orderId']);
        $this->db->bind(':supplierId', $data['supplierId']);
        $this->db->bind(':invoiceNo', $data['invoiceNo']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':date', $data['date']);
       

        if ($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }


}

 ?>