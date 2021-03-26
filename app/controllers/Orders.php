<?php
class Orders extends Controller{

    public function __construct(){
        $this->orderModel=$this->model('Order');
        
    }
    public function uploadPrescription(){
        $data=0;
        $this->view('UploadPrescription', $data);

    }

    public function makeOrder(){

        if( $_SESSION==NULL){
            
            $_SESSION['active'] = false;
            $_SESSION['cart']=array();}
       
        $this->view('MakeOrder','footer');
       
  
        
    }
    public function getmaincategories(){
        header('Content-Type: application/json');
		echo json_encode($this->orderModel->getmaincategories());
    }
    public function getsubcategories(){
       
       
        $obj = file_get_contents('php://input');
        $json = json_decode($obj);
        header('Content-Type: application/json');
		echo json_encode($this->orderModel->getsubcategories($json->id));
        
  
      }

    public function goToCart(){
        $data=0;
        $this->view('Cart', $data);

    }





    public function getmedicines(){
       
       
        $obj = file_get_contents('php://input');
        $json = json_decode($obj);
        header('Content-Type: application/json');
		echo json_encode($this->orderModel->getmedicines($json->id));
        
  
      }

      public function searchbar(){
        $obj = file_get_contents('php://input');
        $json = json_decode($obj);
        header('Content-Type: application/json');
        $searchBar= trim($json->searchBar);
        echo json_encode($this->orderModel->searchmedicines($searchBar));
       
       
        
  
      }
      public function getsearchmedicines(){
        $obj = file_get_contents('php://input');
        $json = json_decode($obj);
        header('Content-Type: application/json');
        $searchBar= trim($json->searchBar);
        $searchBar = explode("(", $searchBar);
        echo json_encode($this->orderModel->getsearchmedicines($searchBar[0]));
       
       
        
  
      }
      public function getOneMedicine(){
        $obj = file_get_contents('php://input');
        $json = json_decode($obj);

        header('Content-Type: application/json');
        echo json_encode($this->orderModel->getOneMedicine($json->medicineId));


      }


}



    