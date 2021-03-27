<?php 
	class reminder extends Controller {
    public function __construct() {
		$this->postModel = $this->model('reminder_Operation');
	}

    public function addReminder(){
        $orderId = $_POST['orderId'];
        $reminder_till= $_POST['dates'];
        
        date_default_timezone_set("Asia/Colombo");
        $time = date('H');
        $orderData = $this->postModel->find_order_data($orderId);
        foreach($orderData as $data){
            if($data->frequencyStatus == "Per Week" ){
                $now = strtotime("now");
                $next = strtotime("+1 week");
            }
            elseif($data->frequencyStatus == "Per Day"){
                $now = strtotime("now");
                $next = strtotime("+1 day");
            }
            elseif($data->frequencyStatus == "Thrice a Day"){
                $now = date('H');
                if($time <= 8){
                    $next = 8;    
                }
                elseif($time > 8 && $time <= 13){
                    $next = 13;
                }
                else{
                    $next= 20;
                }
            }
            elseif($data->frequencyStatus == "Twice a Day"){
                $now = date('H');
                if($time <= 8){
                    $next = 8;    
                }
                else{
                    $next= 20;
                }
            }
            elseif($data->frequencyStatus == "Per 8 hours"){
                $now = date('H');
                $t = $time +8;
                if($t>24){
                    $next = $t-24;
                }
                else{
                    $next = $t-24;
                }
            }
            elseif($data->frequencyStatus == "Per 6 hours"){
                $now = date('H');
                $t = $time +6;
                if($t>24){
                    $next = $t-24;
                }
            }
            elseif($data->frequencyStatus == "Per hour"){
                $now = date('H');
                $t = $time +1;
                if($t>24){
                    $next = $t-24;
                }
            }
            else{
                $next= null;
            }

            if($next!= null){
                $order_data=[
                    'orderId'=>$orderId,
                    'lastReminder'=>$now,
                    'nextReminder'=>$next,
                    'frequency_type'=>$data->frequencyStatus,
                    'dates'=>$reminder_till,
                    'medName'=>$data->medName,
                    'medBrand'=>$data->medBrand
                ];
                
                $this->postModel->setReminder($order_data);

            }
        }
         
    }

    public function setReminder(){
       $dataSet = $this->postModel->findData_reminder();
    
       foreach($dataSet as $data){
        if($data->frequency_type == "Per Day" ){
            $time =strtotime("now");
            if($data->nextReminder>= $time && $data->nextReminder< ($time+900)){
                $this->sendSMS($data->orderId ,$data->medName,$data->medBrand);
                $dates= $data->dates - 1;
                $lastReminder = $data->nextReminder;
                $nextReminder = $data->nextReminder + 86400;
                $this->postModel->updateTimeDate($dates,$lastReminder,$nextReminder,$data->reminderId);
            }
            elseif($data->nextReminder < $time){
                $nextReminder = $data->nextReminder;
                while($nextReminder < $time){
                    $nextReminder = $nextReminder + 86400;
                }
                if($nextReminder >= $time && $nextReminder < ($time+900)){
                    $this->sendSMS($data->orderId ,$data->medName,$data->medBrand);
                    $dates= $data->dates - 1;
                    $lastReminder = $nextReminder;
                    $nextReminder = $nextReminder + 86400;
                    $this->postModel->updateTimeDate($dates,$lastReminder,$nextReminder,$data->reminderId);
                }
                else{
                    $dates= $data->dates;
                    $lastReminder = $nextReminder;
                    $nextReminder = $nextReminder + 86400;
                    $this->postModel->updateTimeDate($dates,$lastReminder,$nextReminder,$data->reminderId);
                }

            }
        }
        
        elseif($data->frequencyStatus == "Thrice a Day"){
            $now = date('H');
            if($data->nextReminder == $now){
                $this->sendSMS($data->orderId ,$data->medName,$data->medBrand);
                $dates= $data->dates - 1;
                $lastReminder = $now;

                if($now == 8){
                    $next = 13;    
                }
                elseif($now == 13){
                    $next = 20;
                }
                else{
                    $next= 8;
                }

                $nextReminder = $next;
                $this->postModel->updateTimeDate($dates,$lastReminder,$next, $data->reminderId);  
            }
            
        }
        elseif($data->frequencyStatus == "Twice a Day"){
            $now = date('H');
            if($data->nextReminder == $now){
                $this->sendSMS($data->orderId ,$data->medName,$data->medBrand);
                $dates= $data->dates - 1;
                $lastReminder = $now;

                if($now == 8){
                    $next = 20;    
                }
                else{
                    $next= 8;
                }

                $nextReminder = $next;
                $this->postModel->updateTimeDate($dates,$lastReminder,$next, $data->reminderId);  
            }
        }
        elseif($data->frequencyStatus == "Per 8 hours"){
            $now = date('H');

            if($data->nextReminder == $now){
                $this->sendSMS($data->orderId ,$data->medName,$data->medBrand);
                $dates= $data->dates - 1;
                $lastReminder = $now;
                $t = $now +8;
                if($t>24){
                    $next = $t-24;
                }
                else{
                    $next = $t;
                }

                $nextReminder = $next;
                $this->postModel->updateTimeDate($dates,$lastReminder,$next, $data->reminderId);  
            }
        }
    
        elseif($data->frequencyStatus == "Per 6 hours"){
            $now = date('H');

            if($data->nextReminder == $now){
                $this->sendSMS($data->orderId ,$data->medName,$data->medBrand);
                $dates= $data->dates - 1;
                $lastReminder = $now;
                $t = $now +6;
                if($t>24){
                    $next = $t-24;
                }
                else{
                    $next = $t;
                }

                $nextReminder = $next;
                $this->postModel->updateTimeDate($dates,$lastReminder,$next, $data->reminderId);  
            }
        }
        else{
            $now = date('H');

            if($data->nextReminder == $now){
                $this->sendSMS($data->orderId ,$data->medName,$data->medBrand);
                $dates= $data->dates - 1;
                $lastReminder = $now;
                $t = $now +1;
                if($t>24){
                    $next = $t-24;
                }
                else{
                    $next = $t;
                }

                $nextReminder = $next;
                $this->postModel->updateTimeDate($dates,$lastReminder,$next, $data->reminderId);  
            }
        }
       }
       
    }

    public function sendSMS($orderId,$medName,$medBrand){

    }
}

?>