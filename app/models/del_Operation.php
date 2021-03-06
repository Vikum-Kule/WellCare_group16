<?php 
	class del_operation {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function show_Cities($username){
            $this->db->query('SELECT DISTINCT city FROM prepared_order 
            INNER JOIN
            orders
            ON
            orders.OrderId  = prepared_order.orderId
            WHERE status= :status
            AND
            orders.delivery_Username  = :userName
            ORDER BY city ASC;');
            $this->db->bind(':status', "completed");
            $this->db->bind(':userName',$username );
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

        public function findOrders($username){
            $this->db->query('SELECT 
            customer.PhoneNum, customer.FirstName, customer.LastName,prepared_order.orderId, prepared_order.price
            FROM 
            prepared_order
            INNER JOIN 
            customer

            ON
            customer. customerId=prepared_order. customerId
            INNER JOIN
            orders
            ON
            orders.OrderId  = prepared_order.orderId  
            WHERE
            prepared_order.	status = :status
            AND
            orders.delivery_Username  = :userName
            ORDER BY 
            customer.FirstName' );
            $this->db->bind(':status', "completed");
            $this->db->bind(':userName',$username );

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

        public function findStreetOrders($street){
            $this->db->query('SELECT 
            customer.PhoneNum, customer.FirstName, customer.LastName,prepared_order.orderId, prepared_order.price, prepared_order.streetAddress1
            FROM 
            prepared_order
            INNER JOIN 
            customer 
            ON
            customer. customerId=prepared_order. customerId
            WHERE
            prepared_order.	status = :status
            AND
            prepared_order.streetAddress2 = :street');
            $this->db->bind(':status', "completed");
            $this->db->bind(':street', $street);
            $results = $this->db->resultSet();
            return $results; 
        }

        public function find_selectOrders($orderId){
            $this->db->query('SELECT 
            customer.PhoneNum, customer.FirstName, customer.LastName,prepared_order.orderId, prepared_order.price, prepared_order.streetAddress1,
            prepared_order.streetAddress2, prepared_order.city, prepared_order.district, prepared_order.price
            FROM 
            prepared_order
            INNER JOIN 
            customer 
            ON
            customer. customerId=prepared_order. customerId
            WHERE
            prepared_order.	status = :status
            AND
            prepared_order.orderId = :orderId');
            $this->db->bind(':status', "completed");
            $this->db->bind(':orderId', $orderId);
            $results = $this->db->resultSet();
            return $results; 
        }

        public function count_Orders($username){
            $this->db->query("SELECT COUNT(OrderId ) as count FROM orders WHERE delivery_Username = :delivery_Username");
            $this->db->bind(':delivery_Username',$username);
            $count = $this->db->single();
            return $count;
        }

        public function updateStatus($orderId){
            $this->db->query("UPDATE prepared_order SET status= :status WHERE orderId= :orderId");
            $this->db->bind(':status', "delivered");
            $this->db->bind(':orderId', $orderId);
            if ($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

    }

?>