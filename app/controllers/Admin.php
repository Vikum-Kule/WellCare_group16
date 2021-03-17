<?php 
class Admin extends Controller {
	 public function __construct() {
	 	$this->postModel = $this->model('Admin_Operation');
	 }
	  public function home(){
        $this->view('Admin_Home');
    }

	 public function showdrugs(){
	 	$drugs =$this->postModel->drugs();

	 	$data = [
 			'drugs' => $drugs
	 	]; 
	 	$this->view('Admin_DrugStockPage', $data);
	 }
	 public function adddrugs(){
	 	$data = [
	 		'name'=>'',
	 		'brand'=>'',
	 		'description'=>'',
	 		'QTY'=>'',
	 		'price'=>'',
	 		'EXP'=>'',
	 		'MFD'=>'',
	 		'category'=>'',
	 		'dose'=>'',
	 		'temperature'=>''
	 	];
	 	if($_SERVER['REQUEST_METHOD']=='POST'){
	 		$_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
	 		$data = [
	 			'name'=> trim($_POST['name']),
	 			'brand'=> trim($_POST['brand']),
	 			'description'=> trim($_POST['description']),
	 			'QTY'=> trim($_POST['QTY']),
	 			'price'=> trim($_POST['price']),
	 			'EXP'=> trim($_POST['EXP']),
	 			'MFD'=> trim($_POST['MFD']),
	 			'category'=> trim($_POST['category']),
	 			'dose'=> trim($_POST['dose']),
	 			'temperature'=> trim($_POST['temperature'])


	 		];
	 		//$this->postModel->adddrugm($data);
	 		if ($this->postModel->adddrugm($data)) {
	 			header("Location:". URLROOT . "/admin/showdrugs");
	 		
	 		}
	 	}
	 	$this->view('Admin_AddDrugs', $data);
	 }


	 public function showsupplier(){
	 	$sups =$this->postModel->supplier();

	 	$data = [
 			'sups' => $sups
	 	];
	 	$this->view('Admin_SupplierDetails', $data);
	 }
	 public function addsupplier(){
	 	$data = [
	 		'supplyId'=>'',
	 		'companyName'=>'',
	 		'companyRegNo'=>'',
	 		'phoneNo'=>'',
	 		'companyAddress'=>''
	 		
	 	];
	 	if($_SERVER['REQUEST_METHOD']=='POST'){
	 		$_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
	 		$data = [
	 			'supplyId'=> trim($_POST['supplyId']),
	 			'companyName'=> trim($_POST['companyName']),
	 			'companyRegNo'=> trim($_POST['companyRegNo']),
	 			'phoneNo'=> trim($_POST['phoneNo']),
	 			'companyAddress'=> trim($_POST['companyAddress'])
	 			

	 		];
	 		$this->postModel->addsupplierm($data);
	 	}
	 	$this->view('Admin_AddSupplier', $data);
	 }
	 public function updatedrugs($medicineId){
	 	$drug=$this->postModel->finddrugsbyId($medicineId);

	 	$data= [
	 		'drug'=>$drug,
	 		'name'=>'',
	 		'brand'=>'',
	 		'description'=>'',
	 		'QTY'=>'',
	 		'price'=>'',
	 		'EXP'=>'',
	 		'MFD'=>'',
	 		'category'=>'',
	 		'dose'=>'',
	 		'temperature'=>''



	 	];
	 	if($_SERVER['REQUEST_METHOD']=='POST'){
	 		$_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
	 		$data = [
	 			'medicineId'=>$medicineId,
	 			'drug'=> $drug,
	 			'name'=> trim($_POST['name']),
	 			'brand'=> trim($_POST['brand']),
	 			'description'=> trim($_POST['description']),
	 			'QTY'=> trim($_POST['QTY']),
	 			'price'=> trim($_POST['price']),
	 			'EXP'=> trim($_POST['EXP']),
	 			'MFD'=> trim($_POST['MFD']),
	 			'category'=> trim($_POST['category']),
	 			'dose'=> trim($_POST['dose']),
	 			'temperature'=> trim($_POST['temperature'])


	 		];
	 		//$this->postModel->updatedrug($data);
	 		if ($this->postModel->updatedrug($data)) {
	 			header("Location:". URLROOT . "/admin/showdrugs/");
	 		
	 		}
	 }
	 $this->view('UpdateDrug',$data);
	 

}
	public function deletedrug($medicineId) {
		$drug = $this->postModel->finddrugsbyId($medicineId);

	 	$data= [
	 		'drug'=>$drug,
	 		'name'=>'',
	 		'brand'=>'',
	 		'description'=>'',
	 		'QTY'=>'',
	 		'price'=>'',
	 		'EXP'=>'',
	 		'MFD'=>'',
	 		'category'=>'',
	 		'dose'=>'',
	 		'temperature'=>''

	 	];
	 	if($_SERVER['REQUEST_METHOD']=='POST'){
	 		$_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
	 		if ($this->postModel->deletedrug($medicineId)) {
	 			header("Location:". URLROOT . "/admin/showdrugs");
	 		
	 		}

		}

	}

