<?php 
	class reminder_Operation {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function find_order_data($orderId){
            $this->db->query('SELECT frequencyStatus,medName,medBrand FROM prepared_order_medicne WHERE orderId= :orderId' );
            $this->db->bind(':orderId', $orderId);
            $results = $this->db->resultSet();
            return $results;
        
        }
        public function setReminder($order_data){
            $this->db->query('INSERT INTO reminder (orderId, lastReminder, nextReminder, frequency_type, dates, medName, medBrand)
            VALUES (:orderId, :lastReminder, :nextReminder, :frequency_type, :dates, :medName, :medBrand)');
            $this->db->bind(':orderId',$order_data['orderId']);
            $this->db->bind(':lastReminder',$order_data['lastReminder']);
            $this->db->bind(':nextReminder',$order_data['nextReminder']);
            $this->db->bind(':frequency_type',$order_data['frequency_type']);
            $this->db->bind(':dates',$order_data['dates']);
            $this->db->bind(':medName',$order_data['medName']);
            $this->db->bind(':medBrand',$order_data['medBrand']);
            
            if ($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
    }

        public function findData_reminder(){
            $this->db->query('SELECT * FROM reminder');
            $results = $this->db->resultSet();
            return $results;
        }

        public function updateTimeDate($dates,$lastReminder,$nextReminder,$reminderId){
            $this->db->query('UPDATE reminder SET dates= :dates, lastReminder= :lastReminder, nextReminder= :nextReminder
            WHERE reminderId= :reminderId');
            $this->db->bind(':dates',$dates);
            $this->db->bind(':lastReminder',$lastReminder);
            $this->db->bind(':nextReminder',$nextReminder);
            $this->db->bind(':reminderId',$reminderId);

            if ($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

    }
?>