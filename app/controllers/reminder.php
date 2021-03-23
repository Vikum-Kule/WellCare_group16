<?php 
	class reminder extends Controller {
    public function __construct() {
		$this->postModel = $this->model('reminder_Operation');
	}

    public function addReminder($orderId){
        $orderId = $_POST['orderId'];
        $orderData = $this->postModel->find_order_data($orderId); 
    }


}

?>