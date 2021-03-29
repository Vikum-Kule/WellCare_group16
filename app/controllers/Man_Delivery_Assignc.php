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


}