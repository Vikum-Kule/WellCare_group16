<?php
    class Man_Operation {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function findallinquiries(){
            $this->db->query('SELECT * FROM inquiry' );

            $results = $this->db->resultSet();

            return $results;
        }

    }