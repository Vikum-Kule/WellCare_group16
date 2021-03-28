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

    
    public function show_Streets(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            if(isset($_POST['select'])){
                $city = $_POST['city'];
                $streets = $this->postModel->findStreets($city);
                $data=[
                'streets'=> $streets
                ];
                echo $city;
                $this->view('Del_streetList',$data);        
            }
        
        }  
    }

    public function show_streetOrders(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            if(isset($_POST['select'])){
                $street = $_POST['street'];
                $order = $this->postModel->findStreetOrders($street);
                $data = [
                    $data1=[
                        'order'=> $order
                    ],
                    $street
                ];
                //print_r($data);
                $this->view('Del_orders_forStreet',$data);        
            }
        }
        
    }

    public function showOrder(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            if(isset($_POST['select'])){
                $orderId = $_POST['orderId'];
                $orderData= $this->postModel->find_selectOrders($orderId);
                $data = [
                    'orderData'=> $orderData
                ];
                $this->view('del_map',$data);
            } 
        }
    }

 }

?>