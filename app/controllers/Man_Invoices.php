<?php 
	class Man_Invoices extends Controller {
    public function __construct() {
        $this->postModel = $this->model('Man_Invoicesm');
	}
	public function showinvoices(){
    	$invoices = $this->postModel->showallinvoices();
    	
    	$data = [
    		'invoices' => $invoices
    	];

    	 $this->view('Man_Invoices', $data);
    }



}

 ?>