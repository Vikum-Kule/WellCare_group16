<?php 
	class Del_orders extends Controller {
    public function __construct() {
		$this->postModel = $this->model('del_Operation');
	}

    public function show_locations(){
        $orders = $this->postModel->findOrders();
        $data= [
            'orders' => $orders
        ];
        $this->view('del_location', $data);
    }

    public  function findAddress(){
        $orderId = $_POST['orderId'];
        $address = $this->postModel->findAddres($orderId);
        header('Content-type: application/json');
		echo json_encode($address);
		return;
    }

    public function show_cities(){
        $city = $this->postModel->show_Cities();
        
            $data=[
                'city'=> $city
            ];
       
        $this->view('Del_cityList', $data);
    }

    public function findStreets(){
        $city = $_POST['city'];
        $streets = $this->postModel->findStreets($city);
        header('Content-type: application/json');
		echo json_encode($streets);
		return;
    }
    public function show_Streets(){
        $this->view('Del_cityList');
    }

}

?>