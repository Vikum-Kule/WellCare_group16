<?php
class Man_Stock_Refilc extends Controller {
    public function __construct() {
        $this->postModel = $this->model('Man_Stock_Refilm');
	}
    public function showrefill(){
    	$refills = $this->postModel->findallrefill();
    	
    	$data = [
    		'refills' => $refills
    	];

    	 $this->view('Man_Stock_Refil', $data);
    }

}