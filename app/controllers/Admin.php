<?php 
class Admin extends Controller {
	 public function __construct() {
	 	$this->postModel = $this->model('Admin_Operation');
	 }
	

	 public function showdrugs(){
	 	$drugs =$this->postModel->drugs();

	 	$data = [
 			'drugs' => $drugs
	 	]; 
	 	$this->view('Admin_DrugStockPage', $data);
	 }
	  public function dashbordp(){
	  	$countp =$this->postModel->dashbordp();
	  	$countc =$this->postModel->dashbordc();
	  	$countm =$this->postModel->dashbordm();
	  	$countd =$this->postModel->dashbordd();
	  	$counts =$this->postModel->dashbords();
	  	$countu =$this->postModel->dashbordu();
	  	$data=[
	  		$countp->count,
	  		$countc->count,
	  		$countm->count,
	  		$countd->count,
	  		$counts->count,
	  		$countu->count
	  	];
	  	//print_r($data);
	 	
	 	$this->view('Admin_Dashbord',$data);
	 }

	  public function customer(){
	 	$cus =$this->postModel->customer();

	 	$data = [
 			'cus' => $cus
	 	]; 
	 	$this->view('Admin_CustomerData', $data);
	 }

  public function users(){
	 	$uses =$this->postModel->users();

	 	$data = [
 			'uses' => $uses
	 	]; 
	 	$this->view('Admin_Users', $data);
	 }

