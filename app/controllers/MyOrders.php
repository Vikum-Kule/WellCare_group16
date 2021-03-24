<?php
class MyOrders extends Controller{

    public function __construct(){
        $this->myOrderModel=$this->model('MyOrder');
        
    }
    public function myorder(){
        //varName=value
        //echo $_GET["varName"];
       $data=0;
       $this->view('MyOrders');

    }
    public function complaint(){//myOrders




        $data = ['complaintId'=>''];
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $data = ['complaintOrderId' => $_POST['complaintOrderId']];
            $this->view('Complaint', $data);
        }else{
            $data = 0;
            $this->view('Complaint', $data);

        }
       
        

    }
    public function order(){
        $data=0;
        $this->view('ViewOrder',$data);

    }
    public function getNonPreparedMyOrders(){

        
        header('Content-Type: application/json');
		echo json_encode($this->myOrderModel->getNonPreparedMyOrders($_SESSION['user_id']));



    }
    public function getPreparedMyOrders(){

        
        header('Content-Type: application/json');
		echo json_encode($this->myOrderModel->getPreparedMyOrders($_SESSION['user_id']));



    }
    public function nonPreparedMyOrdersData(){
        $obj = file_get_contents('php://input');
        $json = json_decode($obj);
       
        header('Content-Type: application/json');
		echo json_encode($this->myOrderModel->nonPreparedMyOrdersData($json->orderId));



    }
    public function preparedMyOrdersData(){
        $obj = file_get_contents('php://input');
        $json = json_decode($obj);

        header('Content-Type: application/json');
		echo json_encode($this->myOrderModel->preparedMyOrdersData($json->orderId));




    }
    public function getPrescriptionData(){
        $obj = file_get_contents('php://input');
        $json = json_decode($obj);

        header('Content-Type: application/json');
		echo json_encode($this->myOrderModel->getPrescriptionData($json->orderId));




    }
    public function loadPreparedPrescription(){
        $obj = file_get_contents('php://input');
        $json = json_decode($obj);

        header('Content-Type: application/json');
		echo json_encode($this->myOrderModel->loadPreparedPrescription($json->orderId));

    }
    public function sendComplaint(){
        $data = [
            'OrderId' => "",
            'complaint' =>""
            
        ];
        $obj = file_get_contents('php://input');
        $json = json_decode($obj);

        $data = [
            'OrderId' => trim($json->OrderNumber),
            'complaint' => trim($json->complaint)
        ];

    
        header('Content-Type: application/json');
		echo json_encode($this->myOrderModel->sendComplaint($data));
        // header('Content-Type: application/json');
		// echo json_encode($data);
        

    }
    public function getComplaint(){

        header('Content-Type: application/json');
		echo json_encode($this->myOrderModel->getComplaint($_SESSION['user_id']));

}

    // $obj = file_get_contents('php://input');
    //     $json = json_decode($obj);
        // header('Content-Type: application/json');
    //     $searchBar= trim($json->orderId);





}
    