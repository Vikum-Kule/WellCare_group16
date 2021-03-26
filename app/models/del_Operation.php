<?php 
	class del_operation {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function show_Cities(){
            $this->db->query('SELECT DISTINCT city FROM prepared_order WHERE status= :status ORDER BY city ASC;');
            $this->db->bind(':status', "completed");
            $results = $this->db->resultSet();
            return $results; 
        }

        public function findStreets($city){
            $this->db->query('SELECT DISTINCT streetAddress2 FROM prepared_order WHERE city= :city ORDER BY city ASC;');
            $this->db->bind(':city', $city);
            $results = $this->db->resultSet();
            return $results;
        }

        public function findStreet2($street){
            $this->db->query('SELECT orderId,streetAddress2 FROM prepared_order WHERE streetAddress1= :street ORDER BY city ASC;');
            $this->db->bind(':street', $street);
            $results = $this->db->resultSet();
            return $results;
        }

        public function findOrders(){
            $this->db->query('SELECT 
            customer.PhoneNum, customer.FirstName, customer.LastName,prepared_order.orderId, prepared_order.price
            FROM 
            prepared_order
            INNER JOIN 
            customer 
            ON
            customer. customerId=prepared_order. customerId
            WHERE
            prepared_order.	status = :status' );
            $this->db->bind(':status', "completed");
            $results = $this->db->resultSet();
            return $results; 
        }

        public function findAddres($orderId){
            $this->db->query('SELECT streetAddress1,streetAddress2,city,district FROM 
            prepared_order WHERE orderId=:orderId');
            $this->db->bind(':orderId',$orderId);
            $results = $this->db->single();
            return $results;
        }

        public function count_cityOrders($city){
            $this->db->query("SELECT COUNT(orderId) as count FROM prepared_order WHERE status= :status AND city= :city;");
            $this->db->bind(':status',"completed");
            $this->db->bind(':city',$city);
            $count = $this->db->single();
            return $count;
        }

    }

?>