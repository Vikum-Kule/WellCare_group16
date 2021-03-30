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
	public function showprocessing(){
    	$inquiries = $this->postModel->findallprocessing();
    	
    	$data = [
    		'inquiries' => $inquiries
    	];

    	 $this->view('Man_inquiries_processing', $data);
    }
	public function showcompleted(){
    	$inquiries = $this->postModel->findallcompleted();
    	
    	$data = [
    		'inquiries' => $inquiries
    	];

    	 $this->view('Man_inquiries_completed', $data);
    }

}
