<?php
class Man_Inquiry extends Controller {
    public function __construct() {
        $this->postModel = $this->model('Man_Inquirym');
	}

    public function showinquiries(){
    	$inquiries = $this->postModel->findallinquiries();
    	
    	$data = [
    		'inquiries' => $inquiries
    	];

    	 $this->view('Man_Inquiries_Manager', $data);
    }

}
