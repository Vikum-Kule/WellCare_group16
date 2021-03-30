<?php 
	class Man_Notifications extends Controller {
    public function __construct() {
        $this->postModel = $this->model('Man_Notification');
	}

	 public function shownotification(){
    	$minimums = $this->postModel->findallnotifications();
    	
    	$data = [
    		'minimums' => $minimums
    	];
		$expiries = $this->postModel->expirationdrugsm();
    	
		$data1 = [
    		'expiries' => $expiries
    	];
    	 $this->view('Man_Notification_Manager', $data);

		//  $expiries = $this->postModel->expirationdrugsm();
    	
    	// $data1 = [
    	// 	'expiries' => $expiries
    	// ];

    	//  $this->view('Man_Notification_Manager', $data1);
    }

	// public function expirationdrugs(){
    // 	$expiries = $this->postModel->expirationdrugsm();
    	
    // 	$data = [
    // 		'expiries' => $expiries
    // 	];

    // 	 $this->view('Man_Notification_Manager', $data);
    // }

	public function showexpired(){
    	
    	 
		 $expiries = $this->postModel->expirationdrugsm();
    	
    	$data1 = [
    		'expiries' => $expiries
    	];

    	 $this->view('Man_notification_expired', $data1);
    }


}

 ?>