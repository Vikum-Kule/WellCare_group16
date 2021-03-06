<?php 
	class Del_orders extends Controller {
    public function __construct() {
		$this->postModel = $this->model('del_Operation');
	}

    public function show_locations(){
        $username = $_SESSION['username'];
        $orders = $this->postModel->findOrders($username);
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
        $username = $_SESSION['username'];
        $city = $this->postModel->show_Cities($username);
        
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
        //if($_SERVER['REQUEST_METHOD']=='POST'){
            if(isset($_POST['select'])){
                $street = $_POST['street'];
                $GLOBALS['glo_street'] =$street;
                $order = $this->postModel->findStreetOrders($GLOBALS['glo_street']);
                $data = [
                    $data1=[
                        'order'=> $order
                    ],
                    $street
                ];
                //print_r($data);
                $this->view('Del_orders_forStreet',$data);        
            }
        //}
        
    }

    public function showOrder(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            if(isset($_POST['select'])){
                $orderId = $_POST['orderId'];
                $redirect = $_POST['redirect'];
                $orderData= $this->postModel->find_selectOrders($orderId);
                $dataMap = [
                    'orderData'=> $orderData,
                    $redirect
                ];
                
                $this->view('del_map',$dataMap);
            } 
        }
    }

    public function findOrderCount(){
        $username = $_SESSION['username'];
        $pending= $this->postModel->count_Orders($username);
		header('Content-type: application/json');
		echo json_encode($pending->count);
		return;
    }

    public function submit_btn(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $username = $_SESSION['username'];
            if(isset($_POST['canecel'])){
                if($_POST['canecel'] == "Del_orders_forStreet"){
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
                else{
                    $orders = $this->postModel->findOrders($username);
                    $data= [
                        'orders' => $orders
                    ];
                    $this->view('del_location', $data); 
                }
            } 
        }
    }
    public function updateStatus(){
        $orderId = $_POST['orderId'];
        $this->postModel->updateStatus($orderId);
    }

 }

?>