<?php 
    class Admin_Delivery{
        private $db;
        public function __construct(){
            $this->db = new Database;
        }

        public function registerm($data){
            $this->db->query('INSERT INTO deliveryperson (userName, LastName, FirstName, NIC,DOB, email, phoneNumber, password, fromDate, toDate) VALUES(:userName, :LastName, :FirstName, :NIC, :DOB, :email, :phoneNumber, :password, :fromDate, :toDate)');

            $this->db->bind(':userName', $data['userName']);
            $this->db->bind(':LastName', $data['LastName']);
            $this->db->bind(':FirstName', $data['FirstName']);
            $this->db->bind(':NIC', $data['NIC']);
            $this->db->bind(':DOB', $data['DOB']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':phoneNumber', $data['phoneNumber']);
            $this->db->bind(':password', $data['password']);
            $this->db->bind(':fromDate', $data['fromDate']);
            $this->db->bind(':toDate', $data['toDate']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }


        public function login1($userName, $password){
            $this->db->query('SELECT * FROM deliveryperson WHERE userName = :userName');

            $this->db->bind(':userName', $userName);

            $row = $this->db->single();
            $hashedPassword = $row->password;
            if(password_verify($password, $hashedPassword)){
                return $row;
            }
            else{
                return false;
            }

        }

        public function findUserByEmail($email){
            $this->db->query('SELECT * FROM deliveryperson WHERE email = :email');

            $this->db->bind(':email',$email);

            if($this->db->rowCount() > 0){
                return true;
            }
            else{
                return false;
            }
        }
    }

 ?>