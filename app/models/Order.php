<?php
class Order
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function findNutritionSupplements()
    {

        $this->db->query('SELECT 
            medicine.name,medicine.brand,medicine.price ,medicine.description  
            FROM 
            medicine 
            INNER JOIN 
            subcategory 
            ON 
            medicine.subCategory = subcategory.name AND subcategory.mainCategory ="Nutrition & Supplements"');

        $results = $this->db->resultSet();
        return $results;
    }

    public function getmaincategories()
    {

        $this->db->query('SELECT * FROM maincategory');

        $results = $this->db->resultSet();
        return $results;
    }

    public function getsubcategories($x)
    {
        $this->db->query('SELECT 
            subcategory.subCategoryID,subcategory.name,maincategory.mainCategoryID,maincategory.name AS maincategoryName
            FROM 
            subcategory
            INNER JOIN 
            maincategory
            ON 
            maincategory.name = subcategory.mainCategory AND maincategory.mainCategoryID =:x');

        $this->db->bind(':x', $x);

        $results = $this->db->resultSet();
        return $results;
    }
    public function getmedicines($x)
    {
        $this->db->query('SELECT 
           	medicine.medicineId ,medicine.name,medicine.brand,medicine.description,medicine.price,subcategory.subCategoryID,subcategory,mainCategory	
            FROM 
            medicine
            INNER JOIN 
            subcategory
            ON 
            subcategory.name = medicine.subCategory AND subcategory.subCategoryID =:x');

        $this->db->bind(':x', $x);

        $results = $this->db->resultSet();
        return $results;
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
    public function confirmCheckout($cart)
    {
        for ($i = 0; $i < sizeof($cart); $i++) {
        }
    }
    public function nonprepared_order($data)
    {
        $this->db = new Database;
        $this->db->query(
            'INSERT INTO
                            nonprepared_order (DateTime,customerId,streetAddress1,streetAddress2,city,district,postalCode) 
                            VALUES
                            (:dateTime,:customerId,:streetAddress1,:streetAddress2,:city,:district,:postalCode)'
        );

        $this->db->bind(':dateTime', $data['dateTime']);
        $this->db->bind(':customerId', $data['customerId']);
        $this->db->bind(':streetAddress1', $data['streetAddress1']);
        $this->db->bind(':streetAddress2', $data['streetAddress2']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':district', $data['district']);
        $this->db->bind(':postalCode', $data['postalCode']);

        if ($this->db->execute()) {
            return $this->getOrderId($data);;
        } else {
            return false;
        }
    }
    public function getOrderId($data)
    {
        $this->db->query('SELECT 
                                orderId
                                FROM 
                                nonprepared_order
                                WHERE 
                                DateTime  =:dateTime AND customerId  =:customerId AND streetAddress1  =:streetAddress1 AND streetAddress2  =:streetAddress2 AND city  =:city AND district  =:district AND postalCode  =:postalCode 
                            ');
        $this->db->bind(':dateTime', $data['dateTime']);
        $this->db->bind(':customerId', $data['customerId']);
        $this->db->bind(':streetAddress1', $data['streetAddress1']);
        $this->db->bind(':streetAddress2', $data['streetAddress2']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':district', $data['district']);
        $this->db->bind(':postalCode', $data['postalCode']);

        $row = $this->db->resultSet();
        return  $row;
    }
    public function searchmedicines($searchBar){
        
        $this->db->query("SELECT 
                                name,brand
                                FROM 
                                medicine
                                WHERE 
                                brand LIKE '%$searchBar%' OR name LIKE '%$searchBar%'
                            ");


         $this->db->bind(':searchBar', $searchBar);
        // $this->db->bind(':x', $x);       
            
        $row = $this->db->resultSet();

        return  $row;
    }
    public function getsearchmedicines($searchBar){
        
        $this->db->query("SELECT 
        medicine.medicineId ,medicine.name,medicine.brand,medicine.description,medicine.price,subcategory.subCategoryID,subcategory,mainCategory	
     FROM 
     medicine
     INNER JOIN 
     subcategory
     ON 
     subcategory.name = medicine.subCategory 
     where medicine.brand LIKE '%$searchBar%' OR medicine.name LIKE '%$searchBar%'"
     );
        
        
       


         $this->db->bind(':searchBar', $searchBar);
              
            
        $row = $this->db->resultSet();

        return  $row;
    }
    public function nonpreparedorder_medicine($data)
    {

        $this->db->query(
            'INSERT INTO 
                            nonpreparedorder_medicine (orderId,medicineId,price,qty) 
                            VALUES
                            (:orderId,:medicineId,:price,:qty)'
        );

        $this->db->bind(':orderId', $data['orderId']);
        $this->db->bind(':medicineId', $data['medicineId']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':qty', $data['qty']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
