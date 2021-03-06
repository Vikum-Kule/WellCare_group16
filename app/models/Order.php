<?php
class Order
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // public function findNutritionSupplements()
    // {

    //     $this->db->query('SELECT 
    //         medicine.name,medicine.brand,medicine.price ,medicine.description  
    //         FROM 
    //         medicine 
    //         INNER JOIN 
    //         subcategory 
    //         ON 
    //         medicine.subCategory = subcategory.name AND subcategory.mainCategory ="Nutrition & Supplements"');

    //     $results = $this->db->resultSet();
    //     return $results;
    // }

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
           	medicine.QTY,medicine.medicineId ,medicine.name,medicine.brand,medicine.description,medicine.price,subcategory.subCategoryID,subcategory,mainCategory	
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
           	medicine.QTY,medicine.medicineId,medicine.name,medicine.brand,medicine.description,medicine.price,medicine.subcategory,medicine.imageLocation,subcategory.mainCategory
            FROM 
            medicine
            INNER JOIN subcategory
            ON subcategory.name=medicine.subcategory
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
                            nonprepared_order (customerId,streetAddress1,streetAddress2,city,district) 
                            VALUES
                            (:customerId,:streetAddress1,:streetAddress2,:city,:district)'
        );

        
        $this->db->bind(':customerId', $data['customerId']);
        $this->db->bind(':streetAddress1', $data['streetAddress1']);
        $this->db->bind(':streetAddress2', $data['streetAddress2']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':district', $data['district']);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function searchmedicines($searchBar)
    {
        $Prescription='Prescription';

        $this->db->query("SELECT 
                                name,brand
                                FROM 
                                medicine
                                WHERE 
                                brand LIKE '%$searchBar%' OR name LIKE '%$searchBar%' AND subCategory<>'$Prescription'
                            ");


        $this->db->bind(':searchBar', $searchBar);
        $this->db->bind(':Prescription', $Prescription);
 //$this->db->bind(':subCategory', $Prescription);
              

        $row = $this->db->resultSet();

        return  $row;
    }
    public function getsearchmedicines($searchBar)
    {
        $Prescription='Prescription';

        $this->db->query(
            "SELECT 
        medicine.QTY,medicine.medicineId ,medicine.name,medicine.brand,medicine.description,medicine.price,subcategory.subCategoryID,subcategory,mainCategory	
     FROM 
     medicine
     INNER JOIN 
     subcategory
     ON 
     subcategory.name = medicine.subCategory 
     where medicine.brand LIKE '%$searchBar%' OR medicine.name LIKE '%$searchBar%' AND subCategory<>'$Prescription'"
        );





        $this->db->bind(':searchBar', $searchBar);
        $this->db->bind(':Prescription', $Prescription);


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

    public function tempPrescription($data)
    {
        $this->db->query('INSERT INTO tempprescription(time,customerId,ext) VALUES (:time,:id,:ext)');
        //bind values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':time', $data['time']);
        $this->db->bind(':ext', $data['ext']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    

    public function removePrescription($id)
    {
        $this->db->query('DELETE FROM tempprescription WHERE customerId=:id');

        $this->db->bind(':id', $id);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function nonPreparedPrescription($data)
    {

        $this->db->query('INSERT INTO nonprepared_order(customerId,streetAddress1,streetAddress2,city,district,image_path) VALUES (:customerId,:streetAddress1,:streetAddress2,:city,:district,:image_path)');

        
        
        $this->db->bind(':streetAddress1', $data['streetAddress1']);
        $this->db->bind(':streetAddress2', $data['streetAddress2']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':district', $data['district']);
        $this->db->bind(':customerId', $data['customerId']);
        $this->db->bind(':image_path', $data['image_path']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function getTempPrescriptionData($id)
    {

        $this->db->query('SELECT 
        *
        FROM 
        tempprescription
        WHERE 
        customerId  =:id ');
        $this->db->bind(':id', $id);
        $row = $this->db->resultSet();
        return  $row;
    }



    // 'streetAddress1' => trim($json->streetAddress1),
    //         'streetAddress2' => trim($json->streetAddress2),
    //         'city' => trim($json->city),
    //         'district' => trim($json->streetAddress1),
    //         'postalCode' => trim($json->postalCode),
    //         'dateTime' => time(),
    //         'customerId' => $_SESSION['user_id'],
    //         'orderId'=>$result[0]->Auto_increment,
    //         'image_path'=>$result[0]->Auto_increment
    public function getNextOrderId()
    {
        $this->db->query("SHOW TABLE STATUS LIKE 'nonprepared_order'");
        $row = $this->db->resultSet();
        return  $row;
    }
    public function getNextTempPrescriptionId()
    {
        $this->db->query("SHOW TABLE STATUS LIKE 'tempprescription'");
        $row = $this->db->resultSet();
        return  $row;
    }
    public function getOneMedicine($medicineId){
        $this->db->query('SELECT 
        *
        FROM 
        medicine
        WHERE 
        medicineId  =:medicineId ');
        $this->db->bind(':medicineId', $medicineId);
        $row = $this->db->resultSet();
        return  $row;
}

    public function complaintSearchOrderId($data)
    {
        $this->db->query(
        "SELECT 
        orderId	
        FROM 
        prepared_order
        where customerId=:userId  AND 	orderId  LIKE '%$data->searchOrderId%'"
        );

        $this->db->bind(':searchOrderId', $data['searchOrderId']);
        $this->db->bind(':userId', $data['userId']);
        $row = $this->db->resultSet();
        return  $row;
    }
    //     $this->db->query('SELECT 
    //                             orderId
    //                             FROM 
    //                             nonprepared_order
    //                             WHERE 
    //                             DateTime  =:dateTime AND customerId  =:customerId AND streetAddress1  =:streetAddress1 AND streetAddress2  =:streetAddress2 AND city  =:city AND district  =:district AND postalCode  =:postalCode 
    //                         ');
    //     $this->db->bind(':dateTime', $data['dateTime']);
    //     $this->db->bind(':customerId', $data['customerId']);
    //     $this->db->bind(':streetAddress1', $data['streetAddress1']);
    //     $this->db->bind(':streetAddress2', $data['streetAddress2']);
    //     $this->db->bind(':city', $data['city']);
    //     $this->db->bind(':district', $data['district']);
    //     $this->db->bind(':postalCode', $data['postalCode']);






    // }
    // 'streetAddress1' => trim($json->streetAddress1),
    //         'streetAddress2' => trim($json->streetAddress2),
    //         'city' => trim($json->city),
    //         'district' => trim($json->streetAddress1),
    //         'postalCode' => trim($json->postalCode),
    //         'dateTime' => time(),
    //         'customerId' => $_SESSION['user_id']


    public function checkTempPrescriptionUserId($id)
    {
        $this->db = new Database;
        $this->db->query('SELECT * FROM tempprescription WHERE 	customerId= :id');
        //bind email

        $this->db->bind(':id', $id);

        $row2 = $this->db->single();
        //  echo $this->db->rowCount()
        //check email already taken
        if ($this->db->rowCount() > 0) {

            return false;
        } else {
            return true;
        }
    }
    public function loadOrders(){
        $this->db->query('SELECT orderId FROM prepared_order WHERE status="completed"' );

        $results = $this->db->resultSet();

        return $results;







    }
    public function getDeliveryPersons(){
        $this->db->query('SELECT * FROM deliveryperson' );

        $results = $this->db->resultSet();

        return $results;







    }
    public function assignDeliveryPerson($data){
        $this->db->query('INSERT INTO orders(OrderId,delivery_Username) VALUES (:orderid,:deliveryperson)');
//$this->db->query('UPDATE orders SET OrderId = :orderid, delivery_Username = :deliveryperson');
        
        $this->db->bind(':orderid', $data['orderid']);
        $this->db->bind(':deliveryperson', $data['deliveryperson']);
       
        
        if ($this->db->execute()) {
           return true;
        } else {
           return false;
        }







    }
//     $this->db->query('UPDATE customer SET LastName = :lastname, FirstName = :firstname, PhoneNum = :phoneNumber, NIC = :nic ,
//     streetAddress1 = :streetAddress1 , streetAddress2 = :streetAddress2 , city = :city , district = :district , postalCode = :postalCode WHERE customerId = :id');

// $this->db->bind(':firstname', $data['firstname']);
// $this->db->bind(':lastname', $data['lastname']);
// $this->db->bind(':nic', $data['nic']);
// $this->db->bind(':phoneNumber', $data['phoneNumber']);
// $this->db->bind(':id', $data['id']);
// $this->db->bind(':streetAddress1', $data['streetAddress1']);
// $this->db->bind(':streetAddress2', $data['streetAddress2']);
// $this->db->bind(':city', $data['city']);
// $this->db->bind(':district', $data['district']);
// $this->db->bind(':postalCode', $data['postalCode']);

// if ($this->db->execute()) {
//    return true;
// } else {
//    return false;
// }

    // $data = [
    //     'orderid' => $json->orderid,
    //     'deliveryperson' => $json->deliveryperson,
       
    // ];

    // header('Content-Type: application/json');
    // echo json_encode($this->orderModel->assignDeliveryPerson($data));




















}
