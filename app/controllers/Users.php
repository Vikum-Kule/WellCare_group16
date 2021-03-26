<?php
class Users extends Controller{
    public function __construct(){
        $this->userModel=$this->model('User');
        
    }

   
    public function register(){ 
        $data = [
            
            'firstname'=>'',
            'lastname'=>'',
            'nic'=>'',
            'userName'=>'',
            'password'=>'',
            'confirmPassword'=>'',
            'phoneNumber'=>'',
            'email'=>'',
            'streetAddress1'=>'',
            'streetAddress2'=>'',
            'city'=>'',
            'district'=>'',
            'postalCode'=>'',
            'usernameError'=>'',
            'passwordError'=>'',
            'confirmPasswordError'=>'',
            'emailError'=>'',
            'nicError'=>'',
            'firstnameError'=>'',
            'phoneNumberError'=>'',
            'streetAddress1Error'=>'',
            'streetAddress2Error'=>'',
            'cityError'=>'',
            'districtError'=>'',
            'postalCodeError'=>''
        ];
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

            $data = [
             'firstname' => trim($_POST['firstname']),
             'lastname' => trim($_POST['lastname']),
             'nic' => trim($_POST['nic']),
             'userName' => trim($_POST['userName']),
             'password' => trim($_POST['password']),
             'confirmPassword' => trim($_POST['confirmPassword']), 
             'phoneNumber' => trim($_POST['phoneNumber']),
             'email' => trim($_POST['email']),
             'streetAddress1' => trim($_POST['streetAddress1']),
             'streetAddress2' => trim($_POST['streetAddress2']),
             'city' => trim($_POST['city']),
             'district' => trim($_POST['district']),
             'postalCode' => trim($_POST['postalCode']),
             'usernameError' => '',
             'passwordError' => '',
             'confirmPasswordError' => '',
             'emailError' => '',
             'nicError'=>'',
             'firstnameError'=>'',
             'phoneNumberError'=>'',
             'streetAddress1Error' => '',
             'streetAddress2Error' => '',
             'cityError' => '',
             'districtError' => '',
             'postalCodeError' => ''
            ];

            $nameValidation = "/^[a-zA-Z0-9]*$/";

            $postalCodeVAlidation="/^[0-9]{5}$/";
            $phoneNumberVAlidation="/^[0-9]{10}$/";
            
            $onlyLetters = "/^[a-zA-Z]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

            //validate username
            if(empty($data['userName'])){
                $data['usernameError']='please enter username.';

            }elseif(!preg_match($nameValidation,$data['userName'])){
                $data['usernameError']='User name can only contain letters and numbers.';
            }else{
                if($this->userModel->findUserByUsername($data['userName'])){
                    $data['usernameError']='User name already taken.';

                }
            }
            //validate nic
            if(empty($data['nic'])){
                $data['nicError']='please enter NIC.';

            }
            //validate firstname
            if(empty($data['firstname'])){
                $data['firstnameError']='please enter First name.';

            }
            //validate phonenumber
            if(empty($data['phoneNumber'])){
                $data['phoneNumberError']='please enter Phone number.';

            }elseif(!preg_match( $phoneNumberVAlidation,$data['phoneNumber'])){
                $data['phoneNumberError']='Not a valid phoneNumber';
            }


            //validate address
            if(empty($data['streetAddress1'])){
                $data['streetAddress1Error']='please enter street address 1.';

            }

           

            if(empty($data['city'])){
                $data['cityError']='please enter city.';

            }elseif(!preg_match($onlyLetters,$data['city'])){
                $data['streetAddress1Error']='Not a valid city.';
            }

            if(empty($data['district'])){
                $data['districtError']='please enter district.';

            }elseif(!preg_match($onlyLetters,$data['district'])){
                $data['districtError']='Not a valid district.';
            }

            if(empty($data['postalCode'])){
                $data['postalCodeError']='please enter postalCode.';

            }elseif(!preg_match($postalCodeVAlidation,$data['postalCode'])){
                $data['postalCodeError']='Not a valid postalCode';
            }





            //validate email
            if(empty($data['email'])){
                $data['emailError']='please enter email.';

            }elseif(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
                $data['emailError']='please enter the correct format.';

            }else{
                if($this->userModel->findUserByEmail($data['email'])){
                    $data['emailError']='Email already taken.';

                }
            }


           //validate password lenth and numeric values
           if(empty($data['password'])){
            $data['passwordError']='Please enter password.';

            }elseif(strlen($data['password'])<6){
                $data['passwordError']='Password must be at least 8 characters.';

            } elseif (preg_match($passwordValidation, $data['password'])) {
              $data['passwordError'] = 'Password must have at least one numeric value.';
            }

            //validate confirm password
            if(empty($data['confirmPassword'])){
                $data['confirmPasswordError']='please confirm password.';
            }else{
                if($data['password'] !=$data['confirmPassword'] ){
                    $data['confirmPasswordError']='Password do not match,Please try again.';

                }
            }

            //check errors are empty
            if(empty($data['usernameError']) && empty($data['passwordError']) && empty($data['confirmPasswordError']) && empty($data['emailError'])&& empty($data['streetAddress1Error'])&& empty($data['streetAddress2Error'])&& empty($data['cityError'])&& empty($data['districtError'])&& empty($data['postalCodeError']) ){
                //hash password
                $data['password']=password_hash($data['password'],PASSWORD_DEFAULT);
                //REGISTER USER FROM MODEL FUNCTION
                header('location: ' . URLROOT . '/Home');



                // $this->userModel->updateStatus($data['userName']);
                // if($this->userModel->register($data)){
                //     header('location: ' . URLROOT . '/Home');

                // }else{
                //     die('Something went wrong');
                // }

            }
        }

