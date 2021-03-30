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

	public function stock_add(){
		$brand = $_POST['brand'];
		$name = $_POST['name'];
		$dose = $_POST['dose'];
		$doseForm = $_POST['status'];
		$total = $_POST['price'] * $_POST['qty'];
		$medId = $this->postModel->findMedId($brand, $name, $dose,$doseForm);
		print_r($medId->QTY);
		// $Qty = $medId->QTY + ($_POST['qty']);
		//  $data =[
		// 	'supplyId'=> $_POST['supplyId'],
		// 	'refillDateTime'=> '',
		// 	'medicineId'=> $medId->medicineId,
		// 	'brandName'=> $_POST['brand'],
		// 	'doseStatus'=> $_POST['status'],
		// 	'dose'=> $_POST['dose'],
		// 	'QTY'=> $_POST['qty'],
		// 	'price'=> $total,
		// 	'EXP'=> $_POST['EXP'],
		// 	'MFD'=> $_POST['MFD']
		//  ];

		
		// $this->postModel->fill_stock($data);
		// $this->postModel->updateQty($medId,$Qty);
		


	}
	

}