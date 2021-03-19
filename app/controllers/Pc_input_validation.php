<?php 
	class Pc_input_validation extends Controller {
    public function __construct() {
		$this->postModel = $this->model('pc_Operation');
	}

    public function inputVaidation(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            if(isset($_POST['name'])){
                $Drugname =$_POST['name'];
                $brand = $_POST['brand'];
                $dose = $_POST['dose'];
                
                $check_medicine = $this->postModel->findMedicine($_POST['orderId'],$Drugname,$brand,$dose,$_POST['doseform']);
                $unitPrice = $this->postModel->findMedPrice($Drugname,$brand,$dose,$_POST['doseform']);
                if($check_medicine){
                    echo "duplicate input";
                }
                elseif($unitPrice[0]->QTY < $_POST['QTY'] ){
                    echo "Not Available";
                }
                else{
                    
               // $unitPrice = $this->postModel->findMedPrice($Drugname,$brand,$dose);
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
               
            }
        }
    }

}
?>