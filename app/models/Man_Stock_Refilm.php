<?php
    class Man_Stock_Refilm {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function findallrefill(){
            $this->db->query('SELECT * FROM stock_refill' );

            $results = $this->db->resultSet();

            return $results;
        }

    }