	 public function adddrugs(){
	 	$data = [
	 		'medicineId'=>'',
	 		'name'=>'',
	 		'brand'=>'',
	 		'description'=>'',
	 		'QTY'=>'',
	 		'price'=>'',
	 		'EXP'=>'',
	 		'MFD'=>'',
	 		'doseStatus'=>'',
	 		'dose'=>'',
	 		'temperature'=>'',
	 		'subCategory'=>'',
	 		'imageLocation'=>''
	 		
	 	];
	 	if($_SERVER['REQUEST_METHOD']=='POST'){
	 		$_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
	 		$data = [
	 			'medicineId'=> trim($_POST['medicineId']),
	 			'name'=> trim($_POST['name']),
	 			'brand'=> trim($_POST['brand']),
	 			'description'=> trim($_POST['description']),
	 			'QTY'=> trim($_POST['QTY']),
	 			'price'=> trim($_POST['price']),
	 			'EXP'=> trim($_POST['EXP']),
	 			'MFD'=> trim($_POST['MFD']),
	 			'doseStatus'=> trim($_POST['doseStatus']),
	 			'dose'=> trim($_POST['dose']),
	 			'temperature'=> trim($_POST['temperature']),
	 			'subCategory'=> trim($_POST['subCategory']),
	 			'imageLocation'=> trim($_POST['imageLocation'])
	 			


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
	 	//echo $medicineId;
	 	$drug=$this->postModel->finddrugsbyId($medicineId);
	 	
	 	$data= [
	 		'drug'=>$drug
	 		// 'medicineId'=>'',
	 		// 'name'=>'',
	 		// 'brand'=>'',
	 		// 'description'=>'',
	 		// 'QTY'=>'',
	 		// 'price'=>'',
	 		// 'EXP'=>'',
	 		// 'MFD'=>'',
	 		// 'doseStatus'=>'',
	 		// 'dose'=>'',
	 		// 'temperature'=>'',
	 		// 'subCategory'=>'',
	 		// 'imageLocation'=>''



	 	];
	 	//print_r($data);
	 	if($_SERVER['REQUEST_METHOD']=='POST'){
	 		$_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
	 		$data = [
	 			'medicineId'=>$medicineId,
	 			'drug'=> $drug,
	 			'medicineId'=> trim($_POST['medicineId']),
	 			'name'=> trim($_POST['name']),
	 			'brand'=> trim($_POST['brand']),
	 			'description'=> trim($_POST['description']),
	 			'QTY'=> trim($_POST['QTY']),
	 			'price'=> trim($_POST['price']),
	 			'EXP'=> trim($_POST['EXP']),
	 			'MFD'=> trim($_POST['MFD']),
	 			'doseStatus'=> trim($_POST['doseStatus']),
	 			'dose'=> trim($_POST['dose']),
	 			'temperature'=> trim($_POST['temperature']),
	 			'subCategory'=> trim($_POST['subCategory']),
	 			'imageLocation'=> trim($_POST['imageLocation'])
	 			


	 		];
	 		//$this->postModel->updatedrug($data);
	 		// if ($this->postModel->updatedrug($data)) {
	 		// 	header("Location:". URLROOT . "/admin/showdrugs/");
	 		
	 		// }
	 }
	 $this->view('Admin_UpdateDrug',$data);
	 

}
	public function deletedrug($medicineId) {
		$drug = $this->postModel->finddrugsbyId($medicineId);

	 	$data= [
	 		'drug'=>$drug,
	 		'medicineId'=>'',
	 		'name'=>'',
	 		'brand'=>'',
	 		'description'=>'',
	 		'QTY'=>'',
	 		'price'=>'',
	 		'EXP'=>'',
	 		'MFD'=>'',
	 		'doseStatus'=>'',
	 		'dose'=>'',
	 		'temperature'=>'',
	 		'subCategory'=>'',
	 		'imageLocation'=>''

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
	 		'NIC'=>'',
	 		'userNameError'=>'',
            'emailError'=>'',
            'phoneNumberError'=>'',
            'passwordError'=>'',
            'NICError'=>''

	 		
	 		
	 	];
	 	if($_SERVER['REQUEST_METHOD']=='POST'){
	 		$_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
	 		$userName = trim($_POST['userName']);
	 		$userStatus = "pharmacist";
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
	 			'NIC'=> trim($_POST['NIC']),
	 			'userNameError'=>'',
	            'emailError'=>'',
	            'phoneNumberError'=>'',
	            'passwordError'=>'',
	            'NICError'=>''
	 			
	 			
	 			

	 		];
	 		$nameValidation = "/^[a-zA-Z0-9]*$/";

            $postalCodeVAlidation="/^[0-9]{5}$/";
            $phoneNumberVAlidation="/^[0-9]{10}$/";
            
            $onlyLetters = "/^[a-zA-Z]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

                if(empty($data['userName'])){
                $data['userNameError']='please enter username.';

            }elseif(!preg_match($nameValidation,$data['userName'])){
                $data['userNameError']='User name can only contain letters and numbers.';
            }else{
                if($this->postModel->findUserByUsername($data['userName'])){
                    $data['userNameError']='User name already taken.';

                }
            }

           
            if(empty($data['NIC'])){
                $data['NICError']='please enter NIC.';

            }

            //validate email
            if(empty($data['email'])){
                $data['emailError']='please enter email.';

            }elseif(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
                $data['emailError']='please enter the correct format.';

            }else{
                if($this->postModel->findUserByEmailPha($data['email'])){
                    $data['emailError']='Email already taken.';

                }
            }

            if(empty($data['phoneNumber'])){
                $data['phoneNumberError']='please enter Phone number.';

            }elseif(!preg_match( $phoneNumberVAlidation,$data['phoneNumber'])){
                $data['phoneNumberError']='Not a valid phoneNumber';
            }

             if(empty($data['password'])){
            $data['passwordError']='Please enter password.';

            }elseif(strlen($data['password'])<6){
                $data['passwordError']='Password must be at least 8 characters.';

            } elseif (preg_match($passwordValidation, $data['password'])) {
              $data['passwordError'] = 'Password must have at least one numeric value.';
            }

             if(empty($data['usernameError']) && empty($data['passwordError'])&& empty($data['emailError']) ){

              $data['password']=password_hash($data['password'],PASSWORD_DEFAULT);

	 		


	 		$this->postModel->setStatus($userName,$userStatus);
	 		$this->postModel->addpharmacistm($data);
	 	}
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
	 		'toDate'=>'',
	 		'userNameError'=>'',
	 		'NICError'=>'',
            'emailError'=>'',
            'phoneNumberError'=>'',
            'passwordError'=>''
          	];
	 	if($_SERVER['REQUEST_METHOD']=='POST'){
	 		$_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
	 		$userName = trim($_POST['userName']);
	 		$userStatus = "manager";
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
	 			'userNameError'=>'',
			 	'NICError'=>'',
		        'emailError'=>'',
		        'phoneNumberError'=>'',
		        'passwordError'=>''
	
	 		];
	 		$nameValidation = "/^[a-zA-Z0-9]*$/";

            $postalCodeVAlidation="/^[0-9]{5}$/";
            $phoneNumberVAlidation="/^[0-9]{10}$/";
            
            $onlyLetters = "/^[a-zA-Z]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

            if(empty($data['userName'])){
                $data['userNameError']='please enter username.';

            }elseif(!preg_match($nameValidation,$data['userName'])){
                $data['userNameError']='User name can only contain letters and numbers.';
            }else{
                if($this->postModel->findUserByUsername($data['userName'])){
                    $data['userNameError']='User name already taken.';

                }
            }

           




            if(empty($data['NIC'])){
                $data['NICError']='please enter NIC.';

            }

            //validate email
            if(empty($data['email'])){
                $data['emailError']='please enter email.';

            }elseif(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
                $data['emailError']='please enter the correct format.';

            }else{
                if($this->postModel->findUserByEmail($data['email'])){
                    $data['emailError']='Email already taken.';

                }
            }

            if(empty($data['phoneNumber'])){
                $data['phoneNumberError']='please enter Phone number.';

            }elseif(!preg_match( $phoneNumberVAlidation,$data['phoneNumber'])){
                $data['phoneNumberError']='Not a valid phoneNumber';
            }

             if(empty($data['password'])){
            $data['passwordError']='Please enter password.';

            }elseif(strlen($data['password'])<6){
                $data['passwordError']='Password must be at least 8 characters.';

            } elseif (preg_match($passwordValidation, $data['password'])) {
              $data['passwordError'] = 'Password must have at least one numeric value.';
            }

             if(empty($data['usernameError']) && empty($data['passwordError'])&& empty($data['emailError']) ){

              $data['password']=password_hash($data['password'],PASSWORD_DEFAULT);

	 		
	 		$this->postModel->setStatus($userName,$userStatus);
	 		$this->postModel->addmanagerm($data);
	 	}
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
	 		'userNameError'=>'',
	 		'NICError'=>'',
            'emailError'=>'',
            'phoneNumberError'=>'',
            'passwordError'=>''
	 		
	 		
	 	];
	 	if($_SERVER['REQUEST_METHOD']=='POST'){
	 		$_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
	 		$userName = trim($_POST['userName']);
	 		$userStatus = "deliveryperson";
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
	 			'userNameError'=>'',
		 		'NICError'=>'',
	            'emailError'=>'',
	            'phoneNumberError'=>'',
	            'passwordError'=>''
		 			

	 		];

	 		$nameValidation = "/^[a-zA-Z0-9]*$/";

            $postalCodeVAlidation="/^[0-9]{5}$/";
            $phoneNumberVAlidation="/^[0-9]{10}$/";
            
            $onlyLetters = "/^[a-zA-Z]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";


            if(empty($data['userName'])){
                $data['userNameError']='please enter username.';

            }elseif(!preg_match($nameValidation,$data['userName'])){
                $data['userNameError']='User name can only contain letters and numbers.';
            }else{
                if($this->postModel->findUserByUsername($data['userName'])){
                    $data['userNameError']='User name already taken.';

                }
            }

           




            if(empty($data['NIC'])){
                $data['NICError']='please enter NIC.';

            }

            //validate email
            if(empty($data['email'])){
                $data['emailError']='please enter email.';

            }elseif(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
                $data['emailError']='please enter the correct format.';

            }else{
                if($this->postModel->findUserByEmaildel($data['email'])){
                    $data['emailError']='Email already taken.';

                }
            }

            if(empty($data['phoneNumber'])){
                $data['phoneNumberError']='please enter Phone number.';

            }elseif(!preg_match( $phoneNumberVAlidation,$data['phoneNumber'])){
                $data['phoneNumberError']='Not a valid phoneNumber';
            }

             if(empty($data['password'])){
            $data['passwordError']='Please enter password.';

            }elseif(strlen($data['password'])<6){
                $data['passwordError']='Password must be at least 8 characters.';

            } elseif (preg_match($passwordValidation, $data['password'])) {
              $data['passwordError'] = 'Password must have at least one numeric value.';
            }

             if(empty($data['usernameError']) && empty($data['passwordError'])&& empty($data['emailError']) ){

              $data['password']=password_hash($data['password'],PASSWORD_DEFAULT);


				$this->postModel->setStatus($userName,$userStatus);
				$this->postModel->adddeliverypersonm($data);
			}
	 		
	 	}
	 	$this->view('Admin_AddDeliveryboy', $data);
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
//**********************************************************************************************//



	public function deletepharmacist($userName) {
		$dils = $this->postModel->findpharmacistbyId($userName);

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
	 		if ($this->postModel->deletepharmacist($userName)) {
	 			header("Location:". URLROOT . "/admin/showpharmacist");
	 		
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
	 			'NIC'=> trim($_POST['NIC']),
	 			
	 			
	 			
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
	 			'supplyId'=>$supplyId,
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