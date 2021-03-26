<?php
class Man_Adddrug extends Controller {
    public function __construct() {
        $this->postModel = $this->model('Man_Operation');
	}
    public function showdrugs(){
    	$drugs = $this->postModel->findalldrugs();
    	
    	$data = [
    		'drugs' => $drugs
    	];

    	 $this->view('Man_Drug_Stock_page', $data);
    }

   public function adddrugs(){
   		$data = [
			 'medicineId'=>'',
   			 'name'=>'',
   			 'brand'=>'',
   			 'description'=>'',
   			 'QTY'=>'',
   			 'price'=>'',
   			 'EXP'=>'', 
   			 'MFD'=>'',
   			 'doseSatus'=>'',
   			 'dose'=>'',
   			 'temperature'=>'',
			 'subCategory'=>'',
			 'imageLocation'=>''

   		];
   		
   		if($_SERVER['REQUEST_METHOD']=='POST'){
   			$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

   			$data = [
			 'medicineId' => trim($_POST['medicineId']),
   			 'name' => trim($_POST['name']),
   			 'brand' => trim($_POST['brand']),
   			 'description' => trim($_POST['description']),
   			 'QTY' => trim($_POST['QTY']),
   			 'price' => trim($_POST['price']),
   			 'EXP' => trim($_POST['EXP']), 
   			 'MFD' => trim($_POST['MFD']),
   			 'doseStatus' => trim($_POST['doseStatus']),
   			 'dose' => trim($_POST['dose']),
   			 'temperature' => trim($_POST['temperature']),
			 'subCategory' => trim($_POST['subCategory']),
   			 'imageLocation' => trim($_POST['imageLocation'])
   			];

   			if($this->postModel->adddrugm($data)){
               header("Location: ". URLROOT . "/Man_adddrug/showdrugs");
            }
   		}	


   		$this->view('Man_Add_Drug_Stock_Page', $data);
   }

   public function updatedrugs($medicineId){

   		$drug= $this->postModel->findDrugById($medicineId);
   		
   		$data = [
			'drug' => $drug,
			// 'medicineId'=>'',
   			// 'name'=>'',
   			// 'brand'=>'',
   			// 'description'=>'',
   			// 'QTY'=>'',
   			// 'price'=>'',
   			// 'EXP'=>'', 
   			// 'MFD'=>'',
   			// 'doseStatus'=>'',
   			// 'dose'=>'',
			// 'temperature'=>'',
			// 'subCategory'=>'',
   			// 'imageLocation'=>''
   		];
		   

		if($_SERVER['REQUEST_METHOD']=='POST'){
			
   			$_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
			   
				$data2 = [
			
					 'medicineId' => trim($_POST['medId']),
					 'name' => trim($_POST['name']),
					 'brand' => trim($_POST['brand']),
					 'description' => trim($_POST['description']),
					 'QTY' => trim($_POST['QTY']),
					 'price' => trim($_POST['price']),
					 'EXP' => trim($_POST['EXP']), 
					 'MFD' => trim($_POST['MFD']),
					 'doseStatus' => trim($_POST['doseStatus']),
					 'dose' => trim($_POST['dose']),
					 'temperature' => trim($_POST['temperature']),
				  	 'subCategory' => trim($_POST['subCategory']),
					 'imageLocation' => trim($_POST['imageLocation'])
					];	
					
			
   			

   			
   			if($this->postModel->updatedrug($data2)){
               header("Location: ". URLROOT . "/Man_adddrug/showdrugs");
            }
   		}	


   		$this->view('Man_Drug_Stock_Update_Form', $data);
   }

   public function deletedrug($medicineId){
   		$drug= $this->postModel->findDrugById($medicineId);
   		
   		$data = [
   			'drug' => $drug,
			'medicineId'=>'',
   			'name'=>'',
   			'brand'=>'',
   			'description'=>'',
   			'QTY'=>'',
   			'price'=>'',
   			'EXP'=>'', 
   			'MFD'=>'',
   			'doseStatus'=>'',
   			'dose'=>'',
			'temperature'=>'',
			'subCategory'=>'',
   			'imageLocation'=>''
   		];
   		// if($_SERVER['REQUEST_METHOD']=='POST'){
   		// 	$_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

   			if($this->postModel->deletedrug($medicineId)){
   				header("Location: ". URLROOT . "/Man_adddrug/showdrugs");
   			}

   		// }
   }

   }