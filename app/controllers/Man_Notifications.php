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

    	 $this->view('Man_Notification_Manager', $data);
    }

	public function expirationdrugs(){
    	$minimums = $this->postModel->expirationdrugsm();
    	
    	$data = [
    		'minimums' => $minimums
    	];

    	 $this->view('Man_Notification_Manager', $data);
    }


}

 ?>