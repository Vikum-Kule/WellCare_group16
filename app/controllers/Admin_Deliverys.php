<?php 
	class Admin_Deliverys extends Controller{
		public function __construct(){
			$this->userModel = $this->model('Admin_Delivery');
		}

		public function login1(){
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
				$loggedInUser = $this->userModel->login($data['userName'], $data['password']);
				if($loggedInUser) {
					$this->createUserSession($loggedInUser);
					
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

		public function createUserSession($user) {
	        $_SESSION['userName'] = $user->username;
	        $_SESSION['email'] = $user->email;
        	header('location:' . URLROOT . '/Admin_pages/Admin_DeliveryBoyAccount');
    }


		public function register1(){
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
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				$data = [
				'userName'=>trim($_POST['userName']),
				'LastName'=>trim($_POST['LastName']),
				'FirstName'=>trim($_POST['FirstName']),
				'NIC'=>trim($_POST['NIC']),
				'DOB'=>trim($_POST['DOB']),
				'email'=>trim($_POST['email']),
				'phoneNumber'=>trim($_POST['phoneNumber']),
				'password'=>trim($_POST['password']),
				'fromDate'=>trim($_POST['fromDate']),
				'toDate'=>trim($_POST['toDate']),
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

					if($this->userModel->registerm($data)){
						header('location: ' . URLROOT . '/Admin_Deliverys/login');
					}
					else{
						die('Something went wrong'); 
					}
				}

			}


			$this->view('Admin_DeliveryReg', $data);
		}
		
   		public function logout() {
        unset($_SESSION['userName']);
        unset($_SESSION['email']);
        header('location:' . URLROOT . '/Admin_Deliverys/login1');
    }

	}

 ?>