	 public function showpharmacist(){
	 	$phas =$this->postModel->pharmacist();

	 	$data = [
 			'phas' => $phas
	 	];
	 	$this->view('Admin_PharmacistDetails', $data);
	 }
	 public function addpharmacist(){
	 	$data = [
	 		'userName'=>'',
	 		'LastName'=>'',
	 		'FirstName'=>'',
	 		'DOB'=>'',
	 		'email'=>'',
	 		'phoneNumber'=>'',
	 		'password'=>'',
	 		'fromDate'=>'',
	 		'toDate'=>'',
	 		'licenseNo'=>'',
	 		'NIC'=>''
	 		
	 	];
	 	if($_SERVER['REQUEST_METHOD']=='POST'){
	 		$_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
	 		$data = [
	 			'userName'=> trim($_POST['userName']),
	 			'LastName'=> trim($_POST['LastName']),
	 			'FirstName'=> trim($_POST['FirstName']),
	 			'DOB'=> trim($_POST['DOB']),
	 			'email'=> trim($_POST['email']),
	 			'phoneNumber'=> trim($_POST['phoneNumber']),
	 			'password'=> trim($_POST['password']),
	 			'fromDate'=> trim($_POST['fromDate']),
	 			'toDate'=> trim($_POST['toDate']),
	 			'licenseNo'=> trim($_POST['licenseNo']),
	 			'NIC'=> trim($_POST['NIC'])
	 			

	 		];
	 		$this->postModel->addpharmacistm($data);
	 	}
	 	$this->view('Admin_pharmacistRegistration', $data);
	 }
	  public function showmanager(){
	 	$mans =$this->postModel->manager();

	 	$data = [
 			'mans' => $mans
	 	];
	 	$this->view('Admin_ManagerData', $data);
	 }
	 public function addmanager(){
	 	$data = [
	 		'userName'=>'',
	 		'LastName'=>'',
	 		'FirstName'=>'',
	 		'NIC'=>'',
	 		'DOB'=>'',
	 		'email'=>'',
	 		'phoneNumber'=>'',
	 		'password'=>'',
	 		'fromDate'=>'',
	 		'toDate'=>''
	 		
	 	];
	 	if($_SERVER['REQUEST_METHOD']=='POST'){
	 		$_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
	 		$data = [
	 			'userName'=> trim($_POST['userName']),
	 			'LastName'=> trim($_POST['LastName']),
	 			'FirstName'=> trim($_POST['FirstName']),
	 			'NIC'=> trim($_POST['NIC']),
	 			'DOB'=> trim($_POST['DOB']),
	 			'email'=> trim($_POST['email']),
	 			'phoneNumber'=> trim($_POST['phoneNumber']),
	 			'password'=> trim($_POST['password']),
	 			'fromDate'=> trim($_POST['fromDate']),
	 			'toDate'=> trim($_POST['toDate'])
	 			
	 			

	 		];
	 		$this->postModel->addmanagerm($data);
	 	}
	 	$this->view('Admin_Addmanager', $data);
	 }

	 //################################################################################################
	
	  public function showdeliveryperson(){
	 	$dils =$this->postModel->deliveryperson();

	 	$data = [
 			'dils' => $dils
	 	];
	 	$this->view('Admin_DeliveryData', $data);
	 }


