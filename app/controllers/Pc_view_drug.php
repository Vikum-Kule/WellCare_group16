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

		
		if(!isset($_POST['name']) ){
			$this->view('pc_make_order', $data);
		}
		else{
			$this->view('pc_make_order', $data);
		}	
		
		}
	// else{
	// 	$this->view('pc_make_order');
	// }
	}

	public function rowCount(){
		$pending= $this->postModel->count_pendingOrders();
		$requested= $this->postModel->count_requestedOrders();
		$confirmed= $this->postModel->confirmedOrders();
		$data= [$pending->count,$requested->count,$confirmed->count];
		header('Content-type: application/json');
		echo json_encode($data);
		return;

	}



	public function show_confirm_orders(){
    	$orders = $this->postModel->findconOrders();
    		

				$data = [
	    				'orders' => $orders
	    		];

		$this->view('pc_confirmed_orders', $data);
	}

	public function sendEmail(){
		if(isset($_POST['email_orderId'])){
			$email_orderId= $_POST['email_orderId'];
			$email_Sender_name="Well Care Pharmacy";
			$email_Sender= "wellcaregroup16@gmail.com";
			$email_name= $_POST['email_name'];
			$unavl= $_POST['unAvl'];
			$note= $_POST['note']; 
			$table_data = $this->postModel->findData_toTable($email_orderId);
			$sending_mail= $this->postModel->find_email($email_orderId);
			$total= 0.00;
			
			//create email..
			$to = $sending_mail->Email;
			$mail_subject = "Order Confirmed Well Care Pharmacy";
			$email_body = "<b>From: </b> {$email_Sender_name}<br>";
			$email_body .= "<b>To: </b> {$email_name}<br>";
			$email_body .= "<b>Order No: </b> {$email_orderId}<br>";
			$email_body .= "<html>
				<head>
				</head>
				<body>
				<p><b>Your Order Details<b></p>
				<table>
				<thead>
					<tr>
						<th>medicine</th>
						<th>does</th>
						<th>QTY</th>
						<th>Price</th>
					</tr>
				</thead>
				<tbody>";
			foreach($table_data as $data):
			$email_body .="
				<tr>
					<td>". $data->medName."(".$data->medBrand.")</td>
					<td>".$data->dose."</td>
					<td>".$data->QTY."</td>
					<td>".$data->price."</td></tr>
				</tbody>";
				$total= $data->price+ $total;
			endforeach;
			$email_body .="
			</table>
				</body>
				</html>
			";

			$email_body .= "</table>";
			$email_body .="<b>Total: </b>".$total."<br>";
			$email_body .="<b>Unavailable medicine: </b>".$unavl."<br>";
			$email_body .="<b>Extra notes : </b>".$note."<br>";
			$email_body .="<i>Please send your reply email with your payment recipt attachment within 48 hours.</i><br>
							<b>Thank you.</b>";
			$header = "From: {$email_Sender}\r\nContent-type: text/html;";

			$mail_result=mail($to,$mail_subject,$email_body,$header);

			if($mail_result){
				echo "Email sent to ".$to;
				$this->request_to_pending($email_orderId,$total);
			}
			else{
				echo "message not sent";
			}

		}
	}

	public function request_to_pending($orderId, $total){
		$orderData_medicine =$this->postModel->findData_toTable($orderId);
		foreach ($orderData_medicine as $data):
			$avlQTY = $this->postModel->find_QTY($data->medicineId );
			$newQTY = $avlQTY->QTY - $data->QTY;
			$this->postModel->updateQTY($data->medicineId ,$newQTY);
			$updateOrder_medicine= [
				'orderId'=>$data->orderId,
				'medicineId'=>$data->medicineId,
				'doseStatus'=>$data->doseStatus,
				'dose'=>$data->dose,
				'frequencyStatus'=>$data->frequencyStatus,
				'frequency'=>$data->frequency,
				'medName'=>$data->medName,
				'medBrand'=>$data->medBrand,
				'QTY'=>$data->QTY,
				'price'=>$data->price,
			];
			$this->postModel->add_to_prepared_medicine($updateOrder_medicine);
			$this->postModel->deleteRow($data->orderId,$data->medicineId);

		endforeach;
		$orderData = $this->postModel->findData_from_nonOrders($orderId);
		$updateOrder = [
			'orderId'=> $orderData[0]->orderId,
			'DateTime'=>'',
			'customerId'=>$orderData[0]->customerId,
			'streetAddress1'=>$orderData[0]->streetAddress1,
			'streetAddress2'=>$orderData[0]->streetAddress2,
			'city'=>$orderData[0]->city,
			'district'=>$orderData[0]->district,
			'image_path'=>$orderData[0]->image_path,
			'price'=>$total,
			'status'=>'pending'
		];
		$this->postModel->add_to_prepared($updateOrder);
		$this->postModel->request_delete($orderId);
		

	}
    
    public function show_pendingOrders(){
		$status = "pending";
		$orders = $this->postModel->showOrders($status);
		$data = [
				'orders' => $orders
		];
		$this->view('pc_pending_orders', $data);

	}
	public function show_completedOrders(){
		$status = "completed";
		$orders = $this->postModel->showOrders($status);
		$data = [
				'orders' => $orders
		];
		$this->view('pc_confirmed_orders', $data);

	}

	public function confirm_to_complete(){
		$orderId= $_POST['orderId'];
		$result=$this->postModel->updateStatus($orderId);
		$email =$this->postModel->findEmail($orderId);
		if($result){
			$email_orderId= $orderId;
			$email_Sender_name="Well Care Pharmacy";
			$email_Sender= "wellcaregroup16@gmail.com";
			$email_name= $email[0]->FirstName." ".$email[0]->LastName;
			
			//create email..
			$to = $email[0]->Email;
			$mail_subject = "Order Completed Well Care Pharmacy";
			$email_body = "<b>From: </b> {$email_Sender_name}<br>";
			$email_body .= "<b>To: </b> {$email_name}<br>";
			$email_body .= "<b>Order No: </b> {$email_orderId}<br>";
			
			$email_body .="<i>Your Order has been completed.You will be received your medicine within 24 hours.</i><br>
							<b>Thank you.</b>";
			$header = "From: {$email_Sender}\r\nContent-type: text/html;";

			$mail_result=mail($to,$mail_subject,$email_body,$header);

			if($mail_result){
				echo "Email sent";
			}
			else{
				echo "message not sent";
			}
		}
	}

    public function show_requestedOrders(){
    	
		    	$nonOrders = $this->postModel->showNonOrders();
		    	
		    	
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
    			

		    		
		    					$data = [
						    				'nonOrders' => $nonOrders
						    			
		    					];
		    				$this->view('pc_view_order', $data);
		    			
    }

    
    public function deleteOrder(){
    	    		

     }

    

    
   }
 ?>

