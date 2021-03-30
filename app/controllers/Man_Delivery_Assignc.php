<?php
class Man_Delivery_Assignc extends Controller {
    public function __construct() {
        $this->postModel = $this->model('Man_Delivery_Assignm');
	}
    public function assigndelivery(){
    	$assigns = $this->postModel->assigndeliverym();
    	
    	$data = [
    		'assigns' => $assigns
    	];

    	 $this->view('Man_Delivery_Assign', $data);
    }

	public function assignedDetails(){
		$assignd = $this->postModel->delivery_person();
		$data =[
			'assignd'=>$assignd
		];
		$this->view('Man_deliveryAssignedView', $data);
	}

	public function loadOrders(){
		
		header('Content-Type: application/json');
		echo json_encode($this->postModel->loadOrders());




	}


}