	 //888
	 	public function delivery_login(){
			$data = [
				//'title' =>'Login Page',
				'userName'=>'',
				'password'=>'',
				'usernameError'=>'',
				'passwordError'=>''
			]; 

			if($_SERVER['REQUEST_METHOD']=='POST'){
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				$data = [
				'userName'=>trim($_POST['userName']),
				'password'=>trim($_POST['password']),
				'usernameError'=>'',
				'passwordError'=>''
			];

			if(empty($data['userName'])){
					$data['usernameError'] = 'Please enter the username.';
			}
			if(empty($data['password'])){
					$data['passwordError'] = 'Please enter the password.';
			}
			if(empty($data['usernameError']) && empty($data['passwordError'])){
				$loggedInUser = $this->userModel->delivery_login($data['userName'], $data['password']);
				if($loggedInUser) {
					$this->createDeliverySession($loggedInUser);
					
				}
				else{
					$data['passwordError'] = 'Password or username is incorrect. Please try again.';
					$this->view('Admin_DeliveryLogin', $data);
				}


			}

			}
			else{
				$data = [
				'title' =>'Login Page',
				'userName'=>'',
				'password'=>'',
				'usernameError'=>'',
				'passwordError'=>''
			];
			}

			$this->view('Admin_DeliveryLogin', $data);
		}

		public function createDeliverySession($user) {
	        $_SESSION['userName'] = $user->username;
	        $_SESSION['email'] = $user->email;
        	header('location:' . URLROOT . '/admin_Pages/myaccount');
    }


	 public function adddeliveryperson(){
	 	$data = [
	 		'userName'=>'',
	 		'LastName'=>'',
	 		'FirstName'=>'',
	 		'NIC'=>'',
	 		'DOB'=>'',
	 		'email'=>'',
	 		'phoneNumber'=>'',
	 		'password'=>'',
	 		'fromDate'=>'',
	 		'toDate'=>'',
	 		'usernameError'=>'',
			'emailError'=>'',
			'passwordError'=>''
	 		
	 		
	 	];
	 	if($_SERVER['REQUEST_METHOD']=='POST'){
	 		$_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
	 		$data = [
	 			'userName'=> trim($_POST['userName']),
	 			'LastName'=> trim($_POST['LastName']),
	 			'FirstName'=> trim($_POST['FirstName']),
	 			'NIC'=> trim($_POST['NIC']),
	 			'DOB'=> trim($_POST['DOB']),
	 			'email'=> trim($_POST['email']),
	 			'phoneNumber'=> trim($_POST['phoneNumber']),
	 			'password'=> trim($_POST['password']),
	 			'fromDate'=> trim($_POST['fromDate']),
	 			'toDate'=> trim($_POST['toDate']),
	 			'usernameError'=>'',
				'emailError'=>'',
				'passwordError'=>''
	 			

	 		];


				$nameValidation = "/^[a-zA-Z0-9]*$/";
				$passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";
				

				if(empty($data['userName'])){
					$data['usernameError'] = 'Please enter username.';
				}
				elseif(!preg_match($nameValidation, $data['userName'])){
					$daata['usernameError'] = 'Name can only contain letters and numbers.';
				}

				if(empty($data['email'])){
					$data['emailError'] = 'please enter email.';
				}
				elseif(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
					$data['emailError'] = 'Please enter the correct format.';
				}
				else{
					if($this->userModel->findUserByEmail($data['email'])){
						$data['emailError'] = 'Email is already taken.';
					}
				}

				if(empty($data['password'])){
					$data['passwordError'] = 'Please enter the password.';
				}
				elseif(strlen($data['password'])<8){
					$data['passwordError'] = 'Password must be at least 8 characters';
				}
				elseif(preg_match($passwordValidation, $data['password'])){
					$data['passwordError'] = 'Password must have at least one numeric value';
				}
				
				if(empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError'])){
					$data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);

					if($this->userModel->adddeliverypersonm($data)){
						header('location: ' . URLROOT . '/admin/showdeliveryperson');
					}
					else{
						die('Something went wrong'); 
					}
				}



	 		
	 	}
	 	$this->view('Admin_AddDeliveryboy', $data);
	 }
	public function logout() {
        unset($_SESSION['userName']);
        unset($_SESSION['email']);
        header('location:' . URLROOT . '/admin/delivery_login');
    }


