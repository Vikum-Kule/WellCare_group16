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
    public function getMyOrders(){

        
        header('Content-Type: application/json');
		echo json_encode($this->myOrderModel->getMyOrders($_SESSION['user_id']));



    }





}
    