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

	public function addinvoice(){
		$data = [
		  	 'invoiceNo'=>'',
			 'medicineList'=>''
		];
		
		if($_SERVER['REQUEST_METHOD']=='POST'){
			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

			$data = [
		  'invoiceNo' => trim($_POST['invoiceNo']),
			 'medicineList' => trim($_POST['medicineList'])
			 
			];

			if($this->postModel->addinvoicem($data)){
			header("Location: ". URLROOT . "/Man_Invoices/showinvoices");
		 }
		}	


		$this->view('Man_Add_Invoice', $data);
}

public function updateinvoice($invoiceNo){

	$invoice= $this->postModel->findinvoice($invoiceNo);
	
	$data = [
	 'invoice' => $invoice,
	 
	];
	

 if($_SERVER['REQUEST_METHOD']=='POST'){
	 
		$_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
		
		 $data2 = [
	 
			  'invoiceNo' => trim($_POST['invoiceNo']),
			  'medicineList' => trim($_POST['medicineList'])
			 
			 ];	
			 

		
		if($this->postModel->updateinvoicem($data2)){
		header("Location: ". URLROOT . "/Man_Invoices/showinvoices");
	 }
	}	


	$this->view('Man_invoice_update', $data);
}



}

 ?>