//**************************************************************************************//
	public function deletesupply($supplyId) {
		$sups = $this->postModel->findsupplysbyId($supplyId);

	 	$data= [
	 		'sups'=>$sups,
	 		'supplyId'=>'',
	 		'companyName'=>'',
	 		'companyRegNo'=>'',
	 		'phoneNo'=>'',
	 		'companyAddress'=>''

	 	];
	 	if($_SERVER['REQUEST_METHOD']=='POST'){
	 		$_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
	 		if ($this->postModel->deletesupply($supplyId)) {
	 			header("Location:". URLROOT . "/admin/showsupplier");
	 		
	 		}

     }
}
//**********************************************************************************************//

	public function deletemanager($userName) {
		$mans = $this->postModel->findmanagerbyId($userName);

	 	$data= [
	 		'mans'=>$mans,
	 		'userName'=>'',
	 		'LastName'=>'',
	 		'FirstName'=>'',
	 		'NIC'=>'',
	 		'DOB'=>'',
	 		'email'=>'',
	 		'phoneNumber'=>'',
	 		'password'=>'',
	 		'fromDate'=>'',
	 		'toDate'=>''
	 		

	 	];
	 	if($_SERVER['REQUEST_METHOD']=='POST'){
	 		$_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
	 		if ($this->postModel->deletemanager($userName)) {
	 			header("Location:". URLROOT . "/admin/showmanager");
	 		
	 		}

     }
}

//*****************************************************************************************//


	public function deletedeliveryperson($userName) {
		$dils = $this->postModel->finddeliverypersonbyId($userName);

	 	$data= [
	 		'dils'=>$dils,
	 		'userName'=>'',
	 		'LastName'=>'',
	 		'FirstName'=>'',
	 		'NIC'=>'',
	 		'DOB'=>'',
	 		'email'=>'',
	 		'phoneNumber'=>'',
	 		'password'=>'',
	 		'fromDate'=>'',
	 		'toDate'=>''
	 	];
	 	if($_SERVER['REQUEST_METHOD']=='POST'){
	 		$_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
	 		if ($this->postModel->deletedeliveryperson($userName)) {
	 			header("Location:". URLROOT . "/admin/showdeliveryperson");
	 		
	 		}

     }
}
//*********************************************************************************************//

	 public function updatemanager($userName){
	 	$mans=$this->postModel->findmanagerbyId($userName);

	 	$data= [
	 		'mans'=>$mans,
	 		'userName'=>'',
	 		'LastName'=>'',
	 		'FirstName'=>'',
	 		'NIC'=>'',
	 		'DOB'=>'',
	 		'email'=>'',
	 		'phoneNumber'=>'',
	 		'password'=>'',
	 		'fromDate'=>'',
	 		'toDate'=>''


	 	];
	 	if($_SERVER['REQUEST_METHOD']=='POST'){
	 		$_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
	 		$data = [
	 			'userName'=>$userName,
	 			'mans'=> $mans,
	 			'userName'=> trim($_POST['userName']),
	 			'LastName'=> trim($_POST['LastName']),
	 			'FirstName'=> trim($_POST['FirstName']),
	 			'NIC'=> trim($_POST['NIC']),
	 			'DOB'=> trim($_POST['DOB']),
	 			'email'=> trim($_POST['email']),
	 			'phoneNumber'=> trim($_POST['phoneNumber']),
	 			'password'=> trim($_POST['password']),
	 			'fromDate'=> trim($_POST['fromDate']),
	 			'toDate'=> trim($_POST['toDate'])
	 			
	 		];
	 		//$this->postModel->updatedrug($data);
	 		if ($this->postModel->updatemanager($data)) {
	 			header("Location:". URLROOT . "/admin/showmanager/");
	 		
	 		}
	 }
	 $this->view('Admin_UpdateManager',$data);
	 


}

