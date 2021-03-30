<?php
    class Man_Delivery_Assignm {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function assigndeliverym(){
            $this->db->query('SELECT orderId FROM prepared_order WHERE status="completed"' );

            $results = $this->db->resultSet();

            return $results;
        }
        public function loadOrders(){
            $this->db->query('SELECT orderId FROM prepared_order WHERE status="completed"' );

            $results = $this->db->resultSet();

            return $results;







        }

        public function delivery_person(){
            $this->db->query('SELECT orders. OrderId, orders. delivery_Username, prepared_order. status
            FROM
            orders
            INNER JOIN
            prepared_order
            ON
            orders. OrderId = prepared_order. orderId' );
            $results = $this->db->resultSet();
            return $results;
        }

}