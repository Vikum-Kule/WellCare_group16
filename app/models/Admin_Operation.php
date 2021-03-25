<?php  
	class Admin_operation {
		private $db; 

		public function __construct() {
			$this->db = new Database;
		}
		public function drugs(){
			$this->db->query('SELECT * FROM medicine');
			$results = $this->db->resultSet();
			return $results;
		}
		public function customer(){
			$this->db->query('SELECT * FROM customer');
			$results = $this->db->resultSet();
			return $results;
		}
		public function users(){
			$this->db->query('SELECT * FROM users');
			$results = $this->db->resultSet();
			return $results;
		}

		public function setStatus($userName,$userStatus){
			$this->db->query('INSERT INTO users (userName,Status) VALUES (:userName,:Status)');
			$this->db->bind(':userName',$userName);
			$this->db->bind(':Status',$userStatus);
			if ($this->db->execute()){
				return true;
			}
			else{
				return false;
			}

		}

		public function adddrugm($data) {
			 $this->db->query('INSERT INTO medicine (medicineId, name, brand, description, QTY, price, EXP, MFD, doseStatus, dose, temperature, subCategory, imageLocation) VALUES (:medicineId, :name, :brand, :description, :QTY, :price, :EXP, :MFD, :doseStatus, :dose, :temperature, :subCategory, :imageLocation)');

			$this->db->bind(':medicineId', $data['medicineId']);
			$this->db->bind(':name', $data['name']);
			$this->db->bind(':brand', $data['brand']);
			$this->db->bind(':description', $data['description']);
			$this->db->bind(':QTY', $data['QTY']);
			$this->db->bind(':price', $data['price']);
			$this->db->bind(':EXP', $data['EXP']);
			$this->db->bind(':MFD', $data['MFD']);
			$this->db->bind(':doseStatus', $data['doseStatus']);
			$this->db->bind(':dose', $data['dose']);
			$this->db->bind(':temperature', $data['temperature']);
			$this->db->bind(':subCategory', $data['subCategory']);
			$this->db->bind(':imageLocation', $data['imageLocation']);
			
			if ($this->db->execute()){
				return true;
			}
			else{
				return false;
			}
		}


		public function supplier(){
			$this->db->query('SELECT * FROM supplier');
			$results = $this->db->resultSet();
			return $results;
		}
		public function addsupplierm($data) {
			 $this->db->query('INSERT INTO supplier (supplyId, companyName, companyRegNo, phoneNo, companyAddress) VALUES (:supplyId, :companyName, :companyRegNo, :phoneNo, :companyAddress)');

			$this->db->bind(':supplyId', $data['supplyId']);
			$this->db->bind(':companyName', $data['companyName']);
			$this->db->bind(':companyRegNo', $data['companyRegNo']);
			$this->db->bind(':phoneNo', $data['phoneNo']);
			$this->db->bind(':companyAddress', $data['companyAddress']);
			
			if ($this->db->execute()){
				return true;
			}
			else{
				return false;
			}
		}
		public function finddrugsbyId($medicineId){
			$this->db->query('SELECT * FROM medicine WHERE medicineId = :medicineId');
			$this->db->bind(':medicineId',$medicineId);
			$row = $this->db->resultSet();
			return $row;
		}
		public function updatedrug($data){
			$this->db->query('UPDATE medicine SET medicineId = :medicineId, name = :name, brand = :brand, description= :description, QTY= :QTY, price= :price, EXP= :EXP, MFD= :MFD, doseStatus= :doseStatus, dose= :dose, temperature= :temperature, subCategory= :subCategory, imageLocation= :imageLocation WHERE medicineId= :medicineId');

			$this->db->bind(':medicineId', $data['medicineId']);
			$this->db->bind(':name', $data['name']);
			$this->db->bind(':brand', $data['brand']);
			$this->db->bind(':description', $data['description']);
			$this->db->bind(':QTY', $data['QTY']);
			$this->db->bind(':price', $data['price']);
			$this->db->bind(':EXP', $data['EXP']);
			$this->db->bind(':MFD', $data['MFD']);
			$this->db->bind(':doseStatus', $data['doseStatus']);
			$this->db->bind(':dose', $data['dose']);
			$this->db->bind(':temperature', $data['temperature']);
			$this->db->bind(':subCategory', $data['subCategory']);
			$this->db->bind(':imageLocation', $data['imageLocation']);
			

			if ($this->db->execute()){
				return true;
			}
			else{
				return false;
			} 

		}
		public function deletedrug($medicineId) {
			$this->db->query('DELETE FROM medicine WHERE medicineId = :medicineId');

			$this->db->bind(':medicineId',$medicineId);
			if ($this->db->execute()){
				return true;
			}
			else{
				return false;
			} 

		}

		public function pharmacist(){
			$this->db->query('SELECT * FROM  pharmacist');
			$results = $this->db->resultSet();
			return $results;
		}
		public function addpharmacistm($data) {
			 $this->db->query('INSERT INTO pharmacist (userName, LastName, FirstName, DOB, email, phoneNumber, password, fromDate, toDate, licenseNo, NIC ) VALUES (:userName, :LastName, :FirstName, :DOB, :email, :phoneNumber, :password, :fromDate, :toDate, :licenseNo, :NIC )');

			$this->db->bind(':userName', $data['userName']);
			$this->db->bind(':LastName', $data['LastName']);
			$this->db->bind(':FirstName', $data['FirstName']);
			$this->db->bind(':DOB', $data['DOB']);
			$this->db->bind(':email', $data['email']);
			$this->db->bind(':phoneNumber', $data['phoneNumber']);
			$this->db->bind(':password', $data['password']);
			$this->db->bind(':fromDate', $data['fromDate']);
			$this->db->bind(':toDate', $data['toDate']);
			$this->db->bind(':licenseNo', $data['licenseNo']);
			$this->db->bind(':NIC', $data['NIC']);
			
			
			
			if ($this->db->execute()){
				return true;
			}
			else{
				return false;
			}
		}
		public function manager(){
			$this->db->query('SELECT * FROM manager');
			$results = $this->db->resultSet();
			return $results;
		}
		public function addmanagerm($data) {
			 $this->db->query('INSERT INTO manager (userName, LastName, FirstName, NIC, DOB, email, phoneNumber, password, fromDate, toDate) VALUES (:userName, :LastName, :FirstName, :NIC, :DOB, :email, :phoneNumber, :password, :fromDate, :toDate)');

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
			
			
			
			if ($this->db->execute()){
				return true;
			}
			else{
				return false;
			}
		}

//#####################################################################################################

/*
 public function registerm($data){
            $this->db->query('INSERT INTO admin (userName, LastName, FirstName, NIC,DOB, email, phoneNumber, password, fromDate, toDate) VALUES(:userName, :LastName, :FirstName, :NIC, :DOB, :email, :phoneNumber, :password, :fromDate, :toDate)');

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


        public function login($userName, $password){
            $this->db->query('SELECT * FROM admin WHERE userName = :userName');

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
            $this->db->query('SELECT * FROM admin WHERE email = :email');

            $this->db->bind(':email',$email);

            if($this->db->rowCount() > 0){
                return true;
            }
            else{
                return false;
            }
        }
*/



public function deliveryperson(){
			$this->db->query('SELECT * FROM deliveryperson');
			$results = $this->db->resultSet();
			return $results;
		}
		public function adddeliverypersonm($data) {
			 $this->db->query('INSERT INTO deliveryperson (userName, LastName, FirstName, NIC, DOB, email, phoneNumber, password, fromDate, toDate) VALUES (:userName, :LastName, :FirstName, :NIC, :DOB, :email, :phoneNumber, :password, :fromDate, :toDate)');

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
			
		
			if ($this->db->execute()){
				return true;
			}
			else{
				return false;
			}
		}
		//####################################################################################



       

	
//########################################################################################################

public function findsupplysbyId($supplyId){
			$this->db->query('SELECT * FROM supplier WHERE supplyId = :supplyId');
			$this->db->bind(':supplyId',$supplyId);
			$row = $this->db->single();
			return $row;
		}

public function deletesupply($supplyId) {
			$this->db->query('DELETE FROM supplier WHERE supplyId = :supplyId');

			$this->db->bind(':supplyId',$supplyId);
			if ($this->db->execute()){
				return true;
			}
			else{
				return false;
			} 

		}

public function findmanagerbyId($userName){
			$this->db->query('SELECT * FROM manager WHERE userName = :userName');
			$this->db->bind(':userName',$userName);
			$row = $this->db->single();
			return $row;
		}

public function deletemanager($userName) {
			$this->db->query('DELETE FROM manager WHERE userName = :userName');

			$this->db->bind(':userName',$userName);
			if ($this->db->execute()){
				return true;
			}
			else{
				return false;
			} 

		}

//*************************************************************************************//


public function findpharmacistbyId($userName){
			$this->db->query('SELECT * FROM pharmacist WHERE userName = :userName');
			$this->db->bind(':userName',$userName);
			$row = $this->db->single();
			return $row;
		}

public function deletepharmacist($userName) {
			$this->db->query('DELETE FROM pharmacist WHERE userName = :userName');

			$this->db->bind(':userName',$userName);
			if ($this->db->execute()){
				return true;
			}
			else{
				return false;
			}  

		}

//***************************************************************************************//

public function finddeliverypersonbyId($userName){
			$this->db->query('SELECT * FROM deliveryperson WHERE userName = :userName');
			$this->db->bind(':userName',$userName);
			$row = $this->db->single();
			return $row;
		}

public function deletedeliveryperson($userName) {
			$this->db->query('DELETE FROM deliveryperson WHERE userName = :userName');

			$this->db->bind(':userName',$userName);
			if ($this->db->execute()){
				return true;
			}
			else{
				return false;
			} 

		}
		//*****************************************************************************************//
public function updatemanager($data){
	     $this->db->query('UPDATE manager SET userName = :userName, LastName = :LastName, FirstName = :FirstName, NIC = :NIC, DOB = :DOB, email = :email, phoneNumber = :phoneNumber, password = :password, fromDate = :fromDate, toDate = :toDate WHERE userName= :userName');

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
			
			if ($this->db->execute()){
				return true;
			}
			else{
				return false;
			} 

		}

		public function updatedeliveryperson($data){
	     $this->db->query('UPDATE deliveryperson SET userName = :userName, LastName = :LastName, FirstName = :FirstName, NIC = :NIC, DOB = :DOB, email = :email, phoneNumber = :phoneNumber, password = :password, fromDate = :fromDate, toDate = :toDate WHERE userName= :userName');

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
			
			if ($this->db->execute()){
				return true;
			}
			else{
				return false;
			} 

		}

public function updatepharmacist($data){
	     $this->db->query('UPDATE pharmacist SET userName = :userName, LastName = :LastName, FirstName = :FirstName, DOB = :DOB, email = :email, phoneNumber = :phoneNumber, password = :password, fromDate = :fromDate, toDate = :toDate, licenseNo = :licenseNo, NIC = :NIC WHERE userName= :userName');

			$this->db->bind(':userName', $data['userName']);
			$this->db->bind(':LastName', $data['LastName']);
			$this->db->bind(':FirstName', $data['FirstName']);
			$this->db->bind(':DOB', $data['DOB']);
			$this->db->bind(':email', $data['email']);
			$this->db->bind(':phoneNumber', $data['phoneNumber']);
			$this->db->bind(':password', $data['password']);
			$this->db->bind(':fromDate', $data['fromDate']);
			$this->db->bind(':toDate', $data['toDate']);
			$this->db->bind(':licenseNo', $data['licenseNo']);
			$this->db->bind(':NIC', $data['NIC']);
		
			
			if ($this->db->execute()){
				return true;
			}
			else{
				return false;
			} 

		}

		//**************************************************************************************//

	

		//********************************************//

		public function updatesupply($data){
	     $this->db->query('UPDATE supplier SET supplyId = :supplyId, companyName = :companyName, companyRegNo = :companyRegNo, phoneNo = :phoneNo, companyAddress = :companyAddress WHERE supplyId= :supplyId');
			$this->db->bind(':supplyId', $data['supplyId']);
			$this->db->bind(':companyName', $data['companyName']);
			$this->db->bind(':companyRegNo', $data['companyRegNo']);
			$this->db->bind(':phoneNo', $data['phoneNo']);
			$this->db->bind(':companyAddress', $data['companyAddress']);
			
			if ($this->db->execute()){
				return true;
			}
			else{
				return false;
			} 

		}


	}
