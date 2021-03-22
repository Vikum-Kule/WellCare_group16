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

        public function findEmail($orderId){
            $this->db->query('SELECT 
             prepared_order. price,customer. FirstName, customer. LastName, customer. Email
            FROM 
            customer
            INNER JOIN 
            prepared_order 
            ON
            customer. customerId=prepared_order. customerId
            WHERE
            prepared_order.orderId = :orderId' );
            $this->db->bind(':orderId', $orderId);
            $results = $this->db->resultSet();
            return $results; 
        }

        public function showOrders($status){
            $this->db->query('SELECT 
            prepared_order. orderId, prepared_order. DateTime, prepared_order. price,customer. FirstName, customer. LastName
            FROM 
            customer
            INNER JOIN 
            prepared_order 
            ON
            customer. customerId=prepared_order. customerId
            WHERE
            prepared_order.status= :status' );
            $this->db->bind(':status', $status);
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
            $this->db->query("SELECT COUNT(orderId) as count FROM prepared_order WHERE status= :status;");
            $this->db->bind(':status',"pending");
            $count = $this->db->single();
            return $count;
        }
        public function count_requestedOrders(){
            $this->db->query("SELECT COUNT(orderId) as count FROM nonprepared_order;");
            $count = $this->db->single();
            return $count;
        }
        public function confirmedOrders(){
            $this->db->query("SELECT COUNT(orderId) as count FROM prepared_order WHERE status= :status;");
            $this->db->bind(':status',"completed");
            $count = $this->db->single();
            return $count;
        }

        public function findMedPrice($Drugname,$brand,$dose,$doseform){
            $this->db->query("SELECT price,medicineId,QTY FROM medicine WHERE name = :name AND brand = :brand AND dose = :dose AND doseStatus= :doseForm ");
            $this->db->bind(':name',$Drugname);
            $this->db->bind(':brand',$brand);
            $this->db->bind(':dose',$dose);
            $this->db->bind(':doseForm',$doseform);
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

        public function find_QTY($medicineId ){
            $this->db->query("SELECT QTY FROM medicine WHERE medicineId = :medId");
            $this->db->bind(':medId',$medicineId);
            $results = $this->db->single();
            return $results;
        }

        public function updateQTY($medicineId ,$avlQTY){
            $this->db->query("UPDATE medicine SET QTY = :QTY WHERE medicineId = :medId");
            $this->db->bind(':medId',$medicineId);
            $this->db->bind(':QTY',$avlQTY);
            if ($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        public function find_order($orderId){
            $this->db->query("SELECT * FROM prepared_order_medicne WHERE orderId = :orderId LIMIT 1");
            $this->db->bind(':orderId', $orderId);

            $results = $this->db->resultSet();
            return $results;

        }

        public function add_to_prepared_medicine($updateOrder_medicine){
            $this->db->query('INSERT INTO 
            prepared_order_medicne 
            (orderId, medicineId, doseStatus, dose, frequencyStatus, frequency, medName, medBrand, QTY, price) 
            VALUES (:orderId, :medicineId, :doseStatus, :dose, :frequencyStatus, :frequency, :medName, :medBrand, :QTY, :price)');
            $this->db->bind(':orderId', $updateOrder_medicine['orderId']);
            $this->db->bind(':medicineId', $updateOrder_medicine['medicineId']);
            $this->db->bind(':QTY', $updateOrder_medicine['QTY']);
            $this->db->bind(':doseStatus', $updateOrder_medicine['doseStatus']);
            $this->db->bind(':dose', $updateOrder_medicine['dose']);
            $this->db->bind(':frequencyStatus', $updateOrder_medicine['frequencyStatus']);
            $this->db->bind(':frequency', $updateOrder_medicine['frequency']);
            $this->db->bind(':medName', $updateOrder_medicine['medName']);
            $this->db->bind(':medBrand', $updateOrder_medicine['medBrand']);
            $this->db->bind(':price', $updateOrder_medicine['price']);
            if ($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        

        public function findMedicine($orderId,$Drugname,$brand,$dose,$doseform){
            $this->db->query("SELECT * FROM temp_order_medicine WHERE medName = :name AND medBrand = :brand AND dose = :dose AND orderId= :orderId AND doseStatus= :doseForm");
            $this->db->bind(':name',$Drugname);
            $this->db->bind(':brand',$brand);
            $this->db->bind(':dose',$dose);
            $this->db->bind(':doseForm',$doseform);
            $this->db->bind(':orderId',$orderId);
            $results = $this->db->resultSet();
            if ($results){
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

        public function findData_from_nonOrders($orderId){
            $this->db->query("SELECT * FROM nonprepared_order WHERE orderId = :orderId LIMIT 1");
            $this->db->bind(':orderId', $orderId);
            $results = $this->db->resultSet();
            return $results;
        }
         public function find_medicine_nonOrders($orderId){
            $this->db->query("SELECT
            medicine.name,medicine.brand,nonpreparedorder_medicine.price,nonpreparedorder_medicine.qty            
            FROM 
            nonpreparedorder_medicine 
            INNER JOIN 
            medicine 
            ON
            nonpreparedorder_medicine. medicineId=medicine. medicineId
            WHERE 
            orderId = :orderId");
            $this->db->bind(':orderId', $orderId);
            $results = $this->db->resultSet();
            return $results;
         }

        public function add_to_prepared($updateOrder){
            $this->db->query('INSERT INTO prepared_order
            (orderId,  DateTime, customerId, streetAddress1, streetAddress2, city, district, image_path, price, status) 
            VALUES 
            (:orderId,  current_timestamp(), :customerId, :streetAddress1, :streetAddress2, :city, :district, :image_path, :price, :status)');

            $this->db->bind(':orderId', $updateOrder['orderId']);
            $this->db->bind(':customerId', $updateOrder['customerId']);
            $this->db->bind(':streetAddress1', $updateOrder['streetAddress1']);
            $this->db->bind(':streetAddress2', $updateOrder['streetAddress2']);
            $this->db->bind(':city', $updateOrder['city']);
            $this->db->bind(':district', $updateOrder['district']);
            $this->db->bind(':image_path', $updateOrder['image_path']);
            $this->db->bind(':price', $updateOrder['price']);
            $this->db->bind(':status', $updateOrder['status']);
            if ($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
    
        }

        public function updateStatus($orderId){
            $this->db->query("UPDATE prepared_order SET status=:status,DateTime= current_timestamp() WHERE orderId = :orderId");
            $this->db->bind(':orderId', $orderId);
            $this->db->bind(':status', "completed");
            if ($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        

        public function request_delete($orderId){
            $this->db->query("DELETE FROM nonprepared_order WHERE orderId = :orderId");
            $this->db->bind(':orderId', $orderId);
            if ($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        
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

        public function find_prepaired_Orders($orderId){
             $this->db->query('SELECT 
            customer.PhoneNum, prepared_order.customerId, customer.FirstName, customer.LastName, prepared_order.image_path 
            FROM 
            prepared_order
            INNER JOIN 
            customer 
            ON
            customer. customerId=prepared_order. customerId
            WHERE
            prepared_order.orderId = :orderId' );
            $this->db->bind(':orderId', $orderId);
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