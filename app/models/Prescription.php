<?php
class Prescription
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function tempPrescription($data)
    {
        $this->db->query('INSERT INTO tempprescription(customerId) VALUES (:id)');
        //bind values
        $this->db->bind(':id', $data['id']);

        if ($this->db->execute()) {
            return $this->getTempPrescriptionId($data);;
        } else {
            return false;
        }
        // $this->db->query('SELECT * FROM customer WHERE email = :email');

        // $this->db->bind(':email', $email);
        // $row = $this->db->single();
        // //echo $row;
        // if ($this->db->rowCount() > 0) {
        //     return true;
        // } else {
        //     return false;
        // }
    }
    public function getTempPrescriptionId($data)
    {
        $this->db->query('SELECT 
                                tempPrescriptionId
                                FROM 
                                tempprescription
                                WHERE 
                                customerId  =:id');
        $this->db->bind(':id', $data['id']);
        

        $row = $this->db->resultSet();
        return  $row;
    }

    
}
