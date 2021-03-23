<?php
class MyOrders extends Controller{

    public function __construct(){
        $this->myOrderModel=$this->model('MyOrder');
        
    }
    public function myorder(){
        $data=0;
        $this->view('MyOrders');

    }
    public function complaint(){
        $data=0;
        $this->view('Complaint', $data);

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

    // $obj = file_get_contents('php://input');
    //     $json = json_decode($obj);
        // header('Content-Type: application/json');
    //     $searchBar= trim($json->orderId);





}
    