<?php

class PrescriptionController extends Controller
{

    public function __construct()
    {
        $this->orderModel = $this->model('Order');
    }
    public function removePrescription(){

        header('Content-Type: application/json');
		echo json_encode($this->orderModel->removePrescription($_SESSION['user_id']));
        



    }
    public function getTempPrescriptionData(){
        header('Content-Type: application/json');

        echo json_encode($this->orderModel->getTempPrescriptionData($_SESSION['user_id']));




    }
    public function checkTempPrescriptionUserId(){


        if(isset($_SESSION['user_id'])) {
            header('Content-Type: application/json');

        echo json_encode( !($this->orderModel->checkTempPrescriptionUserId($_SESSION['user_id'])));

        }else{
            header('Content-Type: application/json');

        echo json_encode(false);
        }
        
    } 
    public function confirmCheckout(){


        $obj = file_get_contents('php://input');
        $json = json_decode($obj);
        $result=$this->orderModel->getNextOrderId();
        header('Content-Type: application/json');

        $result2=$this->orderModel->getTempPrescriptionData($_SESSION['user_id']);

        $data = [
            'streetAddress1' => trim($json->streetAddress1),
            'streetAddress2' => trim($json->streetAddress2),
            'city' => trim($json->city),
            'district' => trim($json->district),
            
            'customerId' => $_SESSION['user_id'],
            'orderId'=>$result[0]->Auto_increment,
            'image_path'=>$result[0]->Auto_increment.'.'.$result2[0]->ext
        ];
       
        
       // $result2=$this->orderModel->getTempPrescriptionData($_SESSION['user_id']); 
        $result3=$this->orderModel->nonPreparedPrescription($data);
        
        rename("../public/img/tempPrescriptions/" . $result2[0]->tempPrescriptionId . "." . $result2[0]->ext,"../public/img/prescriptions/" . $result[0]->Auto_increment . "." . $result2[0]->ext);
        header('Content-Type: application/json');

        echo json_encode($result3);


    }

    public function uploadPrescription()
    {
        if (!($this->orderModel->checkTempPrescriptionUserId($_SESSION['user_id']))) {
            $prescriptiondata = [
                'message' => '',
                'image' => ''

            ];

            $prescriptiondata['message'] = 'FAILED TxO UPLOAD!...';
            header('Content-Type: application/json');

            echo json_encode($prescriptiondata);
        } else {

            $data = ['id' => '', 'time' => '','ext'=>''];
            
            $result = $this->orderModel->getNextTempPrescriptionId();
            $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

            $target = "../public/img/tempPrescriptions/" . $result[0]->Auto_increment . "." . $ext;
            $data = ['id' => $_SESSION['user_id'], 'time' => time(),'ext'=>$ext];

            $result2 = $this->orderModel->tempPrescription($data);



            if ($ext != "jpg" && $ext != "JPG" && $ext != "jpeg" && $ext != "png" && $ext != "pdf") {
                $prescriptiondata['message'] = 'ONLY JPG ,PNG ,PDF FILES ARE ALLOWED!...';
                header('Content-Type: application/json');
                echo json_encode($prescriptiondata);
            } else if ($_FILES['image']['size'] > 100000000) {

                $prescriptiondata['message'] = 'FILE SIZE IS TOO BIG!...';
                header('Content-Type: application/json');
                echo json_encode($prescriptiondata);
            } else if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $prescriptiondata['message'] = 'SUCCSESSFULL!...';
                $prescriptiondata['image'] = $result[0]->Auto_increment . "." . $ext;
                header('Content-Type: application/json');
                echo json_encode($prescriptiondata);
            } else {
                $prescriptiondata['message'] = 'FAILED TO UPLOAD!...';
                header('Content-Type: application/json');

                echo json_encode($prescriptiondata);
            }
        }
    }
}
