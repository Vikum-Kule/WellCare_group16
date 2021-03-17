<?php
class Admin_Pages extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('User');
    }

    
    public function pharmacistregistration() {
      

        $this->view('Admin_pharmacistRegistration');
    }

    public function updatedruckstock() {
      

        $this->view('Admin_UpdateDrug');
    }
    public function pharmacistdetails() {
      

        $this->view('Admin_PharmacistDetails');
    }
    public function updatepharmacistdata() {
      

        $this->view('Admin_UpdatePharmacists');
    }
    public function addsupplier() {
      

        $this->view('Admin_AddSupplier');

    }
    public function updatesupplier() {
      

        $this->view('Admin_UpdateSupplier');

    }
    public function supplierdetails() {
      

         $this->view('Admin_SupplierDetails');

    }
    public function updatedrugs() {
        $this->view('Admin_UpdateDrug');
    }

    public function deliverydetails() {
        $this->view('Admin_DeliveryData');

    }

    public function updatedelivery() {
        $this->view('Admin_UpdateDelivery');
    }
    public function adddeliveryboy() {
        $this->view('Admin_AddDeliveryboy');
    }

    public function customerdetails()
    {
        $this->view('Admin_CustomerData');
    }

    public function addmanager(){

        $this->view('Admin_Addmanager');
    }
    public function managerdata() {
        $this->view('Admin_ManagerData');
    }
    public function updatemanager() {
        $this->view('Admin_UpdateManager');
    }
     public function adddeliverydata() {
        $this->view('Admin_AddDeliveryBoyData');
    }
    public function addmanagerform(){
        $this->view('Admin_AddFormManager');
    }
    public function addphamacist()
    {
        $this->view('Admin_AddPharmacistDetails');
    }
    public function addsupplierdata(){
         $this->view('Admin_Addsupplierdata');
    }
    public function admin(){
        $this->view('Admin_AdminReg');
    }
      public function home(){
        $this->view('Admin_Home');
    }
    public function login(){
        $this->view('Admin_loginAdmin');
    }
    public function deliveryboyreg(){
        $this->view('Admin_DeliveryReg');
    }
    public function logindeliveryboy(){
        $this->view('Admin_DeliveryLogin');
    }
    public function myaccount(){
        $this->view('Admin_DeliveryBoyAccount');
    }
    public function orderlist(){
        $this->view('Admin_OrderList');
    }

}
