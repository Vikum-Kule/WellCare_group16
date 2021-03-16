<?php 
	class Pc_view_drug extends Controller {
    public function __construct() {
		$this->postModel = $this->model('pc_Operation');
	}


	

    public function show_medicine(){
		if($_SERVER['REQUEST_METHOD']=='POST'){
			
		$name = ''; 
		$orderData='';
		$price=0;

			// $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);	
			// $_POST = json_decode(file_get_contents("php://input"));	
    		

			$updateOrder_medicine = [
				'orderId'=>'',
				'name'=>'',
				'brand'=>'',
				'QTY'=>'',
				'freqency'=>'',
				'dose'=>'',
				'barcode'=>'',
				'doseStatus'=>'',
				'price'=>''
				
		   ];
		   $orderId='';
		   $data='';
		   if(isset($_POST['process'])){
			
				$medicine = $this->postModel->findMedName();
				$orderId = $_POST['orderId'];
				$orderData = $this->postModel->fetchData($orderId);
				$orderData = $this->postModel->fetchData($orderId);
				//$this->postModel->pending_process($orderId);
				$data = [
					$data1 = [
						'medicine' => $medicine
					],
					$data2 = [
						'orderData' => $orderData 
					],
					$orderId
					
				];
				// $this->view('pc_make_order', $data);
				// $table_data = $this->postModel->findData_toTable($orderId);
				// header('Content-type: application/json');
				// echo json_encode($table_data);
				
		 	    //  return;
				
		}

		if(isset($_POST['right'])){
			$currentId = $_POST['currentId'];
			$nextId = $this->postModel->find_nextId($currentId);
			$orderId = $nextId[0]->orderId;
			$medicine = $this->postModel->findMedName();
				$orderData = $this->postModel->fetchData($orderId);
				//$orderData = $this->postModel->fetchData($nextId);
				//$this->postModel->pending_process($orderId);
				$data = [
					$data1 = [
						'medicine' => $medicine
					],
					$data2 = [
						'orderData' => $orderData 
					],
					$orderId
					
				];
				$this->view('pc_make_order', $data);
			
		}

		if(isset($_POST['delete_orderId'])){
			$delete_orderId = $_POST['delete_orderId'];
			$delete_medId = $_POST['delete_id'];
			$result=$this->postModel->deleteRow($delete_orderId,$delete_medId);
			header('Content-type: application/json');
		  	echo json_encode($result);
		 	 return;
		}
		if(isset($_POST['selected_orderId'])){
			$delete_orderId = $_POST['selected_orderId'];
			$delete_medId = $_POST['selected_id'];
			$result=$this->postModel->selectedRow($delete_orderId,$delete_medId);
			header('Content-type: application/json');
		  	echo json_encode($result);
		 	 return;
		}

		if(isset($_POST['medName'])){
			$medName = $_POST['medName'];
			$medicine_data = $this->postModel->find_using_name($medName);
			header('Content-type: application/json');
		  	echo json_encode($medicine_data);
		 	 return;
		}

		if(isset($_POST['medBrand'])){
			$medBrand = $_POST['medBrand'];
			$medicine_data = $this->postModel->find_using_brand($medBrand);
			header('Content-type: application/json');
		  	echo json_encode($medicine_data);
		 	 return;
		}
		$defineQty_medicine = [
			'name'=>'',
			'brand'=>'',
			'dose'=>''
	   ];
		
		if(isset($_POST['medicine_name'])){
			$defineQty_medicine = [
				'name'=>$_POST['medicine_name'],
				'brand'=>$_POST['medicine_brand'],
				'dose'=>$_POST['medicine_dose']
		   ];
		   
		   $avl_qty = $this->postModel->find_avl_qty($defineQty_medicine);
		//    print_r($avl_qty);	
		    header('Content-type: application/json');
		   echo json_encode($avl_qty);
		   return;
		}

		if(isset($_POST['nonprepaired_orderId'])){
			$nonprepaierd_orderId= $_POST['nonprepaired_orderId']; 
			$table_data = $this->postModel->findData_toTable($nonprepaierd_orderId);
		  	header('Content-type: application/json');
		  	echo json_encode($table_data);
		  	return;
		}		

		   
		   if(isset($_POST['name'])){
			$Drugname =$_POST['name'];
			$brand = $_POST['brand'];
			$dose = $_POST['dose'];
			$unitPrice = $this->postModel->findMedPrice($Drugname,$brand,$dose);
			$price = $unitPrice[0]->price *$_POST['QTY'] ;
			$updateOrder_medicine = [
				'orderId'=>$_POST['orderId'],
				'name'=>$_POST['name'],
				'brand'=>$_POST['brand'],
				'QTY'=>$_POST['QTY'],
				'status'=>$_POST['status'],
				'freqency'=>$_POST['frequency'],
				'doseStatus'=>$_POST['doseform'],
				'dose'=>$_POST['dose'],
				'barcode'=>$unitPrice[0]->medicineId,
				'price'=>$price
				
		   ];	
		  
		  $this->postModel->preparedOrder($updateOrder_medicine);
		   
		}
		
		if(!isset($_POST['name']) ){
			$this->view('pc_make_order', $data);
		}
		else{
			$this->view('pc_make_order', $data);
		}	
		
	}
}


	public function show_confirm_orders(){
    	$orders = $this->postModel->findconOrders();
    		

				$data = [
	    				'orders' => $orders
	    		];

		$this->view('pc_confirmed_orders', $data);
	}

    
    

    public function show_orders(){
    	//echo $_SESSION['username'];
		    	$nonOrders = $this->postModel->showNonOrders();
		    	$orders = $this->postModel->showOrders();

		    	if($_SERVER['REQUEST_METHOD']=='POST'){

    				$_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
    				
    				$updateOrder = [
    					 'orderId'=>'',
			   			 'currentLocation'=>'',
			   			 'DateTime'=>'',
			   			 'customerId'=>'',
			   			 'image_path'=>'',
			   			 'price'=>''
			   			 
   					];

    				if(isset($_POST['done'])){

    					$orderId = $_POST['orderId'];
    					$order_data = $this->postModel->find_order($orderId);
    					$data3 = [
				    		'order_data' => $order_data
				    	];
				    	foreach($data3['order_data'] as $order_data){
				    		$updateOrder = [
					   			 'currentLocation'=>trim($order_data->currentLocation),
					   			 'customerId'=>trim($order_data->customerId),
					   			 'image_path'=>trim($order_data->image_path),
					   			 'price'=>trim($order_data->price)
			   			 
   					];
				    	}

    					$this->postModel->update_order($updateOrder);
    					$this->postModel->process_delete($orderId);
    				}

    				if(isset($_POST['done'])){
    					$orderId = $_POST['orderId'];
    					$this->postModel->process_delete($orderId);	
    				}
    			}

		    		
		    					$data = [
						    			$data1 = [
						    				'nonOrders' => $nonOrders
						    			],

						    			$data2 = [
						    				'orders' => $orders
						    			]
		    					];
		    				$this->view('pc_view_order', $data);
		    			
    }

    
    public function deleteOrder(){
    	    		

     }

    

    
   }
 ?>

