<?php
    class Man_Inquirym {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function findallinquiries(){
            $this->db->query('SELECT * FROM inquiry WHERE status = "unread" ' );

            $results = $this->db->resultSet();

            return $results;
        }

        public function findallprocessing(){
            $this->db->query('SELECT * FROM inquiry WHERE status ="processing" ');

            $results = $this->db->resultSet();

            return $results;
        }


        public function findallcompleted(){
            $this->db->query('SELECT * FROM inquiry WHERE status ="completed" ');

            $results = $this->db->resultSet();

            return $results;
        }


    }