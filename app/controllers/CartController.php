<?php

class CartController extends Controller
{

    public function __construct()
    {
        $this->orderModel = $this->model('Order');
    }



    public function addToCart()
    {

        $obj = file_get_contents('php://input');
        $json = json_decode($obj);

        for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {

            if ($_SESSION['cart'][$i][0]->medicineId == $json->id) {
                $flag = true;
                $flag2 = $i;
            }
        }
        if ($flag != true) {

            $oneItem = $this->orderModel->getItem($json->id);
            // array_push( $oneItem,$json->qty);
            $oneItem[0]->qty = $json->qty;
            $oneItem[0]->numberOfItem = sizeof($_SESSION['cart']);


            array_push($_SESSION['cart'], $oneItem);
        } else {
            $_SESSION['cart'][$flag2][0]->qty = $json->qty;
        }

        header('Content-Type: application/json');
        echo json_encode($_SESSION['cart']);
    }
    public function showCart()
    {



        header('Content-Type: application/json');
        echo json_encode($_SESSION['cart']);
    }
    public function removeItem()
    {
        $obj = file_get_contents('php://input');
        $json = json_decode($obj);




        for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {

            if ($_SESSION['cart'][$i][0]->medicineId == $json->id) {
                $flag = $i;
            }
        }
        
        array_splice($_SESSION['cart'], $flag, 1);




        header('Content-Type: application/json');
        echo json_encode($_SESSION['cart']);
    }

    public function confirmCheckout()
    {
        $obj = file_get_contents('php://input');
        $json = json_decode($obj);




        $data = [
            'streetAddress1' => trim($json->streetAddress1),
            'streetAddress2' => trim($json->streetAddress2),
            'city' => trim($json->city),
            'district' => trim($json->streetAddress1),
            'postalCode' => trim($json->postalCode),
            'dateTime' => time(),
            'customerId' => $_SESSION['user_id']
        ];

        $result = $this->orderModel->nonprepared_order($data);

        for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {


            if ($_SESSION['cart'][$i][0]->qty > 0) {

                $data2 = [
                    'orderId' => $result[0]->orderId,
                    'medicineId' =>  $_SESSION['cart'][$i][0]->medicineId,
                    'price' =>  $_SESSION['cart'][$i][0]->price,
                    'qty' =>  $_SESSION['cart'][$i][0]->qty
                ];



                $sucsess = $this->orderModel->nonpreparedorder_medicine($data2);
            }
        }
        unset($_SESSION['cart']);
        $_SESSION['cart'] = array();

        header('Content-Type: application/json');
        echo json_encode($sucsess);
    }

    public function getOrderId()
    {
    }
    public function checkSignin()
    {


        if (isset($_SESSION['user_id'])) {

            header('Content-Type: application/json');
            echo json_encode($_SESSION);
        } else {
            header('Content-Type: application/json');
            echo json_encode(false);
        }
    }
}