        $this->view('Register', $data);

        
    }


    public function loginVIew(){
        $this->view('Home');

    } 
    public function login(){

        
        
       
        $data = [
            'title' => 'Login page',
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

             //Sanitize post data
             $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

             $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameError' => '',
                'passwordError' => '',
            ];

            //Validate username
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter a username.';
            }

            //Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter a password.';
            }
            

            if (empty($data['usernameError']) && empty($data['passwordError'])) {
                //check user status..
                $userState = $this->userModel->findState($data['username']);
                
                //print_r($userState->Status);
                if($userState->Status == "customer"){
                   
                    $loggedInUser = $this->userModel->login($data['username'], $data['password']);
                
                    if ($loggedInUser) {
                        $this->createUserSession($loggedInUser);
                    } else {
                        $data['passwordError'] = 'Password or username is incorrect. Please try again.';

                        $this->view('Home', $data);
                    }
                }
                else if($userState->Status == "pharmacist"){
                    $loggedInUser = $this->userModel->loginPharmacist($data['username'], $data['password']);
                
                    if ($loggedInUser) {
                       $this->createUserSession_pc($loggedInUser);
                       
                    } else {
                        $data['passwordError'] = 'Password or username is incorrect. Please try again.';

                        $this->view('Home', $data);
                    }
                }

                elseif($userState->Status == "manager"){
                    $loggedInUser = $this->userModel->loginManager($data['username'], $data['password']);
                
                    if ($loggedInUser) {
                       $this->createUserSession_man($loggedInUser);
                       
                    } else {
                        $data['passwordError'] = 'Password or username is incorrect. Please try again.';

                        $this->view('Home', $data);
                    }
                }
                elseif($userState->Status == "admin"){
                    $loggedInUser = $this->userModel->loginAdmin($data['username'], $data['password']);
                
                    if ($loggedInUser) {
                       $this->createUserSession_admin($loggedInUser);
                       
                    } else {
                        $data['passwordError'] = 'Password or username is incorrect. Please try again.';

                        $this->view('Home', $data);
                    }
                }
                
            }





        }else {
            $data = [
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => ''
            ];
        }
        $this->view('Home', $data);

    }

    public function createUserSession_admin($user){
        $_SESSION['active'] = true;
        $_SESSION['username'] = $user->userName;
	    $_SESSION['email'] = $user->email;
        header('location:' . URLROOT . '/admin/home');
    }

    public function createUserSession_pc($user){
        $_SESSION['active'] = true;
        $_SESSION['username'] = $user->userName;
	    $_SESSION['email'] = $user->email;
        header('location:' . URLROOT . '/pc_view_drug/show_requestedOrders');
    }

    public function createUserSession_man($user){
        $_SESSION['active'] = true;
        $_SESSION['username'] = $user->userName;
	    $_SESSION['email'] = $user->email;
        header('location:' . URLROOT . '/Man_Adddrug/showdrugs');
    }

    public function createUserSession($user) {
        $_SESSION['active'] = true;
        $_SESSION['user_id'] = $user->customerId;
        $_SESSION['username'] = $user->userName;
        $_SESSION['email'] = $user->Email;
        $_SESSION['LastName'] = $user->LastName;
        $_SESSION['FirstName'] = $user->FirstName;
        $_SESSION['PhoneNumber'] = $user->PhoneNum;
        $_SESSION['NIC'] = $user->NIC;
        $_SESSION['streetAddress1'] = $user->streetAddress1;
        $_SESSION['streetAddress2'] = $user->streetAddress2;
        $_SESSION['city'] = $user->city;
        $_SESSION['district'] = $user->district;
        $_SESSION['postalCode'] = $user->postalCode;

       

        header('location:' . URLROOT . '/orders/makeOrder');
    }

    public function profile(){
        $this->view('HomeAfterLogin');
       

    }
    public function logout(){
         $_SESSION['active']=false;
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        unset($_SESSION['LastName']);
        unset($_SESSION['FirstName']);
        unset( $_SESSION['PhoneNumber']);
        unset( $_SESSION['NIC']);
        unset( $_SESSION['streetAddress1']);
        unset( $_SESSION['streetAddress2']);
        unset( $_SESSION['address']);
        unset( $_SESSION['city']);
        unset( $_SESSION['district']);
        unset( $_SESSION['postalCode']);
        

        header('location:' . URLROOT . '/MyOrder/myorder');
    }

    public function letUpdateProfile(){

        $this->view('EditProfile',$_SESSION);

    }
   

    public function updateProfile(){

      
        
       $data = [

            'id'=>$_SESSION['user_id'],
            'firstname'=>'',
            'user_id'=>'',
            'lastname'=>'',
            'nic'=>'',
            'phoneNumber'=>'',
           
            'streetAddress1'=>'',
            'streetAddress2'=>'',
            'city'=>'',
            'district'=>'',
            'postalCode'=>''
            
         ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [

                'id' => $_SESSION['user_id'],
                'firstname' => trim($_POST['firstname']),
                'lastname' => trim($_POST['lastname']),
                'nic' => trim($_POST['nic']),
                'phoneNumber' => trim($_POST['phoneNumber']),
                'streetAddress1' => trim($_POST['streetAddress1']),
                'streetAddress2' => trim($_POST['streetAddress2']),
                'city' => trim($_POST['city']),
                'district' => trim($_POST['district']),
                'postalCode' => trim($_POST['postalCode'])



            ];
            $this->userModel->editProfile($data);
        }
           
           
           
            
            $_SESSION['LastName'] =$data['lastname'];
            $_SESSION['FirstName'] =$data['firstname'];
            $_SESSION['PhoneNumber'] = $data['phoneNumber'];
            $_SESSION['NIC'] = $data['nic'];
            $_SESSION['streetAddress1'] = $data['streetAddress1'];
            $_SESSION['streetAddress2'] = $data['streetAddress2'];
            $_SESSION['city'] = $data['city'];
            $_SESSION['district'] = $data['district'];
            $_SESSION['postalCode'] = $data['postalCode'];
            
    
            header('location:' . URLROOT . '/users/profile');
        

        

    }
   
   
    public function fogotpassword(){

         
       
        $data = [
           
            'email' => '',
            'emailError' => '',
            'successMessage'=>''
            
        ];
       
        
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
           

            $data = [
                'email' => trim($_POST['email']),
                'emailError' => '',
                'successMessage'=>''
                
            ];
           
           

            //validate email   /users/fogotPasswordView
            if(empty($data['email'])){
                $data['emailError']='please enter email.';

            }elseif(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
                $data['emailError']='please enter the correct format.';

            }else{
                if(!$this->userModel->findUserByEmail($data['email'])){
                    $data['emailError']='Email not  found';

                }
            }
           

           
            if (empty($data['emailError'])) {

                
                    $_SESSION['email']= $data['email'];
                   
                    
                    

                   
                    $dataRecoverPassword['recoverpasswords']= bin2hex(openssl_random_pseudo_bytes(4));
                    
                    $dataRecoverPassword['recoverEmail']=$data['email'];
                    $dataRecoverPassword['createdTime']=time();
                    //email sending...
                    $to = $dataRecoverPassword['recoverEmail'];
                    $email_Sender= "wellcaregroup16@gmail.com";
                    $mail_subject = "Password Recover";
                    $email_body = "<b>From: </b> Wellcare Pharmacy<br>";
                    $email_body .="<b>Your Recover Password: </b> {$dataRecoverPassword['recoverpasswords']}<br>";
                    $email_body .="<i>Please recover your password within 15 minuts..</i><br>
                                    <b>Thank you.</b>";
                    $header = "From: {$email_Sender}\r\nContent-type: text/html;";

                    $mail_result=mail($to,$mail_subject,$email_body,$header);

                    if($mail_result){
                        echo "Email sent to ".$to;
                    }
                    else{
                        echo "message not sent";
                    }


                    $this->view('temp', $dataRecoverPassword);




                    if($this->userModel->recoverPassword($dataRecoverPassword)){

                        header('location:' . URLROOT . '/pages/passwordRecoverVIew');

                    }else{
                       
                       
                        die('Something went wrong');
                    }

            }else{
                $this->view('FogotPassword',$data);

            }
        }else {
            $data = [
                'email' => '',
                
                'emailError' => '',
                'successMessage'=>''
                
            ];
            header('location:' . URLROOT . '/pages/fogotPasswordView');
            
        }
       
        





    }
    public function recoverpassword(){
        $data = [

            'recoverPassword' => '',
            'newPassword' => '',
            'confirmPassword' => '',
            'email' => '',


            'recoverPasswordError' => '',
            'newPasswordError' => '',
            'confirmPasswordError' => ''

        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'recoverPassword' => trim($_POST['recoverPassword']),
                'newPassword' => trim($_POST['newPassword']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'email' => $_SESSION['email'],



                'recoverPasswordError' => '',
                'newPasswordError' => '',
                'confirmPasswordError' => ''
            ];


            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

            //validate 
            if (empty($data['recoverPassword'])) {
                $data['recoverPasswordError'] = 'please enter PIN.';
            } else {
                $row = $this->userModel->findPIN($data);
                if ((time() - $row[0]->createdTime) > 900) {
                    $data['recoverPasswordError'] = 'time expired.....';
                } elseif ($row == false) {
                    $data['recoverPasswordError'] = 'false';
                }elseif($row[0]->tempPassword!= $data['recoverPassword']){
                    $data['recoverPasswordError'] = 'pin not match';
                }
            }

            //validate password lenth and numeric values
            if (empty($data['newPassword'])) {
                $data['newPasswordError'] = 'Please enter password.';
            } elseif (strlen($data['newPassword']) < 6) {
                $data['newPasswordError'] = 'Password must be at least 8 characters.';
            } elseif (preg_match($passwordValidation, $data['newPassword'])) {
                $data['newPasswordError'] = 'Password must have at least one numeric value.';
            }

            //validate confirm password
            if (empty($data['confirmPassword'])) {
                $data['confirmPasswordError'] = 'please confirm password.';
            } else {
                if ($data['newPassword'] != $data['confirmPassword']) {
                    $data['confirmPasswordError'] = 'Password do not match,Please try again.';
                }
            }

            //check errors are empty
            if (empty($data['recoverPasswordError']) && empty($data['newPasswordError']) && empty($data['confirmPasswordError'])) {
                //hash password
                $data['newPassword'] = password_hash($data['newPassword'], PASSWORD_DEFAULT);
                //REGISTER USER FROM MODEL FUNCTION
                if ($this->userModel->recoverPasswordUsingPIN($data)) {
                    $this->view('Home');
                } else {
                    die('Something went wrong');
                }
            }
        }

        $this->view('passwordRecover', $data);
    }


}