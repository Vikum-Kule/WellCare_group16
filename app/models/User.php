<?php
class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function findUserByEmail($email)
    {
        $this->db->query('SELECT * FROM customer WHERE email = :email');

        $this->db->bind(':email', $email);
        $row = $this->db->single();
        //echo $row;
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function updateStatus($userName){
        $this->db->query('INSERT INTO users (userName,Status) VALUES (:userName, :status)');
        //bind values
        $this->db->bind(':userName', $userName);
        $this->db->bind(':status', 'customer');

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function register($data)
    {
        $this->db->query('INSERT INTO customer (userName,LastName,FirstName,Email,PhoneNum,
            NIC,password,streetAddress1,streetAddress2,city,district,postalCode) 
            VALUES
            (:userName, :lastname, :firstname, :email, :phoneNumber, :nic, :password, :streetAddress1, :streetAddress2, :city, :district, :postalCode)');
        //bind values
        $this->db->bind(':userName', $data['userName']);
        $this->db->bind(':lastname', $data['lastname']);
        $this->db->bind(':firstname', $data['firstname']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phoneNumber', $data['phoneNumber']);
        $this->db->bind(':nic', $data['nic']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':streetAddress1', $data['streetAddress1']);
        $this->db->bind(':streetAddress2', $data['streetAddress2']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':district', $data['district']);
        $this->db->bind(':postalCode', $data['postalCode']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findState($userName){
        $this->db->query('SELECT Status FROM users WHERE userName = :username');
        $this->db->bind(':username', $userName);
        
        $state = $this->db->single();

        if ($this->db->execute()) {
            return $state;
        } else {
            return false;
        }
    }

    public function login($username, $password)
    {

        $this->db->query('SELECT * FROM customer WHERE username = :username');

        //Bind value
        $this->db->bind(':username', $username);

        $row = $this->db->single();

        $hashedPassword = $row->password;
        if (password_verify($password, $hashedPassword)) {
            return $row;
        } else {
            return false;
        }
    }

    public function loginPharmacist($username, $password){
        $this->db->query('SELECT * FROM pharmacist WHERE userName = :username');
        //Bind value
        $this->db->bind(':username', $username);

        $row = $this->db->single();

        $hashedPassword = $row->password;
        if (strcmp($password, $hashedPassword)==0) {
            return true;
        } else {
            return false;
        }
    }

    public function loginManager($username, $password){
        $this->db->query('SELECT * FROM manager WHERE userName = :username');
        //Bind value
        $this->db->bind(':username', $username);

        $row = $this->db->single();

        $hashedPassword = $row->password;
        if (strcmp($password, $hashedPassword)==0) {
            return true;
        } else {
            return false;
        }
    }

    public function findUserByUsername($userName)
    {
        $this->db = new Database;
        $this->db->query('SELECT * FROM customer WHERE userName= :userName');
        //bind email

        $this->db->bind(':userName', $userName);

        $row2 = $this->db->single();
        //  echo $this->db->rowCount()
        //check email already taken
        if ($this->db->rowCount() > 0) {

            return true;
        } else {
            return false;
        }
    }
    public function editProfile($data)
    {




        $this->db->query('UPDATE customer SET LastName = :lastname, FirstName = :firstname, PhoneNum = :phoneNumber, NIC = :nic ,
             streetAddress1 = :streetAddress1 , streetAddress2 = :streetAddress2 , city = :city , district = :district , postalCode = :postalCode WHERE customerId = :id');

        $this->db->bind(':firstname', $data['firstname']);
        $this->db->bind(':lastname', $data['lastname']);
        $this->db->bind(':nic', $data['nic']);
        $this->db->bind(':phoneNumber', $data['phoneNumber']);
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':streetAddress1', $data['streetAddress1']);
        $this->db->bind(':streetAddress2', $data['streetAddress2']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':district', $data['district']);
        $this->db->bind(':postalCode', $data['postalCode']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function recoverPasswordUsingPIN($data)
    {

        $this->db->query('UPDATE customer SET password  = :newPassword WHERE Email  = :email');

        $this->db->bind(':newPassword', $data['newPassword']);
        $this->db->bind(':email', $data['email']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function findPIN($data)
    {
        $this->db = new Database;
        $this->db->query("SELECT createdTime,tempPassword  FROM passwordrecover WHERE Email= :email ORDER BY createdTime DESC LIMIT 1");

        $this->db->bind(':email', $data['email']);




        $row = $this->db->resultSet();

        if ($this->db->execute()) {
            return $row;
        } else {
            return false;
        }
    }


    public function recoverPassword($dataRecoverPassword)
    {

        $this->db->query('INSERT INTO passwordRecover (email,tempPassword,createdTime) 
            VALUES
            (:recoverEmail,:recoverpasswords,:createdTime)');

        $this->db->bind(':recoverEmail', $dataRecoverPassword['recoverEmail']);
        $this->db->bind(':recoverpasswords', $dataRecoverPassword['recoverpasswords']);
        $this->db->bind(':createdTime', $dataRecoverPassword['createdTime']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function getItem($id)
    {

        $this->db->query('SELECT 
           	medicineId,name,brand,description,price,subcategory,imageLocation
            FROM 
            medicine
            WHERE 
            medicineId  =:id
            ');

        $this->db->bind(':id', $id);

        $results = $this->db->resultSet();
        return $results;
    }
}