//**************************************************************************************//

 public function updatedeliveryperson($userName){
	 	$dils=$this->postModel->finddeliverypersonbyId($userName);

	 	$data= [
	 		'dils'=>$dils,
	 		'userName'=>'',
	 		'LastName'=>'',
	 		'FirstName'=>'',
	 		'NIC'=>'',
	 		'DOB'=>'',
	 		'email'=>'',
	 		'phoneNumber'=>'',
	 		'password'=>'',
	 		'fromDate'=>'',
	 		'toDate'=>''


	 	];
	 	if($_SERVER['REQUEST_METHOD']=='POST'){
	 		$_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
	 		$data = [
	 			'userName'=>$userName,
	 			'dils'=> $dils,
	 			'userName'=> trim($_POST['userName']),
	 			'LastName'=> trim($_POST['LastName']),
	 			'FirstName'=> trim($_POST['FirstName']),
	 			'NIC'=> trim($_POST['NIC']),
	 			'DOB'=> trim($_POST['DOB']),
	 			'email'=> trim($_POST['email']),
	 			'phoneNumber'=> trim($_POST['phoneNumber']),
	 			'password'=> trim($_POST['password']),
	 			'fromDate'=> trim($_POST['fromDate']),
	 			'toDate'=> trim($_POST['toDate'])
	 			
	 		];
	 		//$this->postModel->updatedrug($data);
	 		if ($this->postModel->updatedeliveryperson($data)) {
	 			header("Location:". URLROOT . "/admin/showdeliveryperson/");
	 		
	 		}
	 }
	 $this->view('Admin_UpdateDelivery',$data);
	 


}

//**********************************************************************************************//

public function updatepharmacist($userName){
	 	$phas=$this->postModel->findpharmacistbyId($userName);

	 	$data= [
	 		'phas'=>$phas,
	 		'userName'=>'',
	 		'LastName'=>'',
	 		'FirstName'=>'',
	 		'DOB'=>'',
	 		'email'=>'',
	 		'phoneNumber'=>'',
	 		'password'=>'',
	 		'fromDate'=>'',
	 		'toDate'=>'',
	 		'licenseNo'=>'',
	 		'NIC'=>''
	 		

	 	];
	 	if($_SERVER['REQUEST_METHOD']=='POST'){
	 		$_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
	 		$data = [
	 			'userName'=>$userName,
	 			'phas'=> $phas,
	 			'userName'=> trim($_POST['userName']),
	 			'LastName'=> trim($_POST['LastName']),
	 			'FirstName'=> trim($_POST['FirstName']),
	 			'DOB'=> trim($_POST['DOB']),
	 			'email'=> trim($_POST['email']),
	 			'phoneNumber'=> trim($_POST['phoneNumber']),
	 			'password'=> trim($_POST['password']),
	 			'fromDate'=> trim($_POST['fromDate']),
	 			'toDate'=> trim($_POST['toDate']),
	 			'licenseNo'=> trim($_POST['licenseNo']),
	 			'NIC'=> trim($_POST['NIC'])
	 			
	 		];
	 		//$this->postModel->updatedrug($data);
	 		if ($this->postModel->updatepharmacist($data)) {
	 			header("Location:". URLROOT . "/admin/showpharmacist/");
	 		
	 		}
	 }
	 $this->view('Admin_UpdatePharmacists',$data);
	 


}
//****************************************************************************************************//


public function updatesupply($supplyId){
	 	$sups = $this->postModel->findsupplysbyId($supplyId);

	 	$data= [
	 		'sups'=>$sups,
	 		'supplyId'=>'',
	 		'companyName'=>'',
	 		'companyRegNo'=>'',
	 		'phoneNo'=>'',
	 		'companyAddress'=>''

	 	];
	 	if($_SERVER['REQUEST_METHOD']=='POST'){
	 		$_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
	 		$data = [
	 			'userName'=>$userName,
	 			'sups'=> $sups,
	 			'supplyId'=> trim($_POST['supplyId']),
	 			'companyName'=> trim($_POST['companyName']),
	 			'companyRegNo'=> trim($_POST['companyRegNo']),
	 			'phoneNo'=> trim($_POST['phoneNo']),
	 			'companyAddress'=> trim($_POST['companyAddress'])
	 			
	 		];
	 		//$this->postModel->updatedrug($data);
	 		if ($this->postModel->updatesupply($data)) {
	 			header("Location:". URLROOT . "/admin/showsupplier/");
	 		
	 		}
	 }
	 $this->view('Admin_UpdateSupplier',$data);
	 


}

}