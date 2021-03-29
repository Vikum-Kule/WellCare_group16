<?php
    class MyOrder {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }
        public function cofirmOrderByCustomer($orderId){
            $status="completed";
            $this->db->query("UPDATE prepared_order SET status=:status WHERE orderId = :orderId");
            $this->db->bind(':orderId', $orderId);
            $this->db->bind(':status', "completed");
            if ($this->db->execute()){
                return true;
            }
            else{
                return false;
            }



        }
        public function cancelOrderByCustomer($orderId){
            $status="canceled";
            $this->db->query("UPDATE prepared_order SET status=:status WHERE orderId = :orderId");
            $this->db->bind(':orderId', $orderId);
            $this->db->bind(':status', "canceled");
            if ($this->db->execute()){
                return true;
            }
            else{
                return false;
            }



        }
        public function getNonPreparedMyOrders($UserId){

            $this->db->query('SELECT 
           *
            FROM 
            nonprepared_order
            WHERE 
            customerId   =:UserId
            ORDER BY DateTime
            ');
            
            $this->db->bind(':UserId',$UserId);
            
            $results = $this->db->resultSet();
            return $results;



        }
        public function getPrescriptionData($orderId){

            $this->db->query('SELECT 
           *
            FROM 
            nonprepared_order
            WHERE 
            orderId   =:orderId
            
            ');
            
            $this->db->bind(':orderId',$orderId);
            
            $results = $this->db->resultSet();
            return $results;



        }
        public function getPreparedMyOrders($UserId){

            $this->db->query('SELECT 
           *
            FROM 
            prepared_order
            WHERE 
            customerId  =:UserId
            ');
            
            $this->db->bind(':UserId',$UserId);
            
            $results = $this->db->resultSet();
            return $results;



        }
        public function nonPreparedMyOrdersData($orderId){

            $this->db->query('SELECT 
           nonpreparedorder_medicine.orderId,
           nonpreparedorder_medicine.medicineId,
           nonpreparedorder_medicine.price,
           nonpreparedorder_medicine.qty,
           medicine.name
            FROM 
            nonpreparedorder_medicine
            INNER JOIN 
            medicine
            ON
            nonpreparedorder_medicine.medicineId= medicine.medicineId
            WHERE 
            nonpreparedorder_medicine.orderId  =:orderId
            ');
            
            $this->db->bind(':orderId',$orderId);
            
            $results = $this->db->resultSet();
            return $results;



        }
        public function preparedMyOrdersData($orderId){

            $this->db->query('SELECT 
            prepared_order_medicne.orderId,
            prepared_order_medicne.medicineId,
            prepared_order_medicne.price,
            prepared_order_medicne.qty,
            medicine.name
             FROM 
             prepared_order_medicne
             INNER JOIN 
             medicine
             ON
             prepared_order_medicne.medicineId= medicine.medicineId
             WHERE 
             prepared_order_medicne.orderId  =:orderId
             ');
            
            $this->db->bind(':orderId',$orderId);
            
            $results = $this->db->resultSet();
            return $results;



        }
        public function loadPreparedPrescription($orderId){

            $this->db->query('SELECT 
            *
             FROM 
             prepared_order_medicne
             
             WHERE 
             prepared_order_medicne.orderId  =:orderId
             ');
            
            $this->db->bind(':orderId',$orderId);
            
            $results = $this->db->resultSet();
            return $results;



        }
        // OrderNumber: OrderNumber,
        // complaint: complaint
        public function sendComplaint($data)
        {
            $status = "pending";
            $this->db->query('INSERT INTO inquiry (orderId,inquiry,status) 
                VALUES
                (:OrderId, :complaint, :status)');
            //bind values
           

            $this->db->bind(':complaint', $data['complaint']);
            $this->db->bind(':OrderId', $data['OrderId']);
            $this->db->bind(':status', $status);


            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
        public function checkOrderNumber($orderId){

            $this->db->query("SELECT orderId
                              FROM 
                              prepared_order
                              where orderId =:orderId");

            // $this->db->bind(':searchOrderId',$data['searchOrderId']);
            $this->db->bind(':orderId',$orderId);
            //$this->db->bind(':searchOrderId', $searchOrderId);
    
            $row2 = $this->db->single();
        //  echo $this->db->rowCount()
        //check email already taken
        if ($this->db->rowCount() > 0) {

            return true;
        } else {
            return false;
        }



        }
        public function getComplaint($UserId){

            $this->db->query('SELECT 
           inquiry.inquiryId,inquiry.orderId,inquiry.inquiryDate,inquiry.inquiry,prepared_order.customerId
             FROM 
             inquiry
             INNER JOIN
             prepared_order
             ON
             inquiry.orderId=prepared_order.orderId 
             
             WHERE 
             prepared_order.customerId   =:UserId
             ');
            
            $this->db->bind(':UserId',$UserId);
            
            $results = $this->db->resultSet();
            return $results;






        }
        public function EnableMsgButton($orderId){
            $this->db = new Database;
        $this->db->query('SELECT * from reminder WHERE 	orderId = :orderId');
        //bind email

        $this->db->bind(':orderId', $orderId);

        $row2 = $this->db->single();
        //  echo $this->db->rowCount()
        //check email already taken
        if ($this->db->rowCount() > 0) {

            return true;
        } else {
            return false;
        }


        }
        public function disableMsg($orderId){
             $this->db = new Database;
             $this->db->query('DELETE FROM reminder WHERE orderId = :orderId');
             $this->db->bind(':orderId', $orderId);

             if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }


        }
        public function OrderNumberSearch($data){
             
           

            $this->db->query("SELECT orderId
                              FROM 
                              prepared_order
                              where customerId =:user_id");

            // $this->db->bind(':searchOrderId',$data['searchOrderId']);
            $this->db->bind(':user_id',$data['user_id']);
            //$this->db->bind(':searchOrderId', $searchOrderId);
    
            $row = $this->db->resultSet();
            return  $row;
        }
        
    
    }



  

