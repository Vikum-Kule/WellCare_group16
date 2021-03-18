<?php 
	class pc_operation {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function findMedName(){
            $this->db->query('SELECT * FROM medicine' );

            $results = $this->db->resultSet();

            return $results;
        }

        public function findMedId(){
            
        }

        public function showOrders(){
            $this->db->query('SELECT 
            prepared_order. orderId, prepared_order. DateTime, prepared_order. price,customer. FirstName, customer. LastName
            FROM 
            customer
            INNER JOIN 
            prepared_order 
            ON
            customer. customerId=prepared_order. customerId' );

            $results = $this->db->resultSet();
            return $results;   
        }

        public function showNonOrders(){
            $this->db->query('SELECT 
            nonprepared_order. orderId, nonprepared_order. DateTime, nonprepared_order. image_path,customer. FirstName, customer. LastName
            FROM 
            customer
            INNER JOIN 
            nonprepared_order 
            ON
            customer. customerId=nonprepared_order. customerId' );

            $results = $this->db->resultSet();
            return $results;   
        }
        // public function pending_process($orderId){
        //     $this->db->query("DELETE FROM nonprepared_order WHERE orderId = :orderId");
        //     $this->db->bind(':orderId', $orderId);
            
        //     if ($this->db->execute()){
        //     return true;
        //      }
        //     else{
        //     return false;
        //     }

        // }

        public function count_pendingOrders(){
            $this->db->query("SELECT COUNT(orderId) as count FROM prepared_order;");
            $count = $this->db->single();
            return $count;
        }
        public function count_requestedOrders(){
            $this->db->query("SELECT COUNT(orderId) as count FROM nonprepared_order;");
            $count = $this->db->single();
            return $count;
        }
        public function confirmedOrders(){
            $this->db->query("SELECT COUNT(orderId) as count FROM completed_orders;");
            $count = $this->db->single();
            return $count;
        }

        public function findMedPrice($Drugname,$brand,$dose){
            $this->db->query("SELECT price,medicineId FROM medicine WHERE name = :name AND brand = :brand AND dose = :dose");
            $this->db->bind(':name',$Drugname);
            $this->db->bind(':brand',$brand);
            $this->db->bind(':dose',$dose);
            $results = $this->db->resultSet();
            return $results;

        }
        
        public function preparedOrder($updateOrder_medicine){
            $this->db->query("INSERT INTO temp_order_medicine (orderId, medicineId, doseStatus, dose, frequencyStatus, frequency, medName, medBrand, price,QTY) VALUES (:orderId, :medicineId, :doseStatus, :dose, :freaquencyStatus, :freaquency, :medName, :medBrand, :price, :QTY)");
            $this->db->bind(':orderId', $updateOrder_medicine['orderId']);
            $this->db->bind(':medicineId', $updateOrder_medicine['barcode']);
            $this->db->bind(':QTY', $updateOrder_medicine['QTY']);
            $this->db->bind(':doseStatus', $updateOrder_medicine['doseStatus']);
            $this->db->bind(':dose', $updateOrder_medicine['dose']);
            $this->db->bind(':freaquencyStatus', $updateOrder_medicine['status']);
            $this->db->bind(':freaquency', $updateOrder_medicine['freqency']);
            $this->db->bind(':medName', $updateOrder_medicine['name']);
            $this->db->bind(':medBrand', $updateOrder_medicine['brand']);
            $this->db->bind(':price', $updateOrder_medicine['price']);
            if ($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        public function find_using_name($medName){
            $this->db->query("SELECT * FROM medicine WHERE name = :medName ");
            $this->db->bind(':medName', $medName);
            $results = $this->db->resultSet();
            return $results;
        }
        public function find_using_brand($medBrand){
            $this->db->query("SELECT * FROM medicine WHERE brand = :medBrand ");
            $this->db->bind(':medBrand', $medBrand);
            $results = $this->db->resultSet();
            return $results;
        }

        public function find_avl_qty($defineQty_medicine){
            $this->db->query("SELECT QTY FROM medicine WHERE name = :name AND brand = :brand AND dose = :dose");
            $this->db->bind(':name',$defineQty_medicine['name']);
            $this->db->bind(':brand',$defineQty_medicine['brand']);
            $this->db->bind(':dose',$defineQty_medicine['dose']);
            $results = $this->db->resultSet();
            return $results;
        }

        public function find_order($orderId){
            $this->db->query("SELECT * FROM prepared_order WHERE orderId = :orderId LIMIT 1");
            $this->db->bind(':orderId', $orderId);

            $results = $this->db->resultSet();
            return $results;

        }
        public function update_order($updateOrder){
             $this->db->query('INSERT INTO completed_orders (orderId, currentLocation, DateTime, customerId, image_path, price) VALUES (NULL, :currentLocation, current_timestamp(), :customerId, :image_path, :price)');

             $this->db->bind(':currentLocation', $updateOrder['currentLocation']);
             $this->db->bind(':customerId', $updateOrder['customerId']);
             $this->db->bind(':image_path', $updateOrder['image_path']);
             $this->db->bind(':price', $updateOrder['price']);
             if ($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function findData_toTable($nonprepaierd_orderId){
            $this->db->query("SELECT * FROM temp_order_medicine WHERE orderId = :orderId ");
            $this->db->bind(':orderId', $nonprepaierd_orderId);
            $results = $this->db->resultSet();
            return $results;
        }

        public function process_delete($orderId){
            $this->db->query("DELETE FROM prepared_order WHERE orderId = :orderId");
            $this->db->bind(':orderId', $orderId);
            
            

        }

        public function find_email($orderId){
            $this->db->query('SELECT 
            customer. Email
            FROM 
            customer
            INNER JOIN 
            nonprepared_order 
            ON
            customer. customerId=nonprepared_order. customerId
            WHERE
            nonprepared_order.orderId = :orderId' );

            $this->db->bind(':orderId', $orderId);

            $results = $this->db->single();
            return $results;

        }

        public function deleteRow($delete_orderId,$delete_medId){
            $this->db->query("DELETE FROM temp_order_medicine WHERE orderId = :orderId AND medicineId = :medicineId LIMIT 1");
            $this->db->bind(':orderId', $delete_orderId);
            $this->db->bind(':medicineId', $delete_medId);
            if ($this->db->execute()){
                return true;
                 }
            else{
                return false;
                }
        }

        public function selectedRow($delete_orderId,$delete_medId){
            $this->db->query("SELECT * FROM temp_order_medicine WHERE orderId = :orderId AND medicineId = :medicineId LIMIT 1");
            $this->db->bind(':orderId', $delete_orderId);
            $this->db->bind(':medicineId', $delete_medId);
            $results = $this->db->resultSet();
            return $results;
            
        }

        public function findconOrders(){
             $this->db->query('SELECT 
            completed_orders. orderId, completed_orders. DateTime, completed_orders. price,customer. FirstName, customer. LastName
            FROM 
            customer
            INNER JOIN 
            completed_orders 
            ON
            customer. customerId=completed_orders. customerId' );

            $results = $this->db->resultSet();
            return $results;   
        }

        
        public function fetchData($orderId){
            $this->db->query("SELECT customer.PhoneNum, nonprepared_order.customerId, customer.FirstName, customer.LastName, nonprepared_order.image_path 
            FROM nonprepared_order 
            INNER JOIN 
            customer 
            ON
            customer. customerId=nonprepared_order. customerId
            WHERE orderId = :orderId LIMIT 1");
            $this->db->bind(':orderId', $orderId);

            $results = $this->db->resultSet();
            return $results;

            
        }
        

        public function medicineData($medName){
            $this->db->query("SELECT * FROM medicine where name = '$medName' LIMIT 1" );
            $medData = $this->db->resultSet();
            return $medData;           
        }

        public function find_nextId($orderId){
            $this->db->query("SELECT orderId FROM nonprepared_order WHERE orderId > '$orderId' ORDER BY orderId ASC LIMIT 1");
            $nextId = $this->db->resultSet();
            return $nextId;
        }
    }
 ?>