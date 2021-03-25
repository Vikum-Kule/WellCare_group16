<?php 
	class Man_Supplier_order extends Controller {
    public function __construct() {
        $this->postModel = $this->model('Man_Supplier_orderm');
	}
    public function showorders(){
    	$orders = $this->postModel->findallorders();
    	
    	$data = [
    		'orders' => $orders
    	];

    	 $this->view('Man_Supplier_Orders', $data);
    }

    public function addorder(){
        $data = [
             'supplyId'=>'',
             'invoiceNo'=>'',
             'price'=>'',
             'date'=>''

        ];
        
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

            $data = [
             'supplyId' => trim($_POST['supplierId']),
             'invoiceNo' => trim($_POST['invoiceNo']),
             'price' => trim($_POST['price']),
             'date' => trim($_POST['date']),
            ];

            if($this->postModel->addorderm($data)){
                 header("Location: ". URLROOT . "/Man_supplier_order/showorders");
            }
        }   


        $this->view('Man_Add_Supplier_Order', $data);
   }
    public function updateorder($orderId){

        $order= $this->postModel->findOrderById($orderId);
        
        $data = [
            'order' => $order,
            'supplyId'=>'',
             'invoiceNo'=>'',
             'price'=>'',
             'date'=>''
        ];

        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

            $data = [
             'orderId'=> $orderId,
            'order' => $order,
            'supplyId'=>trim($_POST['supplierId']),
             'invoiceNo'=>trim($_POST['invoiceNo']),
             'price'=>trim($_POST['price']),
             'date'=>trim($_POST['date'])
             
            ];

            
            if($this->postModel->updateorder($data)){
               header("Location: ". URLROOT . "/Man_supplier_order/showorders");
            }
        }   


        $this->view('Man_Update_Supplier_Order', $data);
   }

}

 ?>